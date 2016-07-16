<?php

class Dashbord_model extends CI_Model {
    
    function getCurrentUserStatus($intEmployeeTypeId) {
        $strStatusName = '';
        
        switch($intEmployeeTypeId) {
            case 1:
                $strStatusName = 'Super Admin';
                break;
            
            case 2:
                $strStatusName = 'Admin';
                break;
            case 3:
                $strStatusName = 'Iron You Done';
                break;
            case 4:
                $strStatusName = 'Washing You Done';
                break;
            case 5:
                $strStatusName = 'Packaging You Done';
                break;
            case 6:
                $strStatusName = 'Dispatched You Done';
                break;
            case 7:
                $strStatusName = 'Pickup You Done';
                break;
            case 8:
                $strStatusName = 'Account and Accounting You Done';
                break;
            case 9:
                $strStatusName = 'Delivery You Done';
                break;
            case 10:
                $strStatusName = 'Labelling You Done';
                break;
            
            default:
                $strStatusName = 'Employee You Done';
                break;
        }
        
        return $strStatusName;
    }
}
