<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staffs extends CI_Controller {
	
	public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
	  
	  date_default_timezone_set('Asia/Kolkata'); 

	  if(!$this->session->userdata('admin_loggedin'))
		{
			redirect(base_url('login'), 'refresh');
		}
	}
	
	public function index()
	{
		redirect(base_url('staffs_list'));
	}

	public function staffs_list()
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['staffs'] = $this->admin_model->get_all_staffs();
		$data['stores'] = $this->admin_model->get_data('stores', array('status'=>'1'), 'result_array');
		$data['roles'] = $this->admin_model->get_data('employee_roles', array('status'=>'1'), 'result_array', 'role_name', 'asc');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('staffs/staffs_list', $data);
		$this->load->view('config/page_footer', $data);
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function insert_staff(){

		$data = array(
			'store_id' => $this->input->post('staff_store'),
			'full_name' => $this->input->post('staff_full_name'),
			'phone_number' => $this->input->post('staff_phone_number'),
			'email' => $this->input->post('staff_email'),
			'birthdate' => $this->input->post('staff_dob'),
			'gender' => $this->input->post('staff_gender'),
			'address' => $this->input->post('staff_address'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$empId = $this->admin_model->insert_row('employees', $data);
		if($empId){
			
			if($this->input->post('staff_store') == 3)
				$firstName = 'LEEQ';
			else
				$firstName = 'LEE Store '.$this->input->post('staff_store');
			
			$empData = array(
				'emp_id' => $empId,
				'store_id' => $this->input->post('staff_store'),
				'first_name' => $firstName,
				'last_name' => $this->input->post('staff_full_name'),
				'user_name' => $this->input->post('staff_user_name'),
				'password' => $this->input->post('staff_password'),
				'date_added' => date("Y-m-d H:i:s")
			);
			$insert = $this->admin_model->insert_row('employees_login', $empData);

			$this->session->set_flashdata('message', 'Data Successfully Added..!');
			redirect(base_url('staffs'));
		}
	}
	public function update_staff(){

		$id = $this->input->post('staff_edit_id');
		$data = array(
			'store_id' => $this->input->post('staff_store'),
			'full_name' => $this->input->post('staff_full_name'),
			'phone_number' => $this->input->post('staff_phone_number'),
			'email' => $this->input->post('staff_email'),
			'birthdate' => $this->input->post('staff_dob'),
			'gender' => $this->input->post('staff_gender'),
			'address' => $this->input->post('staff_address'),
			'date_modified' => date("Y-m-d H:i:s")
		);

		$where = array('id' => $id );
		$update = $this->admin_model->update_row_data('employees', $where, $data);
		if($update){
			
			$empData = array(
				'last_name' => $this->input->post('staff_full_name'),
				'date_modified' => date("Y-m-d H:i:s")
			);
			$whereEmp = array('emp_id' => $id );
			$updateEmp = $this->admin_model->update_row_data('employees_login', $whereEmp, $empData);
			
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('staffs'));
		}
	}
	public function assign_role(){
		
		$empId = $this->input->post('assign_emp_id');

		$data = array(
			'role_type' => $this->input->post('staff_role_type'),
			'date_modified' => date("Y-m-d H:i:s")
		);

		$where = array('id' => $empId );
		$update = $this->admin_model->update_row_data('employees', $where, $data);
		if($update){

			$whereLogin = array('emp_id' => $empId);
			$update1 = $this->admin_model->update_row_data('employees_login', $whereLogin, $data);

			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('staffs'));
		}
	}
	
	public function roles_list(){
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['roles'] = $this->admin_model->get_data('employee_roles', array('status'=>'1'), 'result_array', 'id', 'desc');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head', $data);
		$this->load->view('staffs/roles_list', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}
	public function insert_role(){

		$data = array(
			'role_name' => $this->input->post('role_name'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$insert = $this->admin_model->insert_row('employee_roles', $data);
		if($insert){
			$this->session->set_flashdata('message', 'Data Successfully Added..!');
			redirect(base_url('roles_list'));
		}
	}
	public function update_role(){

		$data = array(
			'role_name' => $this->input->post('role_name'),
			'date_modified' => date("Y-m-d H:i:s")
		);
		$id = $this->input->post('update_role_id');
		$where = array('id' => $id );
		$update = $this->admin_model->update_row_data('employee_roles', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('roles_list'));
		}
	}

}
