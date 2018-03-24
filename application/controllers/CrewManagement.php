<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrewManagement extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->helper('url');
		$this->load->view('templates/portal');
		echo "naa kas crew management controller";
	}
}
