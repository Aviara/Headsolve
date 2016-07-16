<?php

class ClothType_model extends CI_Model {
    
    function insert_into_db() {
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $strName            = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : NULL;
        $strDescription     = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : NULL;
        $strMergerType      = (true == isset($arrPostData['merger_type']) && true == valStr($arrPostData['merger_type'])) ? $arrPostData['merger_type'] : NULL;
        $strIronPrice       = (true == isset($arrPostData['iron_price']) && true == valStr($arrPostData['iron_price'])) ? $arrPostData['iron_price'] : NULL;
        $strGoldPerKgPrice          = (true == isset($arrPostData['gold_per_kg_price']) && true == valStr($arrPostData['gold_per_kg_price'])) ? $arrPostData['gold_per_kg_price'] : NULL;
        $strGoldPerItemPrice        = (true == isset($arrPostData['gold_per_item_price']) && true == valStr($arrPostData['gold_per_item_price'])) ? $arrPostData['gold_per_item_price'] : NULL;
        $strSilverPerKgPrice        = (true == isset($arrPostData['silver_per_kg_price']) && true == valStr($arrPostData['silver_per_kg_price'])) ? $arrPostData['silver_per_kg_price'] : NULL;
        $strSilverPerItemPrice      = (true == isset($arrPostData['silver_per_item_price']) && true == valStr($arrPostData['silver_per_item_price'])) ? $arrPostData['silver_per_item_price'] : NULL;
        $strPlatinumPerKgPrice      = (true == isset($arrPostData['platinum_per_kg_price']) && true == valStr($arrPostData['platinum_per_kg_price'])) ? $arrPostData['platinum_per_kg_price'] : NULL;
        $strPlatinumPerItemPrice    = (true == isset($arrPostData['platinum_per_item_price']) && true == valStr($arrPostData['platinum_per_item_price'])) ? $arrPostData['platinum_per_item_price'] : NULL;
        
        $strPackageId = NULL;
        
        $data = array(
            'name' => $strName,
            'description'   => $strDescription,
            'merger_type'   => $strMergerType,
            'iron_price'    => $strIronPrice,
            'gold_per_kg_price' => $strGoldPerKgPrice,
            'gold_per_item_price' => $strGoldPerItemPrice,
            'silver_per_kg_price' => $strSilverPerKgPrice,
            'silver_per_item_price' => $strSilverPerItemPrice,
            'platinum_per_kg_price' => $strPlatinumPerKgPrice,
            'platinum_per_item_price' => $strPlatinumPerItemPrice,
            'package_id' => $strPackageId,
            'created_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'created_on' => date('Y-m-d h:i:s'),
            'updated_by' => (true == valStr($this->session->userdata('id'))) ? $this->session->userdata('id') : 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->insert('cloth_types', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    public function updateClothType() {
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $intId = (true == isset($arrPostData['id']) && true == valStr($arrPostData['id'])) ? $arrPostData['id'] : NULL;
        
        if (false == valStr($intId)) {
            $this->session->flashdata(array('message' => 'Cloth Type Id not an numbric value.'));
            return false;
        }
        
        $query = $this->db->get_where('cloth_types', array('id' => $intId));
        $objClothType = (true == valArr($query->result())) ? current($query->result()) : NULL;
        
        if (false == valObj($objClothType, 'stdClass')) {
            $this->session->flashdata(array('message' => 'Cloth Type details are not found in DB.'));
            return false;
        }
        
        $arrPostData = (true == isset($_POST['params'])) ? $_POST['params'] : array();
        
        $strName            = (true == isset($arrPostData['name']) && true == valStr($arrPostData['name'])) ? $arrPostData['name'] : $objClothType->name;
        $strDescription     = (true == isset($arrPostData['description']) && true == valStr($arrPostData['description'])) ? $arrPostData['description'] : $objClothType->description;
        $strMergerType      = (true == isset($arrPostData['merger_type']) && true == valStr($arrPostData['merger_type'])) ? $arrPostData['merger_type'] : $objClothType->merger_type;
        $strIronPrice       = (true == isset($arrPostData['iron_price']) && true == valStr($arrPostData['iron_price'])) ? $arrPostData['iron_price'] : NULL;
        $strGoldPerKgPrice          = (true == isset($arrPostData['gold_per_kg_price']) && true == valStr($arrPostData['gold_per_kg_price'])) ? $arrPostData['gold_per_kg_price'] : $objClothType->gold_per_kg_price;
        $strGoldPerItemPrice        = (true == isset($arrPostData['gold_per_item_price']) && true == valStr($arrPostData['gold_per_item_price'])) ? $arrPostData['gold_per_item_price'] : $objClothType->gold_per_item_price;
        $strSilverPerKgPrice        = (true == isset($arrPostData['silver_per_kg_price']) && true == valStr($arrPostData['silver_per_kg_price'])) ? $arrPostData['silver_per_kg_price'] : $objClothType->silver_per_kg_price;
        $strSilverPerItemPrice      = (true == isset($arrPostData['silver_per_item_price']) && true == valStr($arrPostData['silver_per_item_price'])) ? $arrPostData['silver_per_item_price'] : $objClothType->silver_per_item_price;
        $strPlatinumPerKgPrice      = (true == isset($arrPostData['platinum_per_kg_price']) && true == valStr($arrPostData['platinum_per_kg_price'])) ? $arrPostData['platinum_per_kg_price'] : $objClothType->platinum_per_kg_price;
        $strPlatinumPerItemPrice    = (true == isset($arrPostData['platinum_per_item_price']) && true == valStr($arrPostData['platinum_per_item_price'])) ? $arrPostData['platinum_per_item_price'] : $objClothType->platinum_per_item_price;
        
        $strPackageId = NULL;
        
        $data = array(
            'name' => $strName,
            'description'   => $strDescription,
            'merger_type'   => $strMergerType,
            'iron_price'    => $strIronPrice,
            'gold_per_kg_price' => $strGoldPerKgPrice,
            'gold_per_item_price' => $strGoldPerItemPrice,
            'silver_per_kg_price' => $strSilverPerKgPrice,
            'silver_per_item_price' => $strSilverPerItemPrice,
            'Platinum_per_kg_price' => $strPlatinumPerKgPrice,
            'Platinum_per_item_price' => $strPlatinumPerItemPrice,
            'package_id' => $strPackageId,
            'updated_by' => 1,
            'updated_on' => date('Y-m-d h:i:s')
        );
        
        $this->db->where(array('id' => $intId));
        $this->db->update('cloth_types', $data);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function delete($intClothTypeid) {
        return $this->db->delete('cloth_types', array('id' => $intClothTypeid));
    }
function getClothTypeDetails() {
       /* $this->db->select('p.*, CONCAT(cl.first_name, \' \', cl.last_name) as client_name, CONCAT(e.first_name, \' \', e.last_name) as employee_name');
        $this->db->from('payments p');
        $this->db->join('challanes c', 'c.id = p.challan_id');
        $this->db->join('clients cl', 'cl.id = p.client_id');
        $this->db->join('employees e', 'e.id = p.employee_id');
        $query = $this->db->get();
*/   
        $query = $this->db->get('cloth_types');
        $arrData = array();
        foreach ($query->result() as $row) {
            $arrData[$row->id] = $row;
        }

        return $arrData;
    }
}
