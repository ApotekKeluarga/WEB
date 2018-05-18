<?php
class News_model extends CI_Model{
function get_news(){
		return $this -> db -> query('SELECT * FROM tbl_news')->result ();
	}
 
}
?>