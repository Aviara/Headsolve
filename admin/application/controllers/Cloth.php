<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cloth extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }

    public function getCloth($intClothId) {
        $query = $this->db->get_where('cloth_info', array('id' => $intClothId));

        $arrCloth = array();
        foreach ($query->result() as $row) {
            $arrCloth = $row;
        }

        echo json_encode($arrCloth);
        exit;
    }

    public function getClothList() {
        $query = $this->db->get('cloth_info');

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }

        echo json_encode(array('clothInfoList' => $arrData));
        exit;
    }

    public function saveCloth() {
        $this->load->model('clothinfo_model');
        $intInsert = $this->clothinfo_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function saveClothInfo() {
        $this->load->model('clothinfo_model');
        $intInsert = $this->clothinfo_model->insertCloethInfo();

        echo json_encode(array('success' => $intInsert));
        exit;
        display($_POST);
        exit;
    }

    public function editCloth() {
        $this->load->model('clothinfo_model');
        $intInsert = $this->clothinfo_model->updateClothInfo();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function deleteCloth($intClothId) {
        $this->load->model('clothinfo_model');
        $boolDeleted = $this->clothinfo_model->delete($intClothId);

        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
  public function downloadClothInfoDetails() {

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
                ->setCellValue('A1', 'Id')
                ->setCellValue('B1', 'Challan Id')
                ->setCellValue('C1', 'Cloth Type Id ')
                ->setCellValue('D1', 'Total Item Count')
                ->setCellValue('E1', 'Total KG')
                ->setCellValue('F1', 'Address Line 2')
                ->setCellValue('G1', 'Branch Code')
                ->setCellValue('H1', 'Available Machine')
                ->setCellValue('I1', 'Employee Count')
                ->setCellValue('J1', 'Delivery Boy Count')
                ->setCellValue('K1', 'Manager Id')
                ->setCellValue('L1', 'Created by')
                ->setCellValue('M1', 'Created On');

        $this->load->model('branch_model');
        $arrobjBranch = $this->payment_model->getClothDetails();

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
