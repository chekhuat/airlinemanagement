<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FlightOperations extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->helper('url');
		$this->load->view('templates/portal');
		echo "naa kas Flight Operations controller";
	}
	
}
