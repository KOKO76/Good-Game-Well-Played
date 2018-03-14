<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_penyakit extends CI_model {

		function __construct()
		{
		parent::__construct();
		}

	public function getTabel(){

		$mhs = $this->db->query("SELECT * FROM penyakit".$id);
		return $mhs->result_array();
		
	}
}
?>