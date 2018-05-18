<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {
function __construct(){
		parent ::__construct();
		$this -> load -> model ('Pesanan_model');
	}
	public function index()
	{
		$data = array('data_pesanan'=> $this -> Pesanan_model -> get_pesan(),);
		$this->load->view('Pesan/Pesanan',$data);
	}
}
