<?php
	class Tips_kesehatan extends CI_Model{ 
		function get_tips(){
			return $this->db->query('SELECT * FROM tbl_tips')->result();
		}
	}
?>