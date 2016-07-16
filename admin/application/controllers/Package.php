<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }

    public function getPackage($intPackageId) {
        $query = $this->db->get_where('packages', array('id' => $intPackageId));

        $arrPackage = array();
        foreach ($query->result() as $row) {
            $arrPackage = $row;
        }

        echo json_encode($arrPackage);
        exit;
    }

    public function getPackageList() {
        $objUser = $this->session->userdata('user');
        $userCityId = $objUser->city_id;
        if ($userCityId == 1) {
            $this->db->where('cycle =', NULL);
            $query = $this->db->get('packages');

            $arrData = array();
            foreach ($query->result() as $row) {
                $arrData[$row->id] = $row;
            }
            echo json_encode($arrData);
            exit;
        } else {
            $this->db->where('cycle !=', NULL);
            $query = $this->db->get('packages');

            $arrData = array();
            foreach ($query->result() as $row) {
                $arrData[$row->id] = $row;
            }
            echo json_encode($arrData);
            exit;
        }
    }

    public function getPackageForClientsList() {
        $objUser = $this->session->userdata('user');
        $userCityId = $objUser->city_id;
        
        $this->db->where('cycle !=', NULL);
        $query = $this->db->get('packages');

        $arrData = array("session_user_id" => "$userCityId");
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        echo json_encode($arrData);
        exit;
    }

    public function getPackageCycleDetails($client_id) {
//        display($client_id);
//        exit;
//        $objUser = $this->session->userdata('user');
//        $objUser->first_name;
//        
//        $this->db->select('p.*');
//        $this->db->from('packages p');
//        $this->db->join('package_cycle_details pcd','pcd.');
//        $this->db->where('cycle !=',NULL);
//        $query = $this->db->get();


        $this->db->select('p.*,pcd.remaining_cycles as remaining_cycles,pcd.total_cycles as total_cycles');
        $this->db->from('packages p');
        $this->db->join('package_cycle_details pcd', 'pcd.package_id = p.id');
        // $this->db->join('clients c','c.package_id = p.id');
        $this->db->where('pcd.client_id', $client_id);
        $this->db->where('p.cycle !=', NULL);
        $query = $this->db->get();

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        echo json_encode($arrData);
        exit;
    }

    public function savePackage() {
        $this->load->model('package_model');
        $intInsert = $this->package_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editPackage() {
        $this->load->model('package_model');
        $intInsert = $this->package_model->updatePackage();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function deletePackage($intPackageId) {
        $this->load->model('package_model');
        $boolDeleted = $this->package_model->delete($intPackageId);

        echo json_encode(array('success' => $boolDeleted));
        exit;
    }

    public function downloadPackageDetails() {

        //$this->load->library('phpexcel');
        require_once APPPATH . "third_party/PHPExcel.php";

        $objPHPExcel = new PHPExcel();

        $objPHPExcel->getProperties()->setCreator("Laundry")
                ->setLastModifiedBy("Laundry")
                ->setTitle("Office 2007 XLSX Laundry Document")
                ->setSubject("Office 2007 XLSX Laundry Document")
                ->setDescription("Laundry Payment document for The Laundry.")
                ->setKeywords("office 2007 openxml php")
                ->setCategory("Payment");

        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'ID')
                ->setCellValue('B1', 'Name')
                ->setCellValue('C1', 'Description')
                ->setCellValue('D1', 'Basic Price')
                ->setCellValue('E1', 'Created by')
                ->setCellValue('F1', 'Created On');

        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('package_model');
        $arrobjBranch = $this->package_model->getPackageDetails();

        $rowid = 2;
        foreach ($arrobjBranch as $objBranch) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objBranch->id)
                    ->setCellValue('B' . $rowid, $objBranch->name)
                    ->setCellValue('C' . $rowid, $objBranch->description)
                    ->setCellValue('D' . $rowid, $objBranch->basic_price)
                    ->setCellValue('E' . $rowid, $objBranch->created_by)
                    ->setCellValue('F' . $rowid, $objBranch->created_on);


            $rowid++;
        }

        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);


        $objPHPExcel->setActiveSheetIndex(0);

        $pathInfo = pathinfo(__FILE__);
        $strFileName = str_replace('.php', '.xlsx', $pathInfo['dirname'] . '\\' . $pathInfo['basename']);
        $strDownloadFile = basename($strFileName);
        
        header('Content-Description: File Transfer');
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header('Content-Disposition: attachment; filename=' . $strDownloadFile);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Pragma: public');
        header('Cache-Control: max-age=0');
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	//$objWriter->save(str_replace('.php', '.xls', __FILE__));
        ob_end_clean();
        $objWriter->save('php://output');
        exit;
    }

}
