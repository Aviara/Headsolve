<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
    
    public function getPickupDetails() {
         $objUser = $this->session->userdata('user');
         $intCityId = $objUser->city_id;
         $intBranchId = $objUser->branch_id;
        
        if (true == valStr($_GET['from_date']) && true == valStr($_GET['to_date'])) {
        
            $this->db->select('c.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name,CONCAT(e.first_name, \' \', e.last_name) as employee_name,');
            $this->db->from('challanes c');
            $this->db->join('clients cl', 'cl.id = c.client_id');
            $this->db->join('employees e', 'e.id = c.employee_id');
            $strSql = "date(c.created_on) BETWEEN date '" . date('Y-m-d', strtotime($_GET['from_date'])) . "' AND date '" . date('Y-m-d', strtotime($_GET['to_date'])) . "'";
            $this->db->where($strSql);
               if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('c.city_id', $intCityId);
            $this->db->where('c.branch_id', $intBranchId);
        }
            $query = $this->db->get();

            $arrobjChallanes = array();
            foreach ($query->result() as $row) {
                $arrobjChallanes[] = $row;
            }

            echo json_encode($arrobjChallanes);
            exit;
        } else {
            echo json_encode(array('error' => 'Date not in proper format.'));
            exit;
        }
    }
    
     public function downloadTodaysDeliveredClothes() {
                $objUser = $this->session->userdata('user');
                $intCityId = $objUser->city_id;
                $intBranchId = $objUser->branch_id;
         
        $day = date('d');
        $month = date('m');
        $year = date('Y');
        
        $this->db->select('c.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name,CONCAT(e.first_name, \' \', e.last_name) as employee_name,');
        $this->db->from('challanes c');
        $this->db->join('clients cl', 'cl.id = c.client_id');
        $this->db->join('employees e', 'e.id = c.employee_id');
       // $strSql = "date(c.created_on) BETWEEN date '" . date('Y-m-d', strtotime($_GET['from_date'])) . "' AND date '" . date('Y-m-d', strtotime($_GET['to_date'])) . "'";
       // $this->db->where('c.delivery_estimate_date', $todays_date);
        $this->db->where('c.delivery_status_id', 7);
        $this->db->where('DAY(c.updated_on)', $day);
        $this->db->where('MONTH(c.updated_on)', $month);
        $this->db->where('YEAR(c.updated_on)', $year);
          if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('c.city_id', $intCityId);
                    $this->db->where('c.branch_id', $intBranchId);
                }
        $query = $this->db->get();

        $arrobjChallanes = array();
        foreach ($query->result() as $row) {
            $arrobjChallanes[] = $row;
        }
        echo json_encode($arrobjChallanes);
        exit;
       
    }
    
    public function downloadLinedupPickups() { 
            $objUser = $this->session->userdata('user');
            $intCityId = $objUser->city_id;
            $intBranchId = $objUser->branch_id;
            
            $day = date('d');
            $month = date('m');
            $year = date('Y');
       
            $this->db->select('c.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name,CONCAT(e.first_name, \' \', e.last_name) as employee_name,');
            $this->db->from('challanes c');
            $this->db->join('clients cl', 'cl.id = c.client_id');
            $this->db->join('employees e', 'e.id = c.employee_id');
            //$this->db->where('c.delivery_status_id', 6);
            $notequal = "c.delivery_status_id != 7";
            $this->db->where($notequal);
            $this->db->where('DAY(c.delivery_estimate_date)', $day);
            $this->db->where('MONTH(c.delivery_estimate_date)', $month);
            $this->db->where('YEAR(c.delivery_estimate_date)', $year);
             if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('c.city_id', $intCityId);
                    $this->db->where('c.branch_id', $intBranchId);
                }
            $query = $this->db->get();

            $arrobjChallanes = array();
            foreach ($query->result() as $row) {
                $arrobjChallanes[] = $row;
            }

            echo json_encode($arrobjChallanes);
            exit;
         
    }
     public function downloadGoldenSilverPlatPackagesForToday($packageid) { 
            $objUser = $this->session->userdata('user');
            $intCityId = $objUser->city_id;
            $intBranchId = $objUser->branch_id;
         
            $day = date('d');
            $month = date('m');
            $year = date('Y');
       
            $this->db->select('c.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name,CONCAT(e.first_name, \' \', e.last_name) as employee_name,ci.package_id as package_id');
            $this->db->from('challanes c');
            $this->db->join('clients cl', 'cl.id = c.client_id');
            $this->db->join('employees e', 'e.id = c.employee_id');
            $this->db->join('cloth_info ci', 'ci.challan_id = c.id');
            $this->db->join('packages p', 'p.id = ci.package_id');
            //$this->db->where('c.delivery_status_id', 6);
            $this->db->where('DAY(c.delivery_estimate_date)', $day);
            $this->db->where('MONTH(c.delivery_estimate_date)', $month);
            $this->db->where('YEAR(c.delivery_estimate_date)', $year);
            $this->db->where('ci.package_id', $packageid);
                 if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('c.city_id', $intCityId);
                    $this->db->where('c.branch_id', $intBranchId);
                }

            $query = $this->db->get();

            $arrobjChallanes = array();
            foreach ($query->result() as $row) {
                $arrobjChallanes[] = $row;
            }

            echo json_encode($arrobjChallanes);
            exit;
         
    }
     public function downloadDrycleanRecordForToday() { 
            $objUser = $this->session->userdata('user');
            $intCityId = $objUser->city_id;
            $intBranchId = $objUser->branch_id;
            
            $day = date('d');
            $month = date('m');
            $year = date('Y');
       
            $this->db->select('c.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name,CONCAT(e.first_name, \' \', e.last_name) as employee_name,ci.package_id as package_id');
            $this->db->from('challanes c');
            $this->db->join('clients cl', 'cl.id = c.client_id');
            $this->db->join('employees e', 'e.id = c.employee_id');
            $this->db->join('cloth_info ci', 'ci.challan_id = c.id');
            $this->db->join('packages p', 'p.id = ci.package_id');
            //$this->db->where('c.delivery_status_id', 6);
            $this->db->where('DAY(c.delivery_estimate_date)', $day);
            $this->db->where('MONTH(c.delivery_estimate_date)', $month);
            $this->db->where('YEAR(c.delivery_estimate_date)', $year);
            $this->db->where('c.special_request', 1);
             if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('c.city_id', $intCityId);
                    $this->db->where('c.branch_id', $intBranchId);
                }

            $query = $this->db->get();

            $arrobjChallanes = array();
            foreach ($query->result() as $row) {
                $arrobjChallanes[] = $row;
            }

            echo json_encode($arrobjChallanes);
            exit;
         
    }
     public function downloadUrgenciesRecordForToday() { 
            $objUser = $this->session->userdata('user');
            $intCityId = $objUser->city_id;
            $intBranchId = $objUser->branch_id;
                 
            $day = date('d');
            $month = date('m');
            $year = date('Y');
       
            $this->db->select('c.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name,CONCAT(e.first_name, \' \', e.last_name) as employee_name,ci.package_id as package_id');
            $this->db->from('challanes c');
            $this->db->join('clients cl', 'cl.id = c.client_id');
            $this->db->join('employees e', 'e.id = c.employee_id');
            $this->db->join('cloth_info ci', 'ci.challan_id = c.id');
            $this->db->join('packages p', 'p.id = ci.package_id');
            //$this->db->where('c.delivery_status_id', 6);
            $this->db->where('DAY(c.delivery_estimate_date)', $day);
            $this->db->where('MONTH(c.delivery_estimate_date)', $month);
            $this->db->where('YEAR(c.delivery_estimate_date)', $year);
            $this->db->where('c.urgent_required', 1);
             if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('c.city_id', $intCityId);
                    $this->db->where('c.branch_id', $intBranchId);
                }

            $query = $this->db->get();

            $arrobjChallanes = array();
            foreach ($query->result() as $row) {
                $arrobjChallanes[] = $row;
            }

            echo json_encode($arrobjChallanes);
            exit;
         
    }

    public function downloadPaymentReportDetails($monthvalue) {

        // print($monthvalue);
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
                ->setCellValue('A1', 'SN ID')
                ->setCellValue('B1', 'Challan Id')
                ->setCellValue('C1', 'Client Name')
                ->setCellValue('D1', 'Employee Name')
                ->setCellValue('E1', 'Store Name')
                ->setCellValue('F1', 'Total Amount')
                ->setCellValue('G1', 'Paid Amount')
                ->setCellValue('H1', 'Remaining Amount')
                ->setCellValue('I1', 'Total Items')
                ->setCellValue('J1', 'Completed')
                ->setCellValue('K1', 'Created by')
                ->setCellValue('L1', 'Created On');

        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('report_model');
        $arrobjEmployee = $this->report_model->downloadPaymentReportDetails($monthvalue);

        $rowid = 2;
        foreach ($arrobjEmployee as $objEmployee) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objEmployee->id)
                    ->setCellValue('B' . $rowid, $objEmployee->challan_id)
                    ->setCellValue('C' . $rowid, $objEmployee->client_name)
                    ->setCellValue('D' . $rowid, $objEmployee->employee_name)
                    ->setCellValue('E' . $rowid, $objEmployee->store_id)
                    ->setCellValue('F' . $rowid, $objEmployee->total_amount)
                    ->setCellValue('G' . $rowid, $objEmployee->paid_amount)
                    ->setCellValue('H' . $rowid, $objEmployee->remaining_amount)
                    ->setCellValue('I' . $rowid, $objEmployee->total_items)
                    ->setCellValue('J' . $rowid, $objEmployee->is_completed)
                    ->setCellValue('K' . $rowid, $objEmployee->created_by)
                    ->setCellValue('L' . $rowid, $objEmployee->created_on);
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

    public function downloadPaymentReportDetailsByDateRange($date_concatinated) {
//         print_r($dateRange);
//         exit;


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
                ->setCellValue('A1', 'SN ID')
                ->setCellValue('B1', 'Challan Id')
                ->setCellValue('C1', 'Client Name')
                ->setCellValue('D1', 'Employee Name')
                ->setCellValue('E1', 'Store Name')
                ->setCellValue('F1', 'Total Amount')
                ->setCellValue('G1', 'Paid Amount')
                ->setCellValue('H1', 'Remaining Amount')
                ->setCellValue('I1', 'Total Items')
                ->setCellValue('J1', 'Completed')
                ->setCellValue('K1', 'Created by')
                ->setCellValue('L1', 'Created On');
        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('report_model');
        $arrobjEmployee = $this->report_model->downloadPaymentReportDetailsByDateRange($date_concatinated);
        $rowid = 2;
        foreach ($arrobjEmployee as $objEmployee) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objEmployee->id)
                    ->setCellValue('B' . $rowid, $objEmployee->challan_id)
                    ->setCellValue('C' . $rowid, $objEmployee->client_name)
                    ->setCellValue('D' . $rowid, $objEmployee->employee_name)
                    ->setCellValue('E' . $rowid, $objEmployee->store_id)
                    ->setCellValue('F' . $rowid, $objEmployee->total_amount)
                    ->setCellValue('G' . $rowid, $objEmployee->paid_amount)
                    ->setCellValue('H' . $rowid, $objEmployee->remaining_amount)
                    ->setCellValue('I' . $rowid, $objEmployee->total_items)
                    ->setCellValue('J' . $rowid, $objEmployee->is_completed)
                    ->setCellValue('K' . $rowid, $objEmployee->created_by)
                    ->setCellValue('L' . $rowid, $objEmployee->created_on);
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

    public function downloadChallanReportDetailsByDateRange($date_concatinated) {
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
        $this->load->model('report_model');
        $arrobjEmployee = $this->report_model->downloadChallanReportDetailsByDateRange($date_concatinated);

        $rowid = 2;
        foreach ($arrobjEmployee as $objChallan) {
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

    public function getEmployeeNames() {
        $this->db->distinct();
        $this->db->select('first_name,id');
        $this->db->from('employees');
        $query = $this->db->get();
        echo json_encode($query->result());
        exit;
    }

    public function downloadChallanReportDetails($monthvalue) {
//      print_r($monthvalue);
//       exit;
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
        $this->load->model('report_model');
        $arrobjEmployee = $this->report_model->downloadChallanReportDetails($monthvalue);

        $rowid = 2;
        foreach ($arrobjEmployee as $objChallan) {
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

    public function showChallanReportByDate($challan_id) {
            
                $objUser = $this->session->userdata('user');
                $intCityId = $objUser->city_id;
                $intBranchId = $objUser->branch_id;
                
        $month = $challan_id;
        $year = date('Y');
        $this->db->select('c.*, '
                . 'CONCAT(ci.first_name, \' \', ci.last_name) as client_name,'
                . 'CONCAT(e.first_name, \' \', e.last_name) as employee_name,'
                . 'd.name as delivery_status');
        $this->db->from('challanes c');
        $this->db->join('clients ci', 'ci.id = c.client_id');
        $this->db->join('employees e', 'e.id = c.employee_id');
        $this->db->join('delivery_status d', 'd.id = c.delivery_status_id');
        $this->db->where('MONTH(c.created_on)', $month);
        $this->db->where('YEAR(c.created_on)', $year);
        if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('c.city_id', $intCityId);
                    $this->db->where('c.branch_id', $intBranchId);
                }
        
        $query = $this->db->get();

        $arrobjChallans = array();
        foreach ($query->result() as $row) {
            $arrobjChallans[$row->id] = $row;
        }

        echo json_encode($arrobjChallans);
        exit;
    }

    public function showPaymentReportByDate($challan_id) {
        
         $objUser = $this->session->userdata('user');
         $intCityId = $objUser->city_id;
         $intBranchId = $objUser->branch_id;
        
        // $monthval = explode('-',$challan_id); 
        $month = $challan_id;
        $year = date('Y');
        $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $this->db->where('MONTH(p.created_on)', $month);
        $this->db->where('YEAR(p.created_on)', $year);
        
         if (1 == $objUser->employee_type_id) {
                } else {
                    $this->db->where('p.city_id', $intCityId);
                    $this->db->where('p.branch_id', $intBranchId);
                }
                
        $query = $this->db->get();
        $arrobjChallans = array();
        foreach ($query->result() as $row) {
            $arrobjChallans[$row->id] = $row;
        }
        echo json_encode($arrobjChallans);
        exit;
    }

    public function showPaymentReportByEmployeeName($Employee_name) {
          $objUser = $this->session->userdata('user');
         $intCityId = $objUser->city_id;
         $intBranchId = $objUser->branch_id;

        $day = date('d');
        $month = date('m');
        $year = date('Y');

        $this->db->select('p.*, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
//        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $this->db->where('DAY(p.updated_on)', $day);
        $this->db->where('MONTH(p.updated_on)', $month);
        $this->db->where('YEAR(p.updated_on)', $year);
        $this->db->where('p.employee_id', $Employee_name);
         if (1 == $objUser->employee_type_id) {
                } else {
                    $this->db->where('p.city_id', $intCityId);
                    $this->db->where('p.branch_id', $intBranchId);
                }
        $query = $this->db->get();
        $arrobjChallans = array();
        foreach ($query->result() as $row) {
            $arrobjChallans[$row->id] = $row;
        }
        echo json_encode($arrobjChallans);
        exit;
    }

    public function showChallanReportByDateRange($dateRange) {
         $objUser = $this->session->userdata('user');
         $intCityId = $objUser->city_id;
         $intBranchId = $objUser->branch_id;
         
        $devide_date = explode('%20', $dateRange);
        $from_date_month = $devide_date[0];
        $from_date_day = $devide_date[1];
        $from_date_year = $devide_date[2];

        $from_date = $from_date_year . "-" . $from_date_month . "-" . $from_date_day;

        $to_date_month = $devide_date[3];
        $to_date_day = $devide_date[4];
        $to_date_year = $devide_date[5];

        $to_date = $to_date_year . "-" . $to_date_month . "-" . $to_date_day;

        $this->db->select('c.*, '
                . 'CONCAT(ci.first_name, \' \', ci.last_name) as client_name,'
                . 'CONCAT(e.first_name, \' \', e.last_name) as employee_name,'
                . 'd.name as delivery_status');
        $this->db->from('challanes c');
        $this->db->join('clients ci', 'ci.id = c.client_id');
        $this->db->join('employees e', 'e.id = c.employee_id');
        $this->db->join('delivery_status d', 'd.id = c.delivery_status_id');
        $this->db->where('date(c.created_on) >=', $from_date);
        $this->db->where('date(c.created_on) <=', $to_date);
          if (1 == $objUser->employee_type_id) {
                } else {
                    $this->db->where('c.city_id', $intCityId);
                    $this->db->where('c.branch_id', $intBranchId);
                }
        $query = $this->db->get();

        $arrobjChallans = array();
        foreach ($query->result() as $row) {
            $arrobjChallans[$row->id] = $row;
        }

        echo json_encode($arrobjChallans);
        exit;
    }

    public function showPaymentReportByDateRange($dateRange) {

        $devide_date = explode('%20', $dateRange);
        $from_date_month = $devide_date[0];
        $from_date_day = $devide_date[1];
        $from_date_year = $devide_date[2];

        $from_date = $from_date_year . "-" . $from_date_month . "-" . $from_date_day;

        $to_date_month = $devide_date[3];
        $to_date_day = $devide_date[4];
        $to_date_year = $devide_date[5];

        $to_date = $to_date_year . "-" . $to_date_month . "-" . $to_date_day;

        $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $this->db->where('date(p.created_on) >=', $from_date);
        $this->db->where('date(p.created_on) <=', $to_date);
        $query = $this->db->get();

        $arrobjChallans = array();
        foreach ($query->result() as $row) {
            $arrobjChallans[$row->id] = $row;
        }
        echo json_encode($arrobjChallans);
        exit;
    }

}
