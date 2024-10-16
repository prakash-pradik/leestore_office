<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
	  $this->load->model('login_model');
	  date_default_timezone_set('Asia/Kolkata'); 
	}
	
	public function index()
	{
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('admin_loggedin')){
			redirect(base_url('dashboard'));
		}
		else{
			$this->load->view('login_full');
		}
	}

	public function user_login(){
		//load session library
		$this->load->library('session');

		$email = $_POST['login-email'];
		$password = $_POST['login-password'];

		$superData = $this->login_model->login($email, $password);

		if($superData){
			$this->session->set_userdata('admin_loggedin', $superData);
			redirect(base_url('dashboard'));
		}
		else{

			$staffData = $this->login_model->login_staff($email, $password);
			if($staffData){
				$this->session->set_userdata('admin_loggedin', $staffData);
				
				if($staffData['role_type'] === 'Manager'){
					redirect(base_url('dashboard'));
				} else{
					redirect(base_url('sales_list/month'));
				}
			}
			else{
				$this->session->set_flashdata('posMessage', 'In-Correct username or password');
				redirect(base_url('login'));
			}
		} 
	}

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('admin_loggedin');
		redirect(base_url('login'));
	}
}
