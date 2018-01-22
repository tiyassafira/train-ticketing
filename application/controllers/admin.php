<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('data_crud');
    	$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

	}

	function index(){
		$this->load->view('v_admin');
	}

	function rute(){
		$data['rute'] = $this->data_crud->tampil_datarute()->result();
		$this->load->view('v_rute',$data);
	}

	function hapus_rute($id){
		$where = array('id' => $id);
  		$this->data_crud->hapus_datarute($where,'rute');
  		redirect('admin/rute');
	}

	function proses_tambah(){
  		$depart = $this->input->post('depart');
  		$rute_from = $this->input->post('rutefrom');
  		$rute_to = $this->input->post('ruteto');
  		$price = $this->input->post('price');
 

  		$data = array(
   		'depart_at' => $depart,
   		'rute_from' => $rute_from,
   		'rute_to' => $rute_to,
   		'price' => $price
   		);

  		$this->data_crud->input_datarute($data,'rute');
  		redirect('admin/rute');
 	}

 	function edit_rute($id){
  		$where = array('id' => $id);
  		$data['rute'] = $this->data_crud->edit_datarute($where,'rute')->result();
  		$this->load->view('v_rute_edit',$data);
 	}

 	function update_rute(){
 		$id = $this->input->post('id');
 		$depart = $this->input->post('depart');
 		$rute_from = $this->input->post('rutefrom');
 		$rute_to = $this->input->post('ruteto');
 		$price = $this->input->post('price');  

 		$data = array(
  			'depart_at' => $depart,
  			'rute_from' => $rute_from,
  			'rute_to' => $rute_to,
  			'price' => $price
 		);

 		$where = array(
  			'id' => $id
 		);

 		$this->data_crud->update_datarute($where,$data,'rute');
 		redirect('admin/rute');
	}
}