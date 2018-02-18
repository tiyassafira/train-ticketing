<?php 

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

 	public function carirute(){
 		$from = $this->input->get('from');
 		$to = $this->input->get('to');
 		$date = $this->input->get('date');

		$query = $this->data_crud->tampil_rute($from, $to);
		$data['rute'] = $query;
		$data['date'] = $date;
		$this->load->view('v_client_rutes',$data);
 	}

 	public function reservation($id){
 		$where =  $id;
 		$query = $this->data_crud->join_clientreserve($where);
  		$data['reserve'] = null;
  		if($query){
   			$data['reserve'] =  $query;
  		}
 		$this->load->view('v_client_reserv',$data);
 	}

 	function pesan(){
 		$rute_id = $this->input->post('rute_id');
 		$namapemesan = $this->input->post('namapemesan');
 		$alamatpemesan = $this->input->post('alamatpemesan');
    	$emailpemesan = $this->input->post('emailpemesan');
 		$notelpemesan = $this->input->post('notelpemesan');
 		$jenkelpenumpang = $this->input->post('jenkelpenumpang');
 		$namapenumpang = $this->input->post('namapenumpang');

 		$data = array(
        	'rute_id' => $rute_id,
  			'namapemesan' => $namapemesan,
  			'alamatpemesan' => $alamatpemesan,
  			'emailpemesan' => $emailpemesan,
  			'notelpemesan' => $notelpemesan,
  			'jenkelpenumpang' => $jenkelpenumpang,
  			'namapenumpang' => $namapenumpang,
  			'status' => 'Menunggu Pembayaran'
 		);

 		$this->data_crud->input_datareservation($data,'reservation');
 		redirect('admin/datarute');
	}
 } 
 ?>