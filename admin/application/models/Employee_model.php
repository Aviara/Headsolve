<?php

class Employee_model extends CI_Model {
    
    function insert_into_db() {
//        display($_POST);
//        exit;
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
       // $arrPostData = $_POST['params'];
        
        $strFirstName           = (true == isset($arrPostData['firstName']) && true == valStr($arrPostData['firstName'])) ? $arrPostData['firstName'] : NULL;
        $strMiddleName          = (true == isset($arrPostData['middleName']) && true == valStr($arrPostData['middleName'])) ? $arrPostData['middleName'] : NULL;
        $strLastName            = (true == isset($arrPostData['lastName']) && true == valStr($arrPostData['lastName'])) ? $arrPostData['lastName'] : NULL;
        $strEmployeeTypeId      = (true == isset($arrPostData['employeeTypeId']) && true == valStr($arrPostData['employeeTypeId'])) ? $arrPostData['employeeTypeId'] : NULL;
        $strresortId            = (true == isset($arrPostData['resortId']) && true == valStr($arrPostData['resortId'])) ? $arrPostData['resortId'] : NULL;
        $strAddressLine1        = (true == isset($arrPostData['addressLine1']) && true == valStr($arrPostData['addressLine1'])) ? $arrPostData['addressLine1'] : NULL;
        $strAge                 = (true == isset($arrPostData['age']) && true == valStr($arrPostData['age'])) ? $arrPostData['age'] : NULL;
        $strBirthDate           = (true == isset($arrPostData['birthDate']) && true == valStr($arrPostData['birthDate'])) ? $arrPostData['birthDate'] : NULL;
        $strGender              = (true == isset($arrPostData['gender']) && true == valStr($arrPostData['gender'])) ? $arrPostData['gender'] : NULL;
        $strEmailId             = (true == isset($arrPostData['emailId']) && true == valStr($arrPostData['emailId'])) ? $arrPostData['emailId'] : NULL;
        $strOfficeEmailId       = (true == isset($arrPostData['officeEmailId']) && true == valStr($arrPostData['officeEmailId'])) ? $arrPostData['officeEmailId'] : NULL;
        $strMobileNo            = (true == isset($arrPostData['mobileNo']) && true == valStr($arrPostData['mobileNo'])) ? $arrPostData['mobileNo'] : NULL;
        $strPassword            = (true == isset($arrPostData['password']) && true == valStr($arrPostData['password'])) ? md5($arrPostData['password']) : NULL;
        $strOldPassword         = (true == isset($arrPostData['oldPassword']) && true == valStr($arrPostData['oldPassword'])) ? md5($arrPostData['oldPassword']) : NULL;
      
       
              $data = array(
                'firstName' => $strFirstName,
                'middleName' => $strMiddleName,
                'lastName' => $strLastName,
                'employeeTypeId' => $strEmployeeTypeId,
                'resortId' => $strresortId,                
                'addressLine1' => $strAddressLine1,
                'age' => $strAge,
                'birthDate' => $strBirthDate,
                'gender' => $strGender,
                'emailId' => $strEmailId,
                'officeEmailId' => $strOfficeEmailId,
                'mobileNo' => $strMobileNo,
                'password' => $strPassword,
                'oldPassword' => $strOldPassword,
                'createdBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'createdOn' => date('Y-m-d h:i:s'),
                'updatedBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updatedOn' => date('Y-m-d h:i:s')
        );
            
        
        $this->db->insert('tbl_employees', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function updateEmployee() {
//         display($_POST);
//        exit;
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        
        $strFirstName           = (true == isset($arrPostData['firstName']) && true == valStr($arrPostData['firstName'])) ? $arrPostData['firstName'] : NULL;
        $strMiddleName          = (true == isset($arrPostData['middleName']) && true == valStr($arrPostData['middleName'])) ? $arrPostData['middleName'] : NULL;
        $strLastName            = (true == isset($arrPostData['lastName']) && true == valStr($arrPostData['lastName'])) ? $arrPostData['lastName'] : NULL;
        $strEmployeeTypeId      = (true == isset($arrPostData['employeeTypeId']) && true == valStr($arrPostData['employeeTypeId'])) ? $arrPostData['employeeTypeId'] : NULL;
        $strresortId            = (true == isset($arrPostData['resortId']) && true == valStr($arrPostData['resortId'])) ? $arrPostData['resortId'] : NULL;
        $strAddressLine1        = (true == isset($arrPostData['addressLine1']) && true == valStr($arrPostData['addressLine1'])) ? $arrPostData['addressLine1'] : NULL;
        $strAge                 = (true == isset($arrPostData['age']) && true == valStr($arrPostData['age'])) ? $arrPostData['age'] : NULL;
        $strBirthDate           = (true == isset($arrPostData['birthDate']) && true == valStr($arrPostData['birthDate'])) ? $arrPostData['birthDate'] : NULL;
        $strGender              = (true == isset($arrPostData['gender']) && true == valStr($arrPostData['gender'])) ? $arrPostData['gender'] : NULL;
        $strEmailId             = (true == isset($arrPostData['emailId']) && true == valStr($arrPostData['emailId'])) ? $arrPostData['emailId'] : NULL;
        $strOfficeEmailId       = (true == isset($arrPostData['officeEmailId']) && true == valStr($arrPostData['officeEmailId'])) ? $arrPostData['officeEmailId'] : NULL;
        $strMobileNo            = (true == isset($arrPostData['mobileNo']) && true == valStr($arrPostData['mobileNo'])) ? $arrPostData['mobileNo'] : NULL;
        $strPassword            = (true == isset($arrPostData['password']) && true == valStr($arrPostData['password'])) ? md5($arrPostData['password']) : NULL;
        $strOldPassword         = (true == isset($arrPostData['oldPassword']) && true == valStr($arrPostData['oldPassword'])) ? md5($arrPostData['oldPassword']) : NULL;
      
       
            $data = array(
               'firstName' => $strFirstName,
                'middleName' => $strMiddleName,
                'lastName' => $strLastName,
                'employeeTypeId' => $strEmployeeTypeId,
                'resortId' => $strresortId,                
                'addressLine1' => $strAddressLine1,
                'age' => $strAge,
                'birthDate' => $strBirthDate,
                'gender' => $strGender,
                'emailId' => $strEmailId,
                'officeEmailId' => $strOfficeEmailId,
                'mobileNo' => $strMobileNo,
                'password' => $strPassword,
                'oldPassword' => $strOldPassword,
                'createdBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'createdOn' => date('Y-m-d h:i:s'),
                'updatedBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updatedOn' => date('Y-m-d h:i:s')
        );
            
        $this->db->where(array('id' => $intId));
        $this->db->update('tbl_employees', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function delete($intMenuid) {
        return $this->db->delete('tbl_employees', array('id' => $intMenuid));
    }
function downloadEmployeeDetails() {
       /* $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $query = $this->db->get();*/
        $query = $this->db->get('tbl_employees');
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }

        return $arrData;
    }
}
