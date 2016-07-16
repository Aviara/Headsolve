<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Outsource extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('partials/challan-status');
        $this->load->view('includes/footer');
    }
    public function saveOutsourced() {
        $this->load->model('outsource_model');
        $intInsert = $this->outsource_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }
     public function updateOutsourced() {
        $this->load->model('outsource_model');
        $intInsert = $this->outsource_model->updateClient();

        echo json_encode(array('success' => $intInsert));
        exit;
    }
    public function getOutsourcedById($outsourceId){
    
    
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        $this->db->select('o.*');
        $this->db->form('outsource o');
        $this->db->where('o.id',$outsourceId);
         if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('o.city_id', $intCityId);
            $this->db->where('o.branch_id', $intBranchId);
        }
        $query = $this->db->get();
        
        $arrOutsource = array();
        foreach ($query->result() as $row) {
            $arrOutsource = $row;
        }
        echo json_encode($arrOutsource);
        exit;
    }
    
    public function getAllOutsourced(){
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        $this->db->select('o.*');
        $this->db->from('outsource o');
       
         if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('o.city_id', $intCityId);
            $this->db->where('o.branch_id', $intBranchId);
        }
        $query = $this->db->get();
        
        $arrOutsourced = array();
        foreach ($query->result() as $row) {
            $arrOutsourced[$row->id] = $row;
        }
        echo json_encode($arrOutsourced);
        exit;
    }
}
