<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_pasien extends CI_model {

		function __construct()
		{
		parent::__construct();
		}

	public function getTabel(){

		$mhs = $this->db->query("SELECT * FROM pasien");
		return $mhs->result_array();
	}

	public function querymenambahpasien($tableName, $data){
		$mhs = $this->db->insert($tableName, $data);
		return $mhs;
	}

	public function querymenghapuspasien($tableName,$where){
		$mhs= $this->db->delete($tableName,$where);
		return $mhs;
	}

}
?>