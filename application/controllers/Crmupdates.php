<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Crmupdates extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('crmupdatesmodel');
	}

	public function index() 
	{

	}

	public function flightstatus(){
		$data['content'] = 'crmcustomer/flightstatus';
		$this->load->view('templates/portal', $data);	
	}

	public function managebooking(){
		$data['content'] = 'crmcustomer/managebooking';
		$this->load->view('templates/portal', $data);
	}

	public function checkin(){
		$data['content'] = 'crmcustomer/checkin';
		$this->load->view('templates/portal', $data);
	}
}
