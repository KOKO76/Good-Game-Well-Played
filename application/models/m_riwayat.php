<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_riwayat extends CI_model {

		function __construct()
		{
		parent::__construct();
		}

	public function getTabel(){

		$mhs = $this->db->query("SELECT riwayat.id_riwayat, pasien.nama_pasien, pasien.umur, gejala.nama_gejala, penyakit.nama_penyakit, riwayat.tanggal
				FROM pasien JOIN riwayat on pasien.username_p = riwayat.username_p JOIN gejala on gejala.id_gejala = riwayat.id_gejala JOIN penyakit on penyakit.id_penyakit = riwayat.id_penyakit");
		return $mhs->result_array();	
	}

	public function querymenghapusriwayat($tableName,$where){
		$mhs= $this->db->delete($tableName,$where);
		return $mhs;
	}
}
?>