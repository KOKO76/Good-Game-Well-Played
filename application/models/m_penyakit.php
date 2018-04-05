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

	public function querymenghapuspenyakit($tableName,$where){
		$mhs= $this->db->delete($tableName,$where);
		return $mhs;
	}

	public function querymengubahpenyakit($tableName, $data, $where){
		$mhs = $this->db->update($tableName, $data, $where);
		return $mhs;
	}

	public function getdat($id_penyakit=""){
		$mhs = $this->db->query("SELECT * FROM penyakit".$id_penyakit);
		return $mhs->result_array();
	}

 	function getPK($id_penyakit)
 	{
	  $this->db->where('id_penyakit',$id_penyakit); 
	  $query = $this->db->get('penyakit');   
	  return $query->result();  
 	}
}
?>