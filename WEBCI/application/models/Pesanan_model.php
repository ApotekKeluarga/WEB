<?php
class Pesanan_model extends CI_Model{
function get_pesan(){
		return $this -> db -> query('SELECT * FROM tbl_order')->result ();
	}
 
}
?>