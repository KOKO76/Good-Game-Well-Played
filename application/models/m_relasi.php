<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_relasi extends CI_model {

		function __construct()
		{
		parent::__construct();
		}

	public function getTabel(){

		$mhs = $this->db->query("SELECT relasi.id_relasi, gejala.nama_gejala,penyakit.nama_penyakit, relasi.bobot
				FROM relasi JOIN gejala on relasi.id_gejala = gejala.id_gejala JOIN penyakit on  penyakit.id_penyakit = relasi.id_penyakit");
		return $mhs->result_array();	
	}

	public function querymenambahrelasi($tableName, $data){
		$mhs = $this->db->insert($tableName, $data);
		return $mhs;
	}


	public function get_nama_gejala(){
		$get = $this->db->query("SELECT gejala.nama_gejala FROM gejala JOIN relasi on gejala.id_gejala=relasi.id_gejala");
		return $get->result_array;
	}

}
?>