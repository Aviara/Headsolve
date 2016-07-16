<?php

class Packagescycle_model extends CI_Model {
print('i am in PackagesCycle_model class');
       exit;
    function insertPackageDetails() {

        $intPackageId = (true == isset($_POST['packageId']) && true == valStr($_POST['packageId'])) ? $_POST['packageId'] : NULL;
        $intClientId = (true == isset($_POST['client_id']) && true == valStr($_POST['client_id'])) ? $_POST['client_id'] : NULL;

        $this->db->select('*');
        $this->db->from('package_cycle_details pcd');
        $this->db->where('pcd.package_id', $intPackageId);
        $this->db->where('pcd.client_id', $intClientId);
        $query = $this->db->get();

        $objPackageCycleDetail = (true == valArr($query->result())) ? current($query->result()) : NULL;

        if (false == valObj($objPackageCycleDetail, 'stdClass')) {
            log_message('Error', 'Failed to load package cycle details.');
            return false;
        }
        
        $objPackageCycleDetail->remaining_cycles -= 1;

        $data = array(
            'remaining_cycles' => $objPackageCycleDetail->remaining_cycles,
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );

        $this->db->where('id', $objPackageCycleDetail->id);
        $this->db->update('package_cycle_details', $data);

        /*         * *************************************************************************
         * ************************ Package Cycle Logs *******************************
         * ************************************************************************* */
        
        $intChallanId = (true == isset($_POST['challan_id'])) ? $_POST['challan_id'] : NULL;
        
        $data = array(
            'package_id' => $intPackageId,
            'challan_id' => $intChallanId,
            'employee_id' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'client_id' => $intClientId,
            'total_cycles' => $objPackageCycleDetail->total_cycles,
            'used_cycles' => ($objPackageCycleDetail->total_cycles - $objPackageCycleDetail->remaining_cycles),
            'remaining_cycles' => $objPackageCycleDetail->remaining_cycles,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );

        $intPackageCycleLogId = $this->db->insert('package_cycle_logs', $data);
        
        return true;
    }

    function delete($intMenuid) {
        return $this->db->delete('package_cycle_details', array('id' => $intMenuid));
    }

}
