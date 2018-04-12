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

	public function querymenghapusgejala($tableName,$where){
		$mhs= $this->db->delete($tableName,$where);
		return $mhs;
	}

	public function querymengubahgejala($tableName, $data, $where){

		$mhs = $this->db->update($tableName, $data, $where);
		return $mhs;
	}

	public function getdat($id_gejala=""){
		$mhs = $this->db->query("SELECT * FROM gejala".$id_gejala);
		return $mhs->result_array();
	}

	function getPK($id_gejala)
 	{
	  $this->db->where('id_gejala',$id_gejala); 
	  $query = $this->db->get('gejala');   
	  return $query->result();  
 	}
}
?>