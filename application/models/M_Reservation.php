<?php

Class M_Reservation extends CI_Model{
    public function get_all_customer($reservation_code){
        $this->db->select('*');
        $this->db->from('reservation');
        $this->db->join('passengers','reservation.id = passengers.reservation_id');
        $this->db->join('customer','customer.id=passengers.customer_id');
        $this->db->where(['reservation.reservation_code'=>$reservation_code]);
        return $this->db->get()->result_array();
    }
    public function get_rute($reservation_code){
        $this->db->select('*');
        $this->db->from('reservation');
        $this->db->join('rute','rute.id = reservation.rute_id');
        $this->db->join('transportation','transportation.id = rute.transportation_id');
        $this->db->where(['reservation.reservation_code' => $reservation_code]);
        return $this->db->get()->result_array();
    }

}
// SELECT * FROM `reservation` join rute on reservation.rute_id = rute.id join transportation on 
// transportation.id = rute.transportation_id WHERE reservation.reservation_code = 'JO17334';