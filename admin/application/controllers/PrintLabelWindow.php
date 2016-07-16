<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PrintLabelWindow extends CI_Controller {

    public function index() {
        $this->load->view('partials/challan-status/print-label-window');
    }
 }

