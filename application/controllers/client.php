<?php 
/**
 * 
 */
 class Client extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('data_crud');
 	}

 	function index(){
 		$data['bandara'] = $this->data_crud->tampil_databandara()->result();
 		$this->load->view('v_client',$data);
 	}

 	function carirute(){
 		$from = $this->input->post('from');
 		$to = $this->input->post('to');
 		// $depart = $this->input->post('depart');
 		// $seat_qty = $this->input->post('seat_qty');
 		// $data['data2'] = array();
		$query = $this->data_crud->tampil_rute($from, $to);
		$data['rute'] = null;
		if($query){
			$data['rute'] = $query;
		}
		$this->load->view('v_client_rutes',$data);
		
 	}
 } 
 ?>