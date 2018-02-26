<?php

Class M_Dashboard extends CI_Model{
    // public function signup_insert($data){
    //     return $this->db->insert('user', $data);
    // }

   public function get_count_table($table){
       return $this->db->count_all($table);
   }
}