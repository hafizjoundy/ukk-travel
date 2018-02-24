<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Reservation');
    }

    public function index(){
        if($this->session->userdata('user') == false){
            redirect(base_url());
        }

        $user_id = $this->session->userdata('user')['id'];

        $reservation = $this->M_Reservation->get_reservation($user_id);

        $data['reservation'] = $reservation;

        $this->load->view('template/V_Header');
        $this->load->view('V_Reservation',$data);
        $this->load->view('template/V_Footer');
    }

    public function status()
    {
        // $user_id =
        $reservation_code = $_GET['reservation_code'];

        $data['customer'] = $this->M_Reservation->get_all_customer($reservation_code);
        $data['rute'] = $this->M_Reservation->get_rute($reservation_code);
        $data['proof_of_payment'] = $this->M_Reservation->check_proof_of_payment($reservation_code)['proof_of_payment'];
        // var_dump($data['proof_of_payment']);
        // die;
        if (count($data['customer']) or count($data['customer']) == 0)

        $this->load->view('template/V_Header');
        $this->load->view('V_Reservation_status', $data);
        $this->load->view('template/V_Footer');
    }
    public function proof_of_payment()
    {
        // var_dump($this->session->userdata());
        // die;        
        $rand_basename = explode('.',basename($_FILES["image"]["name"]));
        $rand_basename = bin2hex(openssl_random_pseudo_bytes(32)).'.'.end($rand_basename);

        $target_dir = "./_assets/proof_of_payment/";
        $target_file = $target_dir . $rand_basename;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            $this->M_Reservation->insert_proof_of_payment($this->input->post('reservation_code'),$rand_basename);
            redirect(base_url().'reservation/status/?reservation_code='.$this->input->post('reservation_code'));
              
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}