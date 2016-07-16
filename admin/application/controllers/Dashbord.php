<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

    public function index() {

        if (true == valStr($this->session->userdata('id')) && true == valStr($this->session->userdata('email_id'))) {
            $this->load->view('includes/header');
            $this->load->view('includes/sidebar');
            $this->load->view('dashbord/dashbord');
            $this->load->view('includes/footer');
        } else {
//            $this->load->view('includes/sidebar');
            redirect(base_url() . 'admin/');
          
        }
    }
    
    public function printChallan() {
        $intChallanId = (true == isset($_GET['challan_id']) && true == valStr($_GET['challan_id'])) ? $_GET['challan_id'] : NULL;
        $this->db->select('c.id, ci.total_item_count');
        $this->db->from('challanes c');
        $this->db->join('cloth_info ci', 'c.id = ci.challan_id');
        $this->db->where('c.id = ' . $intChallanId);
        $query = $this->db->get();
        
        $arrChallanInfo = array();
        foreach ($query->result() as $objChallan) {
            $arrChallanInfo[] = $objChallan;
        }
        
        $objChallan = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        $data = array('challan' => $arrChallanInfo);
        $this->load->view('dashbord/print-challan', $data);
        //$this->load->view('includes/footer');
    }
    
    public function getUser() {
        $intUserId = $this->session->userdata('id');
        
        if (false == valStr($intUserId)) {
            return array();
        }
        
        $objUser = $this->session->userdata('user');
        
        $this->load->model('dashbord_model');
        $strStatus = $this->dashbord_model->getCurrentUserStatus($objUser->employee_type_id);
        
        $arrData = array();
        
        $arrData['user'] = $objUser;
        $arrData['status'] = $strStatus;
        
        echo json_encode($arrData);
        exit;
    }
    
    public function getPickupDetails() {
        $this->db->select('*');
        $this->db->from('challanes c');
        
        $strSql = "date(created_on) >= date '" . date('Y-m-d') . "'";
        $this->db->where($strSql);
        $query = $this->db->get();
        $rowcount = $query->num_rows();
        echo (0 == $rowcount) ? 0 : $rowcount;
        exit;
    }
    
    //for todays remaining deliveries 
    public function getTodaysRemainingDeliveryCount() {
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        $query = $this->db->get_where('challanes', array('day(delivery_estimate_date)' => $day, 'month(delivery_estimate_date)' => $month, 'year(delivery_estimate_date)' => $year));
        $rowcount = $query->num_rows();
        echo $rowcount;
    }

    //for todays remaining deliveries 
    public function getTodaysUrgenciesCount() {
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        $query = $this->db->get_where('challanes', array('urgent_required' => 1, 'day(created_on)' => $day, 'month(created_on)' => $month, 'year(created_on)' => $year));
        $rowcount = $query->num_rows();
        echo $rowcount;
    }

    //for todays Added New Customers(clients);
    public function getTodaysNewAddedCustomers() {
        $this->load->helper('date');
        $year = date('Y');
        $month = date('m');
        $day = date('d');

        $query = $this->db->get_where('clients', array('year(created_on)' => $year, 'month(created_on)' => $month, 'day(created_on)' => $day));
        $rowcount = $query->num_rows();
        echo $rowcount;
    }

    //for todays delivered clothList
    public function getTodaysDeliveredChallans() {

        $year = date('Y');
        $month = date('m');
        $day = date('d');
        $this->db->select('*');
        $this->db->from('challanes c');
        $this->db->join('clients cl', 'cl.id = c.client_id', 'right');
        $this->db->where('delivery_status_id', 7);
        $this->db->where('year(c.updated_on)', $year);
        $this->db->where('month(c.updated_on)', $month);
        $this->db->where('day(c.updated_on)', $day);
        $query = $this->db->get();
        //  $query = $this->db->get_where('challanes', array('delivery_status_id'=>7,'year(updated_on)' => $year,'month(updated_on)' => $month,'day(updated_on)' => $day));
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        echo json_encode(array('todaysDelivery' => $arrData));
        exit;
    }

    //for yesterdays delivered clothList
    public function getYesterdaysDeliveredChallans() {

        $year = date('Y');
        $month = date('m');
        $day = date('d') - 1;

        //$yesterday = date('Y-m-d H:i:s', strtotime('yesterday'));

        $this->db->select('*');
        $this->db->from('challanes');
       // $this->db->join('clients', 'clients.id = challanes.client_id','left');
         $this->db->where('delivery_status_id',7);
        $this->db->where('year(updated_on)', $year);
        $this->db->where('month(updated_on)', $month);
        $this->db->where('day(updated_on)', $day);
        $query = $this->db->get();

        //  $query = $this->db->get_where('challanes', array('delivery_status_id'=>7,'year(updated_on)' => $year,'month(updated_on)' => $month,'day(updated_on)' => $day));
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        echo json_encode(array('yesterdaysDelivery' => $arrData));
        exit;
    }

    //for two days ago delivered clothList
    public function twoDaysAgoDeliveredClothsList() {

        $year = date('Y');
        $month = date('m');
        $day = date('d') - 2;

        //$yesterday = date('Y-m-d H:i:s', strtotime('yesterday'));

        $this->db->select('*');
        $this->db->from('challanes');
        // $this->db->join('clients', 'clients.id = challanes.client_id','right');
        $this->db->where('delivery_status_id', 7);
        $this->db->where('year(updated_on)', $year);
        $this->db->where('month(updated_on)', $month);
        $this->db->where('day(updated_on)', $day);
        $query = $this->db->get();

        //  $query = $this->db->get_where('challanes', array('delivery_status_id'=>7,'year(updated_on)' => $year,'month(updated_on)' => $month,'day(updated_on)' => $day));
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        echo json_encode(array('twoDaysAgoDelivery' => $arrData));
        exit;
    }

    //for soon today delivered clothList
    public function soonTodayDeliveredClothsList() {

        $year = date('Y');
        $month = date('m');
        $day = date('d');

        $this->db->select('*');
        $this->db->from('challanes');
        // $this->db->join('clients', 'clients.id = challanes.client_id','right');
        $this->db->where('year(delivery_estimate_date)', $year);
        $this->db->where('month(delivery_estimate_date)', $month);
        $this->db->where('day(delivery_estimate_date)', $day);
        $query = $this->db->get();

        //  $query = $this->db->get_where('challanes', array('delivery_status_id'=>7,'year(updated_on)' => $year,'month(updated_on)' => $month,'day(updated_on)' => $day));
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        echo json_encode(array('soonTodayDelivery' => $arrData));
        exit;
    }

    //for soon tomarrow delivered clothList
    public function soonTomarrowDeliveredClothsList() {

        $year = date('Y');
        $month = date('m');
        $day = date('d') + 1;

        $this->db->select('*');
        $this->db->from('challanes');
        // $this->db->join('clients', 'clients.id = challanes.client_id','right');
        $this->db->where('year(delivery_estimate_date)', $year);
        $this->db->where('month(delivery_estimate_date)', $month);
        $this->db->where('day(delivery_estimate_date)', $day);
        $query = $this->db->get();

        //  $query = $this->db->get_where('challanes', array('delivery_status_id'=>7,'year(updated_on)' => $year,'month(updated_on)' => $month,'day(updated_on)' => $day));
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        echo json_encode(array('soonTodayDelivery' => $arrData));
        exit;
    }

    //for soon sfter two days delivered clothList
    public function soonAfterTwoDaysDeliveredClothsList() {

        $year = date('Y');
        $month = date('m');
        $day = date('d') + 2;

        $this->db->select('*');
        $this->db->from('challanes');
        // $this->db->join('clients', 'clients.id = challanes.client_id','right');
        $this->db->where('year(delivery_estimate_date)', $year);
        $this->db->where('month(delivery_estimate_date)', $month);
        $this->db->where('day(delivery_estimate_date)', $day);
        $query = $this->db->get();

        //  $query = $this->db->get_where('challanes', array('delivery_status_id'=>7,'year(updated_on)' => $year,'month(updated_on)' => $month,'day(updated_on)' => $day));
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        echo json_encode(array('soonTodayDelivery' => $arrData));
        exit;
    }

}
