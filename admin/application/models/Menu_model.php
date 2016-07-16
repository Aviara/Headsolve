<?php

class Menu_model extends CI_Model {
    
    function insert_into_db() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $strName            = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : NULL;
        $strDescription     = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : NULL;
        $strTitle           = (true == isset($arrPostData['title']) && true == valStr($arrPostData['title'])) ? $arrPostData['title'] : NULL;
        $strUrl             = (true == isset($arrPostData['url']) && true == valStr($arrPostData['url'])) ? $arrPostData['url'] : NULL;
        $strIsPublished     = (true == isset($arrPostData['is_published']) && true == valStr($arrPostData['is_published'])) ? $arrPostData['is_published'] : NULL;
        $strOrderNumber     = (true == isset($arrPostData['order_by']) && true == valStr($arrPostData['order_by'])) ? $arrPostData['order_by'] : NULL;
        $strImageUrl        = (true == isset($arrPostData['image_url']) && true == valStr($arrPostData['image_url'])) ? $arrPostData['image_url'] : NULL;
        $strParentMenuId    = (true == isset($arrPostData['parent_menu_id']) && true == valStr($arrPostData['parent_menu_id'])) ? $arrPostData['parent_menu_id'] : NULL;
        
        $data = array(
            'name' => $strName,
            'description' => $strDescription,
            'title' => $strTitle,
            'url' => $strUrl,
            'is_published' => $strIsPublished,
            'order_by' => $strOrderNumber,
            'image_url' => $strImageUrl,
            'parent_menu_id' => $strParentMenuId,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->insert('menu', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function updateMenu() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;
        
        if (false == valStr($intId)) {
            $this->session->flashdata(array('message' => 'Menu Id not an numbric value.'));
            return false;
        }
        
        $query = $this->db->get_where('menu', array('id' => $intId));
        $objMenu = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        if (false == valObj($objMenu, 'stdClass')) {
            $this->session->flashdata(array('message' => 'Menu details are not found in DB.'));
            return false;
        }
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $strName            = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : $objMenu->name;
        $strDescription     = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : $objMenu->description;
        $strTitle           = (true == isset($arrPostData['title']) && true == valStr($arrPostData['title'])) ? $arrPostData['title'] : $objMenu->title;
        $strUrl             = (true == isset($arrPostData['url']) && true == valStr($arrPostData['url'])) ? $arrPostData['url'] : $objMenu->url;
        $strIsPublished     = (true == isset($arrPostData['is_published']) && true == valStr($arrPostData['is_published'])) ? $arrPostData['is_published'] : $objMenu->is_published;
        $strOrderNumber     = (true == isset($arrPostData['order_by']) && true == valStr($arrPostData['order_by'])) ? $arrPostData['order_by'] : $objMenu->order_by;
        $strImageUrl        = (true == isset($arrPostData['image_url']) && true == valStr($arrPostData['image_url'])) ? $arrPostData['image_url'] : $objMenu->image_url;
        $strParentMenuId    = (true == isset($arrPostData['parent_menu_id']) && true == valStr($arrPostData['parent_menu_id'])) ? $arrPostData['parent_menu_id'] : $objMenu->parent_menu_id;
        
        $data = array(
            'name' => $strName,
            'description' => $strDescription,
            'title' => $strTitle,
            'url' => $strUrl,
            'is_published' => $strIsPublished,
            'order_by' => $strOrderNumber,
            'image_url' => $strImageUrl,
            'parent_menu_id' => $strParentMenuId,
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->where(array('id' => $intId));
        $this->db->update('menu', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function delete($intMenuid) {
        return $this->db->delete('menu', array('id' => $intMenuid));
    }

}
