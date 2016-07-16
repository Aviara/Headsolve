<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {
   
   public function uploadfiles(){
            $this->load->model('Images_model');
        $intUploadedFiles = $this->Images_model->uploadfiles();
        echo json_encode(array($intUploadedFiles));
        exit;
            
        }
        
   public function getAllImages() {
      
        
        $this->db->select('*');
        $this->db->from('tbl_resort_images');
        $query = $this->db->get();
        
        $arrBranch = array();
        foreach ($query->result() as $row) {
            $arrBranch[$row->id] = $row;
        }
        echo json_encode($arrBranch);
        exit;
    }     
    
     public function deleteImage($intImageId) {
        $this->load->model('Images_model');
        $boolDeleted = $this->Images_model->delete($intImageId);
        
        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
    
   public function getImageById ($intMenuid){
        $this->db->select('b.*');
        $this->db->from('tbl_resort_images b');
        $this->db->where('b.id', $intMenuid);
        
        $query = $this->db->get();
        
        $arrBranch = array();
        foreach ($query->result() as $row) {
            $arrBranch = $row;
        }
        
        echo json_encode($arrBranch);
        exit;
   }
 }

