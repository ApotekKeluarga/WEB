<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('Slideshow_model');
	}

	public function index()
	{
		$data = array(
			'data_slideshow' => $this-> Slideshow_model ->get_slideshow(),
		);
		$this->load->view('Slide/Slideshow', $data);
	}
	function tambah_slideshow(){
		$this->load->view('Slide/Tambah_slideshow');
	}
}
