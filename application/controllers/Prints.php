<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* require FCPATH.'vendor/excel/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; */

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

	/* public function createExcelTest() {

		$fileName = 'fullReport'.time().'.xlsx';  
		$salesData = $this->admin_model->get_all_sales('all', 'desc');		
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet(); 
		
       	$sheet->setCellValue('A1', 'Sl.No');
        $sheet->setCellValue('B1', 'Descriptions');
        $sheet->setCellValue('C1', 'Amount');
        $sheet->setCellValue('D1', 'Amount Mode');
		$sheet->setCellValue('E1', 'Sales Type');
		$sheet->setCellValue('F1', 'Sales Person');
		$sheet->setCellValue('G1', 'Date Added');
        $rows = 2; $i = 1;
        foreach ($salesData as $val){

			$dateAdded 	  = date('d-m-Y H:i a', strtotime($val['date_added']));
			$dateModified = date('d-m-Y H:i a', strtotime($val['date_modified']));

			if($val['amount_type'] == 'exp')
				$amountType = 'Expense';
			else if($val['amount_type'] == 'inc')
				$amountType = 'Income';
			else
				$amountType = 'Late Pay';

            $sheet->setCellValue('A' . $rows, $i);
            $sheet->setCellValue('B' . $rows, $val['description']);
            $sheet->setCellValue('C' . $rows, $val['amount']);
            $sheet->setCellValue('D' . $rows, $val['amount_mode']);
	    	$sheet->setCellValue('E' . $rows, $amountType);
			$sheet->setCellValue('F' . $rows, $val['name']);
			$sheet->setCellValue('G' . $rows, $dateAdded);
            $rows++; $i++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("uploads/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
		redirect(base_url()."/uploads/".$fileName);
    } */

	public function createExcel(){

		$salesData = $this->admin_model->get_all_sales('all', 'desc');
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

}

?>