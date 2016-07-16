<?php

class Challan_model extends CI_Model {

    function insertChallan() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();

        $intClientid = (true == isset($_POST['client_id']) && true == valStr($_POST['client_id'])) ? $_POST['client_id'] : NULL;

        $data = array(
            'branch_id' => (true == valStr($this->session->userdata('branch_id'))) ? $this->session->userdata('branch_id') : 1,
            'city_id' => (true == valStr($this->session->userdata('city_id'))) ? $this->session->userdata('city_id') : 1,
            'client_id' => $intClientid, // This need to config with client selected for the challan.
            'employee_id' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'pick_up_date' => date('Y-m-d h:i:s'),
            'delivery_estimate_date' => date('Y-m-d h:i:s', strtotime('+2 day', strtotime(date('Y-m-d h:i:s')))),
            'delivery_date' => date('Y-m-d h:i:s', strtotime('+2 day', strtotime(date('Y-m-d h:i:s')))),
            'special_request' => (true == isset($arrPostData['special_request']) && true == valStr($arrPostData['special_request'])) ? $arrPostData['special_request'] : NULL,
            'washing_status_id' => 1,
            'urgent_required' => (true == isset($arrPostData['urgent_required']) && true == valStr($arrPostData['urgent_required'])) ? $arrPostData['urgent_required'] : NULL,
            'priority' => (true == isset($arrPostData['priority']) && true == valStr($arrPostData['priority'])) ? $arrPostData['priority'] : NULL,
            'delivery_status_id' => 1,
            'delivery_by' => NULL,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );

        $boolIsValid = $this->db->insert('challanes', $data);

        if (false == $boolIsValid) {
            log_message('error', 'Failed to insert data in challanes table. <br/>' . json_encode($data));
            return false;
        }
        
        $intChallanId = $this->db->insert_id();
        
        $data = array(
            'challan_id' => $intChallanId,
            'delivery_status_id' => 1,
            'old_delivery_status_id' => 0,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
        );
        
        $this->db->insert('challan_status_logs', $data);
        
        $boolIsValid &= $this->db->insert('challan_status_logs', $data);

        /*         * *****************************************************************************
         * ************************* Payment Handling ************************************
         * ***************************************************************************** */

        $data = array(
            'city_id' => (true == valStr($this->session->userdata('city_id'))) ? $this->session->userdata('city_id') : 1,
            'branch_id' => (true == valStr($this->session->userdata('branch_id'))) ? $this->session->userdata('branch_id') : 1,
            'challan_id' => $intChallanId,
            'client_id' => $intClientid,
            'employee_id' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'store_id' => 1,
            'total_amount' => (true == isset($_POST['total_amount'])) ? $_POST['total_amount'] : 0,
            'paid_amount' => (true == isset($_POST['paid_amount'])) ? $_POST['paid_amount'] : 0,
            'remaining_amount' => (true == isset($_POST['total_amount'])) ? $_POST['total_amount'] : 0,
            'total_items' => (true == isset($_POST['total_items'])) ? $_POST['total_items'] : 0,
            'is_completed' => 0,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );

        $boolIsValid &= $this->db->insert('payments', $data);
        $intPaymentId = $this->db->insert_id();

        $arrobjClothTypes = $arrobjPackages = array();

        if (true == $boolIsValid && true == valArr($arrPostData)) {
            foreach ($arrPostData as $postData) {
                $intClothTypeId = (true == isset($postData['item_id']) && true == valStr($postData['item_id'])) ? $postData['item_id'] : NULL;
                $intPackageId = (true == isset($_POST['packageId']) && true == valStr($_POST['packageId'])) ? $_POST['packageId'] : NULL;
               
                if (false == valStr($intClothTypeId) && false == valStr($intPackageId)) {
                    continue;
                }

                $query = $this->db->get_where('cloth_types', array('id' => $intClothTypeId));
                $objClothtype = (true == valArr($query->result())) ? current($query->result()) : NULL;

                $query = $this->db->get_where('packages', array('id' => $intPackageId));
                $objPackage = (true == valArr($query->result())) ? current($query->result()) : NULL;

                if (true == valObj($objPackage, 'stdClass')) {
                    $arrobjPackages[$objPackage->id] = $objPackage;
                }


                if (true == valObj($objClothtype, 'stdClass')) {
                    $arrobjClothTypes[$objClothtype->id] = $objClothtype;

                    $clothInfoData = array(
                        'challan_id' => $intChallanId,
                        'cloth_type_id' => $objClothtype->id,
                        'total_item_count' => $postData['quntity'],
                        'total_kg' => (true == isset($_POST['total_items']) && true == valStr($_POST['total_items'])) ? $_POST['total_items'] : 0,
                        'package_id' => (true == valObj($objPackage, 'stdClass')) ? $objPackage->id : 3, //Default package ID will be 3 platnum
                        'is_iron' => (true == isset($postData['is_iron']) && 'true' == $postData['is_iron'] || 1 == $postData['is_iron']) ? 1 : 0,
                        'washing_powder_type_id' => 1,
                        'washing_status_id' => 1,
                        'urgent_required' => 0,
                        'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                        'created_on' => date('Y-m-d h:i:s'),
                        'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                        'updated_on' => date('Y-m-d h:i:s')
                    );

                    $boolIsValid = $this->db->insert('cloth_info', $clothInfoData);
                }
            }
        } else {
            log_message('error', 'Failed to insert or posted data not in proper format. <br/>' . json_encode($arrPostData));
            return false;
        }
        
