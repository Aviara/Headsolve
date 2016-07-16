<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Packagescycle extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }
    
    public function getCycleDetails() {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        $this->db->select('pcd.*, c.first_name as client_name, p.name as package_name, p.id as package_id');
        $this->db->from('package_cycle_details pcd');
        //$this->db->join('challanes c', 'c.client_id = pcd.client_id');
        $this->db->join('clients c', 'c.id = pcd.client_id');
        $this->db->join('packages p', 'p.id = pcd.package_id');
          if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('pcd.city_id', $intCityId);
            $this->db->where('pcd.branch_id', $intBranchId);
        }
        $query = $this->db->get();

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        
        echo json_encode(array('PackageCyCle' => $arrData));
        exit;
    }
      public function deletePackageCycleRecord($PackageCycleId) {
        $this->load->model('packagesCycle_model');
        $boolDeleted = $this->packagesCycle_model->delete($PackageCycleId);
        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
    
//    public function getEmployee($intEmployeeId) {
//        $query = $this->db->get_where('employees', array('id' => $intEmployeeId));
//        
//        $arrEmployee = array();
//        foreach ($query->result() as $row) {
//            $arrEmployee = $row;
//        }
//        
//        echo json_encode($arrEmployee);
//        exit;
//    }
//    
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

   
//    public function getEmployeeTypeList() {
//        $query = $this->db->get('employee_types');
//
//        $arrData = array();
//        foreach ($query->result() as $row) {
//            $arrData[$row->id] = $row;
//        }
//        
//        echo json_encode(array('employeeTypeList' => $arrData));
//        exit;
//    }
//
//    public function saveEmployee() {
//        $this->load->model('employee_model');
//            $intInsert = $this->employee_model->insert_into_db();
//
//        echo json_encode(array('success' => $intInsert));
//        exit;
//    }
//    
//    public function saveEmployeeType() {
//        $this->load->model('employeetype_model');
//        $intInsert = $this->employeetype_model->insert_into_db();
//
//        echo json_encode(array('success' => $intInsert));
//        exit;
//    }
//
//    public function editEmployee() {
//          $this->load->model('employee_model');
//        $intInsert = $this->employee_model->updateEmployee();
//
//        echo json_encode(array('success' => $intInsert));
//        exit;
//    }
//     public function editEmployeeType() {
//          $this->load->model('employeetype_model');
//        $intInsert = $this->employeetype_model->updateEmployeeType();
//
//        echo json_encode(array('success' => $intInsert));
//        exit;
//    }
//
//    public function deleteEmployee($intEmployeeId) {
//        $this->load->model('employee_model');
//        $boolDeleted = $this->employee_model->delete($intEmployeeId);
//        
//        echo json_encode(array('success' => $boolDeleted));
//        exit;
//    }
//    
//    public function deleteEmployeeType($intEmployeeTypeId) {
//        $this->load->model('employeetype_model');
//        $boolDeleted = $this->employeetype_model->delete($intEmployeeTypeId);
//        
//        echo json_encode(array('success' => $boolDeleted));
//        exit;
//    }
//    
//    public function getManagers() {
//        $query = $this->db->get_where('employees', array('employee_type_id' => 1));
//        
//        $arrEmployeeManagers = array();
//        foreach ($query->result() as $row) {
//            $arrEmployeeManagers[$row->id] = $row;
//        }
//        
//        echo json_encode($arrEmployeeManagers);
//        exit;
//    }
//public function downloadEmployeeDetails() {
//
//        //$this->load->library('phpexcel');
//        require_once APPPATH . "third_party/PHPExcel.php";
//
//        $objPHPExcel = new PHPExcel();
//
//        $objPHPExcel->getProperties()->setCreator("Laundry")
//                ->setLastModifiedBy("Laundry")
//                ->setTitle("Office 2007 XLSX Laundry Document")
//                ->setSubject("Office 2007 XLSX Laundry Document")
//                ->setDescription("Laundry Payment document for The Laundry.")
//                ->setKeywords("office 2007 openxml php")
//                ->setCategory("Payment");
//
//        $objPHPExcel->setActiveSheetIndex(0)
//                ->setCellValue('A1', 'ID')
//                ->setCellValue('B1', 'Branch Id')
//                ->setCellValue('C1', 'First Name')
//                ->setCellValue('D1', 'Middle Name')
//                ->setCellValue('E1', 'Last Name')
//                ->setCellValue('F1', 'Employeen Type Id')
//                ->setCellValue('G1', 'Pan No')
//                ->setCellValue('H1', 'Address Line 1')
//                ->setCellValue('I1', 'Address Line 2')
//                ->setCellValue('J1', 'Driving License No')
//                ->setCellValue('K1', 'Adhar No')
//                ->setCellValue('L1', 'Age ')
//                ->setCellValue('M1', 'Birth Date')
//                ->setCellValue('N1', 'Gender')
//                ->setCellValue('O1', 'Email Id')
//                ->setCellValue('P1', 'Office Email Id')
//                ->setCellValue('Q1', 'City')
//                ->setCellValue('R1', 'Location')
//                ->setCellValue('S1', 'Area')
//                ->setCellValue('T1', 'Mobile No')
//                ->setCellValue('U1', 'Home No')
//                ->setCellValue('V1', 'Created by')
//                ->setCellValue('W1', 'Created On');
//                
//        /* Paymenet details and render into sheet Code is Strat From Here */
//        $this->load->model('employee_model');
//        $arrobjEmployee = $this->employee_model->downloadEmployeeDetails();
//
//        $rowid = 2;
//        foreach ($arrobjEmployee as $objEmployee) {
//            $objPHPExcel->setActiveSheetIndex(0)
//                    ->setCellValue('A' . $rowid, $objEmployee->id)
//                    ->setCellValue('B' . $rowid, $objEmployee->branch_id)
//                    ->setCellValue('C' . $rowid, $objEmployee->first_name)
//                    ->setCellValue('D' . $rowid, $objEmployee->middle_name)
//                    ->setCellValue('E' . $rowid, $objEmployee->last_name)
//                    ->setCellValue('F' . $rowid, $objEmployee->employee_type_id)
//                    ->setCellValue('G' . $rowid, $objEmployee->pan_no)
//                    ->setCellValue('H' . $rowid, $objEmployee->address_line1)
//                    ->setCellValue('I' . $rowid, $objEmployee->address_line2)
//                    ->setCellValue('J' . $rowid, $objEmployee->driving_listien_no)
//                    ->setCellValue('K' . $rowid, $objEmployee->adhar_no)
//                    ->setCellValue('L' . $rowid, $objEmployee->age)
//                    ->setCellValue('M' . $rowid, $objEmployee->birth_date)
//                    ->setCellValue('N' . $rowid, $objEmployee->gender)
//                    ->setCellValue('O' . $rowid, $objEmployee->email_id)
//                    ->setCellValue('P' . $rowid, $objEmployee->office_email_id)
//                    ->setCellValue('Q' . $rowid, $objEmployee->city)
//                    ->setCellValue('R' . $rowid, $objEmployee->location)
//                    ->setCellValue('S' . $rowid, $objEmployee->area)
//                    ->setCellValue('T' . $rowid, $objEmployee->mobile_no)
//                    ->setCellValue('U' . $rowid, $objEmployee->home_no)
//                    ->setCellValue('V' . $rowid, $objEmployee->created_by)
//                    ->setCellValue('W' . $rowid, $objEmployee->created_on);
//                 $rowid++;
//        }
//
//        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('G1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('H1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('I1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('J1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('K1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('L1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('M1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('N1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('O1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('P1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('Q1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('R1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('S1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('T1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('U1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('V1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('W1')->getFont()->setBold(true);
//
//        $objPHPExcel->setActiveSheetIndex(0);
//        
//        $pathInfo = pathinfo(__FILE__);
//        $strFileName = str_replace('.php', '.xlsx', $pathInfo['dirname'] . '\\' . $pathInfo['basename']);
//        $strDownloadFile = basename($strFileName);
//        
//        header('Content-Description: File Transfer');
//        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
//        header('Content-Disposition: attachment; filename=' . $strDownloadFile);
//        header('Content-Transfer-Encoding: binary');
//        header('Expires: 0');
//        header('Pragma: public');
//        header('Cache-Control: max-age=0');
//        
//        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//	//$objWriter->save(str_replace('.php', '.xls', __FILE__));
//        ob_end_clean();
//        $objWriter->save('php://output');
//        exit;
//    }
//
//    
//public function downloadEmployeeTypeDetails() {
//
//        //$this->load->library('phpexcel');
//        require_once APPPATH . "third_party/PHPExcel.php";
//
//        $objPHPExcel = new PHPExcel();
//
//        $objPHPExcel->getProperties()->setCreator("Laundry")
//                ->setLastModifiedBy("Laundry")
//                ->setTitle("Office 2007 XLSX Laundry Document")
//                ->setSubject("Office 2007 XLSX Laundry Document")
//                ->setDescription("Laundry Payment document for The Laundry.")
//                ->setKeywords("office 2007 openxml php")
//                ->setCategory("Payment");
//
//        $objPHPExcel->setActiveSheetIndex(0)
//                ->setCellValue('A1', 'ID')
//                ->setCellValue('B1', 'Name')
//                ->setCellValue('C1', 'Description')
//                ->setCellValue('D1', 'Created By')
//                ->setCellValue('E1', 'Created On')
//                ->setCellValue('F1', 'Updated By')
//                ->setCellValue('G1', 'Updated On'); 
//               
//                
//        /* Paymenet details and render into sheet Code is Strat From Here */
//        $this->load->model('employeetype_model');
//        $arrobjEmployee = $this->employeetype_model->getEmployeeTypeDetails();
//
//        $rowid = 2;
//        foreach ($arrobjEmployee as $objEmployee) {
//            $objPHPExcel->setActiveSheetIndex(0)
//                    ->setCellValue('A' . $rowid, $objEmployee->id)
//                    ->setCellValue('B' . $rowid, $objEmployee->name)
//                    ->setCellValue('C' . $rowid, $objEmployee->description)
//                    ->setCellValue('D' . $rowid, $objEmployee->created_by)
//                    ->setCellValue('E' . $rowid, $objEmployee->created_on)
//                    ->setCellValue('F' . $rowid, $objEmployee->updated_by)
//                    ->setCellValue('G' . $rowid, $objEmployee->updated_on);
//                 $rowid++;
//        }
//
//        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
//        $objPHPExcel->getActiveSheet()->getStyle('G1')->getFont()->setBold(true);
//      
//        $objPHPExcel->setActiveSheetIndex(0);
//        
//        $pathInfo = pathinfo(__FILE__);
//        $strFileName = str_replace('.php', '.xlsx', $pathInfo['dirname'] . '\\' . $pathInfo['basename']);
//        $strDownloadFile = basename($strFileName);
//        
//        header('Content-Description: File Transfer');
//        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
//        header('Content-Disposition: attachment; filename=' . $strDownloadFile);
//        header('Content-Transfer-Encoding: binary');
//        header('Expires: 0');
//        header('Pragma: public');
//        header('Cache-Control: max-age=0');
//        
//        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//	//$objWriter->save(str_replace('.php', '.xls', __FILE__));
//        ob_end_clean();
//        $objWriter->save('php://output');
//        exit;
//       }
 }

