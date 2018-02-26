<?php

Class M_Rute_Admin extends CI_Model{
    public function get_rute(){
        $this->db->select('rute.id,rute.depart,rute.arrive,rute.rute_from,rute.rute_to,rute.price,rute.class,transportation.code');
        $this->db->from('rute');
        $this->db->join('transportation','rute.transportation_id=transportation.id');
        return $this->db->get()->result_array();
    }
    public function get_rute_id($id){
        $this->db->select('rute.id,rute.depart,rute.arrive,rute.rute_from,rute.rute_to,rute.price,rute.class,transportation.code');
        $this->db->from('rute');
        $this->db->join('transportation','rute.transportation_id=transportation.id');
        $this->db->where(['rute.id' => $id]);
        return $this->db->get()->row_array();
    }

    public function add($data){
        $this->db->insert('rute',$data);
    }

    public function update($data,$id){
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('rute');
    }
    public function delete($id){
        $this->db->delete('rute', ['id' => $id]);
    }
    public function get_transportation(){
        return $this->db->get('transportation')->result_array();
    }

} 