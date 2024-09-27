<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Sales Print</title>
    <style>
       
        header{
            margin-bottom:20px;
        }
        table{
            width: 100%;
        }
        .invoice table {            
            border-spacing: 0;
            margin-bottom: 10px;
            border: 1px solid ;
        }

        .invoice table tr,
        .invoice table tr td,
        .invoice table tr th {
            padding: 10px;
            border: 1px solid;
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: bold;
            font-size: 16px;
        }
        footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0;
        }
        .invoice, .footer-sign{
            background-image: url("http://office.leestoreindia.com/assets/img/lee_gray.png");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;   
        }
        h5{
            color:#e67e22;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card" style="padding-top:1rem;">
            <div class="card-body">
                <div class="overflow-auto">
                    <div style="min-width: 600px">
                        <header>
                            <table>
                                <tr>
                                    <td>
                                        <a href="javascript:;">
                                            <img src="http://office.leestoreindia.com/assets/img/lee_store.png" width="100" alt="">
                                        </a>
                                    </td>
                                    <td class="text-right">
                                        <div># 4765/5, Ayyanarpuram 1st Street,</div>
                                        <div>Alangudi Road, Pudukkottai,</div>
                                        <div>+91- 99945 78802</div>
                                        <div>+91- 96265 89922</div>
                                        <div>info@leestoreindia.com</div>
                                    </td>
                                </tr>
                            </table>
                        </header>
                        <h3 class="text-center" style="padding-bottom:10px"><?php echo $day_type; ?> Sales Report <?php if($day_type == 'Today') { echo '('.date("d-M-Y").')'; } ?></h3>
                        <div class="invoice">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th>Details</th>
                                        <th class="text-right">Debit Amt(₹)</th>
                                        <th class="text-right">Credit Amt(₹)</th>
                                        <th>Sales Person</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($daily_sales)) {
                                        $i = 1; 
                                        foreach($daily_sales as $sale){
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td class="" style="text-transform:capitalize;"><?php echo $sale['description']; ?></td>
                                        <td class="text-right"><h4 class="text-danger"><?php if($sale['amount_type'] == 'exp') echo $sale['amount'].' ₹'; ?></h4></td>
                                        <td class="text-right"><h4 class="text-success"><?php if($sale['amount_type'] != 'exp') echo $sale['amount'].' ₹'; if($sale['amount_type'] == 'late') echo '<h5 class="text-bold"> (Late Pay)</h5>'; ?></h4></td>
                                        <td class=""><?php echo $sale['name']; ?></td>
                                        <td class="">
                                            <?php echo date('d-m-Y h:i a', strtotime($sale['date_added'])); ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                        }
                                    }?>
                                    
                                </tbody>
                            </table>
							<br/>
                            <?php if($day_type == 'Today') {  ?>
							<table>
                                <thead>
                                    <tr>
                                        <th class="text-center">Total Income (₹)</th>
                                        <th class="text-center">Total Expenses (₹)</th>
                                        <th class="text-center">Cash Available (₹)</th>
										<th class="text-center">Gpay Income (₹)</th>
                                        <th class="text-center">Gpay Expenses (₹)</th>
                                        <th class="text-center">Gpay Available (₹)</th>
                                    </tr>
                                </thead>
								<tbody>
									<tr>
										<td class="text-center"><h3><?php if(!empty($today_stats)) { if(!empty($today_stats->today_income)) echo $today_stats->today_income; else echo '0'; } ?></h3></td>
										<td class="text-center"><h3><?php if(!empty($today_stats)) { if(!empty($today_stats->today_expense)) echo $today_stats->today_expense; else echo '0'; } ?></h3></td>
										<td class="text-center"><h3><?php if(!empty($today_stats)) { if(!empty($today_stats->today_available)) echo $today_stats->today_available; else echo '0'; } ?></h3></td>
										<td class="text-center"><h3><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_income)) echo $gpay_stats->gpay_income; else echo '0'; } ?></h3></td>
										<td class="text-center"><h3><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_expense)) echo $gpay_stats->gpay_expense; else echo '0'; } ?></h3></td>
										<td class="text-center"><h3><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_available)) echo $gpay_stats->gpay_available; else echo '0'; } ?></h3></td>
									</tr>
								</tbody>
							</table>
                            <?php } ?>
                        </div>
                        
                        <div style="width:200px; float:right;">
                            <div class="footer-sign" style="height:60px;text-align:center;" >
                            </div>
                            <div style="text-align:center;" >
                                <h4>Signature</h4>    
                            </div>
                        </div>
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>