<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clothtype extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        //$this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }

    public function getClothType($intClothTypeId) {
        $query = $this->db->get_where('cloth_types', array('id' => $intClothTypeId));
        
        $arrClothType = array();
        foreach ($query->result() as $row) {
            $arrClothType = $row;
        }
        
        echo json_encode($arrClothType);
        exit;
    }

    public function getClothTypeList() {
//        $this->db->select('*');
//        $this->db->from('cloth_types c');
//        $this->db->join('packages p', 'p.')
        $query = $this->db->get('cloth_types');

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        
        echo json_encode(array('clothTypeList' => $arrData));
        exit;
    }

    public function saveClothType() {
        $this->load->model('clothtype_model');
            $intInsert = $this->clothtype_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editClothType() {
        $this->load->model('clothtype_model');
        $intInsert = $this->clothtype_model->updateClothType();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function deleteClothType($intClothTypeId) {
        $this->load->model('clothtype_model');
        $boolDeleted = $this->clothtype_model->delete($intClothTypeId);
        
        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
      public function downloadClothTypeDetails() {

//        $this->load->library('phpexcel');
        require_once APPPATH . "third_party/PHPExcel.php";

        $objPHPExcel = new PHPExcel();

        $objPHPExcel->getProperties()->setCreator("Laundry")
                ->setLastModifiedBy("Laundry")
                ->setTitle("Office 2007 XLSX Laundry Document")
                ->setSubject("Office 2007 XLSX Laundry Document")
                ->setDescription("Laundry Payment document for The Laundry.")
                ->setKeywords("office 2007 openxml php")
                ->setCategory("Payment");

        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()
                ->setCellValue('A1', 'ID')
                ->setCellValue('B1', 'Name')
                ->setCellValue('C1', 'Description')
                ->setCellValue('D1', 'Unit')
                ->setCellValue('E1', 'Iron Price')
                ->setCellValue('F1', 'Gold Per KG Price')
                ->setCellValue('G1', 'Gold Per Item Price')
                ->setCellValue('H1', 'Silver Per KG Price')
                ->setCellValue('I1', 'Silver Per Item Price')
                ->setCellValue('J1', 'Platinum Per KG Price')
                ->setCellValue('K1', 'Platinum Per Item Price')
                ->setCellValue('L1', 'Packaged Id')
                ->setCellValue('M1', 'Created by')
                ->setCellValue('N1', 'Created On');

        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('clothtype_model');
        $arrobjBranch = $this->clothtype_model->getClothTypeDetails();
        
        $rowid = 2;
        foreach ($arrobjBranch as $objBranch) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objBranch->id)
                    ->setCellValue('B' . $rowid, $objBranch->name)
                    ->setCellValue('C' . $rowid, $objBranch->description)
                    ->setCellValue('D' . $rowid, $objBranch->merger_type)
                    ->setCellValue('E' . $rowid, $objBranch->iron_price)
                    ->setCellValue('F' . $rowid, $objBranch->gold_per_kg_price)
                    ->setCellValue('G' . $rowid, $objBranch->gold_per_item_price)
                    ->setCellValue('H' . $rowid, $objBranch->silver_per_kg_price)
                    ->setCellValue('I' . $rowid, $objBranch->silver_per_item_price)
                    ->setCellValue('J' . $rowid, $objBranch->platinum_per_kg_price)
                    ->setCellValue('K' . $rowid, $objBranch->platinum_per_item_price)
                    ->setCellValue('L' . $rowid, $objBranch->package_id	)
                    ->setCellValue('M' . $rowid, $objBranch->created_by)
                    ->setCellValue('N' . $rowid, $objBranch->created_on);


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
        $objPHPExcel->getActiveSheet()->getStyle('N1')->getFont()->setBold(true);

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
