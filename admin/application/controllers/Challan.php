<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Challan extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('partials/challan-status');
        $this->load->view('includes/footer');
    }
    public function saveOutsourced() {
        $this->load->model('challan_model');
        $intInsert = $this->challan_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }
    public function getChallan($intChallanId) {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        
        $this->db->select('*, ci.id as cloth_info_id,'
                . 'ci.cloth_type_id as item_id, ci.total_item_count as quntity, ci.package_id,'
                . 'p.id as payment_id, p.total_amount, p.total_items, p.is_completed');
        $this->db->from('challanes c');
        $this->db->join('cloth_info ci', 'c.id = ci.challan_id');
        $this->db->join('payments p', 'p.challan_id = c.id');
        $this->db->where('c.id', $intChallanId);
          if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('c.city_id', $intCityId);
            $this->db->where('c.branch_id', $intBranchId);
        }
        $query = $this->db->get();

        $arrChallan = array();
        foreach ($query->result() as $row) {
            if ($row->is_iron == 1) {
                $row->is_iron = true;
            } else {
                $row->is_iron = false;
            }
            $arrChallan[] = $row;
        }
        
        echo json_encode($arrChallan);
       
        exit;
    }
    
    public function getChallanDetails($intChallanId) {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        $this->db->select('c.*, ci.id as id, ct.name as item_name, p.name as package_name, CONCAT(cli.first_name, \' \', cli.last_name) as client_name,'
                . 'ct.id as item_id, p.id as package_id, ci.total_item_count, ci.is_iron, ci.total_kg as weight, ds.name as delivery_status');
        $this->db->from('challanes c');
        $this->db->join('cloth_info ci', 'ci.challan_id = c.id');
        $this->db->join('cloth_types ct', 'ct.id = ci.cloth_type_id');
        $this->db->join('packages p', 'p.id = ci.package_id');
        $this->db->join('clients cli', 'cli.id = c.client_id');
        $this->db->join('delivery_status ds', 'ds.id = c.delivery_status_id');
        $this->db->where('c.id', $intChallanId);
          if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('c.city_id', $intCityId);
            $this->db->where('c.branch_id', $intBranchId);
        }
        $query = $this->db->get();
        
        $arrChallan = array();
        foreach ($query->result() as $row) {
            $arrChallan[] = $row;
        }
        
        $objUser = $this->session->userdata('user');
        $intEmployeeTypeId = $objUser->employee_type_id;
        
        $this->db->select('*');
        $this->db->from('challan_time_logs ctl');
        $strSql = "ctl.challan_id = " . $intChallanId . " AND employee_id = " . $this->session->userdata('id'); 
        $this->db->where($strSql);
        $query = $this->db->get();
        
        $arrobjChallanTimeLogs = array();
        $boolIsCompleted = false;
        
        foreach ($query->result() as $row) {
            $arrobjChallanTimeLogs[] = $row;
            
            if (true == valStr($row->completed_on) && $intEmployeeTypeId == $row->employee_type_id) {
                $boolIsCompleted = true;
            } else {
                continue;
            }
            
            $date_a = new DateTime($row->start_on);
            $date_b = new DateTime($row->completed_on);
            $interval = date_diff($date_a,$date_b);

            $row->time_taken = $interval->format('%h:%i:%s');
            
            $row->start_on = date('d-m-Y H:i:s', strtotime($row->start_on));
            $row->completed_on = date('d-m-Y H:i:s', strtotime($row->completed_on));
        }
        
        $arrData = array();
        $arrData['isStart'] = ($arrobjChallanTimeLogs%2 == 1) ? true : false;
        $arrData['challan_list'] = $arrChallan;
        $arrData['challan_time_log'] = $arrobjChallanTimeLogs;
        $arrData['isCompleted'] = $boolIsCompleted;

        echo json_encode($arrData);
        exit;
    }
    
    public function getChallanDetailslog($intChallanId) {
      
        $this->db->select('csl.*,ds.name as current_status, CONCAT(cl.first_name, \' \', cl.last_name) as client_name');
        $this->db->from('challan_status_logs csl');
        $this->db->join('delivery_status ds', 'ds.id = csl.delivery_status_id');
        $this->db->join('challanes c', 'c.id = csl.challan_id');
        $this->db->join('clients cl', 'cl.id = c.client_id');
        $this->db->where('csl.challan_id', $intChallanId);
        $query = $this->db->get();
        
        $arrChallan = array();
        foreach ($query->result() as $row) {
            $arrChallan[] = $row;
        }
        
        echo json_encode($arrChallan);
        exit;
    }

    public function getChallanList() {
       
        
        $this->db->select('clo.*');
        $this->db->from('cloth_info clo');
        
        $query = $this->db->get();

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }

        echo json_encode(array('clothInfoList' => $arrData));
        exit;
    }
    public function getLogedInUserDetails(){
          $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
//         //$intCityId = $objUser->city_id;
//         $arrobjLogedInUser = array();
//       foreach ($objUser as $row) {
//            $arrobjLogedInUser[$row->id] = $row;
//        }
        echo json_encode($objUser);
        exit;
    }

    public function getChallanesByEmployeeId($intEmployeeId) {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
//        $intEmployeeId = $objUser->id;
        
//        display($objUser);
//        exit;
        $arrobjChallans = array();
        $this->db->select('c.*, '
                . 'CONCAT(ci.first_name, \' \', ci.last_name) as client_name,'
                . 'CONCAT(e.first_name, \' \', e.last_name) as employee_name,'
                . 'd.name as delivery_status');
        $this->db->from('challanes c');
        $this->db->join('clients ci', 'ci.id = c.client_id');
        $this->db->join('employees e', 'e.id = c.employee_id');
        $this->db->join('delivery_status d', 'd.id = c.delivery_status_id');
        
        if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('c.city_id', $intCityId);
            $this->db->where('c.branch_id', $intBranchId);
        }
        
        $query = $this->db->get();
        
        $arrobjChallans = array();
        foreach ($query->result() as $row) {
            $row->delivery_date = date('d-m-Y H:i:s', strtotime($row->delivery_date));
            $row->delivery_estimate_date = date('d-m-Y H:i:s', strtotime($row->delivery_estimate_date));
            $row->pick_up_date = date('d-m-Y H:i:s', strtotime($row->pick_up_date));
            $arrobjChallans[$row->id] = $row;
        }
          echo json_encode($arrobjChallans);
        exit;
        /******************** Existing-system-Changes.xlsx  (removed Functionality)********************************/
