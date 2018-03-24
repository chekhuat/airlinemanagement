<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaintenanceEngineering extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->helper('url');
		$this->load->view('templates/portal');
		echo "naa kas maintenance engineering management controller";
	}
}
