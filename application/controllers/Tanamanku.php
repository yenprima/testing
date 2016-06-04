<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanamanku extends CI_Controller {

	public function index()
	{
		$this->load->view('admin.php');
	}
	
	public function tambah_data(){
		$this-load->model('Tanamanku_model');
		
		$data['daftar_tanaman'] = $this->Tanamanku_model->tampil_data();
		$this->load->view('tampil_data', $data);
	}
	
	public function hapus_data(){
		
	}
	
}