        /*********************************************************************
        ****************** Package Details and logs **************************
        *********************************************************************/
        if (true == $boolIsValid) {
            $_POST['challan_id'] = $intChallanId;
            $this->load->model('PackagesCycle_model');
            $this->PackagesCycle_model->insertPackageDetails();
        }
        else{
       print('this is wrong');
       exit;
        }
        
        return true;
    }

    function updateChallan() {
        $arrPostData = (true == isset($_POST['params']) && true == valArr($_POST['params'])) ? $_POST['params'] : array();

        $intChallanId = NULL;
        $arrintClothInfo = array();

        $intChallanId = (true == isset($_POST['challan_id']) && true == valStr($_POST['challan_id'])) ? $_POST['challan_id'] : NULL;
        $intPaymentId = (true == isset($_POST['payment_id']) && true == valStr($_POST['payment_id'])) ? $_POST['payment_id'] : NULL;

        $query = $this->db->get_where('challanes', array('id' => $intChallanId));
        $objChallan = (true == valArr($query->result())) ? current($query->result()) : NULL;

        if (false == valObj($objChallan, 'stdClass')) {
            log_message('error', 'Fialed to load challan for challan Id: ' . $intChallanId);
            return false;
        }

        $intClientid = 1;

        $data = array(
            'client_id' => $objChallan->client_id, // This need to config with client selected for the challan.
            'employee_id' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'pick_up_date' => date('Y-m-d h:i:s'),
            'delivery_estimate_date' => date('Y-m-d h:i:s', strtotime('+7 day', strtotime(date('Y-m-d h:i:s')))),
            'delivery_date' => date('Y-m-d h:i:s', strtotime('+7 day', strtotime(date('Y-m-d h:i:s')))),
            'special_request' => (true == isset($arrPostData['special_request']) && true == valStr($arrPostData['special_request'])) ? $arrPostData['special_request'] : $objChallan->special_request,
            'washing_status_id' => 1,
            'urgent_required' => (true == isset($arrPostData['urgent_required']) && true == valStr($arrPostData['urgent_required'])) ? $arrPostData['urgent_required'] : $objChallan->urgent_required,
            'priority' => (true == isset($arrPostData['priority']) && true == valStr($arrPostData['priority'])) ? $arrPostData['priority'] : $objChallan->priority,
            'delivery_status_id' => 1,
            'delivery_by' => NULL,
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );

        $this->db->where('id', $intChallanId);
        $boolIsValid = $this->db->update('challanes', $data);

        if (false == $boolIsValid) {
            log_message('error', 'Failed to insert data in challanes table. <br/>' . json_encode($data));
            return false;
        }

        /*         * *****************************************************************************
         * ************************* Payment Handling ************************************
         * ***************************************************************************** */

        $query = $this->db->get_where('payments', array('id' => $intPaymentId));
        $objPayment = (true == valArr($query->result())) ? current($query->result()) : NULL;

        if (false == valObj($objPayment, 'stdClass')) {
            log_message('error', 'Fialed to load challan for challan Id: ' . $intChallanId);

            $query = $this->db->get_where('payments', array('challan_id' => $objChallan->id), 1);
            $objPayment = (true == valArr($query->result())) ? current($query->result()) : NULL;
        }

        if (true == valObj($objPayment, 'stdClass')) {

            $data = array(
                'challan_id' => $objChallan->id,
                'client_id' => $objChallan->client_id,
                'employee_id' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'store_id' => 1,
                'total_amount' => (true == isset($_POST['total_amount'])) ? $_POST['total_amount'] : $objPayment->total_amount,
                'paid_amount' => (true == isset($_POST['paid_amount'])) ? $_POST['paid_amount'] : $objPayment->paid_amount,
                'remaining_amount' => (true == isset($arrPostData['remaining_amount'])) ? $arrPostData['remaining_amount'] : $objPayment->remaining_amount,
                'total_items' => (true == isset($_POST['total_items'])) ? $_POST['total_items'] : $objPayment->total_items,
                'is_completed' => 0,
                'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updated_on' => date('Y-m-d h:i:s')
            );

            $this->db->where('id', $intPaymentId);
            $boolIsValid &= $this->db->update('payments', $data);
        }

        $arrobjClothTypes = $arrobjPackages = array();

        $query = $this->db->get_where('cloth_info', array('challan_id' => $intChallanId));
        $arrObjClothInfo = $query->result();

        $arrintClothInfoDelete = array();
        if (true == valArr($arrObjClothInfo)) {
            foreach ($arrObjClothInfo as $objCloth) {
                $arrintClothInfoDelete[$objCloth->id] = $objCloth->id;
            }
        }

        if (true == $boolIsValid && true == valArr($arrPostData)) {
            foreach ($arrPostData as $postData) {
                $intClothTypeId = (true == isset($postData['item_id']) && true == valStr($postData['item_id'])) ? $postData['item_id'] : NULL;
                $intPackageId = (true == isset($_POST['packageId']) && true == valStr($_POST['packageId'])) ? $_POST['packageId'] : NULL;

                if (false == valStr($intClothTypeId) && false == valStr($intPackageId)) {
                    continue;
                }

                $query = $this->db->get_where('cloth_types', array('id' => $intClothTypeId));
                $objClothtype = (true == valArr($query->result())) ? current($query->result()) : NULL;

                $query = $this->db->get_where('packages', array('id' => $intPackageId));
                $objPackage = (true == valArr($query->result())) ? current($query->result()) : NULL;


                if (false == valObj($objPackage, 'stdClass') && false == valObj($objClothtype, 'stdClass')) {
                    continue;
                }

                $clothInfoData = array(
                    'challan_id' => $objChallan->id,
                    'cloth_type_id' => $objClothtype->id,
                    'total_item_count' => $postData['quntity'],
                    'total_kg' => (true == isset($_POST['total_items']) && true == valStr($_POST['total_items'])) ? $_POST['total_items'] : 0,
                    'package_id' => (true == valObj($objPackage, 'stdClass')) ? $objPackage->id : 3, //Default package ID will be 3 platnum
                    'is_iron' => (true == isset($postData['is_iron']) && 'true' == $postData['is_iron'] || 1 == $postData['is_iron']) ? 1 : 0,
                    'washing_powder_type_id' => 1,
                    'washing_status_id' => 1,
                    'urgent_required' => 0,
                    'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                    'updated_on' => date('Y-m-d h:i:s')
                );

                $intClothTypeId = (true == isset($postData['cloth_info_id']) && true == valStr($postData['cloth_info_id'])) ? $postData['cloth_info_id'] : NULL;

                if (true == valStr($intClothTypeId)) {
                    $this->db->where('id', $intClothTypeId);
                    $boolIsValid = $this->db->update('cloth_info', $clothInfoData);
                } else {
                    $boolIsValid = $this->db->insert('cloth_info', $clothInfoData);
                }

                if (true == $boolIsValid) {
                    unset($arrintClothInfoDelete[$intClothTypeId]);
                }
            }
        }

        if (true == valArr($arrintClothInfoDelete)) {
            $this->db->where_in('id', $arrintClothInfoDelete);
            $boolIsValid = $this->db->delete('cloth_info');
        }

        if (true == $boolIsValid) {
            log_message('info', 'Remove cloth type and details are deleted from system. ids :: ' . json_encode($arrintClothInfoDelete));
        }

        return true;
    }

    function insertCloethInfo() {
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();

        $arrobjClothTypes = $arrobjPackages = array();

        if (true == valArr($arrPostData)) {
            foreach ($arrPostData as $postData) {
                $intClothTypeId = (true == isset($postData['item_id']) && true == valStr($postData['item_id'])) ? $postData['item_id'] : NULL;
                $intPackageId = (true == isset($postData['package']) && true == valStr($postData['package'])) ? $postData['package'] : NULL;

                if (false == valStr($intClothTypeId) && false == valStr($intPackageId)) {
                    continue;
                }

                $query = $this->db->get_where('cloth_types', array('id' => $intClothTypeId));
                $objClothtype = (true == valArr($query->result())) ? current($query->result()) : NULL;

                if (true == valObj($objClothtype, 'stdClass')) {
                    $arrobjClothTypes[$objClothtype->id] = $objClothtype;
                }

                $query = $this->db->get_where('packages', array('id' => $intPackageId));
                $objPackage = (true == valArr($query->result())) ? current($query->result()) : NULL;

                if (true == valObj($objPackage, 'stdClass')) {
                    $arrobjPackages[$objPackage->id] = $objPackage;
                }
            }
        }

        $strClothTypeId = (true == isset($arrPostData['cloth_type_id']) && true == valStr($arrPostData['cloth_type_id'])) ? $arrPostData['cloth_type_id'] : NULL;

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

    function delete($intChallanId) {
        return $this->db->delete('cloth_info', array('id' => $intChallanId));
    }

    function getChallanDetails() {
        $this->db->select('c.*, '
                . 'CONCAT(ci.first_name, \' \', ci.last_name) as client_name,'
                . 'CONCAT(e.first_name, \' \', e.last_name) as employee_name,'
                . 'd.name as delivery_status');
        $this->db->from('challanes c');
        $this->db->join('clients ci', 'ci.id = c.client_id');
        $this->db->join('employees e', 'e.id = c.employee_id');
        $this->db->join('delivery_status d', 'd.id = c.delivery_status_id');
        $query = $this->db->get();

        $arrobjChallanes = array();
        foreach ($query->result() as $row) {
            $arrobjChallanes[] = $row;
        }
        return $arrobjChallanes;
    }

    function updateChallanStatusAndLog() {
        $intChallanId = (true == isset($_POST['challan_id']) && true == valStr($_POST['challan_id'])) ? $_POST['challan_id'] : NULL;
        $boolIsStatus = (true == isset($_POST['is_start']) && true == valStr($_POST['is_start']) && 'true' == $_POST['is_start']) ? true : false;
        
        $intEmployeeTypeId = $this->session->userdata('user')->employee_type_id;
        
        $objDeliveryStatus = NULL;
        if (true == valStr($intEmployeeTypeId)) {
            $query = $this->db->get_where('delivery_status', array('employee_type_id' => $intEmployeeTypeId));
            $objDeliveryStatus = (true == valArr($query->result())) ? current($query->result()) : NULL;
        }
        
        $query = $this->db->get_where('challanes', array('id' => $intChallanId));
        $objChallan = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        if (false == valObj($objChallan, 'stdClass')) {
            log_message('error', 'Fialed to load challan details.');
            return false;
        }
        
        if (false == valObj($objDeliveryStatus, 'stdClass')) {
            log_message('error', 'Fialed to load Delivery status details.');
            return false;
        }
        
        $data = array(
            'delivery_status_id' => $objDeliveryStatus->id,
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s'),
        );
        
        $this->db->where('id', $intChallanId);
        $boolIsValid = $this->db->update('challanes', $data);
        
        if (true == $boolIsStatus) {
            $data = array(
                'completed_on' => date('Y-m-d h:i:s'),
                'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updated_on' => date('Y-m-d h:i:s'),
            );

            $this->db->where('challan_id', $intChallanId);
            $boolIsValid &= $this->db->update('challan_time_logs', $data);
        } else {
            $data = array(
                'challan_id' => $objChallan->id,
                'delivery_status_id' => $objDeliveryStatus->id,
                'old_delivery_status_id' => $objChallan->delivery_status_id,
                'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'created_on' => date('Y-m-d h:i:s'),
            );

            $boolIsValid &= $this->db->insert('challan_status_logs', $data);
            //$boolIsValid &= $this->db->update('challan_status_logs', $data);
            
            $data = array(
                'challan_id' => $objChallan->id,
                'employee_id' => $this->session->userdata('id'),
                'start_on' => date('Y-m-d h:i:s'),
                'employee_type_id' => $intEmployeeTypeId,
                'delivery_status_id' => $objDeliveryStatus->id,
                'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'created_on' => date('Y-m-d h:i:s'),
                'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updated_on' => date('Y-m-d h:i:s'),
            );

            $boolIsValid &= $this->db->insert('challan_time_logs', $data);
        }
        
        if (false == $boolIsValid) {
            log_message('error', 'Filed to update challan or challan status log for status.');
            return false;
        }
        
        return true;
    }
    
    function insertChallanTimeLog() {
        display( $_POST );
        exit;
    }

}
