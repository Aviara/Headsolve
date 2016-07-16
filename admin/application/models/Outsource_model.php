<?php

class Outsource_model extends CI_Model {

    function insert_into_db() {
       
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
//        display("this is in insert".$arrPostData);
//        exit;
        $intBranchId  = (true == isset($arrPostData['to_branch_id']) && true == valStr($arrPostData['to_branch_id'])) ? $arrPostData['to_branch_id'] : NULL;
        $intToCompany = (true == isset($arrPostData['to_company_id']) && true == valStr($arrPostData['to_company_id'])) ? $arrPostData['to_company_id'] : NULL;
        $intChallanId = (true == isset($arrPostData['challan_id']) && true == valStr($arrPostData['challan_id'])) ? $arrPostData['challan_id'] : NULL;
        $intClient_id = (true == isset($arrPostData['client_id']) && true == valStr($arrPostData['client_id'])) ? $arrPostData['client_id'] : NULL;
        $intDate      = (true == isset($arrPostData['date']) && true == valStr($arrPostData['date'])) ? $arrPostData['date'] : NULL;
        $intTime      = (true == isset($arrPostData['time']) && true == valStr($arrPostData['time'])) ? $arrPostData['time'] : NULL;
        //$intEmployeeId 
        //$BRANCH ID
    
        $data = array(
            'to_branch_id' => $intBranchId,
            'city_id' => (true == valStr($this->session->userdata('city_id'))) ? $this->session->userdata('city_id') : 1,
            'to_company_id' => $intToCompany,
            'challan_id' => $intChallanId,
            'client_id' => $intClient_id,
            'date' => $intDate,
            'time2' => $intTime,
            'employee_id' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'branch_id' =>   (true == valStr($this->session->userdata('branch_id'))) ? $this->session->userdata('branch_id') : 1,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        $this->db->insert('outsource', $data);
        // return ($this->db->affected_rows() != 1) ? false : true;
        retutn : true;
      }
    function updateClient() {  
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
//         display("this is in update".$arrPostData);
//        exit;
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;

        $intBranchId  = (true == isset($arrPostData['to_branch_id']) && true == valStr($arrPostData['to_branch_id'])) ? $arrPostData['to_branch_id'] : NULL;
        $intToCompany = (true == isset($arrPostData['to_company_id']) && true == valStr($arrPostData['to_company_id'])) ? $arrPostData['to_company_id'] : NULL;
        $intChallanId = (true == isset($arrPostData['challan_id']) && true == valStr($arrPostData['challan_id'])) ? $arrPostData['challan_id'] : NULL;
        $intClient_id = (true == isset($arrPostData['client_id']) && true == valStr($arrPostData['client_id'])) ? $arrPostData['client_id'] : NULL;
        $intDate      = (true == isset($arrPostData['date']) && true == valStr($arrPostData['date'])) ? $arrPostData['date'] : NULL;
        $intTime      = (true == isset($arrPostData['time']) && true == valStr($arrPostData['time'])) ? $arrPostData['time'] : NULL;
        //$intEmployeeId 
        //$BRANCH ID
    
        $data = array(
            'city_id' => (true == valStr($this->session->userdata('city_id'))) ? $this->session->userdata('city_id') : 1,
            'to_branch_id' => $intBranchId,
            'to_company_id' => $intToCompany,
            'challan_id' => $intChallanId,
            'client_id' => $intClient_id,
            'date' => $intDate,
            'time2' => $intTime,
            'employee_id' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'branch_id' =>   (true == valStr($this->session->userdata('branch_id'))) ? $this->session->userdata('branch_id') : 1,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
      
        $this->db->where(array('id' => $intId));
        $this->db->update('outsource', $data);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function delete($intClientid) {
        return $this->db->delete('clients', array('id' => $intClientid));
    }

    function getClientDetails() {
        /* $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
          $this->db->from('payments p');
          $this->db->join('challanes c', 'c.id = p.challan_id');
          $this->db->join('clients cl', 'cl.id = p.client_id');
          $this->db->join('employees e', 'e.id = p.employee_id');
          $query = $this->db->get();
         */
        $query = $this->db->get('clients');
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        return $arrData;
        //echo json_encode($arrData);
        exit;



//        $query = $this->db->get_where('clients', array('id' => $id));
//        $arrData = array();
//        foreach ($query->result() as $row) {
//            $arrData[$row->id] = $row;
//        }
//
//        return $arrData;
    }

}
