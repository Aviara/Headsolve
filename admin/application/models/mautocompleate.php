<?php
class Mautocompleate extends CI_Model{
    
    public function GetRow($keyword) {        
        $this->db->order_by('id', 'DESC');
        $this->db->like("first_name", $keyword);
        return $this->db->get('clients')->result_array();
    }
}