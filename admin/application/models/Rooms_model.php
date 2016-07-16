<?php

class Rooms_model extends CI_Model {
    
    function insert_into_db() {
//        display($_POST);
//        exit;
        
        $arrPostData = (true == isset($_POST['paramsrt'])) ? $_POST['paramsrt'] : array();
        
       // $arrPostData = $_POST['params'];
        
        $strRoomtype           = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : NULL;
        $strresortId           = (true == isset($arrPostData['resortId']) && true == valStr($arrPostData['resortId'])) ? $arrPostData['resortId'] : NULL;
        $data = array(
                'name' => $strRoomtype,
                'resortId' => $strresortId,
                'createdBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'createdOn' => date('Y-m-d h:i:s'),
                'updatedBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updatedOn' => date('Y-m-d h:i:s')
        );
            
       
       
        
        $this->db->insert('tbl_room_type', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function updateroom() {
        
        $arrPostData = (true == isset($_POST['paramsrt'])) ? $_POST['paramsrt'] : array();
        
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;
        
        if (false == valStr($intId)) {
            $this->session->flashdata(array('message' => 'room Id not an numbric value.'));
            return false;
        }
        
        $query = $this->db->get_where('tbl_room_type', array('id' => $intId));
        $objEmployee = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        if (false == valObj($objEmployee, 'stdClass')) {
            $this->session->flashdata(array('message' => 'room details are not found in DB.'));
            return false;
        }
        
       $arrPostData = (true == isset($_POST['paramsrt'])) ? $_POST['paramsrt'] : array();
        
        $strRoomtype           = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : $objEmployee->name;
        $strresortId           = (true == isset($arrPostData['resortId']) && true == valStr($arrPostData['resortId'])) ? $arrPostData['resortId'] : NULL;
        
        $data = array(
                'name' => $strRoomtype,
                'resortId' => $strresortId,
                'createdBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'createdOn' => date('Y-m-d h:i:s'),
                'updatedBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updatedOn' => date('Y-m-d h:i:s')
        );
        
        $this->db->where(array('id' => $intId));
        $this->db->update('tbl_room_type', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function delete($intMenuid) {
        return $this->db->delete('tbl_room_type', array('id' => $intMenuid));
    }

}
