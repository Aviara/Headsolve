<?php

class Resorts_model extends CI_Model {
    
    function insert_into_db() {
//        display($_POST);
//        exit;
//        
        $arrPostData     = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        $strFileName     = (true == isset($_POST['file_name'])) ? $_POST['file_name'] : array();
        $strPlaceId      = (true == isset($_POST['place_id'])) ? $_POST['place_id'] : array();
        $strXcoordinate  = (true == isset($_POST['xCoordinate'])) ? $_POST['xCoordinate'] : array();
        $strYcoordinate  = (true == isset($_POST['yCoordinate'])) ? $_POST['yCoordinate'] : array();
       
       // $arrPostData = $_POST['params'];
        
        $strResortName           = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : NULL;
        $strAddress             = (true == isset($arrPostData['address']) && true == valStr($arrPostData['address'])) ? $arrPostData['address'] : NULL;
        $strDescription         = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : NULL;
         
//         if($this->session->userdata('id') == 1){
//            $query = $this->db->query("SELECT * FROM branches ORDER BY id DESC LIMIT 1")->row_array();
            $data = array(
                'name' => $strResortName,
                'address' => $strAddress ,
                'place_id' => $strPlaceId,
                'description' => $strDescription, 
                'listImageUrl' => $strFileName,
                'xCoordinate' => $strXcoordinate,
                'yCoordinate' => $strYcoordinate,
                'createdBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'createdOn' => date('Y-m-d h:i:s'),
                'updatedBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updatedOn' => date('Y-m-d h:i:s')
        );
      
        $this->db->insert('tbl_resorts', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function updateResort(){
        $arrPostData     = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;

        $strFileName     = (true == isset($_POST['file_name'])) ? $_POST['file_name'] : array();
        $strPlaceId      = (true == isset($_POST['place_id'])) ? $_POST['place_id'] : array();
        $strXcoordinate  = (true == isset($_POST['xCoordinate'])) ? $_POST['xCoordinate'] : array();
        $strYcoordinate  = (true == isset($_POST['yCoordinate'])) ? $_POST['yCoordinate'] : array();
       
       // $arrPostData = $_POST['params'];
        
        $strResortName           = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : NULL;
        $strAddress             = (true == isset($arrPostData['address']) && true == valStr($arrPostData['address'])) ? $arrPostData['address'] : NULL;
        $strDescription         = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : NULL;
         
//         if($this->session->userdata('id') == 1){
//            $query = $this->db->query("SELECT * FROM branches ORDER BY id DESC LIMIT 1")->row_array();
            $data = array(
                'name' => $strResortName,
                'address' => $strAddress ,
//                'place_id' => $strPlaceId,
                'description' => $strDescription, 
//                'listImageUrl' => $strFileName,
//                'xCoordinate' => $strXcoordinate,
//                'yCoordinate' => $strYcoordinate,
//                'createdBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
//                'createdOn' => date('Y-m-d h:i:s'),
                'updatedBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updatedOn' => date('Y-m-d h:i:s')
        );
      
        $this->db->where(array('id' => $intId));
        $this->db->update('tbl_resorts', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
        
    }
    
     function uploadfiles(){
//            print_r(($_FILES["file"]["name"]));
//            exit;
//            $target_dir =  BASE_URL."assets/uploaded_project_document/";
//            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $temp = explode(".", $_FILES["file"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $files_uploaded = move_uploaded_file($_FILES["file"]["tmp_name"],  $_SERVER['DOCUMENT_ROOT']."/ayurveda/admin/assets/uploaded/resort_list_images/" . $newfilename);
           
            $file_name = $_FILES["file"];
            $new_name = $newfilename;

            $data = array('new'=>$newfilename);
            $data[0] = $file_name;
            $data[1] = $new_name;
             return ($files_uploaded != 1) ? false :$data ;
}
    
    function delete($intMenuid) {
        return $this->db->delete('tbl_resorts', array('id' => $intMenuid));
    }
}