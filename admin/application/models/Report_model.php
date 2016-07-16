<?php

class Report_model extends CI_Model {
               
     public function downloadPaymentReportDetails($monthvalue) {
            $objUser = $this->session->userdata('user');
            $intCityId = $objUser->city_id;
            $intBranchId = $objUser->branch_id;
            
//        $monthval = explode('-',$monthvalue); 
       $month = $monthvalue;
//        $year = $monthval[1];
        $year = date('Y');
//       print($monthvalue);
//     exit;
        $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $this->db->where('MONTH(p.created_on)', $month);
        $this->db->where('YEAR(p.created_on)', $year);
          if (1 == $objUser->employee_type_id) {
            
                } else {
                    $this->db->where('c.city_id', $intCityId);
                    $this->db->where('c.branch_id', $intBranchId);
                }
        $query = $this->db->get();

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        return $arrData;
    }
    public function downloadPaymentReportDetailsByDateRange($date_concatinated) {
            $objUser = $this->session->userdata('user');
            $intCityId = $objUser->city_id;
            $intBranchId = $objUser->branch_id;
            
            $devide_date            = explode('%20', $date_concatinated);
            $from_date_month        = $devide_date[0]; 
            $from_date_day          = $devide_date[1];
            $from_date_year         = $devide_date[2];
             $from_date              = $from_date_year."-".$from_date_month."-".$from_date_day;
            $to_date_month          = $devide_date[3]; 
            $to_date_day            = $devide_date[4];
            $to_date_year           = $devide_date[5];
             $to_date              = $to_date_year."-".$to_date_month."-".$to_date_day;
            $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
            $this->db->from('payments p');
            $this->db->join('challanes c', 'c.id = p.challan_id');
            $this->db->join('clients cl', 'cl.id = p.client_id');
            $this->db->join('employees e', 'e.id = p.employee_id');
            $this->db->where('date(p.created_on) >=' , $from_date);
            $this->db->where('date(p.created_on) <=' , $to_date);
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
            return $arrobjChallans;
    }
      public function downloadChallanReportDetailsByDateRange($date_concatinated) {
           $objUser = $this->session->userdata('user');
            $intCityId = $objUser->city_id;
            $intBranchId = $objUser->branch_id;  
            
            $devide_date            = explode('%20', $date_concatinated);
            $from_date_month        = $devide_date[0]; 
            $from_date_day          = $devide_date[1];
            $from_date_year         = $devide_date[2];
             $from_date              = $from_date_year."-".$from_date_month."-".$from_date_day;
            $to_date_month          = $devide_date[3]; 
            $to_date_day            = $devide_date[4];
            $to_date_year           = $devide_date[5];
             $to_date              = $to_date_year."-".$to_date_month."-".$to_date_day;

            $this->db->select('c.*, '   
                    . 'CONCAT(ci.first_name, \' \', ci.last_name) as client_name,'
                    . 'CONCAT(e.first_name, \' \', e.last_name) as employee_name,'
                    . 'd.name as delivery_status');
        $this->db->from('challanes c');
        $this->db->join('clients ci', 'ci.id = c.client_id');
        $this->db->join('employees e', 'e.id = c.employee_id');
        $this->db->join('delivery_status d', 'd.id = c.delivery_status_id');
        $this->db->where('date(c.created_on) >=' , $from_date);
        $this->db->where('date(c.created_on) <=' , $to_date);
          
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
        return $arrobjChallanes;
    }
    
    public function downloadChallanReportDetails($monthvalue) {
            $objUser = $this->session->userdata('user');
            $intCityId = $objUser->city_id;
            $intBranchId = $objUser->branch_id; 
        //$monthval = explode('-',$monthvalue); 
        $month = $monthvalue;
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

        $arrobjChallanes = array();
        foreach ($query->result() as $row) {
            $arrobjChallanes[] = $row;
        }
      
        return $arrobjChallanes;
    }
}
