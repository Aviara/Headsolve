<?php

class ClothInfo_model extends CI_Model {
    
    function insert_into_db() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        $strClothTypeId               = (true == isset($arrPostData['cloth_type_id']) && true == valStr($arrPostData['cloth_type_id'])) ? $arrPostData['cloth_type_id'] : NULL;
        $strTotalItemCount            = (true == isset($arrPostData['total_item_count']) && true == valStr($arrPostData['total_item_count'])) ? $arrPostData['total_item_count'] : NULL;
        $strTotalKg                   = (true == isset($arrPostData['total_kg']) && true == valStr($arrPostData['total_kg'])) ? $arrPostData['total_kg'] : NULL;
        $strEmployeeId                = (true == isset($arrPostData['employee_id']) && true == valStr($arrPostData['employee_id'])) ? $arrPostData['employee_id'] : NULL;
        $strPackageId                 = (true == isset($arrPostData['package_id']) && true == valStr($arrPostData['package_id'])) ? $arrPostData['package_id'] : NULL;
        $strSpecialRequest            = (true == isset($arrPostData['special_request']) && true == valStr($arrPostData['special_request'])) ? $arrPostData['special_request'] : NULL;
        $strWashingPowerType          = (true == isset($arrPostData['washing_power_type']) && true == valStr($arrPostData['washing_power_type'])) ? $arrPostData['washing_power_type'] : NULL;
        $strNode                      = (true == isset($arrPostData['node']) && true == valStr($arrPostData['node'])) ? $arrPostData['node'] : NULL;
        $strWashingStatus             = (true == isset($arrPostData['washing_status']) && true == valStr($arrPostData['washing_status'])) ? $arrPostData['washing_status'] : NULL;
        $stUrgentRequired             = (true == isset($arrPostData['urgent_required']) && true == valStr($arrPostData['urgent_required'])) ? $arrPostData['urgent_required'] : NULL;
        $strDeliveryDate              = (true == isset($arrPostData['delivery_date']) && true == valStr($arrPostData['delivery_date'])) ? $arrPostData['delivery_date'] : NULL;
        $strPriority                  = (true == isset($arrPostData['priority']) && true == valStr($arrPostData['priority'])) ? $arrPostData['priority'] : NULL;
        $strDeliveryStatusId          = (true == isset($arrPostData['delivery_status_id']) && true == valStr($arrPostData['delivery_status_id'])) ? $arrPostData['delivery_status_id'] : NULL;
        $strDeliveryBy                = (true == isset($arrPostData['delivery_by']) && true == valStr($arrPostData['delivery_by'])) ? $arrPostData['delivery_by'] : NULL;
       
        $data = array(
            'cloth_type_id' => $strClothTypeId,
            'total_item_count' => $strTotalItemCount,
            'total_kg' => $strTotalKg,
            'employee_id' => $strEmployeeId,
            'package_id' => $strPackageId,
            'special_request' => $strSpecialRequest,
            'washing_power_type' => $strWashingPowerType,
            'node' => $strNode,
            'washing_status' => $strWashingStatus,
            'urgent_required' => $stUrgentRequired,
            'delivery_date' => $strDeliveryDate,
            'priority' => $strPriority,
            'delivery_status_id' => $strDeliveryStatusId,
            'delivery_by' => $strDeliveryBy,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->insert('cloth_info', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
     function updateClothInfo() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;
        
        if (false == valStr($intId)) {
            $this->session->flashdata(array('message' => 'Cloth info not an numbric value.'));
            return false;
        }
        
        $query = $this->db->get_where('cloth_info', array('id' => $intId));
        $objClothInfo = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        if (false == valObj($objClothInfo, 'stdClass')) {
            $this->session->flashdata(array('message' => 'Cloth info details are not found in DB.'));
            return false;
        }
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $strClothTypeId               = (true == isset($arrPostData['cloth_type_id']) && true == valStr($arrPostData['cloth_type_id'])) ? $arrPostData['cloth_type_id'] : $objClothInfo->cloth_type_id;
        $strTotalItemCount            = (true == isset($arrPostData['total_item_count']) && true == valStr($arrPostData['total_item_count'])) ? $arrPostData['total_item_count'] : $objClothInfo->total_item_count;
        $strTotalKg                   = (true == isset($arrPostData['total_kg']) && true == valStr($arrPostData['total_kg'])) ? $arrPostData['total_kg'] : $objClothInfo->total_kg;
        $strEmployeeId                = (true == isset($arrPostData['employee_id']) && true == valStr($arrPostData['employee_id'])) ? $arrPostData['employee_id'] : $objClothInfo->employee_id;
        $strPackageId                 = (true == isset($arrPostData['package_id']) && true == valStr($arrPostData['package_id'])) ? $arrPostData['package_id'] : $objClothInfo->package_id;
        $strSpecialRequest            = (true == isset($arrPostData['special_request']) && true == valStr($arrPostData['special_request'])) ? $arrPostData['special_request'] : $objClothInfo->special_request;
        $strWashingPowerType          = (true == isset($arrPostData['washing_power_type']) && true == valStr($arrPostData['washing_power_type'])) ? $arrPostData['washing_power_type'] : $objClothInfo->washing_power_type;
        $strNode                      = (true == isset($arrPostData['node']) && true == valStr($arrPostData['node'])) ? $arrPostData['node'] : $objClothInfo->node;
        $strWashingStatus             = (true == isset($arrPostData['washing_status']) && true == valStr($arrPostData['washing_status'])) ? $arrPostData['washing_status'] : $objClothInfo->washing_status;
        $stUrgentRequired             = (true == isset($arrPostData['urgent_required']) && true == valStr($arrPostData['urgent_required'])) ? $arrPostData['urgent_required'] : $objClothInfo->urgent_required;
        $strDeliveryDate              = (true == isset($arrPostData['delivery_date']) && true == valStr($arrPostData['delivery_date'])) ? $arrPostData['delivery_date'] : $objClothInfo->delivery_date;
        $strPriority                  = (true == isset($arrPostData['priority']) && true == valStr($arrPostData['priority'])) ? $arrPostData['priority'] : $objClothInfo->priority;
        $strDeliveryStatusId          = (true == isset($arrPostData['delivery_status_id']) && true == valStr($arrPostData['delivery_status_id'])) ? $arrPostData['delivery_status_id'] : $objClothInfo->delivery_status_id;
        $strDeliveryBy                = (true == isset($arrPostData['delivery_by']) && true == valStr($arrPostData['delivery_by'])) ? $arrPostData['delivery_by'] : $objClothInfo->delivery_by;
       

        $data = array(
            'cloth_type_id' => $strClothTypeId,
            'total_item_count' => $strTotalItemCount,
            'total_kg' => $strTotalKg,
            'employee_id' => $strEmployeeId,
            'package_id' => $strPackageId,
            'special_request' => $strSpecialRequest,
            'washing_power_type' => $strWashingPowerType,
            'node' => $strNode,
            'washing_status' => $strWashingStatus,
            'urgent_required' => $stUrgentRequired,
            'delivery_date' => $strDeliveryDate,
            'priority' => $strPriority,
            'delivery_status_id' => $strDeliveryStatusId,
            'delivery_by' => $strDeliveryBy,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->where(array('id' => $intId));
        $this->db->update('cloth_info', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function delete($intClothInfoId) {
        return $this->db->delete('cloth_info', array('id' => $intClothInfoId));
    }
/*function getClothDetails() {
       /* $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $query = $this->db->get();
*//*
        $query = $this->db->get_where('cloth_info', array('id' => $id));
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }

        return $arrData;
    }*/
}
