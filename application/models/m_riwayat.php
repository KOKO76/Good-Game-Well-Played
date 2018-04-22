<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_riwayat extends CI_model {

/*		function __construct()
		{
		parent::__construct();
		}
*/
	public function getTabel(){

		$mhs = $this->db->query("
			SELECT riwayat.id_riwayat, pasien.nama_pasien, pasien.umur, riwayat.nama_gejala, penyakit.nama_penyakit, riwayat.tanggal, riwayat.presentase
			FROM pasien 
			JOIN riwayat on pasien.username_p = riwayat.username_p
			JOIN penyakit on penyakit.id_penyakit = riwayat.id_penyakit");

		return $mhs->result_array();	
	}

	public function tes($id_riwayat=""){

		$mhs = $this->db->query("
			SELECT riwayat.id_riwayat, pasien.nama_pasien, pasien.umur, riwayat.nama_gejala, penyakit.nama_penyakit, riwayat.tanggal, penyakit.deskripsi, penyakit.penanganan, riwayat.presentase
			FROM pasien 
			JOIN riwayat on pasien.username_p = riwayat.username_p
			JOIN penyakit on penyakit.id_penyakit = riwayat.id_penyakit
			and id_riwayat='".$id_riwayat."'");


		return $mhs->result_array();	
	}

	public function getLastDataRiwayat()
	{
		// $this->db->select('id_riwayat,tanggal');
		// $this->db->order_by('id_riwayat', 'DESC');
		// $this->db->limit(1);
		// $query = $this->db->get('riwayat');

		$query = $this->db->query("
			SELECT id_riwayat, tanggal 
			FROM riwayat 
			ORDER BY CAST(id_riwayat AS UNSIGNED) DESC
			");

		return $query->result_array();
	}

	public function querymenambahriwayat($tableName, $data)
	{
		$this->db->insert('riwayat', $data);
	}

	/*public function editRiwayat()
	{

	}*/


	public function querymenghapusriwayat($tableName,$where){
		$mhs= $this->db->delete($tableName,$where);
		return $mhs;
	}

	public function getRiwayatWhere($username)
	{
		$query = $this->db->query("
			SELECT riwayat.id_riwayat, pasien.nama_pasien, pasien.umur, riwayat.nama_gejala, penyakit.nama_penyakit, riwayat.tanggal, riwayat.presentase
			FROM riwayat 
			JOIN pasien on pasien.username_p = riwayat.username_p
			JOIN penyakit on penyakit.id_penyakit = riwayat.id_penyakit WHERE riwayat.username_p = '".$username."'");
		$this->db->order_by('tanggal', 'DESC');
		$query = $this->db->get_where('riwayat', array('username_p' => $username));
    return $query;
	}
}
?>