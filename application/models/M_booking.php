<?php

Class M_booking extends CI_Model{
    public function get_rute($id){
        $this->db->select('*');
        $this->db->from('rute');
        $this->db->join('transportation','rute.transportation_id = transportation.id');
        $this->db->where('rute.id ='.$id);
        return $this->db->get()->result_array();
    }
}