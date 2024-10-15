<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {
	
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
		redirect(base_url('suppliers_list'));
	}

	public function suppliers_list()
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['suppliers'] = $this->admin_model->get_data('suppliers', array('status'=>'1'), 'result_array', 'id', 'desc');
		$data['states'] = $this->admin_model->get_data('states', array('flag'=>'1'), 'result_array', 'name', 'asc');
		$data['cities'] = $this->admin_model->get_data('cities', array('flag'=>'1'), 'result_array', 'name', 'asc');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('suppliers/suppliers_list', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function insert_supplier(){

		$data = array(
			'supplier_name' => $this->input->post('new_supplier_name'),
			'phone_number' => $this->input->post('new_supplier_phone'),
			'gst_number' => $this->input->post('new_supplier_gst'),
			'supplier_address' => $this->input->post('new_supplier_address'),
			'city' => $this->input->post('new_supplier_city'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$insert = $this->admin_model->insert_row('suppliers', $data);
		if($insert){
			$this->session->set_flashdata('message', 'Data Successfully Added..!');
		} else {
			$this->session->set_flashdata('message', 'Something went wrong..!');
		}
		redirect(base_url('suppliers'));
	}
	
	public function update_supplier(){

		$id = $this->input->post('supplier_id');
		$data = array(
			'supplier_name' => $this->input->post('new_supplier_name'),
			'phone_number' => $this->input->post('new_supplier_phone'),
			'gst_number' => $this->input->post('new_supplier_gst'),
			'supplier_address' => $this->input->post('new_supplier_address'),
			'city' => $this->input->post('new_supplier_city'),
			'date_modified' => date("Y-m-d H:i:s")
		);

		$where = array('id' => $id );
		$update = $this->admin_model->update_row_data('suppliers', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
		} else {
			$this->session->set_flashdata('message', 'Something went wrong..!');
		}
		redirect(base_url('suppliers'));
	}

	public function supplier_details($id)
	{
		if(!empty($id)){
			$data['session_user'] = $this->session->userdata('admin_loggedin');
			$data['supplier'] = $this->admin_model->get_by_id($id, 'suppliers');
			if(!empty($data['supplier'])){
				$data['stocks'] = $this->admin_model->get_stocks_by_supplier($id);
				
				$this->load->view('config/template_start');
				$this->load->view('config/page_head',$data);
				$this->load->view('suppliers/supplier_details', $data);
				$this->load->view('config/page_footer');
				$this->load->view('config/template_scripts');
				$this->load->view('config/template_end');
			} else {
				redirect(base_url('suppliers'));
			}
		} else {
			redirect(base_url('suppliers'));
		}
	}
	
}
