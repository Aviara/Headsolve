    <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }

    public function getPayment($intPaymentId) {
        $query = $this->db->get_where('payments', array('id' => $intPaymentId));

        $arrPayment = array();
        foreach ($query->result() as $row) {
            $arrPayment = $row;
        }

        echo json_encode($arrPayment);
        exit;
    }

    public function getPaymentList() {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        // Added only payment display created by perticular user.
        
        $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
//         $this->db->where('p.created_by', $this->session->userdata('id'));
//            $this->db->or_where('c.created_by', $this->session->userdata('id'));
           if (1 == $objUser->employee_type_id) {
            
        } else {
           
            $this->db->where('p.city_id', $intCityId);
            $this->db->where('p.Branch_id', $intBranchId);
        }
        $query = $this->db->get();

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }

        echo json_encode($arrData);
        exit;
    }
    
    public function getPaymentByChallanId($intChallanId) {
        if (false == valStr($intChallanId)) {
            log_message('error', 'Challan Id should not be empty.');
            return array();
        }
        
        $query = $this->db->get_where('payments', array('challan_id' => $intChallanId));
        
        $objPayment = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        echo json_encode($objPayment);
        exit;
    }

    public function savePayment() {
        $this->load->model('payment_model');
        $intInsert = $this->payment_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editPayment() {
        $this->load->model('payment_model');
        $intInsert = $this->payment_model->updateMenu();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function deletePayment($intPaymentId) {
        $this->load->model('payment_model');
        $boolDeleted = $this->payment_model->delete($intPaymentId);

        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
    
    public function addPaymentAmount() {
        $this->load->model('payment_model');
        $boolIsValid = $this->payment_model->addTransaction();
        
        echo json_encode(array('success' => $boolIsValid));
        exit;
    }
    
    public function getPaymentTransactions($intPaymentId) {
        $this->load->model('payment_model');
        $arrobjTransactions = $this->payment_model->getTransactions($intPaymentId);
        
        echo json_encode($arrobjTransactions);
        exit;
    }
	
	public function paymenyByEmployee($intEmployeeId) {
	    $objUser = $this->session->userdata('user');
            $intCityId = $objUser->city_id;
            $intBranchId = $objUser->branch_id;
            
            $day = date('d');
            $month = date('m');
            $year = date('Y');
            $this->db->select('p.*, CONCAT(c.first_name, \' \', c.last_name) as client_name');
            $this->db->from('payments p');
            $this->db->join('clients c', 'c.id = p.client_id');
            $this->db->where('p.employee_id', $intEmployeeId);
            $this->db->where('DAY(p.updated_on)', $day);
            $this->db->where('MONTH(p.updated_on)', $month);
            $this->db->where('YEAR(p.updated_on)', $year);
             if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('p.city_id', $intCityId);
                    $this->db->where('p.branch_id', $intBranchId);
                }
            $query = $this->db->get();

            $arrobjPayments = array();
            foreach ($query->result() as $row) {
                    $arrobjPayments[$row->id] = $row;
            }

            $arrData = array();
            if (true == valArr($arrobjPayments)) {
                    $arrData['found'] = true;
            }
            $arrData['payments'] = $arrobjPayments;

            echo json_encode($arrData);
            exit;
	}
        public function laundrysHoleCollectionForToday() {
                $objUser = $this->session->userdata('user');
                $intCityId = $objUser->city_id;
                $intBranchId = $objUser->branch_id;
	
                $day = date('d');
                $month = date('m');
                $year = date('Y');
		$this->db->select('p.*, CONCAT(c.first_name, \' \', c.last_name) as client_name');
		$this->db->from('payments p');
		$this->db->join('clients c', 'c.id = p.client_id');
                $this->db->where('DAY(p.updated_on)', $day);
                $this->db->where('MONTH(p.updated_on)', $month);
                $this->db->where('YEAR(p.updated_on)', $year);
                 if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('p.city_id', $intCityId);
                    $this->db->where('p.branch_id', $intBranchId);
                }
                
		$query = $this->db->get();
		
		$arrobjPayments = array();
		foreach ($query->result() as $row) {
			$arrobjPayments[$row->id] = $row;
		}
		
		$arrData = array();
		if (true == valArr($arrobjPayments)) {
			$arrData['found'] = true;
		}
		$arrData['payments'] = $arrobjPayments;
		
		echo json_encode($arrData);
		exit;
	}
         public function laundrysCurrentMonthCollection() {
             $objUser = $this->session->userdata('user');
                $intCityId = $objUser->city_id;
                $intBranchId = $objUser->branch_id;
                
                $month = date('m');
                $year = date('Y');
                
		$this->db->select('p.*, CONCAT(c.first_name, \' \', c.last_name) as client_name');
		$this->db->from('payments p');
		$this->db->join('clients c', 'c.id = p.client_id');
                $this->db->where('MONTH(p.updated_on)', $month);
                $this->db->where('YEAR(p.updated_on)', $year);
                 if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('p.city_id', $intCityId);
                    $this->db->where('p.branch_id', $intBranchId);
                }
                
		$query = $this->db->get();
		
		$arrobjPayments = array();
		foreach ($query->result() as $row) {
			$arrobjPayments[$row->id] = $row;
		}
		
		$arrData = array();
		if (true == valArr($arrobjPayments)) {
			$arrData['found'] = true;
		}
		$arrData['payments'] = $arrobjPayments;
		
		echo json_encode($arrData);
		exit;
	}
        
        public function dateRangePaymentReport() {
                $objUser = $this->session->userdata('user');
                $intCityId = $objUser->city_id;
                $intBranchId = $objUser->branch_id;
        
        if (true == valStr($_GET['from_date']) && true == valStr($_GET['to_date'])) {
        
            $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name,CONCAT(e.first_name, \' \', e.last_name) as employee_name,c.client_id as client_id');
            $this->db->from('Payments p');
            $this->db->join('challanes c', 'c.id = p.challan_id');
            $this->db->join('clients cl', 'cl.id = c.client_id');
            $this->db->join('employees e', 'e.id = c.employee_id');
            $strSql = "date(p.updated_on) BETWEEN date '" . date('Y-m-d', strtotime($_GET['from_date'])) . "' AND date '" . date('Y-m-d', strtotime($_GET['to_date'])) . "'";
            $this->db->where($strSql);
             if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('p.city_id', $intCityId);
                    $this->db->where('p.branch_id', $intBranchId);
                }
            $query = $this->db->get();

//            $arrobjChallanes = array();
//            foreach ($query->result() as $row) {
//                $arrobjChallanes[] = $row;
//            }
//
//            echo json_encode($arrobjChallanes);
//            exit;
            $arrobjPayments = array();
		foreach ($query->result() as $row) {
			$arrobjPayments[$row->id] = $row;
		}
		
		$arrData = array();
		if (true == valArr($arrobjPayments)) {
			$arrData['found'] = true;
		}
		$arrData['payments'] = $arrobjPayments;
		
		echo json_encode($arrData);
		exit;
        } else {
            echo json_encode(array('error' => 'Date not in proper format.'));
            exit;
        }
    }
    

    public function downloadPaymentHistory() {

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
                ->setCellValue('B1', 'CHALLAN ID')
                ->setCellValue('C1', 'Client Name')
                ->setCellValue('D1', 'Employee Name')
                ->setCellValue('E1', 'Store Name')
                ->setCellValue('F1', 'Total Amount')
                ->setCellValue('G1', 'Paid Amount')
                ->setCellValue('H1', 'Remaining Amount')
                ->setCellValue('I1', 'Total Items')
                ->setCellValue('J1', 'Completed')
                ->setCellValue('K1', 'Created By')
                ->setCellValue('L1', 'Created On');


        /* Paymenet details and render into sheet Code is Strat From Here */
        $this->load->model('payment_model');
        $arrobjPayments = $this->payment_model->getPaymentDownloadList();

        $rowid = 2;
        foreach ($arrobjPayments as $objPayment) {
        $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $rowid, $objPayment->id)
                    ->setCellValue('B' . $rowid, $objPayment->challan_id)
                    ->setCellValue('C' . $rowid, $objPayment->client_name)
                    ->setCellValue('D' . $rowid, $objPayment->employee_name)
                    ->setCellValue('E' . $rowid, $objPayment->store_id)
                    ->setCellValue('F' . $rowid, $objPayment->total_amount)
                    ->setCellValue('G' . $rowid, $objPayment->paid_amount)
                    ->setCellValue('H' . $rowid, $objPayment->remaining_amount)
                    ->setCellValue('I' . $rowid, $objPayment->total_items)
                    ->setCellValue('J' . $rowid, $objPayment->is_completed)
                    ->setCellValue('K' . $rowid, $objPayment->created_by)
                    ->setCellValue('L' . $rowid, $objPayment->created_on);


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

}
