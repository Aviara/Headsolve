<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class autocompleate extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('requirement/requirement');
        $this->load->view('includes/footer');
    }

     function __construct() {
        parent::__construct();
        $this->load->model('mautocomplete');
    }
    
     public function GetCountryName(){
        $keyword=$this->input->post('keyword');
        $data=$this->mautocomplete->GetRow($keyword);        
        echo json_encode($data);
    }

    
    
}
