<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stores extends CI_Controller {
	
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
		redirect(base_url('stores_list'));
	}

	public function stores_list()
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['stores'] = $this->admin_model->get_data('stores', array('status'=>'1'), 'result_array', 'id', 'desc');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('stores_list', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}
	
	public function insert_store(){

		$data = array(
			'store_name' => $this->input->post('store_name'),
			'store_address' => $this->input->post('store_address'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$insert = $this->admin_model->insert_row('stores', $data);
		if($insert){
			$this->session->set_flashdata('message', 'Data Successfully Added..!');
			redirect(base_url('stores'));
		}
	}

	public function update_store(){

		$id = $this->input->post('store_id');
		$data = array(
			'store_name' => $this->input->post('store_name'),
			'store_address' => $this->input->post('store_address'),
			'date_modified' => date("Y-m-d H:i:s")
		);

		$where = array('id' => $id );
		$update = $this->admin_model->update_row_data('stores', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('stores'));
		}
	}

	public function get_all_stores(){
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
