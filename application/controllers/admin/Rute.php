<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rute extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Rute_Admin');
	}

	public function index()
	{	
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

		$rute = $this->M_Rute_Admin->get_rute();
		$transportation = $this->M_Rute_Admin->get_transportation();
		$data['rute'] = $rute;
		$data['transportation'] = $transportation;
		$data['nav'] = 'rute';
		// var_dump($data);
		// die;
        $this->load->view('admin/template/V_Header',$data);
		$this->load->view('admin/V_rute',$data);
		
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'admin/rute/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>
		<script>
		$( function() {
			$(".datepicker").datetimepicker({format : "YYYY-MM-DD HH:mm:ss"});
		  } );
		</script>';
		$data['script'] = $script;
		$this->load->view('admin/template/V_Footer',$data);
    }
    
    public function add(){

		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}
        $depart = $this->input->post('depart');
        $arrive = $this->input->post('arrive');
        $rutefrom = $this->input->post('rutefrom');
        $ruteto = $this->input->post('ruteto');
        $price = $this->input->post('price');
        $class = $this->input->post('class');
        $transportation = $this->input->post('transportation');

        $data = [
            'depart' => $depart,
            'arrive' => $arrive,
            'rute_from' => $rutefrom,
            'rute_to' => $ruteto,
            'price' => $price,
            'class' => $class,
            'transportation_id' => $transportation,
		];
		
		// var_dump($data);
		// die;
        
        $this->M_Rute_Admin->add($data);

        redirect(base_url().'admin/rute');
    }

	public function viewedit($id = null){

		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}
		if($id == null){
			redirect(base_url().'admin/rute');
		}

		$transportation = $this->M_Rute_Admin->get_transportation();
		$data['transportation'] = $transportation;
		$data['rute'] = $this->M_Rute_Admin->get_rute_id($id);

		$this->load->view('admin/V_Rute_Viewedit',$data);
		
	}

	public function update(){

		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}
		$id = $this->input->post('id');
		$depart = $this->input->post('depart');
        $arrive = $this->input->post('arrive');
        $rutefrom = $this->input->post('rutefrom');
        $ruteto = $this->input->post('ruteto');
        $price = $this->input->post('price');
        $class = $this->input->post('class');
        $transportation = $this->input->post('transportation');

        $data = [
            'depart' => $depart,
            'arrive' => $arrive,
            'rute_from' => $rutefrom,
            'rute_to' => $ruteto,
            'price' => $price,
            'class' => $class,
            'transportation_id' => $transportation,
		];

		$this->M_Rute_Admin->update($data,$id);
		redirect(base_url().'admin/rute');
	}

	public function delete($id = null){

		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}
		if($id == null){
			redirect(base_url().'admin/rute');
		}
		$this->M_Rute_Admin->delete($id);	
		redirect(base_url().'admin/rute');			
	}
}
