<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';

class Sales extends CI_Controller {
	
	public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
	  //$this->load->library('pdf_report');
	  
	  date_default_timezone_set('Asia/Kolkata'); 

	  if(!$this->session->userdata('admin_loggedin'))
		{
			redirect(base_url('login'), 'refresh');
		}
	}
	
	public function index()
	{
		redirect(base_url('sales_list'));
	}

	public function sales_list($type)
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['stats'] = $this->admin_model->get_order_stats($type);
		$data['prev_amount'] = $this->admin_model->get_prev_sales();
		$data['orders'] = $this->admin_model->get_all_orders('paid', '', $type);
		$this->load->view('config/template_start');
		$this->load->view('config/page_head', $data);
		$this->load->view('sales/sales_list', $data);
		$this->load->view('config/page_footer', $data);
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}
	public function sales_draft($type)
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['orders'] = $this->admin_model->get_all_orders('draft', '', $type);
		$this->load->view('config/template_start');
		$this->load->view('config/page_head', $data);
		$this->load->view('sales/sales_draft', $data);
		$this->load->view('config/page_footer', $data);
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}
	public function sales_credit($type)
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['orders'] = $this->admin_model->get_all_orders('credit', '', $type);
		$this->load->view('config/template_start');
		$this->load->view('config/page_head', $data);
		$this->load->view('sales/sales_credit', $data);
		$this->load->view('config/page_footer', $data);
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function invoice($id)
	{
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['order'] = $this->admin_model->get_order_by_id($id);
		$data['order_items'] = $this->admin_model->get_orders_item_id($id);
		$data['order_cash'] = $this->admin_model->get_data('order_cash', array('order_id'=>$id), 'result_array');
		$this->load->view('config/template_start');
		$this->load->view('config/page_head', $data);
		$this->load->view('sales/invoice_view', $data);
		$this->load->view('config/page_footer');
		$this->load->view('config/template_scripts');
		$this->load->view('config/template_end');
	}

	public function invoice_pdf($id)
	{
		$today_dt = date('d-M-y h:ia');
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['order'] = $this->admin_model->get_order_by_id($id);
		$data['order_items'] = $this->admin_model->get_orders_item_id($id);
		$html = $this->load->view('sales/invoice_pdf', $data, true);
		
		$file_name = 'OverallSalesReport.pdf';
		$bootUrl = "http://localhost/Git_projects/leestore_billing/assets/css/bootstrap.min.css";
		$stylesheet = file_get_contents($bootUrl);
		//exit();
		$mpdf = new \Mpdf\Mpdf([
            'format'=>'A4',
            'margin_top'=>0,
            'margin_right'=>0,
            'margin_left'=>0,
            'margin_bottom'=>-1,
        ]);
		
		$mpdf->WriteHTML($html);
		$mpdf->Output('test.pdf', 'I');	 		
	}

	/* public function test_pdf(){
		$id = 1;
		$today_dt = date('d-M-y h:ia');
		$data['session_user'] = $this->session->userdata('admin_loggedin');
		$data['order'] = $this->admin_model->get_order_by_id($id);
		$data['order_items'] = $this->admin_model->get_orders_item_id($id);
		$this->load->view('sales/invoice_pdf', $data);
	} */

	public function test(){
		echo (100 * (6000 - 5000) / 5000);
	}

}
