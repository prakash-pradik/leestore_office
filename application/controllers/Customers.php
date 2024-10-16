<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require FCPATH.'vendor/autoload.php';
class Customers extends CI_Controller {
	
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
		redirect(base_url('dashboard'));
	}

	public function customers()
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		//$data['customers'] = $this->admin_model->get_data('customers', array('status'=>'1'), 'result_array', 'id', 'desc');
		$data['customers'] = $this->admin_model->get_top_customers('');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('customers/customers_list', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}
	
	public function insert_customer(){

		$data = array(
			'name' => $this->input->post('customer_name'),
			'phone_number' => $this->input->post('customer_phone'),
			'address' => $this->input->post('customer_address'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$insert = $this->admin_model->insert_row('customers', $data);
		if($insert){
			$this->session->set_flashdata('message', 'Data Successfully Added..!');
			redirect(base_url('customers'));
		}
	}

	public function insert_customer_ajax(){
	
		$data = array(
			'name' => $this->input->post('customer_name'),
			'phone_number' => $this->input->post('customer_phone'),
			'address' => $this->input->post('customer_address'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$check = $this->admin_model->get_data('customers', array('phone_number'=> $this->input->post('customer_phone')), 'row');
		
		if(empty($check)){
			$insert = $this->admin_model->insert_row('customers', $data);
			if($insert){

				$response = array(
					'status' => 200,
					'customer_id' => $insert,
					'message' => 'Customer successfully added.!'
				);
				
			} else {
				$response = array(
					'status' => 500,
					'message' => 'Something went wrong.!'
				);
			}
		} 
		else{
			$response = array(
				'status' => 200,
				'message' => 'Customer already exists.!'
			);
		}
			
		echo json_encode($response);
		return;
		
	}

	public function update_customer(){

		$id = $this->input->post('customer_id');
		$data = array(
			'name' => $this->input->post('customer_name'),
			'phone_number' => $this->input->post('customer_phone'),
			'address' => $this->input->post('customer_address'),
			'date_modified' => date("Y-m-d H:i:s")
		);

		$where = array('id' => $id );
		$update = $this->admin_model->update_row_data('customers', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('customers'));
		}
	}
	
	public function customer_details($id)
	{
		if(!empty($id)){
			$data['session_user'] = $this->session->userdata('admin_loggedin');
			$data['customer'] = $this->admin_model->get_by_id($id, 'customers');
			if(!empty($data['customer'])){
				
				$data['orders'] = $this->admin_model->get_all_orders('', $id, 'all');
				
				$this->load->view('config/template_start');
				$this->load->view('config/page_head',$data);
				$this->load->view('customers/customer_details', $data);
				$this->load->view('config/page_footer');
				$this->load->view('config/template_scripts');
				$this->load->view('config/template_end');
			} else {
				redirect(base_url('customers'));
			}
		} else {
			redirect(base_url('customers'));
		}
	}

	public function get_all(){
		$customers = $this->admin_model->get_data('customers', array('status'=>'1'), 'result_array');
		if($customers){
			echo json_encode($customers);
			return;
		}
		else{
			return false;
		}
	}
}
