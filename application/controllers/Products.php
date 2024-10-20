<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	
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
		redirect(base_url('products_list'));
	}

	public function products_list()
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['products'] = $this->admin_model->get_all_products();
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('products/products_list', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function product_create()
	{
		$data['session_user'] =  $sessionUser = $this->session->userdata('admin_loggedin');
		if(isset($sessionUser) && $sessionUser['role_type'] === 'Manager')
			$where = array('store_id' => $sessionUser['store_id'], 'status'=>'1');
		else
			$where = array('status'=>'1');
		

		$data['stores'] = $this->admin_model->get_data('stores', array('status'=>'1'), 'result_array');
		$data['products'] = $this->admin_model->get_all_products();
		$data['categories'] = $this->admin_model->get_data('categories', $where, 'result_array', 'category_name', 'asc');
		$data['brands'] = $this->admin_model->get_data('brands', $where, 'result_array', 'brand_name', 'asc');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('products/product_create', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}
	
	public function insert_product(){

		$data = array(
			'store_id' => $this->input->post('product_store'),
			'product_type' => $this->input->post('product_type'),
			'product_name' => $this->input->post('product_name'),
			'brand_id' => $this->input->post('brand_id'),
			'category_id' => $this->input->post('category_name'),
			'imei_number1' => $this->input->post('imei_number1'),
			'imei_number2' => $this->input->post('imei_number2'),
			'serial_number' => $this->input->post('serial_number'),
			'price' => $this->input->post('price'),
			'cost_price' => $this->input->post('cost_price'),
			'sell_price' => $this->input->post('sell_price'),
			'margin' => $this->input->post('margin_val'),
			'qnty' => $this->input->post('qnty'),
			'reorder_qnty' => $this->input->post('reorder_qnty'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$filename = time();
		if (isset($_FILES['product_image']) && $_FILES['product_image']['name'] != "") {
			//var_dump($_FILES['income_user_photo']);
			if(move_uploaded_file($_FILES['product_image']['tmp_name'], 'uploads/products/'.$filename.'.jpg')){
				$data['image'] = $filename;
			}
		}

		/* $this->load->library('zend');
		$this->zend->load('Zend/Barcode');
		$code_name = 'LS'.time();
		$create = Zend_Barcode::factory('code128', 'image', array(
			'text'=> $code_name
		), array())->draw();

		$barcode_img = $code_name.'.png';
		imagepng($create, './uploads/barcodes/'.$barcode_img);
		$data['barcode'] = $code_name; */

		//var_dump($data); exit();

		$insert = $this->admin_model->insert_row('products', $data);
		if($insert){
			$this->session->set_flashdata('message', 'Data Successfully Added..!');
			redirect(base_url('products_list'));
		}
	}

	public function product_view($id)
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['stores'] = $this->admin_model->get_data('stores', array('status'=>'1'), 'result_array');
		$data['categories'] = $this->admin_model->get_data('categories', array('status'=>'1'), 'result_array');
		$data['brands'] = $this->admin_model->get_data('brands', array('status'=>'1'), 'result_array');
		$data['product'] = $this->admin_model->get_product_data($id);
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('products/product_view', $data);
		$this->load->view('config/page_footer', $data);
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function product_update($id)
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['stores'] = $this->admin_model->get_data('stores', array('status'=>'1'), 'result_array');
		$data['categories'] = $this->admin_model->get_data('categories', array('status'=>'1'), 'result_array');
		$data['brands'] = $this->admin_model->get_data('brands', array('status'=>'1'), 'result_array');
		$data['product'] = $this->admin_model->get_data('products', array('id'=> $id), 'row');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('products/product_update', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function update_product(){

		$id = $this->input->post('product_id');

		$data = array(
			'store_id' => $this->input->post('product_store'),
			'product_type' => $this->input->post('product_type'),
			'product_name' => $this->input->post('product_name'),
			'brand_id' => $this->input->post('brand_id'),
			'category_id' => $this->input->post('category_name'),
			'imei_number1' => $this->input->post('imei_number1'),
			'imei_number2' => $this->input->post('imei_number2'),
			'serial_number' => $this->input->post('serial_number'),
			'barcode' => $this->input->post('barcode'),
			'price' => $this->input->post('price'),
			'cost_price' => $this->input->post('cost_price'),
			'sell_price' => $this->input->post('sell_price'),
			'margin' => $this->input->post('margin_val'),
			'qnty' => $this->input->post('qnty'),
			'reorder_qnty' => $this->input->post('reorder_qnty'),
			'date_modified' => date("Y-m-d H:i:s")
		);

		$filename = time();
		if (isset($_FILES['product_image']) && $_FILES['product_image']['name'] != "") {
			//var_dump($_FILES['income_user_photo']);
			if(move_uploaded_file($_FILES['product_image']['tmp_name'], 'uploads/products/'.$filename.'.jpg')){
				$data['image'] = $filename;
			}
		}

		$where = array('id' => $id );
		$update = $this->admin_model->update_row_data('products', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('products_list'));
		}

	}

	public function categories()
	{
		$data['session_user'] = $sessionUser = $this->session->userdata('admin_loggedin');

		if(isset($sessionUser) && $sessionUser['role_type'] === 'Manager')
			$where = array('store_id' => $sessionUser['store_id'], 'status'=>'1');
		else
			$where = array('status'=>'1');

		$data['stores'] = $this->admin_model->get_data('stores', array('status'=>'1'), 'result_array');
		$data['categories'] = $this->admin_model->get_data('categories', $where, 'result_array', 'id', 'desc');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('products/categories', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function insert_category(){

		$data = array(
			'store_id' => $this->input->post('category_store'),
			'category_name' => $this->input->post('category_name'),
			'details' => $this->input->post('category_details'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$insert = $this->admin_model->insert_row('categories', $data);
		if($insert){
			$this->session->set_flashdata('message', 'Data Successfully Added..!');
			redirect(base_url('categories'));
		}
	}

	public function update_category(){
		$id = $this->input->post('category_id');
		$data = array(
			'store_id' => $this->input->post('category_store'),
			'category_name' => $this->input->post('category_name'),
			'details' => $this->input->post('category_details'),
			'date_modified' => date("Y-m-d H:i:s")
		);
		$where = array('id' => $id );

		$update = $this->admin_model->update_row_data('categories', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('categories'));
		}
	}
	
	public function brands()
	{
		$data['session_user'] = $sessionUser = $this->session->userdata('admin_loggedin');
		if(isset($sessionUser) && $sessionUser['role_type'] === 'Manager')
			$where = array('store_id' => $sessionUser['store_id'], 'status'=>'1');
		else
			$where = array('status'=>'1');

		$data['stores'] = $this->admin_model->get_data('stores', array('status'=>'1'), 'result_array');
		$data['brands'] = $this->admin_model->get_data('brands', $where, 'result_array', 'id', 'desc');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('products/brands', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}
	public function insert_brand(){

		$data = array(
			'store_id' => $this->input->post('brand_store'),
			'brand_name' => $this->input->post('brand_name'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$insert = $this->admin_model->insert_row('brands', $data);
		if($insert){
			$this->session->set_flashdata('message', 'Data Successfully Added..!');
			redirect(base_url('brands'));
		}
	}
	public function update_brand(){
		$id = $this->input->post('brand_id');
		$data = array(
			'store_id' => $this->input->post('brand_store'),
			'brand_name' => $this->input->post('brand_name'),
			'date_modified' => date("Y-m-d H:i:s")
		);
		$where = array('id' => $id );
		
		$update = $this->admin_model->update_row_data('brands', $where, $data);
		if($update){
			$this->session->set_flashdata('message', 'Data Successfully Updated..!');
			redirect(base_url('brands'));
		}
	}

	public function godown()
	{
		$data['session_user'] = $sessionUser = $this->session->userdata('admin_loggedin');
		if(isset($sessionUser) && $sessionUser['role_type'] === 'Manager')
			$where = array('store_id' => $sessionUser['store_id'], 'status'=>'1');
		else
			$where = array('status'=>'1');

		$data['stocks'] = $this->admin_model->get_all_stocks();
		$data['categories'] = $this->admin_model->get_data('categories', $where, 'result_array', 'category_name', 'asc');
		$data['suppliers'] = $this->admin_model->get_data('suppliers', array('status'=>'1'), 'result_array');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head',$data);
		$this->load->view('products/godown', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function insert_stock(){

		$stype = $this->input->post('supplier_type');
		if($stype == 'new'){
			$supplierData = array(
				'supplier_name' => $this->input->post('supplier_name'),
				'phone_number' => $this->input->post('supplier_phone'),
				'supplier_address' => $this->input->post('supplier_details'),
				'date_added' => date("Y-m-d H:i:s")
			);
			$supplier_id = $this->admin_model->insert_row('suppliers', $supplierData);
		} else {
			$supplier_id = $this->input->post('stock_supplier_id');
		}

		$data = array(
			'product_id' => $this->input->post('stock_product_id'),
			'supplier_id' => $supplier_id,
			'no_of_stock' => $this->input->post('stock_number'),
			'date_added' => date("Y-m-d H:i:s")
		);
		
		$insert = $this->admin_model->insert_row('godown', $data);
		if($insert){
			$this->session->set_flashdata('message', 'Data Successfully Added..!');
			redirect(base_url('godown'));
		}
	}


	public function insert_product_ajax(){

		$data = array(
			'store_id' => $this->input->post('product_store'),
			'product_type' => $this->input->post('product_type'),
			'product_name' => $this->input->post('product_name'),
			'category_id' => $this->input->post('category_name'),
			'brand_id' => $this->input->post('brand_id'),
			'imei_number1' => $this->input->post('imei_number1'),
			'imei_number2' => $this->input->post('imei_number2'),
			'serial_number' => $this->input->post('serial_number'),
			'price' => $this->input->post('price'),
			'cost_price' => $this->input->post('cost_price'),
			'sell_price' => $this->input->post('sell_price'),
			'date_added' => date("Y-m-d H:i:s")
		);

		$insert = $this->admin_model->insert_row('products', $data);
		if($insert){
			$response = array(
				'status' => 200,
				'customer_id' => $insert,
				'message' => 'Product successfully added.!'
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

	public function insert_product_test(){

		$data = array(
			'store_id' => $this->input->post('product_store'),
			'product_type' => $this->input->post('product_type'),
			'product_name' => $this->input->post('product_name'),
			'brand_id' => $this->input->post('brand_id'),
			'category_id' => $this->input->post('category_name'),
			'imei_number1' => $this->input->post('imei_number1'),
			'imei_number2' => $this->input->post('imei_number2'),
			'serial_number' => $this->input->post('serial_number'),
			'barcode' => $this->input->post('barcode'),
			'price' => $this->input->post('price'),
			'cost_price' => $this->input->post('cost_price'),
			'sell_price' => $this->input->post('sell_price'),
			'qnty' => $this->input->post('qnty'),
			'reorder_qnty' => $this->input->post('reorder_qnty'),
			'date_added' => date("Y-m-d H:i:s")
		);
		$code = '20001';
		$this->load->library('zend');
		$this->zend->load('Zend/Barcode');
		$insert = Zend_Barcode::factory('code128', 'image', array(
			'text'=>$code
		), array())->draw();

		$barcode_img = 'barcode_11.png';
		imagepng($insert, './assets/img/barcodes/'.$barcode_img);
	}

	public function getProductData(){
		$barcode = $this->input->post('barcode');
		$result = $this->admin_model->get_data('products', array('barcode'=>$barcode), 'row');
		if($result){
			$data['data'] = $result;
            $data['status'] = 1;
		} else {
			$data['status'] = 2;
		}
		echo json_encode($data);
	}

}
