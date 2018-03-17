<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "Dashboard _admin "; exit();
	}
}