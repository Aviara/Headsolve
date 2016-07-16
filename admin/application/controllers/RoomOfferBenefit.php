<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RoomOfferBenefit extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }

    public function getRoomBenefitOfferById($intRoomOfferId) {
        $query = $this->db->get_where('tbl_room_offers_benefites', array('id' => $intRoomOfferId));
        
        $arrRoomOffer = array();
        foreach ($query->result() as $row) {
            $arrRoomOffer = $row;
        }
        
        echo json_encode($arrRoomOffer);
        exit;
    }
    
//    public function getEmployeeType($intEmployeeTypeId) {
//        $query = $this->db->get_where('employee_types', array('id' => $intEmployeeTypeId));
//        
//        $arrEmployee = array();
//        foreach ($query->result() as $row) {
//            $arrEmployee = $row;
//        }
//        
//        echo json_encode($arrEmployee);
//        exit;
//    }

    public function getStudddList() {
        $objUser = $this->session->userdata('user');
//        $intCityId = $objUser->city_id;
//        $intBranchId = $objUser->branch_id;
        
        $this->db->select('e.*, et.id as employee_type_id');
        $this->db->from('employees e');
        $this->db->join('employee_types et', 'e.employee_type_id = et.id', 'left');
         if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('e.city_id', $intCityId);
            $this->db->where('e.branch_id', $intBranchId);
        }
        $query = $this->db->get();

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        
        echo json_encode(array('RoomOfferList' => $arrData));
        exit;
    }
    
    public function getAllRoomOfferBenefitByResortId() {
        $query = $this->db->get('tbl_room_offers_benefites');

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
      
        echo json_encode( $arrData);
        exit;
    }

    public function saveRoomOffer() {
        $this->load->model('RoomOfferBenefit_Model');
            $intInsert = $this->RoomOfferBenefit_Model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }
    
    public function saveEmployeeType() {
        $this->load->model('Room_Offer_Model');
        $intInsert = $this->Room_Offer_Model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editRoomOffer() {
          $this->load->model('RoomOfferBenefit_Model');
        $intInsert = $this->RoomOfferBenefit_Model->updateRoomoffer();

        echo json_encode(array('success' => $intInsert));
        exit;
    }
     public function editEmployeeType() {
          $this->load->model('Room_Offer_Model');
        $intInsert = $this->Room_Offer_Model->updateEmployeeType();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function deleteRoomOffer($deleteRoomOffer) {
        $this->load->model('RoomOfferBenefit_Model');
        $boolDeleted = $this->RoomOfferBenefit_Model->delete($deleteRoomOffer);
        
        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
    
//    public function deleteEmployeeType($intEmployeeTypeId) {
//        $this->load->model('employeetype_model');
//        $boolDeleted = $this->employeetype_model->delete($intEmployeeTypeId);
//        
//        echo json_encode(array('success' => $boolDeleted));
//        exit;
//    }
    
    public function getManagers() {
        $query = $this->db->get_where('employees', array('employee_type_id' => 1));
        
        $arrEmployeeManagers = array();
        foreach ($query->result() as $row) {
            $arrEmployeeManagers[$row->id] = $row;
        }
        
        echo json_encode($arrEmployeeManagers);
        exit;
    }
public function downloadStudentDetails() {

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
                ->setCellValue('C1', 'Mobile No');
                
        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('stud_model');
        $arrobjStudent = $this->stud_model->downloadStudentDetails();

        $rowid = 2;
        foreach ($arrobjStudent as $objEmployee) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objEmployee->id)
                    ->setCellValue('B' . $rowid, $objEmployee->First_name)
                    ->setCellValue('C' . $rowid, $objEmployee->Mob_no);
                   
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
        $objPHPExcel->getActiveSheet()->getStyle('O1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('P1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('Q1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('R1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('S1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('T1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('U1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('V1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('W1')->getFont()->setBold(true);

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

    
public function downloadEmployeeTypeDetails() {

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
                ->setCellValue('D1', 'Created By')
                ->setCellValue('E1', 'Created On')
                ->setCellValue('F1', 'Updated By')
                ->setCellValue('G1', 'Updated On'); 
               
                
        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('employeetype_model');
        $arrobjEmployee = $this->employeetype_model->getEmployeeTypeDetails();

        $rowid = 2;
        foreach ($arrobjEmployee as $objEmployee) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objEmployee->id)
                    ->setCellValue('B' . $rowid, $objEmployee->name)
                    ->setCellValue('C' . $rowid, $objEmployee->description)
                    ->setCellValue('D' . $rowid, $objEmployee->created_by)
                    ->setCellValue('E' . $rowid, $objEmployee->created_on)
                    ->setCellValue('F' . $rowid, $objEmployee->updated_by)
                    ->setCellValue('G' . $rowid, $objEmployee->updated_on);
                 $rowid++;
        }

        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('G1')->getFont()->setBold(true);
      
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

