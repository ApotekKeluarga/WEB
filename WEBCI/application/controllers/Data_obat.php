<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_obat extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Dataobat_model');
	}

	public function index()
	{

		$data = array(
			'data_obat' => $this-> Dataobat_model ->get_dataobat(),
		);
		$this->load->view('Datamaster/Data_obat', $data);
	}
	function tambah_obat(){
		$this->load->view('Datamaster/Tambah_obat');
	}
}
