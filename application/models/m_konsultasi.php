<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_konsultasi extends CI_Model {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->database();
	}

	public function getGejala() 
	{
		$query 	= $this->db->get('gejala');

		return $query;
	}

	public function getEnvironment()
	{
		$query = $this->db->query("
			SELECT GROUP_CONCAT(id_penyakit) AS environment
			FROM penyakit
			");

		return $query->result_array();
	}

	public function getMassFunction ($selected)
	{
		$query = $this->db->query("
			SELECT 	GROUP_CONCAT(b.id_penyakit) AS '0', 
							ROUND(AVG(a.bobot),2) AS '1'
      FROM relasi a
      JOIN penyakit b ON a.id_penyakit=b.id_penyakit
      WHERE a.id_gejala IN ('".implode("','", $selected)."') 
      GROUP BY a.id_gejala
      ");

		return $query->result_array();
	}

	public function final_codes($final_codes) 
	{
		$query = $this->db->query("
			SELECT GROUP_CONCAT(nama_penyakit)  AS '0'
			FROM penyakit  
			WHERE id_penyakit IN ('".implode("','", $final_codes)."') 
			");

		return $query->result_array();
	}

}