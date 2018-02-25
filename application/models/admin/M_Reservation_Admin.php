<?php

Class M_Reservation_Admin extends CI_Model{
    public function get_reservation(){
        $this->db->select('reservation.id,reservation.reservation_date,reservation.reservation_code,user.username,rute.rute_from,rute.rute_to,reservation.status,reservation.proof_of_payment');
        $this->db->from('reservation');
        $this->db->join('user','reservation.user_id = user.id');
        $this->db->join('rute','reservation.rute_id = rute.id');
        return $this->db->get()->result_array();
    }
    public function get_reservation_id($id){
        $this->db->select('reservation.id,reservation.reservation_date,reservation.reservation_code,user.username,rute.rute_from,rute.rute_to,reservation.status,reservation.proof_of_payment');
        $this->db->from('reservation');
        $this->db->join('user','reservation.user_id = user.id');
        $this->db->join('rute','reservation.rute_id = rute.id');
        $this->db->where(['reservation.id' => $id]);
        return $this->db->get()->row_array();
    }
    public function update($status,$id){
        $this->db->set('status',$status);
        $this->db->where('id',$id);
        $this->db->update('reservation');
    }
    public function delete($id){
        $this->db->delete('reservation', ['id' => $id]);
    }

}