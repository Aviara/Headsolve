<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RoomType extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('branches/branches-add');
        $this->load->view('includes/footer');
    }

    public function getRoomByRoomId($intRoomId) {
        $query = $this->db->get_where('tbl_room_type', array('id' => $intRoomId));
        
        $arrRoom = array();
        foreach ($query->result() as $row) {
            $arrRoom = $row;
        }
        
        echo json_encode($arrRoom);
        exit;
    }
    
    public function roomList(){
          $this->db->select('rt.*, r.name as resortName');
        $this->db->from('tbl_room_type rt');
        $this->db->join('tbl_resorts r', 'rt.resortId = r.id');
       
         $query = $this->db->get();  
//         $query = $thisC->db->get('tbl_room_type');
         
          $arrData = array();
           foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        
         echo json_encode($arrData);
        exit;
    }

       public function saveRoomType() {
        $this->load->model('Rooms_model');
        $intInsert = $this->Rooms_model->insert_into_db();

        echo json_encode(array('success' => $intInsert));
        exit;
    }

    public function editRoomtype() {
          $this->load->model('Rooms_model');
        $intInsert = $this->Rooms_model->updateroom();

        echo json_encode(array('success' => $intInsert));
        exit;
    }
    

    public function deleteRoom($intEmployeeId) {
        $this->load->model('Rooms_model');
        $boolDeleted = $this->Rooms_model->delete($intEmployeeId);
        
        echo json_encode(array('success' => $boolDeleted));
        exit;
    }
    
   

 }

