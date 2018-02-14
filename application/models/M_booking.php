<?php

Class M_booking extends CI_Model{
    public function search_rute($data){
        $this->db->where($data); //where from $data array
        $query = $this->db->get('rute'); //get db
        return $query->result_array(); //return as array
    }
    
    public function get_rute($id){
        $this->db->select('*');
        $this->db->from('rute');
        $this->db->join('transportation','rute.transportation_id = transportation.id');
        $this->db->where('rute.id ='.$id);
        return $this->db->get()->result_array();
    }

    public function insert_customer($data){
        $this->db->insert('customer',$data);
        return $this->db->insert_id();
    }

    public function get_customer($id){
        $this->db->select('name');
        $this->db->where(['id'=>$id]);
        $query = $this->db->get('customer'); //get db
        return $query->result_array(); //return as array
    }

    public function insert_reservation($data){
        $this->db->insert('reservation',$data);
        return $this->db->insert_id();
    }

    public function insert_passengers($data){
        return $this->db->insert('passengers',$data);
    }
}