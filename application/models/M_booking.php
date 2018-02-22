<?php

Class M_Booking extends CI_Model{

    public function get_all_rute(){
        $this->db->select('rute_from,rute_to');
        $this->db->from('rute');
        $this->db->distinct();
        return $this->db->get()->result_array();
    }

    public function search_rute($data){
        $this->db->select('rute.id,rute.depart,rute.arrive,rute.rute_from,rute.rute_to,rute.price,rute.class,transportation.code');
        $this->db->from('rute');
        $this->db->join('transportation','rute.transportation_id = transportation.id');
        $this->db->where($data); //where from $data array
        $query = $this->db->get(); //get db
        return $query->result_array(); //return as array
    }
    
    public function get_rute($id){
        $this->db->select('*');
        $this->db->from('rute');
        $this->db->join('transportation','rute.transportation_id = transportation.id');
        $this->db->where('rute.id ='.$id);
        return $this->db->get()->result_array();
    }
    // seat
    public function get_seat_booked($id){
        $this->db->select('passengers.seat');
        $this->db->from('rute');
        $this->db->join('reservation','rute.id=reservation.rute_id');
        $this->db->join('passengers','reservation.id=passengers.reservation_id');
        $this->db->where(['rute.id'=>$id]);
        return $this->db->get()->result_array();

        // SELECT passengers.seat FROM rute JOIN reservation ON rute.id = reservation.rute_id JOIN passengers on passengers.reservation_id = reservation.id WHERE rute.id = 2
    }
    public function get_seat_total($id){
        $this->db->select('transportation.seat_qty');
        $this->db->from('rute');
        $this->db->join('transportation', 'rute.transportation_id=transportation.id');
        $this->db->where(['rute.id'=>$id]);
        return $this->db->get()->result_array();
        // SELECT transportation.seat_qty FROM `rute` JOIN transportation ON rute.transportation_id = transportation.id WHERE rute.id = 2;
    }
    // end seat

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

    public function check_code_reservation($code){
        $this->db->where(['reservation_code' => $code]); 
        $query = $this->db->get('reservation');
        return $query->result_array(); //return as array
    }   

    public function insert_passengers($data){
        return $this->db->insert('passengers',$data);
    }
}