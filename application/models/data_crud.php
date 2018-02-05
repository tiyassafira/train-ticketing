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

 		function tampil_maskapai($table,$where){
			return $this->db->get_where($table, $where);
		}

		function join_rutemaskapai(){
			$this->db->select("rute.id,rute.depart_at,rute.rute_from,rute.rute_to,rute.price,transportation.description");
  			$this->db->from('rute');
  			$this->db->join('transportation', 'transportation.id = rute.transportationid');
  			$query = $this->db->get();
  			return $query->result();
		}

 		function input_datatransport($data,$table){
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
 
 	} 
?>