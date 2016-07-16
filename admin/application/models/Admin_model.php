<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function checkLogin() {
        $strEmailAddress    = (true == isset($_POST['username']) && true == valStr($_POST['username'])) ? strtolower($_POST['username']) : NULL;
        $strPassword        = (true == isset($_POST['password']) && true == valStr($_POST['password'])) ? md5($_POST['password']) : NULL;
        
        $query      = $this->db->get_where('tbl_employees', array('emailId' => $strEmailAddress, 'password' => $strPassword), 1);
        $objResult  = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        if (true == valObj($objResult, 'stdClass') && true == valStr($objResult->id)) {
            $this->session->set_userdata(array('id' => $objResult->id, 'email_id' => $objResult->emailId, 'user' => $objResult));
            return true;
        } else {
            $array_items = array('id' => '', 'email_id' => '', 'user' => '');
            $this->session->unset_userdata($array_items);
            return false;
        }
    }

    public function validate_login() {
        if ($this->session->userdata('admin_id') == "") {
            $this->session->set_flashdata('admin_error', 'Session expired! Please login again');
            redirect(base_url() . 'admin/');
        }
    }

    public function validate_seller_login() {
        if ($this->session->userdata('seller_id') == "") {
            $this->session->set_flashdata('admin_error', 'Session expired! Please login again');
            redirect(base_url() . 'seller/');
         } else {
            if ($this->uri->segment(2) != "legal") {
                $seller_id = $this->session->userdata('seller_id');
                $sellerdata = $this->db->get_where('sellers', array('seller_id' => $seller_id))->row_array();
                if (strip_tags($sellerdata["terms"]) == "") {
                    $this->session->set_flashdata("seller_warning", "Please enter terms for your business.");
                    redirect(base_url("seller/legal/terms"));
                }
                if (strip_tags($sellerdata["return_policy"]) == "") {
                    $this->session->set_flashdata("seller_warning", "Please enter return policy for your business.");
                    redirect(base_url("seller/legal/return_policy"));
                }
            }
        }
    }
}
