<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('menu/menu-add');
        $this->load->view('includes/footer');
    }

    public function getMenu($intMenuId) {
        $query = $this->db->get_where('menu', array('id' => $intMenuId));
        
        $arrMenu = array();
        foreach ($query->result() as $row) {
            $arrMenu = $row;
        }
        
        echo json_encode($arrMenu);
        exit;
    }

    public function getMenuList() {
        $query = $this->db->get('menu');

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        
        echo json_encode(array('menuList' => $arrData));
        exit;
    }

    public function saveMenu() {
        display($_POST);
        exit;
        $this->load->model('menu_model');
        $intInsert = $this->menu_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editMenu() {
        $this->load->model('menu_model');
        $intInsert = $this->menu_model->updateMenu();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function deleteMenu($intMenuId) {
        $this->load->model('menu_model');
        $boolDeleted = $this->menu_model->delete($intMenuId);
        
        echo json_encode(array('success' => $boolDeleted));
        exit;
    }

}
