<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class CustomerRelationship extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('customerrelationshipmodel');
	}

	public function index() 
	{
		$data['content'] = 'crm';
		$this->load->view('templates/users/portal', $data);	   	
	}

	public function sales(){
		$data['content'] = 'crmcustomer/searchflight';
		$this->load->view('templates/portal', $data);		
	}

	public function customer(){ 
		$data['content'] = 'crmcharts/customerchart';
		$this->load->view('templates/portal', $data);		
	}

	public function decision(){
		$data['content'] = 'crmcharts/decision';
		$this->load->view('templates/portal', $data);		
	}

	public function service() {
		$data['content'] = 'crmcharts/customerservice';
		$this->load->view('templates/portal', $data);		
	}

	public function search() {
		$data['content'] = 'crmcustomer/searchflight';
		$this->load->view('templates/portal', $data);	
	}

	public function select() {
		// $content = $this->input->post();
		// var_dump($content);
		// $search = $this->customerrelationshipmodel->search($content);

		// if(count($search) >= 1) {
			$data['content'] = 'crmcustomer/selectflight';
			$this->load->view('templates/portal', $data);	
		// }		
	}

	public function guest() {
		$data['content'] = 'crmcustomer/guestdetails';
		$this->load->view('templates/portal', $data);	
	}

	public function addons() {
		$data['content'] = 'crmcustomer/addons';
		$this->load->view('templates/portal', $data);	
	}

	public function confirmation() {
		$data['content'] = 'crmcustomer/iterinary';
		$this->load->view('templates/portal', $data);	
	}

	public function payment() {
		$data['content'] = 'crmcustomer/payflight';
		$this->load->view('templates/portal', $data);	
	}
}