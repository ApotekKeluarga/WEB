<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Kategori_model');
	}

	public function index()
	{
		$data = array(
			'kategori' => $this-> Kategori_model ->get_kategori(),
		);
		$this->load->view('Datamaster/Kategori', $data);
	}
}
