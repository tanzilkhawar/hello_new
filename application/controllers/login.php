<?php

/**
 * User Controller
 * This controller fully demonstrates the user class.
 *
 * @package User
 * @author Waldir Bertazzi Junior
 * @link http://waldir.org/
 **/
class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		// Load the Library
		$this->load->database();
		$this->load->library(array('user', 'user_manager'));
        $this->load->helper('url');
	}
	
	function index()
	{
		// If user is already logged in, send it to private page
		$this->user->on_valid_session('login/private_page');
		
		// Loads the login view
		$this->load->view('login');
	}
	
	function private_page(){
		// if user tries to direct access it will be sent to login
		$this->user->on_invalid_session('login');
		
		// ... else he will view home
		$this->load->view('home');
	}
	
	function validate()
	{
		// Receives the login data
		$login = $this->input->post('login');
		$password = $this->input->post('password');
		
		/* 
		 * Validates the user input
		 * The user->login returns true on success or false on fail.
		 * It also creates the user session.
		*/
		if($this->user->login($login, $password)){
			// Success
			redirect('login/private_page');
		} else {
			// Oh, holdon sir.
			redirect('login');
		}
	}
	
	// Simple logout function
	function logout()
	{
		// Removes user session and redirects to login
		$this->user->destroy_user('login');
	}
}
?>
