<?php
	class Slideshow_model extends CI_Model{ 
		function get_slideshow(){
			return $this->db->query('SELECT * FROM tbl_slideshow')->result();
		}
	}
?>