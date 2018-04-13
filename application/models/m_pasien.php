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

	public function getPasienWhere($username)
	{
		$query = $query = $this->db->get_where('pasien', array('username_p' => $username), 1);

    return $query;
	}

	public function querymengubahpasien($tableName, $data, $where){
		$mhs = $this->db->update($tableName, $data, $where);
		return $mhs;
	}

	public function getdat($username_p=""){
		$mhs = $this->db->query("SELECT * FROM pasien".$username_p);
		return $mhs->result_array();
	}

}
?>