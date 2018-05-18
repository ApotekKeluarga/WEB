<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Tips_kesehatan');
	}

	public function index()
	{
		$data = array(
			'data_tips' => $this-> Tips_kesehatan ->get_tips(),
		);
		$this->load->view('Tips_kesehatan/Tips', $data);
	}

	function tambah_tips(){
		$this->load->view('Tips_kesehatan/Tambah_tips');
	}
}
