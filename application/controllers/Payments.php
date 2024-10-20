<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {
	
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
		redirect(base_url('pos_create'));
	}

	public function pos_create()
	{
		$data['session_user'] = $sessionUser = $this->session->userdata('admin_loggedin');

		if(isset($sessionUser) && isset($sessionUser['store_id'])){
			$where = array('store_id' => $sessionUser['store_id'],  'status'=>'1');
		} else {
			$where = array('status'=>'1');
		}

		$data['customers'] = $this->admin_model->get_data('customers', array('status'=>'1'), 'result_array');
		$data['categories'] = $this->admin_model->get_data('categories', $where, 'result_array', 'category_name', 'asc');
		$data['brands'] = $this->admin_model->get_data('brands', $where, 'result_array', 'brand_name', 'asc');
		$data['stores'] = $this->admin_model->get_data('stores', array('status'=>'1'), 'result_array');
		$this->load->view('config/template_start', $data);
		$this->load->view('payments/pos_create', $data);
		$this->load->view('config/page_footer', $data);
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function get_data(){
		$id = $this->input->post('id');
		$tbl_name = $this->input->post('tbl_name');
		$result = $this->admin_model->get_data('products', array('id'=>$id, 'status'=>'1'), 'row');
		if($result){
			$data['data'] = $result;
            $data['status'] = 1;
		} else {
			$data['status'] = 2;
		}
		echo json_encode($data);
	}

	public function addPos(){
		$sessionUser = $this->session->userdata('admin_loggedin');
		if(isset($sessionUser) && isset($sessionUser['store_id'])){
			$storeId = $sessionUser['store_id'];
		} else {
			$storeId = 0;
		}

		$customerId = $this->input->post('customerId');
		$saleType = $this->input->post('saleType');
		$billDate = $this->input->post('billDate');

		$grossVal = $this->input->post('grossVal');
		$netAmount = $this->input->post('totalPayable');
		$totalQty = $this->input->post('totalQty');
		$discountVal = $this->input->post('discountVal');
		$discountAmount = $this->input->post('discountAmount');
		$balanceAmt = $this->input->post('balanceAmt');

		$multiPayData = $this->input->post('multiPayData');
		$data = $this->input->post('data');

		$totalPaid = 0;
		$flag = false;
		$payMode = $orderStatus = '';
		
		if($saleType == 'cash' || $saleType == 'upi'){
			$payMode = $saleType;
			$orderStatus = 'paid';
			$totalPaid = $netAmount;
		} else if($saleType == 'multipay'){
			$payMode = $saleType;
			$multiPaid = 0;
			//var_dump($multiPayData);
			foreach($multiPayData as $k => $v){
				$multiPaid = ($multiPaid + $v['payAmount']);
			}

			if($multiPaid < $netAmount){
				$orderStatus = 'pending';
			} else{
				$orderStatus = 'paid';
			}
			$totalPaid = $multiPaid;

		}else if($saleType == 'credit'){
			$payMode = 'credit';
			$orderStatus = 'credit';
		} else {
			$payMode = '';
			$orderStatus = 'draft';
		}

		$orderData = array(
			'store_id' 		=> $storeId,
			'customer_id' 	=> $this->input->post('customerId'),
			'invoice_no' 	=> time(),
			'gross_amount' 	=> $grossVal,
			'order_discount'=> $discountVal,
			'discount_amount'=> $discountAmount,
			'net_amount' 	=> $netAmount,
			'total_paid' 	=> $totalPaid,
			'balance_amount'=> $balanceAmt,
			'quantity' 		=> $totalQty,
			'order_date' 	=> date("Y-m-d" , strtotime($this->input->post('billDate'))),
			'order_status' 	=> $orderStatus,
			'payment_mode' 	=> $payMode,
			'date_added' 	=> date("Y-m-d H:i:s")
		);

		$orderId = $this->admin_model->insert_row('orders', $orderData);
		if($orderId){

			foreach($data as $key => $val){
				$subTotal = ($val['unitPrice'] * $val['quantity']);
				$orderItem = array(
					'order_id' 		=> $orderId,
					'product_id' 	=> $val['productId'],
					'price' 		=> $val['unitPrice'],
					'sub_total' 	=> $subTotal,
					'quantity' 		=> $val['quantity'],
					'date_modified' => date("Y-m-d H:i:s")
				);

				$insert = $this->admin_model->insert_row('order_items', $orderItem);

				if($insert){

					$prod = $this->admin_model->get_by_id($val['productId'], 'products');
					$totalProdQty = ($prod->qnty - 1);
					$updateQty = array(
						'qnty' => $totalProdQty
					);
					$update = $this->admin_model->update_row_data('products', array('id' => $val['productId'] ), $updateQty);
					if($update){
						$flag = true;
					}

				}
			}
			if(isset($multiPayData)){
				foreach($multiPayData as $k => $v){
					$cashItem = array(
						'order_id' 	=> $orderId,
						'price' 	=> $v['payAmount'],
						'pay_mode' 	=> $v['payMode'],
						'date_added'=> date("Y-m-d H:i:s")
					);
					$insertCash = $this->admin_model->insert_row('order_cash', $cashItem);
				}
			}
		}

		if($flag){
			$this->jsonResponse(200, 'success', 'Order Successfully Added!', array('id'=>$orderId));
		} else{
			$this->jsonResponse(500, 'failed', 'Something Went Wrong!', '');
		}

	}

	public function updatePos(){

		$sessionUser = $this->session->userdata('admin_loggedin');
		if(isset($sessionUser) && isset($sessionUser['store_id'])){
			$storeId = $sessionUser['store_id'];
		} else {
			$storeId = 0;
		}

		$order_id = $this->input->post('orderId');
		$customerId = $this->input->post('customerId');
		$saleType = $this->input->post('saleType');
		$billDate = $this->input->post('billDate');

		$grossVal = $this->input->post('grossVal');
		$netAmount = $this->input->post('totalPayable');
		$discountVal = $this->input->post('discountVal');
		$discountAmount = $this->input->post('discountAmount');
		$data = $this->input->post('data');

		$totalPaid = 0;
		$flag = false;
		$payMode = $orderStatus = '';
		
		if($this->input->post('saleType') == 'cash'){
			$payMode = 'cash';
			$orderStatus = 'paid';
			$totalPaid = $netAmount;
		} else if($this->input->post('saleType') == 'credit'){
			$payMode = 'credit';
			$orderStatus = 'credit';
		} else {
			$payMode = '';
			$orderStatus = 'draft';
		}

		$orderData = array(
			'store_id' 			=> $storeId,
			'customer_id' 		=> $this->input->post('customerId'),
			'invoice_no' 		=> time(),
			'gross_amount' 		=> $grossVal,
			'order_discount'	=> $discountVal,
			'discount_amount'	=> $discountAmount,
			'net_amount' 		=> $netAmount,
			'total_paid' 		=> $totalPaid,
			'order_date' 		=> date("Y-m-d H:i:s" , strtotime($this->input->post('billDate'))),
			'order_status' 		=> $orderStatus,
			'payment_mode' 		=> $payMode,
			'date_added' 		=> date("Y-m-d H:i:s")
		);

		$where = array('id' => $order_id );
		$update = $this->admin_model->update_row_data('orders', $where, $orderData);

		if($update){

			$whereDel = array('order_id' => $order_id );
			$delete = $this->admin_model->delete_data('order_items', $whereDel);
			if($delete)
			{
				foreach($data as $key => $val){
					$subTotal = ($val['unitPrice'] * $val['quantity']);
					$orderItem = array(
						'order_id' 		=> $order_id,
						'product_id' 	=> $val['productId'],
						'price' 		=> $val['unitPrice'],
						'sub_total' 	=> $subTotal,
						'quantity' 		=> $val['quantity'],
						'date_modified' => date("Y-m-d H:i:s")
					);

					$insert = $this->admin_model->insert_row('order_items', $orderItem);

					if($insert){

						$prod = $this->admin_model->get_by_id($val['productId'], 'products');
						$totalProdQty = ($prod->qnty - 1);
						$updateQty = array(
							'qnty' => $totalProdQty
						);
						$update = $this->admin_model->update_row_data('products', array('id' => $val['productId'] ), $updateQty);
						if($update){
							$flag = true;
						}

					}
				}
			}
		}

		if($flag){
			$this->jsonResponse(200, 'success', 'Order Successfully Added!', '');
		} else{
			$this->jsonResponse(500, 'failed', 'Something Went Wrong!', '');
		}

	}

	public function pos_update($id)
	{
		$data['session_user'] = $sessionUser = $this->session->userdata('admin_loggedin');
		
		if(isset($sessionUser) && isset($sessionUser['store_id'])){
			$where = array('store_id' => $sessionUser['store_id'],  'status'=>'1');
		} else {
			$where = array('status'=>'1');
		}

		$data['stores'] = $this->admin_model->get_data('stores', array('status'=>'1'), 'result_array');
		$data['customers'] = $this->admin_model->get_data('customers', array('status'=>'1'), 'result_array');
		$data['categories'] = $this->admin_model->get_data('categories', $where, 'result_array', 'category_name', 'asc');
		$data['brands'] = $this->admin_model->get_data('brands', array('status'=>'1'), 'result_array', 'brand_name', 'asc');
		$data['order'] = $this->admin_model->get_order_by_id($id);
		$data['order_items'] = $this->admin_model->get_orders_item_id($id);
		$this->load->view('config/template_start');
		$this->load->view('payments/pos_update', $data);
		$this->load->view('config/page_footer', $data);
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function jsonResponse($status, $statusType, $msg, $resData){

		$response = array(
			'status' => $status,
			'statusType' => $statusType,
			'message' => $msg,
			'data' => $resData
		);
		echo json_encode($response);
		return;
	}

}
