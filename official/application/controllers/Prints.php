<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH.'../vendor/autoload.php';
class Prints extends CI_Controller {
	
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

	public function print($type)
    {
		
		$today_dt = date('d-M-y h:ia');
		if($type == 'today'){
			$file_name = 'DailySalesReport_'.$today_dt.'.pdf';
			$data['day_type'] = 'Today';
			$orderBy = 'asc';
		}
		else{
			$file_name = 'OverallSalesReport_'.$today_dt.'.pdf';
			$data['day_type'] = 'Overall';
			$orderBy = 'asc';
		}
		
		$data['base_url'] = base_url();
		$data['daily_sales'] = $this->admin_model->get_all_sales($type, $orderBy, '1');
		$data['today_stats'] = $this->admin_model->get_sales_stats();
		$data['gpay_stats'] = $this->admin_model->get_gpay_stats();

		$html = $this->load->view('pages/sales_pdf', $data, true);
		
        $mpdf = new \Mpdf\Mpdf([
            'format'=>'A4',
            'margin_top'=>10,
            'margin_right'=>5,
            'margin_left'=>5,
            'margin_bottom'=>15,
        ]);
		$mpdf->SetHTMLFooter('<div style="display:flex; justify-content:space-between; padding-top:10px; margin-left:10px;"><span style="">Created at:'.$today_dt.'</span> <span style="color:#777;font-size:12px;">&nbsp;&nbsp;Receipt was created on a computer and is valid without the signature and seal.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>Page {PAGENO} of {nbpg}</span></div>');
        $mpdf->WriteHTML($html);
		//$mpdf->Output();
		$mpdf->Output($file_name, 'D'); 
    }

	public function createExcel(){

		$salesData = $this->admin_model->get_all_sales('all', 'desc', '1');
		$i = 1;               
		$name = "Daily Sales";

		$html = "<html>
					<body>
						<table border=1>
							<thead>
							<tr>
								<th>Sl.No</th> <th>Descriptions</th> <th>Amount</th>
								<th>Amount Mode</th> <th>Amount Type</th> <th>Sales Person</th> <th>Date Added</th>
							</tr> 
							</thead> 
						<tbody>";
		
		foreach ($salesData as $val){

			$dateAdded 	  = date('d-m-Y H:i a', strtotime($val['date_added']));
			$dateModified = date('d-m-Y H:i a', strtotime($val['date_modified']));

			if($val['amount_type'] == 'exp')
				$amountType = 'Expense';
			else if($val['amount_type'] == 'inc')
				$amountType = 'Income';
			else
				$amountType = 'Late Pay';
	
			$html .= "<tr>";	
			$html .= "<td>".$i."</td>";
			$html .= "<td>".$val['description']."</td>";
			$html .= "<td>".$val['amount']."</td>";
			$html .= "<td>".$val['amount_mode']."</td>";
			$html .= "<td>".$amountType."</td>";
			$html .= "<td>".$val['name']."</td>";
			$html .= "<td>".$dateAdded."</td>";
			$html .= "</tr>";
			$html .="";

			$i++;
        }
		
		$html .="</tbody></table> <body> <html>";
		$fileName = 'fullReport'.time().'.xls';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-disposition: attachment; filename='.$fileName.'');
		echo $html;
	}

	public function excelToday($type){

		$today_dt = date('d-M-y h:ia');
		$data['day_type'] = 'Today';
		$orderBy = 'asc';
		
		
		$salesData = $this->admin_model->get_all_sales($type, $orderBy, '1');

		$today_stats = $this->admin_model->get_sales_stats();
		$gpay_stats = $this->admin_model->get_gpay_stats();

		$i = 1;               
		$name = "Daily Sales";

		$html = "<html>
					<body>
						<table border=1>
							<thead>
							<tr>
								<th>Sl.No</th> <th>Descriptions</th> <th>Amount</th>
								<th>Amount Mode</th> <th>Amount Type</th> <th>Sales Person</th> <th>Date Added</th>
							</tr> 
							</thead> 
						<tbody>";
		
		foreach ($salesData as $val){

			$dateAdded 	  = date('d-m-Y H:i a', strtotime($val['date_added']));
			$dateModified = date('d-m-Y H:i a', strtotime($val['date_modified']));

			if($val['amount_type'] == 'exp')
				$amountType = 'Expense';
			else if($val['amount_type'] == 'inc')
				$amountType = 'Income';
			else
				$amountType = 'Late Pay';
	
			$html .= "<tr>";	
			$html .= "<td>".$i."</td>";
			$html .= "<td>".$val['description']."</td>";
			$html .= "<td>".$val['amount']."</td>";
			$html .= "<td>".$val['amount_mode']."</td>";
			$html .= "<td>".$amountType."</td>";
			$html .= "<td>".$val['name']."</td>";
			$html .= "<td>".$dateAdded."</td>";
			$html .= "</tr>";
			$html .="";

			$i++;
        }
		
		$html .="</tbody></table> ";

		$html .="<table border=1><thead>
		<tr>
			<th>Total Income</th>
			<th>Total Expenses</th>
			<th>Cash Available</th>
			<th>Gpay Income </th>
			<th>Gpay Expenses </th>
			<th>Gpay Available </th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td><strong>".$today_stats->today_income."</strong></td>
				<td><strong>".$today_stats->today_expense."</strong></td>
				<td><strong>".$today_stats->today_available."</strong></td>
				<td><strong>".$gpay_stats->gpay_income."</strong></td>
				<td><strong>".$gpay_stats->gpay_expense."</strong></td>
				<td><strong>".$gpay_stats->gpay_available."</strong></td>
			</tr>
		</tbody>
		</table>
		 <body> <html>";

		$fileName = 'DailySalesReport_'.$today_dt.'.xls';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-disposition: attachment; filename='.$fileName.'');
		echo $html;
	}

	public function commitments($type)
    {
		
		$today_dt = date('d-M-y h:ia');
		$file_name = 'Commitments_'.$type.'.pdf';
		
		$data['base_url'] = base_url();
		$data['due_type'] = $type;
		$data['dues'] = $this->admin_model->get_data('monthly_commitments', array('due_type'=>$type), 'result_array', 'monthly_date', 'asc');

		$html = $this->load->view('prints/commitments_pdf', $data, true);
		
        $mpdf = new \Mpdf\Mpdf([
            'format'=>'A4',
            'margin_top'=>10,
            'margin_right'=>5,
            'margin_left'=>5,
            'margin_bottom'=>15,
        ]);
		$mpdf->SetHTMLFooter('<div style="display:flex; justify-content:space-between; padding-top:10px; margin-left:10px;"><span style="">Created at:'.$today_dt.'</span> <span style="color:#777;font-size:12px;">&nbsp;&nbsp;Receipt was created on a computer and is valid without the signature and seal.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>Page {PAGENO} of {nbpg}</span></div>');
        $mpdf->WriteHTML($html);
		//$mpdf->Output();
		$mpdf->Output($file_name, 'D'); 
    }

}

?>