<?php 
 	class Data_crud extends CI_Model {
 	
 		function tampil_datarute(){
  			return $this->db->get('rute');
 		}
 
 		function input_datarute($data,$table){
  			$this->db->insert($table,$data);
 		} 

 		function cek_login($table,$where){
			return $this->db->get_where($table, $where);
		}

		function hapus_datarute($where,$table){
 			$this->db->where($where);
 			$this->db->delete($table);
		}

		function edit_datarute($where,$table){  
 			return $this->db->get_where($table,$where);
		}

		function update_datarute($where,$data,$table){
  			$this->db->where($where);
  			$this->db->update($table,$data);
 		}

 		function tampil_datatransportation(){
 			return $this->db->get('transportation');
 		}

 		function tampil_databandara(){
 			return $this->db->get('airport');
 		}

 		function tampil_rute($from,$to,$date){
			$this->db->select("rute.id,rute.depart_at,rute.rute_from,rute.rute_to,rute.price,transportation.description");
  			$this->db->from('rute');
  			$this->db->join('transportation', 'transportation.id = rute.transportationid');
  			$this->db->where('rute.rute_from', $from);
			$this->db->where('rute.rute_to', $to);
			$this->db->where('rute.date', $date);
  			$query = $this->db->get();
  			return $query->result();
		}

		function join_rutemaskapai(){
			$this->db->select("rute.id,rute.date,rute.depart_at,rute.rute_from,rute.rute_to,rute.price,transportation.description");
  			$this->db->from('rute');
  			$this->db->join('transportation', 'transportation.id = rute.transportationid');
  			$query = $this->db->get();
  			return $query->result();
		}

		function join_clientreserve($where){
			$this->db->select("rute.id,rute.date,rute.depart_at,rute.rute_from,rute.rute_to,rute.price,transportation.description,transportation.code");
  			$this->db->from('rute');
  			$this->db->join('transportation', 'transportation.id = rute.transportationid');
  			$this->db->where('rute.id', $where);
  			$query = $this->db->get();
  			return $query->result();
		}

 		function input_datatransport($data,$table){
  			$this->db->insert($table,$data);
 		}

 		function input_datareservation($data,$table){
  			$this->db->insert($table,$data);
 		}

 		function input_databandara($data,$table){
  			$this->db->insert($table,$data);
 		}

 		function hapus_datatransportation($where,$table){
 			$this->db->where($where);
 			$this->db->delete($table);
		}

		function edit_datatransportation($where,$table){  
 			return $this->db->get_where($table,$where);
		}

		function update_datatransportation($where,$data,$table){
  			$this->db->where($where);
  			$this->db->update($table,$data);
 		}

 		function seat($id){
 			$this->db->select('transportation.seat_qty');
 			$this->db->from('rute,transportation');
 			$this->db->where('rute.transportationid = transportation.id');
 			$this->db->where('rute.id', $id);
 			return $this->db->get();
 		}
 
 		function filterseat($id){
 			$this->db->select('seat');
 			$this->db->where('reservation.rute_id',$id);
 			return $this->db->get('reservation');
 		}
 	} 
?>