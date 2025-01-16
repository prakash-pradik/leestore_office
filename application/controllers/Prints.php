<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';

class Prints extends CI_Controller {

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
		redirect(base_url('sales_list/week'));
	}

	public function productsPdf()
	{
		$today_dt = date('d-M-y h:ia');
		$file_name = 'ProductsReport_'.$today_dt.'.pdf';

		$data['products'] = $this->admin_model->get_all_products();
		$html = $this->load->view('prints/products_pdf', $data, true);
		$mpdf = new \Mpdf\Mpdf([
            'format'=>'A4',
            'margin_top'=>10,
            'margin_right'=>5,
            'margin_left'=>5,
            'margin_bottom'=>15,
        ]);
        $mpdf->WriteHTML($html);
		$mpdf->Output($file_name, 'I');	
	}

}
