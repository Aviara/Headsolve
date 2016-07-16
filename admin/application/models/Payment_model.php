<?php

class Payment_model extends CI_Model {

    function delete($intPaymentId) {
        return $this->db->delete('payments', array('id' => $intPaymentId));
    }

    function getPaymentDownloadList() {
        $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $query = $this->db->get();

        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }
        return $arrData;
    }

    function addTransaction() {
        $intPaymentId = (true == isset($_POST['paymentId']) && true == valStr($_POST['paymentId'])) ? $_POST['paymentId'] : NULL;
        
        
        if (false == valStr($intPaymentId)) {
            $intPaymentId = (true == isset($_POST['payment']['id'])) ? $_POST['payment']['id'] : $intPaymentId;
        }
        
        $query = $this->db->get_where('payments', array('id' => $intPaymentId));
        $objPayment = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
         
        $arrPostData = (true == isset($_POST['params']) && true == valArr($_POST['params'])) ? $_POST['params'] : NULL;
        
//        $intPaymentAmount = ((true == isset($arrPostData['paid_amount'])) ? $arrPostData['paid_amount'] : (true == isset($_POST['payment_amount'])) ? $_POST['payment_amount'] : NULL);
       $intPaymentAmount = $arrPostData['paid_amount'];
//        print_r($objPayment);
//         exit();
       
        
        if (false == valStr($intPaymentAmount)) {
            log_message('error', 'Paid amount is empty.');
            return false;
        }
        
        if (true == valObj($objPayment, 'stdClass')) {
            $data = array(
                'paid_amount' => ($objPayment->paid_amount + $intPaymentAmount),
                'remaining_amount' => ($objPayment->remaining_amount - $intPaymentAmount),
                'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updated_on' => date('Y-m-d h:i:s')
            );

            $this->db->where('id', $intPaymentId);
            $boolIsValid = $this->db->update('payments', $data);
            
            if (false == $boolIsValid) {
                log_message('error', 'Failed to update payment data.');
                return false;
            }

            $data = array(
                'payment_id' => $objPayment->id,
                'challan_id' => $objPayment->challan_id,
                'client_id' => $objPayment->client_id,
                'billed_amount' => $intPaymentAmount,
                'remaning_amount' => ($objPayment->remaining_amount - $intPaymentAmount),
                'total_amount' => $objPayment->total_amount,
                'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'created_on' => date('Y-m-d h:i:s'),
                'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
                'updated_on' => date('Y-m-d h:i:s')
            );
            
            $boolIsValid &= $this->db->insert('transactions', $data);
            
            if (false == $boolIsValid) {
                log_message('error', 'Failed to insert transations data.');
            }
            
            return (bool) $boolIsValid;
        } else {
            log_message('error', 'Payment details are found in database.');
        }
        
        return false;
    }
    
    function getTransactions($intPaymentId) {
        $this->db->select('t.*');
        $this->db->from('transactions t');
        $this->db->join('payments p', 'p.id = t.payment_id');
        $this->db->where('p.id', $intPaymentId);
        $query = $this->db->get();
        
        $arrobjTransactions = array();
        foreach ($query->result() as $row) {
            $arrobjTransactions[] = $row;
        }
        
        return $arrobjTransactions;
    }

}
