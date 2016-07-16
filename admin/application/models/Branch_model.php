<?php

class Branch_model extends CI_Model {
    
    function insert_into_db() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $strName                = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : NULL;
        $strDescription         = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : NULL;
        $strLocation            = (true == isset($arrPostData['location']) && true == valStr($arrPostData['location'])) ? $arrPostData['location'] : NULL;
        $strAddressLine1        = (true == isset($arrPostData['address_line1']) && true == valStr($arrPostData['address_line1'])) ? $arrPostData['address_line1'] : NULL;
        $strAddressLine2        = (true == isset($arrPostData['address_line2']) && true == valStr($arrPostData['address_line2'])) ? $arrPostData['address_line2'] : NULL;
        $intCityId              = (true == isset($arrPostData['city_id']) && true == valStr($arrPostData['city_id'])) ? $arrPostData['city_id'] : NULL;
        $strBranchCode          = (true == isset($arrPostData['branch_code']) && true == valStr($arrPostData['branch_code'])) ? $arrPostData['branch_code'] : NULL;
        $strAvailableMachine    = (true == isset($arrPostData['available_machine']) && true == valStr($arrPostData['available_machine'])) ? $arrPostData['available_machine'] : NULL;
        $strEmployeeCount       = (true == isset($arrPostData['employee_count']) && true == valStr($arrPostData['employee_count'])) ? $arrPostData['employee_count'] : NULL;
        $strDeliveryBoyCount    = (true == isset($arrPostData['delivery_boy_count']) && true == valStr($arrPostData['delivery_boy_count'])) ? $arrPostData['delivery_boy_count'] : NULL;
        $strManagerId           = (true == isset($arrPostData['manager_id']) && true == valStr($arrPostData['manager_id'])) ? $arrPostData['manager_id'] : NULL;
        
        $data = array(
            'name' => $strName,
            'city_id' => $intCityId,
            'description' => $strDescription,
            'location' => $strLocation,
            'address_line1' => $strAddressLine1,
            'address_line2' => $strAddressLine2,
            'branch_code' => $strBranchCode,
            'available_machine' => $strAvailableMachine,
            'employee_count' => $strEmployeeCount,
            'delivery_boy_count' => $strDeliveryBoyCount,
            'manager_id' => $strManagerId,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->insert('branches', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function updateBranch() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;
        
        if (false == valStr($intId)) {
            $this->session->flashdata(array('message' => 'Branch Id not an numbric value.'));
            return false;
        }
        
        $query = $this->db->get_where('branches', array('id' => $intId));
        $objBranch = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        if (false == valObj($objBranch, 'stdClass')) {
            $this->session->flashdata(array('message' => 'Branch details are not found in DB.'));
            return false;
        }
        
       $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $strName                = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : $objBranch->name;
        $strDescription         = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : $objBranch->description;
        $strLocation            = (true == isset($arrPostData['location']) && true == valStr($arrPostData['location'])) ? $arrPostData['location'] : $objBranch->location;
        $strAddressLine1        = (true == isset($arrPostData['address_line1']) && true == valStr($arrPostData['address_line1'])) ? $arrPostData['address_line1'] : $objBranch->address_line1;
        $strAddressLine2        = (true == isset($arrPostData['address_line2']) && true == valStr($arrPostData['address_line2'])) ? $arrPostData['address_line2'] : $objBranch->address_line2;
        $strBranchCode          = (true == isset($arrPostData['branch_code']) && true == valStr($arrPostData['branch_code'])) ? $arrPostData['branch_code'] : $objBranch->branch_code;
        $strAvailableMachine    = (true == isset($arrPostData['available_machine']) && true == valStr($arrPostData['available_machine'])) ? $arrPostData['available_machine'] : $objBranch->available_machine;
        $strEmployeeCount       = (true == isset($arrPostData['employee_count']) && true == valStr($arrPostData['employee_count'])) ? $arrPostData['employee_count'] : $objBranch->employee_count;
        $strDeliveryBoyCount    = (true == isset($arrPostData['delivery_boy_count']) && true == valStr($arrPostData['delivery_boy_count'])) ? $arrPostData['delivery_boy_count'] : $objBranch->delivery_boy_count;
        $strManagerId           = (true == isset($arrPostData['manager_id']) && true == valStr($arrPostData['manager_id'])) ? $arrPostData['manager_id'] : $objBranch->manager_id;
        
        $data = array(
            'name' => $strName,
            'city_id' => (true == valStr($this->session->userdata('city_id'))) ? $this->session->userdata('city_id') : 1,
            'description' => $strDescription,
            'location' => $strLocation,
            'address_line1' => $strAddressLine1,
            'address_line2' => $strAddressLine2,
            'branch_code' => $strBranchCode,
            'available_machine' => $strAvailableMachine,
            'employee_count' => $strEmployeeCount,
            'delivery_boy_count' => $strDeliveryBoyCount,
            'manager_id' => $strManagerId,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->where(array('id' => $intId));
        $this->db->update('branches', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function delete($intBranchId) {
        return $this->db->delete('branches', array('id' => $intBranchId));
    }
function getBranchDetails() {
        $objUser = $this->session->userdata('user');
        $intCityId = $objUser->city_id;
        $intBranchId = $objUser->branch_id;
        
        $this->db->select('b.*, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('branches b');
        $this->db->join('employees e', 'e.id = b.manager_id', 'left');
         if (1 == $objUser->employee_type_id) {
            
        } else {
            $this->db->where('o.city_id', $intCityId);
            $this->db->where('o.branch_id', $intBranchId);
        }
        $query = $this->db->get();

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        return $arrData;
    }
}
