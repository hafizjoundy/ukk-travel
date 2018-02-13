<?php

Class M_searchfull extends CI_Model{
    public function search_rute($data){
        $this->db->where($data); //where from $data array
        $query = $this->db->get('rute'); //get db
        return $query->result_array(); //return as array
    }
}