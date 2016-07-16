<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('login/login');
    }
    
    public function profile() {
        $intUserId = $this->session->all_userdata();
        
    }
    
    public function login() {
        $this->load->model('admin_model');
        $boolIsValid = $this->admin_model->checkLogin();
        
        $strMessage = '';
        if (true == $boolIsValid) {
            $strMessage = 'User loged-in successfully.';
            $this->session->flashdata($strMessage);
			
			$arrData = array();
			
			$arrData['error'] = 'false';
			$arrData['msg'] = 'NAN';
            
            redirect(base_url());
            exit;
            echo json_encode(array('success' => 'true', 'message' => $strMessage));
            exit;
        } else {
            $strMessage = 'Filed to login Username/Password not match.';
            
            redirect(base_url() . 'admin/');
            exit;
            echo json_encode(array('success' => 'false', 'message' => $strMessage));
            exit;
        }
    }
    
    public function logout() {
        $array_items = array('id' => '', 'email_id' => '', 'user' => '');
        $this->session->unset_userdata($array_items);

        $this->session->flashdata('User logout successfully.');        
        $this->session->sess_destroy();
        
        redirect(base_url() . 'Admin/login');
        exit;
    }
}