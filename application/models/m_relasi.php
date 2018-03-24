<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_relasi extends CI_model {

		function __construct()
		{
		parent::__construct();
		}

	public function getTabel(){

		$mhs = $this->db->query("SELECT relasi.id_relasi, gejala.id_gejala, gejala.nama_gejala, penyakit.id_penyakit, penyakit.nama_penyakit, relasi.bobot

				FROM relasi JOIN gejala on relasi.id_gejala = gejala.id_gejala JOIN penyakit on  penyakit.id_penyakit = relasi.id_penyakit");

		return $mhs->result_array();	
	}
	public function getPenyakit(){

		$mhs = $this->db->query("SELECT * FROM penyakit");

		return $mhs->result_array();	
	}
	public function getGejala(){

		$mhs = $this->db->query("SELECT * from gejala");
		return $mhs->result_array();	
	}
	public function querymenambahrelasi($tableName, $data){
		$mhs = $this->db->insert($tableName, $data);
		return $mhs;
	}

	public function querymenghapusrelasi($tableName,$where){
		$mhs= $this->db->delete($tableName, $where);
		return $mhs;
	}

	public function querymengubahrelasi($tableName, $data, $where){
		$mhs = $this->db->update($tableName, $data, $where);
		return $mhs;
	}

	public function getdat($id_relasi=""){
		$mhs = $this->db->query("SELECT * FROM relasi".$id_relasi);
		return $mhs->result_array();
	}
}
?>