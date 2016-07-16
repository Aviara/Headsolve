<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }

    public function getClient($intClientId) {
        $query = $this->db->get_where('clients', array('id' => $intClientId));

        $arrClient = array();
        foreach ($query->result() as $row) {
            $row->address = $row->address_line1 . ' ' . $row->address_line2;
            $arrClient = $row;
        }

        echo json_encode($arrClient);
        exit;
    }
    /******************************For Client Type and city id*****************************/
    public function getClientType() {
         $objUser = $this->session->userdata('user');
         $UserCity_id = $objUser->city_id;
        $query = $this->db->get('client_types');
        
        $arrData = array("city_id"=>$UserCity_id);
        
        foreach ($query->result() as $row) {
           $arrData[$row->id] = $row;
        }
        echo json_encode($arrData);
        exit;
    }

    public function getClientList() {
         $objUser = $this->session->userdata('user');
         $intCityId = $objUser->city_id;
         $intBranchId = $objUser->branch_id;
         
        $this->db->select('cl.*');
        $this->db->from('clients cl');
        
        if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('cl.city_id', $intCityId);
            $this->db->where('cl.branch_id', $intBranchId);
        }
         $query = $this->db->get();
         
                 $arrData = array();
                  foreach ($query->result() as $row) {
                      $arrData[$row->id] = $row;
                  }
                  echo json_encode($arrData);
               exit;
         
//        /********* Fetching Raipur clients************/
//         if($UserCity_id == 1)
//                {
//                    $this->db->where('city_id', 1);
//                    $query = $this->db->get('clients');
//
//                    $arrData = array('city_id'=>$UserCity_id);
//                    foreach ($query->result() as $row) {
//                        $arrData[$row->id] = $row;
//                    }
//
//                    echo json_encode($arrData);
//                    exit;
//               }
//               
//               /********* Fetching Pune's clients************/
//         else if($UserCity_id == 2) {
//                  $this->db->where('city_id', 2);
//                  $query = $this->db->get('clients');
//
//                  $arrData = array('city_id'=>$UserCity_id);
//                  foreach ($query->result() as $row) {
//                      $arrData[$row->id] = $row;
//                  }
//                  echo json_encode($arrData);
//                  exit;
//         }
//         else{    
//                /********* Fetching Goa's clients************/
//                  $this->db->where('city_id', 3);
//                  $query = $this->db->get('clients');
//
//                  $arrData = array();
//                  foreach ($query->result() as $row) {
//                      $arrData[$row->id] = $row;
//                  }
//                  echo json_encode($arrData);
//                  exit;
//         }
    
        }
     public function getPackageList() {
         $objUser = $this->session->userdata('user');
         $intUserCity = $objUser->city;
         if($intUserCity == "raipur" or $intUserCity == "Raipur" or $intUserCity == "RAIPUR")
         {
              $this->db->where('cycle', NULL);
              $query = $this->db->get('packages');

                $arrData = array();
                foreach ($query->result() as $row) {
                    $arrData[$row->id] = $row;
                 }
                echo json_encode($arrData);
                exit;
         }
         else
            {  
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
// public function getClientList() {
//        $query = $this->db->get('clients');
//
//        $arrData = array();
//        foreach ($query->result() as $row) {
//            $arrData[$row->id] = $row;
//        }
//
//        echo json_encode($arrData);
//        exit;
//    }
    public function searchClients() {
//        display( $_POST );
//        display( $_GET );
//        exit;
        
        $keyword = (true == isset($_GET['search']) && true == valStr($_GET['search'])) ? $_GET['search'] : NULL;
        $keyword = str_replace(" ", "%", $keyword);
        
        //$query = $this->db->select('*')->from('clients')->like('first_name', "%" . $keyword . "%")->get();
        
        $query = $this->db->select('*')->from('clients')->where("first_name LIKE '%$keyword%'")->get();
        
        $arrClients = array();
        foreach ($query->result() as $row) {
            $arrClients[] = $row;
        }
        
        echo json_encode($arrClients);
        exit;
    }

    public function saveClient() {
        $this->load->model('client_model');
        $intInsert = $this->client_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editClient() {
        $this->load->model('client_model');
        $intInsert = $this->client_model->updateClient();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function deleteClient($intClientId) {
        $this->load->model('client_model');
        $boolDeleted = $this->client_model->delete($intClientId);

        echo json_encode(array('success' => $boolDeleted));
        exit;
    }

    public function getManagers() {
        $query = $this->db->get_where('employees', array('employee_type_id' => 1));

        $arrClientManagers = array();
        foreach ($query->result() as $row) {
            $arrClientManagers[$row->id] = $row;
        }

        echo json_encode($arrClientManagers);
        exit;
    }
    public function downloadClientDetails() {

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
                ->setCellValue('B1', 'First Name')
                ->setCellValue('C1', 'Middle Name')
                ->setCellValue('D1', 'Last Name')
                ->setCellValue('E1', 'Mobile No')
                ->setCellValue('F1', 'Email Id')
                ->setCellValue('G1', 'Home id')
                ->setCellValue('H1', 'Address Line 1')
                ->setCellValue('I1', 'Address Line 2')
                ->setCellValue('J1', 'Location')
                ->setCellValue('K1', 'Area')
                ->setCellValue('L1', 'Customer Type Id')
                ->setCellValue('M1', 'Pin Code')
                ->setCellValue('N1', 'Created by')
                ->setCellValue('O1', 'Created On');

        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('client_model');
        $arrobjBranch = $this->client_model->getClientDetails();

        $rowid = 2;
        foreach ($arrobjBranch as $objBranch) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objBranch->id)
                    ->setCellValue('B' . $rowid, $objBranch->first_name)
                    ->setCellValue('C' . $rowid, $objBranch->middle_name)
                    ->setCellValue('D' . $rowid, $objBranch->last_name)
                    ->setCellValue('E' . $rowid, $objBranch->mobile_no)
                    ->setCellValue('F' . $rowid, $objBranch->email_id)
                    ->setCellValue('G' . $rowid, $objBranch->home_no)
                    ->setCellValue('H' . $rowid, $objBranch->address_line1)
                    ->setCellValue('I' . $rowid, $objBranch->address_line2)
                    ->setCellValue('J' . $rowid, $objBranch->location)
                    ->setCellValue('K' . $rowid, $objBranch->area)
                    ->setCellValue('L' . $rowid, $objBranch->pin_code)
                    ->setCellValue('M' . $rowid, $objBranch->customer_type_id)
                    ->setCellValue('N' . $rowid, $objBranch->created_by)
                    ->setCellValue('O' . $rowid, $objBranch->created_on);


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
