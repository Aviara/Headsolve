    <?php

    class EmployeeType_model extends CI_Model {

        function insert_into_db() {

            $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();

            $strName                = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : NULL;
            $strDescription         = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : NULL;

            $data = array(
                'name' => $strName,
                'description' => $strDescription,
                'createdBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'createdOn' => date('Y-m-d h:i:s'),
                'updatedBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updatedOn' => date('Y-m-d h:i:s')
            );

            $this->db->insert('tbl_employee_types', $data);

            return ($this->db->affected_rows() != 1) ? false : true;
        }
    function updateEmployeeType() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;
        
        if (false == valStr($intId)) {
            $this->session->flashdata(array('message' => 'Employee tyee Id not an numbric value.'));
            return false;
        }
        
        $query = $this->db->get_where('tbl_employee_types', array('id' => $intId));
        $objEmployeeType = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        if (false == valObj($objEmployeeType, 'stdClass')) {
            $this->session->flashdata(array('message' => 'Employee tyee details are not found in DB.'));
            return false;
        }
        
       $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();

            $strName                = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : $objEmployeeType->name;
            $strDescription         = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : $objEmployeeType->description;

            $data = array(
                'name' => $strName,
                'description' => $strDescription,
                'updatedBy' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updatedOn' => date('Y-m-d h:i:s')
            );
        
        $this->db->where(array('id' => $intId));
        $this->db->update('tbl_employee_types', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
        function delete($intEmployeeTypeId) {
            return $this->db->delete('tbl_employee_types', array('id' => $intEmployeeTypeId));
        }
   function getEmployeeTypeDetails() {
       /* $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $query = $this->db->get();
*/   
//        $query = $this->db->get_where('employee_types', array('id' => $id));
//        $arrData = array();
//        foreach ($query->result() as $row) {
//            $arrData[$row->id] = $row;
//        }
//
//        return $arrData;
        $query = $this->db->get('employee_types');
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        return $arrData;
      
    }
    }
