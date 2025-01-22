<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	
	public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
	  
	  date_default_timezone_set('Asia/Kolkata'); 

	  if(!$this->session->userdata('user_loggedin'))
		{
			redirect(base_url('login'), 'refresh');
		}
	}
	
	public function index()
	{
		redirect(base_url('dashboard'));
	}

	public function home()
	{
		$data['session_user'] = $this->session->userdata('user_loggedin');
		$data['booking'] = $this->admin_model->get_data('booking', array('status'=>'1'), 'result_array', 'id', 'desc');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('booking/booking_list', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}
	
	public function insert_booking(){

		$data = array(
			'name' => $this->input->post('booking_name'),
			'phone_number' => $this->input->post('booking_phone'),
			'details' => $this->input->post('booking_details'),
			'amount' => $this->input->post('booking_amount'),
			'pay_type' => $this->input->post('booking_pay'),
			'address' => $this->input->post('booking_address'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$insert = $this->admin_model->insert_row('booking', $data);
		if($insert){
			$this->session->set_flashdata('message', 'Data Successfully Added..!');
			redirect(base_url('booking'));
		}
	}

	public function update_booking(){

		$id = $this->input->post('booking_id');
		$data = array(
			'name' => $this->input->post('booking_name'),
			'phone_number' => $this->input->post('booking_phone'),
			'details' => $this->input->post('booking_details'),
			'amount' => $this->input->post('booking_amount'),
			'pay_type' => $this->input->post('booking_pay'),
			'address' => $this->input->post('booking_address'),
			'date_modified' => date("Y-m-d H:i:s")
		);

		$where = array('id' => $id );
		$update = $this->admin_model->update_row_data('booking', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('booking'));
		}
	}
	
	public function deliver_booking(){

		$id = $this->input->post('id');
		$data = array(
			'status' => 3,
			'date_modified' => date("Y-m-d H:i:s")
		);

		$where = array('id' => $id );
		$update = $this->admin_model->update_row_data('booking', $where, $data);
		if($update){
			$response = array(
				'status' => 200,
				'message' => 'Product successfully delivered.!'
			);
			
		} else {
			$response = array(
				'status' => 500,
				'message' => 'Something went wrong.!'
			);
		}
		
		echo json_encode($response);
		return;
	}
}
