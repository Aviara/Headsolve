<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ResortUsefulInfo extends CI_Controller {

    

    public function getResortUsefulInfo() {
        
        $this->db->select('ui.*, tr.name as name');
        $this->db->from('tbl_useful_info ui');
        $this->db->join('tbl_resorts tr', 'ui.resortId = tr.id');
        $query = $this->db->get();  
        
        $arrresortinfo = array();
        foreach ($query->result() as $row) {
            $arrresortinfo = $row;
        }
        
        echo json_encode($arrresortinfo);
        exit;
    }
    

    public function getAllResorts() {
        $query = $this->db->get('tbl_resorts');

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        
        echo json_encode(array('ResortList' => $arrData));
        
        exit;
    }
    
    public function Resortinfolist(){
        $this->db->select('ui.*, tr.name as name');
        $this->db->from('tbl_useful_info ui');
        $this->db->join('tbl_resorts tr', 'ui.resortId = tr.id');
       
         $query = $this->db->get();   
         
          $arrData = array();
           foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        
         echo json_encode($arrData);
        exit;
    }

    
    
    public function saveResortInfo() {
        $this->load->model('ResortUsefulInfo_model');
        $intInsert = $this->ResortUsefulInfo_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editResortInfo() {
          $this->load->model('ResortUsefulInfo_model');
        $intInsert = $this->ResortUsefulInfo_model->updateResortUsefulInfo();

        echo json_encode(array('success' => $intInsert));
        exit;
    }
    

    public function deleteResortUsefulInfo($intResortuinfoId) {
        $this->load->model('ResortUsefulInfo_model');
        $boolDeleted = $this->ResortUsefulInfo_model->delete($intResortuinfoId);
        
        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
    
  

 }

