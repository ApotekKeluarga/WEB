<?php
	class Dataobat_model extends CI_Model{ 
		public $id ='kd_barang';
		public $table ='tbl_barang';
		function get_dataobat(){
			return $this->db->query('SELECT * FROM tbl_barang ORDER BY kd_barang DESC')->result();
		}
		function get_by_id($id){
			$this -> db -> where($this -> id, $id);
			return $this -> db -> get($this -> table)->row();
		}
		function update($id,$data){
			$this->db->where($this->id, $id);
			$this->db->update($this->table, $data);
		}
		function delete($id){
			$this->db->where($this->id, $id);
			$this->db->delete($this->table);
		}
	}
?>