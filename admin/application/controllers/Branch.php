<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {
    
      
    
    public function index() {
        
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }

    public function getBranch($intBranchId) {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId1 = $objUser->branch_id;
        
        $this->db->select('b.*');
        $this->db->from('branches b');
        $this->db->where('b.id', $intBranchId);
                  
          if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('o.city_id', $intCityId);
            $this->db->where('o.branch_id', $intBranchId1);
        }
        $query = $this->db->get();
        
        
        $arrBranch = array();
        foreach ($query->result() as $row) {
            $arrBranch = $row;
        }
        
        echo json_encode($arrBranch);
        exit;
    }
    
    
    public function getAllBranches() {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        $this->db->select('b.*');
        $this->db->from('branches b');
                  
        if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('b.city_id', $intCityId);
            $this->db->where('b.id', $intBranchId);
        }
        $query = $this->db->get();
        
        $arrBranch = array();
        foreach ($query->result() as $row) {
            $arrBranch[$row->id] = $row;
        }
        
        echo json_encode($arrBranch);
        exit;
    }
     public function getAllCities() {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        $this->db->select('c.*');
        $this->db->from('city c');
                  
        if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('b.city_id', $intCityId);
            $this->db->where('b.id', $intBranchId);
        }
        $query = $this->db->get();
        
        $arrBranch = array();
        foreach ($query->result() as $row) {
            $arrBranch[$row->id] = $row;
        }
        
        echo json_encode($arrBranch);
        exit;
    }

    public function getBranchList() {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
         
        $this->db->select('b.*');
        $this->db->from('branches b');
          if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('b.city_id', $intCityId);
            $this->db->where('b.id', $intBranchId);
        }
        $query = $this->db->get();
       
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        
        echo json_encode(array('branchList' => $arrData));
        exit;
    }

    public function saveBranch() {
        $this->load->model('branch_model');
            $intInsert = $this->branch_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;

        display($intInsert);
        exit;
    }

    public function editBranch() {
         $this->load->model('branch_model');
        $intInsert = $this->branch_model->updateBranch();

        echo json_encode(array('success' => $intInsert));
        exit;
        
    }
    

    public function deleteBranch($intBranchId) {
        $this->load->model('branch_model');
        $boolDeleted = $this->branch_model->delete($intBranchId);
        
        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
    
    public function getManagers() {
        $query = $this->db->get_where('employees', array('employee_type_id' => 2));
        
        $arrBranchManagers = array();
        foreach ($query->result() as $row) {
            $arrBranchManagers[$row->id] = $row;
        }
        
        echo json_encode($arrBranchManagers);
        exit;
    }
    public function downloadBranchDetails() {

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
                ->setCellValue('D1', 'Location')
                ->setCellValue('E1', 'Address Line 1')
                ->setCellValue('F1', 'Address Line 2')
                ->setCellValue('G1', 'Branch Code')
                ->setCellValue('H1', 'Available Machine')
                ->setCellValue('I1', 'Employee Count')
                ->setCellValue('J1', 'Delivery Boy Count')
                ->setCellValue('K1', 'Manager Id')
                ->setCellValue('L1', 'Created by')
                ->setCellValue('M1', 'Created On');

        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('branch_model');
        $arrobjBranch = $this->branch_model->getBranchDetails();

        $rowid = 2;
        foreach ($arrobjBranch as $objBranch) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objBranch->id)
                    ->setCellValue('B' . $rowid, $objBranch->name)
                    ->setCellValue('C' . $rowid, $objBranch->description)
                    ->setCellValue('D' . $rowid, $objBranch->location)
                    ->setCellValue('E' . $rowid, $objBranch->address_line1)
                    ->setCellValue('F' . $rowid, $objBranch->address_line2)
                    ->setCellValue('G' . $rowid, $objBranch->branch_code)
                    ->setCellValue('H' . $rowid, $objBranch->available_machine)
                    ->setCellValue('I' . $rowid, $objBranch->employee_count)
                    ->setCellValue('J' . $rowid, $objBranch->delivery_boy_count)
                    ->setCellValue('K' . $rowid, $objBranch->manager_id)
                    ->setCellValue('L' . $rowid, $objBranch->created_by)
                    ->setCellValue('M' . $rowid, $objBranch->created_on);


            $rowid++;
        }

        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('G1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('H1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('I1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('J1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('K1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('L1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('M1')->getFont()->setBold(true);

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
