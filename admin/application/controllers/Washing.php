<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Washing extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }

    public function getWashing($intWashingId) {
        $query = $this->db->get_where('washing_powder_types', array('id' => $intWashingId));

        $arrWashing = array();
        foreach ($query->result() as $row) {
            $arrWashing = $row;
        }

        echo json_encode($arrWashing);
        exit;
    }

    public function getWashingList() {
        $query = $this->db->get('washing_powder_types');

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }

        echo json_encode(array('washingPowderList' => $arrData));
        exit;
    }

    public function saveWashing() {
        $this->load->model('washing_model');
        $intInsert = $this->washing_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editWashing() {
        $this->load->model('washing_model');
        $intUpdate = $this->washing_model->updateWashing();

        echo json_encode(array('success' => $intUpdate));
        exit;
    }

    public function deleteWashing($intWashingId) {
        $this->load->model('washing_model');
        $boolDeleted = $this->washing_model->delete($intWashingId);

        echo json_encode(array('success' => $boolDeleted));
        exit;
    }

}
