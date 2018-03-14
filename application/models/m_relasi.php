<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_relasi extends CI_model {

		function __construct()
		{
		parent::__construct();
		}

	public function getTabel(){

		$mhs = $this->db->query("SELECT * FROM relasi");
		return $mhs->result_array();
		
	}
}
?>