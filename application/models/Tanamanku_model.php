<?php

class Tanamanku_model extends CI_Model(){
	
	function tampil_data(){
		return $this->db->get('tanaman');
	}
	
	function tambah_data_m($data, $table){
		$this->db->insert($table, $data);
	}
	
}