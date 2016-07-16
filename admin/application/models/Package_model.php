<?php

class Package_model extends CI_Model {
    
    function insert_into_db() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $strName           = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : NULL;
        $strDescription    = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : NULL;
        $strBasicPrice     = (true == isset($arrPostData['basic_price']) && true == valStr($arrPostData['basic_price'])) ? $arrPostData['basic_price'] : NULL;
        $strCycle          = (true == isset($arrPostData['cycle']) && true == valStr($arrPostData['cycle'])) ? $arrPostData['cycle'] : NULL;
        
        $data = array(
            'name' => $strName,
            'description' => $strDescription,
            'basic_price' => $strBasicPrice,
            'cycle' => $strCycle,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->insert('packages', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
     function updatePackage() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;
        
        if (false == valStr($intId)) {
            $this->session->flashdata(array('message' => 'Package Id not an numbric value.'));
            return false;
        }
        
        $query = $this->db->get_where('packages', array('id' => $intId));
        $objPackage = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        if (false == valObj($objPackage, 'stdClass')) {
            $this->session->flashdata(array('message' => 'Package details are not found in DB.'));
            return false;
        }
        
      $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $strName           = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : $objPackage->name;
        $strDescription    = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : $objPackage->description;
        $strBasicPrice     = (true == isset($arrPostData['basic_price']) && true == valStr($arrPostData['basic_price'])) ? $arrPostData['basic_price'] : $objPackage->basic_price;
        $strCycle          = (true == isset($arrPostData['cycle']) && true == valStr($arrPostData['cycle'])) ? $arrPostData['cycle'] : NULL;
        
        $data = array(
            'name' => $strName,
            'description' => $strDescription,
            'basic_price' => $strBasicPrice,
            'cycle' => $strCycle,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->where(array('id' => $intId));
        $this->db->update('packages', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function delete($intPackageId) {
        return $this->db->delete('packages', array('id' => $intPackageId));
    }
function getPackageDetails() {
       /* $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $query = $this->db->get();
*/   
        $query = $this->db->get('packages');
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }

        return $arrData;
    }
}
