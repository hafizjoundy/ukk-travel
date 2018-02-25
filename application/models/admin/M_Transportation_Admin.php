<?php

Class M_Transportation_Admin extends CI_Model{
    public function get_transportation(){
        return $this->db->get('transportation')->result_array();
    }
    public function get_transportation_id($id){
        $this->db->where(['id' => $id]);
        return $this->db->get('transportation')->row_array();
    }

    public function add($data){
        $this->db->insert('transportation',$data);
    }

    public function update($data,$id){
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('transportation');
    }
    public function delete($id){
        $this->db->delete('transportation', ['id' => $id]);
    }

}