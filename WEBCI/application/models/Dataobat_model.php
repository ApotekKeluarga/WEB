<?php
	class Dataobat_model extends CI_Model{ 
		function get_dataobat(){
			return $this->db->query('SELECT * FROM tbl_barang ORDER BY kd_barang DESC')->result();
		}
	}
?>