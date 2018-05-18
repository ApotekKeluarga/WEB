<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller {
function __construct(){
		parent ::__construct();
		$this -> load -> model ('News_model');
	}
	public function index()
	{
		$data = array('data_news'=> $this -> News_model -> get_news(),);
		$this->load->view('News/News',$data);
	}

	function tambah_berita(){
		$this->load->view('News/Tambah_news');
	}
}
