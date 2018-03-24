<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// session_start(); //we need to start session in order to access it through CI

Class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('login_model');
	}

    public function index(){
        // Load our view to be displayed
        // to the user

		$this->load->view('templates/header');
		$this->load->view('templates/homepage');
		$this->load->view('templates/footer');
    
	} 

    public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $this->index();
        }else{
            // If user did validate, 
            // Send them to members area
            // redirect('main');

        $this->load->view('templates/admin_page');
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
    
        }        
    }

    public function processCust() {
    	// Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $this->index();
        }else{
            // If user did validate, 
            // Send them to members area
            // redirect('main');

	        $this->load->view('templates/admin_page');
	        $this->load->view('templates/header');
	        $this->load->view('templates/footer');
    
        }       
    }

}





	// }

	// // Check for user login process
	// public function user_login_process() {
	// 	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
	// 	if ($this->form_validation->run() == FALSE) {
	// 		if(isset($this->session->userdata['logged_in'])){
	// 			$this->load->view('templates/admin_page');
	// 		}else{
	// 			$this->load->view('login_form');
	// 		}
	// 	} else { 
	// 		$data = array(
	// 		'username' => $this->input->post('username'),
	// 		'password' => $this->input->post('password')
	// 		);

	// 		$result = $this->login_database->login($data);
	// 		if ($result == TRUE) {
	// 			$username = $this->input->post('username');
	// 			$result = $this->login_database->read_user_information($username);
	// 			if ($result != false) {
	// 			$session_data = array(
	// 			'username' => $result[0]->user_name,
	// 			'email' => $result[0]->user_email,
	// 			);
	// 			// Add user data in session
	// 			$this->session->set_userdata('logged_in', $session_data);
	// 			$this->load->view('templates/admin_page');
	// 			}
	// 		} else {
	// 			$data = array(
	// 			'error_message' => 'Invalid Username or Password'
	// 			);
	// 			$this->load->view('templates/admin_page', $data);
	// 			}
	// 	}
	// }

	// // Logout from admin page
	// public function logout() {
	// // Removing session data
	// 	$sess_array = array(
	// 	'username' => ''
	// 	);
	// 	$this->session->unset_userdata('logged_in', $sess_array);
	// 	$data['message_display'] = 'Successfully Logout';
	// 	$this->load->view('login_form', $data);
	// 	}
	// }

