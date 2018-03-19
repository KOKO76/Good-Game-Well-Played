<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_gejala extends CI_model {

		function __construct()
		{
		parent::__construct();
		}

	public function getTabel(){

		$mhs = $this->db->query("SELECT * FROM gejala");
		return $mhs->result_array();
		
	}
	public function querymenambahgejala($tableName, $data){
		$mhs = $this->db->insert($tableName, $data);
		return $mhs;

	}
}
?>