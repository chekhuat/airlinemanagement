<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aircargo extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->helper('url');
		$this->track_cargo();
	}
	public function track_cargo() {
		$this->load->view('templates/header');
		$this->load->view('pages/view_cargo');
		$this->load->view('templates/footer');

	}
	public function check_cargo_exists() {
		
	}
}
