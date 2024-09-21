<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
	  $this->load->model('login_model');
	  
	}
	
	public function index()
	{
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('user_loggedin')){
			redirect(base_url('dashboard'));
		}
		else{
			$this->load->view('login_page');
		}
	}

	public function user_login(){
		//load session library
		$this->load->library('session');

		$email = $_POST['login-email'];
		$password = $_POST['login-password'];

		$data = $this->login_model->login($email, $password);

		if($data){
			$this->session->set_userdata('user_loggedin', $data);
			redirect(base_url('dashboard'));
		}
		else{
			$this->session->set_flashdata('message', 'In-Correct username or password');
			redirect(base_url('login'));
		} 
	}

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user_loggedin');
		redirect(base_url('login'));
	}
}