//         $arrobjChallans = array('city_id' => $intCityId);
//        foreach ($query->result() as $row) {
//            $row->delivery_date = date('d-m-Y H:i:s', strtotime($row->delivery_date));
//            $row->delivery_estimate_date = date('d-m-Y H:i:s', strtotime($row->delivery_estimate_date));
//            $row->pick_up_date = date('d-m-Y H:i:s', strtotime($row->pick_up_date));
//            $arrobjChallans[$row->id] = $row;
//        }
//          echo json_encode($arrobjChallans);
//        exit;
        exit;
    }

    public function saveChallan() {
        $this->load->model('challan_model');
        $intInsert = $this->challan_model->insertChallan();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editChallan() {
        $this->load->model('challan_model');
        $intInsert = $this->challan_model->updateChallan();
        
        echo json_encode(array('success' => $intInsert));
        exit;
    }
    
    public function updateChallanStatus() {
        $this->load->model('challan_model');
        $intInsert = $this->challan_model->updateChallanStatusAndLog();
        
        echo json_encode(array('success' => $intInsert));
        exit;
    }
    
    /***************************************************************************
    *********************** Challan Time Log ***********************************
    ***************************************************************************/
    
    public function saveChallanTimeLog() {
        $this->load->model('challan_model');
        $boolInserted = $this->challan_model->insertChallanTimeLog();
        
        echo json_encode(array('success' => $boolInserted));
        exit;
    }
    
    public function getChallanTimelogs($intChallanId) {
          $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        $this->db->select('ctl.*,ds.name as current_status, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('challan_time_logs ctl');
        $this->db->join('delivery_status ds', 'ds.id = ctl.delivery_status_id');
        $this->db->join('challanes c', 'c.id = ctl.challan_id');
        $this->db->join('clients cl', 'cl.id = c.client_id');
        $this->db->join('employees e', 'e.id = ctl.employee_id');
        $this->db->where('ctl.challan_id', $intChallanId);
         
        $query = $this->db->get();
        
        $arrChallan = array();
        foreach ($query->result() as $row) {
            $date_a = new DateTime($row->start_on);
            $date_b = new DateTime($row->completed_on);
            $interval = date_diff($date_a,$date_b);

            $row->time_taken = $interval->format('%h:%i:%s');
            
            $row->start_on = date('d-m-Y H:i:s', strtotime($row->start_on));
            $row->completed_on = date('d-m-Y H:i:s', strtotime($row->completed_on));
            
            $arrChallan[] = $row;
        }
        
        echo json_encode($arrChallan);
        exit;
    }

    public function deleteChallan($intChallanId) {
        $this->load->model('challan_model');
        $boolDeleted = $this->challan_model->delete($intChallanId);

        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
    
    public function getDeliveryStatus() {
          $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        $query = $this->db->get('delivery_status');
        
        $arrobjDeliveryStatus = array();
        foreach ($query->result() as $row) {
            $arrobjDeliveryStatus[] = $row;
        }
        
        echo json_encode($arrobjDeliveryStatus);
    }
    
    public function downloadChallanDetails() {
        //$this->load->library('phpexcel');
        require_once APPPATH . "third_party/PHPExcel.php";

        $objPHPExcel = new PHPExcel();

        $objPHPExcel->getProperties()->setCreator("Laundry")
                ->setLastModifiedBy("Laundry")
                ->setTitle("Office 2007 XLSX Laundry Document")
                ->setSubject("Office 2007 XLSX Laundry Document")
                ->setDescription("Laundry Challan document for The Laundry.")
                ->setKeywords("office 2007 openxml php")
                ->setCategory("Challan");

        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'ID')
                ->setCellValue('B1', 'Client Name')
                ->setCellValue('C1', 'Employee Name')
                ->setCellValue('D1', 'Pick Up Date')
                ->setCellValue('E1', 'Delivery Estimate Date')
                ->setCellValue('F1', 'Delivery Status')
                ->setCellValue('G1', 'Delivery By')
                ->setCellValue('H1', 'Completed')
                ->setCellValue('I1', 'Created By')
                ->setCellValue('J1', 'Created On');


        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('challan_model');
        $arrobjChallanes = $this->challan_model->getChallanDetails();

        $rowid = 2;
        foreach ($arrobjChallanes as $objChallan) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objChallan->id)
                    ->setCellValue('B' . $rowid, $objChallan->client_name)
                    ->setCellValue('C' . $rowid, $objChallan->employee_name)
                    ->setCellValue('D' . $rowid, $objChallan->pick_up_date)
                    ->setCellValue('E' . $rowid, $objChallan->delivery_estimate_date)
                    ->setCellValue('F' . $rowid, $objChallan->delivery_date)
                    ->setCellValue('G' . $rowid, $objChallan->delivery_status)
                    ->setCellValue('H' . $rowid, $objChallan->delivery_by)
                    ->setCellValue('I' . $rowid, $objChallan->created_by)
                    ->setCellValue('J' . $rowid, $objChallan->created_on);


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
