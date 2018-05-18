<?php
	class Kategori_model extends CI_Model{ 
		function get_kategori(){
			return $this->db->query('SELECT * FROM kategori')->result();
		}
	}
?>