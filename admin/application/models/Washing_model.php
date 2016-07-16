<?php

class Washing_model extends CI_Model {
    
    function insert_into_db() {
        
        $arrPostData        = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        $strName            = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : NULL;
        $strDescription     = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : NULL;
        $strIsPublished     = (true == isset($arrPostData['is_published']) && true == valStr($arrPostData['is_published'])) ? $arrPostData['is_published'] : NULL;
        $strOrderNumber     = (true == isset($arrPostData['order_number']) && true == valStr($arrPostData['order_number'])) ? $arrPostData['order_number'] : NULL;
       
        $data = array(
            'name'          => $strName,
            'description'   => $strDescription,
            'is_published'  => $strIsPublished,
            'order_number'  => $strOrderNumber,
            'created_by'    => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on'    => date('Y-m-d h:i:s'),
            'updated_by'    => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on'    => date('Y-m-d h:i:s')
        );
        
        $this->db->insert('washing_powder_types', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function updateWashing() {
        $arrPostData        = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $intWashingId = $objWashing = NULL;
        if (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) {
            $intWashingId = $arrPostData['id'];
            
            $query = $this->db->get_where('washing_powder_types', array('id' => $intWashingId));
            $objWashing = (true == valArr($query->result())) ? current($query->result()) : NULL;
        }
        
        if (false == valObj($objWashing, 'stdClass')) {
            return false;
        }
        
        $strName            = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : $objWashing->name;
        $strDescription     = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : $objWashing->desciption;
        $strIsPublished     = (true == isset($arrPostData['is_published']) && true == valStr($arrPostData['is_published'])) ? $arrPostData['is_published'] : $objWashing->is_published;
        $strOrderNumber     = (true == isset($arrPostData['order_number']) && true == valStr($arrPostData['order_number'])) ? $arrPostData['order_number'] : $objWashing->order_number;
       
        $data = array(
            'name'          => $strName,
            'description'   => $strDescription,
            'is_published'  => $strIsPublished,
            'order_number'  => $strOrderNumber,
            'updated_by'    => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on'    => date('Y-m-d h:i:s')
        );

        $this->db->where('id', $intWashingId);
        $boolIsValid = $this->db->update('washing_powder_types', $data);
        
        return $boolIsValid;
    }
    
    function delete($intWashingPowerTypeId) {
        return $this->db->delete('washing_powder_types', array('id' => $intWashingPowerTypeId));
    }

}
