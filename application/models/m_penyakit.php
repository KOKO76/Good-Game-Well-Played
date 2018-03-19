<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_penyakit extends CI_model {

		function __construct()
		{
		parent::__construct();
		}

	public function getTabel(){

		$mhs = $this->db->query("SELECT * FROM penyakit");
		return $mhs->result_array();
		
	}

	public function querymenambahpenyakit($tableName, $data){
		$mhs = $this->db->insert($tableName, $data);
		return $mhs;

	}
}
?>