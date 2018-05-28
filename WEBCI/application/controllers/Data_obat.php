<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_obat extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Dataobat_model');
		$this->load->model('Kategori_model');
		$this -> model = $this -> Dataobat_model;
		$this -> load -> database();
		$this -> load -> helper('url');
	}

	public function index()
	{

		$data = array(
			'data_obat' => $this-> Dataobat_model ->get_dataobat(),
		);
		$this->load->view('Datamaster/Data_obat', $data);
	}
	function tambah_obat(){
		$data = array(
			'data_kategori' => $this-> Kategori_model ->get_kategori(),
		);
		$this->load->view('Datamaster/tambah_obat', $data);
	}
	public function create (){
		if(isset($_POST['btnSubmit'])){
        	$config = array('upload_path' => './assets/web/base/images/',
        					'allowed_types' => 'gif|jpg|png'
        					);
        	$this -> load -> library ('upload',$config);
        	if ($this->upload->do_upload('img'))
    		{
        		$upload_data = $this -> upload -> data ();
        		$nm_barang = $this -> input -> post ('nm_barang');
        		$kd_kategori = $this -> input -> post ('kd_kategori');
        		$komposisi = $this -> input -> post ('komposisi');
        		$indikasi = $this -> input -> post ('indikasi');
        		$dosis = $this -> input -> post ('dosis');
        		$penyajian = $this -> input -> post ('penyajian');
        		$kemasan = $this -> input -> post ('kemasan');
        		$harga = $this -> input -> post ('harga');
        		$deskripsi = $this -> input -> post ('deskripsi');
        		$stok = $this -> input -> post ('stok');
        		$foto = "assets/web/base/images/".$upload_data['file_name'];
				$data = array(
				'kd_user_admin' => $this->session->userdata('kd_user_admin'),
				'nm_barang' => $nm_barang,
				'kd_kategori' => $kd_kategori,
				'komposisi' => $komposisi,
				'indikasi' => $indikasi,
				'dosis' => $dosis,
				'penyajian' => $penyajian,
				'kemasan' => $kemasan,
				'harga' => $harga,
				'deskripsi' => $deskripsi,
				'stok' => $stok,
				'img' => $foto
				);
				$insert_data = $this->db->insert('tbl_barang',$data);
			if ($insert_data) {
				redirect(base_url().'index.php/Data_obat');
			 } else{
				echo "string";
			 }
		}else{
			echo "string1";
		}
    }
	}
}
