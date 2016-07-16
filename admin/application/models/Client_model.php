<?php

class Client_model extends CI_Model {

    function insert_into_db() {
//        display($this->session->userdata('city_id'));
//        exit;
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();

        $strFirstName = (true == isset($arrPostData['first_name']) && true == valStr($arrPostData['first_name'])) ? $arrPostData['first_name'] : NULL;
        $strMiddleName = (true == isset($arrPostData['middle_name']) && true == valStr($arrPostData['middle_name'])) ? $arrPostData['middle_name'] : NULL;
        $strLastName = (true == isset($arrPostData['last_name']) && true == valStr($arrPostData['last_name'])) ? $arrPostData['last_name'] : NULL;
        $strMobileNo = (true == isset($arrPostData['mobile_no']) && true == valStr($arrPostData['mobile_no'])) ? $arrPostData['mobile_no'] : NULL;
        $strEmailId = (true == isset($arrPostData['email_id']) && true == valStr($arrPostData['email_id'])) ? $arrPostData['email_id'] : NULL;
        $strHomeNo = (true == isset($arrPostData['home_no']) && true == valStr($arrPostData['home_no'])) ? $arrPostData['home_no'] : NULL;
        $strAddressLine1 = (true == isset($arrPostData['address_line1']) && true == valStr($arrPostData['address_line1'])) ? $arrPostData['address_line1'] : NULL;
        $strAddressLine2 = (true == isset($arrPostData['address_line2']) && true == valStr($arrPostData['address_line2'])) ? $arrPostData['address_line2'] : NULL;
        $strLocation = (true == isset($arrPostData['location']) && true == valStr($arrPostData['location'])) ? $arrPostData['location'] : NULL;
        $strArea = (true == isset($arrPostData['area']) && true == valStr($arrPostData['area'])) ? $arrPostData['area'] : NULL;
        $strPinCode = (true == isset($arrPostData['pin_code']) && true == valStr($arrPostData['pin_code'])) ? $arrPostData['pin_code'] : NULL;
        $strcustomer_type_id = (true == isset($arrPostData['customer_type_id']) && true == valStr($arrPostData['customer_type_id'])) ? $arrPostData['customer_type_id'] : NULL;
        //$intCityId = (true == isset($arrPostData['city_id']) && true == valStr($arrPostData['city_id'])) ? $arrPostData['city_id'] : NULL;
        $intClientPackageId = (true == isset($arrPostData['packages']) && true == valStr($arrPostData['packages'])) ? $arrPostData['packages'] : NULL;
       // $intNoOfCycles = (true == isset($arrPostData['no_of_cycles']) && true == valStr($arrPostData['no_of_cycles'])) ? $arrPostData['no_of_cycles'] : NULL;

//        
//        $query = $this->db->get_where('packages', array('id' => $intClientPackageId));
//        $intNoOfCycles = array();
//        foreach ($query->result() as $row) {
//            $intNoOfCycles[$row->id] = $row;
//        }
//         $Jsondata = json_encode($intNoOfCycles);
//        // $CycleNo = $Jsondata->cycle;
//         display($Jsondata.cycle);
//         exit;
         
         $query = $this->db->get_where('packages', array('id' => $intClientPackageId));
         $intNoOfCycles = array();
         $objPackage = (true == valArr($query->result())) ? current($query->result()) : NULL;
         //echo json_encode($objPackage);
         $intCycle_number = $objPackage->cycle;
         
        
        
        $data = array(
            'branch_id' => (true == valStr($this->session->userdata('branch_id'))) ? $this->session->userdata('branch_id') : 1,
            'first_name' => $strFirstName,
            'last_name' => $strLastName,
            'middle_name' => $strMiddleName,
            'mobile_no' => $strMobileNo,
            'email_id' => $strEmailId,
            'home_no' => $strHomeNo,
            'address_line1' => $strAddressLine1,
            'address_line2' => $strAddressLine2,
            'location' => $strLocation,
            'area' => $strArea,
            'pin_code' => $strPinCode,
            'customer_type_id' => $strcustomer_type_id,
            'city_id' => (true == valStr($this->session->userdata('city_id'))) ? $this->session->userdata('city_id') : 1,
            'package_id' => $intClientPackageId,
            'no_of_cycles' => $intCycle_number,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        $this->db->insert('clients', $data);
        $intClientId = $this->db->insert_id();

        /**************** Selecting Last inserted record form clients ********************
         ****************** for inserting into "package_cycle_details" table**************** */

        //$total_cycles = $objClients->no_of_cycles;

        $data = array(
            'branch_id' => (true == valStr($this->session->userdata('branch_id'))) ? $this->session->userdata('branch_id') : 1,
            'city_id' => (true == valStr($this->session->userdata('city_id'))) ? $this->session->userdata('city_id') : 1,
            'package_id' => $intClientPackageId,
            'client_id' => $intClientId,
            'total_cycles' => $intCycle_number,
            'remaining_cycles' => $intCycle_number,
            'store_id' => '',
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        $this->db->insert('package_cycle_details', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function updateClient() {

        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();

        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;
//display($arrPostData);
//exit;
        if (false == valStr($intId)) {
            $this->session->flashdata(array('message' => 'Client Id not an numbric value.'));
            return false;
        }

        $query = $this->db->get_where('clients', array('id' => $intId));
        $objClient = (true == valArr($query->result())) ? current($query->result()) : NULL;

        if (false == valObj($objClient, 'stdClass')) {
            $this->session->flashdata(array('message' => 'Client details are not found in DB.'));
            return false;
        }

        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();

        $strFirstName = (true == isset($arrPostData['first_name']) && true == valStr($arrPostData['first_name'])) ? $arrPostData['first_name'] : $objClient->first_name;
        $strMiddleName = (true == isset($arrPostData['middle_name']) && true == valStr($arrPostData['middle_name'])) ? $arrPostData['middle_name'] : $objClient->middle_name;
        $strLastName = (true == isset($arrPostData['last_name']) && true == valStr($arrPostData['last_name'])) ? $arrPostData['last_name'] : $objClient->last_name;
        $strMobileNo = (true == isset($arrPostData['mobile_no']) && true == valStr($arrPostData['mobile_no'])) ? $arrPostData['mobile_no'] : $objClient->mobile_no;
        $strEmailId = (true == isset($arrPostData['email_id']) && true == valStr($arrPostData['email_id'])) ? $arrPostData['email_id'] : $objClient->email_id;
        $strHomeNo = (true == isset($arrPostData['home_no']) && true == valStr($arrPostData['home_no'])) ? $arrPostData['home_no'] : $objClient->home_no;
        $strAddressLine1 = (true == isset($arrPostData['address_line1']) && true == valStr($arrPostData['address_line1'])) ? $arrPostData['address_line1'] : $objClient->address_line1;
        $strAddressLine2 = (true == isset($arrPostData['address_line2']) && true == valStr($arrPostData['address_line2'])) ? $arrPostData['address_line2'] : $objClient->address_line2;
        $strLocation = (true == isset($arrPostData['location']) && true == valStr($arrPostData['location'])) ? $arrPostData['location'] : $objClient->location;
        $strArea = (true == isset($arrPostData['area']) && true == valStr($arrPostData['area'])) ? $arrPostData['area'] : $objClient->area;
        $strPinCode = (true == isset($arrPostData['pin_code']) && true == valStr($arrPostData['pin_code'])) ? $arrPostData['pin_code'] : $objClient->pin_code;
        $strcustomer_type_id = (true == isset($arrPostData['customer_type_id']) && true == valStr($arrPostData['customer_type_id'])) ? $arrPostData['customer_type_id'] : $objClient->customer_type_id;
        $CityId = (true == isset($arrPostData['city_id']) && true == valStr($arrPostData['city_id'])) ? $arrPostData['city_id'] : $objClient->city_id;
        $intClientPackageId = (true == isset($arrPostData['packages']) && true == valStr($arrPostData['packages'])) ? $arrPostData['packages'] : $objClient->packages;
      //  $strNoOfCycles = (true == isset($arrPostData['no_of_cycles']) && true == valStr($arrPostData['no_of_cycles'])) ? $arrPostData['no_of_cycles'] : $objClient->no_of_cycles;

        
         $query = $this->db->get_where('packages', array('id' => $intClientPackageId));
         $intNoOfCycles = array();
         $objPackage = (true == valArr($query->result())) ? current($query->result()) : NULL;
         //echo json_encode($objPackage);
         $intCycle_number = $objPackage->cycle;
        
        
        $data = array(
            'branch_id' => (true == valStr($this->session->userdata('branch_id'))) ? $this->session->userdata('branch_id') : 1,
            'first_name' => $strFirstName,
            'last_name' => $strLastName,
            'middle_name' => $strMiddleName,
            'mobile_no' => $strMobileNo,
            'email_id' => $strEmailId,
            'home_no' => $strHomeNo,
            'address_line1' => $strAddressLine1,
            'address_line2' => $strAddressLine2,
            'location' => $strLocation,
            'area' => $strArea,
            'pin_code' => $strPinCode,
            'customer_type_id' => $strcustomer_type_id,
            'city_id' => $CityId,
            'package_id' => $intClientPackageId,
            'no_of_cycles' => $intCycle_number,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );

        $this->db->where(array('id' => $intId));
        $this->db->update('clients', $data);

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
