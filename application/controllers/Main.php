<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->view('templates/header');
		$this->load->view('templates/homepage');
		$this->load->view('templates/footer');

	}
	public function login_modal() {
		$this->load->view('templates/modal-login');
	}
	
    
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }else
	        echo '<script>alert("Congratulations, you are logged in");</script>';
    }
}
 
// $this->load->library('../controllers/users');


// $this->users->function_name();
