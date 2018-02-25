<?php

Class M_Customer_Admin extends CI_Model{
    public function get_customer(){
        return $this->db->get('customer')->result_array();
    }
    public function get_customer_id($id){
        $this->db->where(['id' => $id]);
        return $this->db->get('customer')->row_array();
    }

    public function add($data){
        $this->db->insert('customer',$data);
    }

    public function update($data,$id){
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('customer');
    }
    public function delete($id){
        $this->db->delete('customer', ['id' => $id]);
    }

}