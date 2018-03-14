<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_riwayat extends CI_model {

		function __construct()
		{
		parent::__construct();
		}

	public function getTabel(){

		$mhs = $this->db->query("SELECT * FROM riwayat");
		return $mhs->result_array();
	}
}
?>