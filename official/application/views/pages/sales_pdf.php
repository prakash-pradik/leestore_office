<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-image: url("http://billing.leestoreindia.com/assets/img/invoice/lee_gray.jpg");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;   
        }
        h5{
            color:#e67e22;
        }
        .text-right{
            text-align: right;
        }
    </style>
</head>
<body>
    <?php 
        header("Content-type: image"); 
        $sessionUser = $this->session->userdata('user_loggedin');
        $storeId = $sessionUser['store_id'];
    ?>
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
                                            <?php if($storeId == 2) { ?>
                                                <img src="http://billing.leestoreindia.com/assets/img/invoice/leeq_logo.png" width="150" alt="">
                                            <?php } else { ?>
                                                <img src="http://billing.leestoreindia.com/assets/img/invoice/logo.jpg" width="100" alt="">
                                            <?php } ?>
                                        </a>
                                    </td>
                                    <td class="text-right">
                                        <?php if($storeId == 2) { ?>
                                            <p># 9952, AMA Nagar, Nizam Colony</p>
                                        <?php } else { ?>
                                            <p># 4765/5, Ayyanarpuram 1st Street,</p>
                                        <?php } ?>
                                        <p>Alangudi Road, Pudukkottai,</p>
                                        <p>+91- 99945 78802</p>
                                        <p>+91- 96265 89922</p>
                                        <p>info@leestoreindia.com</p>
                                    </td>
                                </tr>
                            </table>
                        </header>
                        <h3 class="text-center" style="padding-bottom:10px">
                            
                            <?php 
                                if($day_type == 'Today'){
                                    echo 'Today Sales Report ('.date("d-M-Y").')';
                                } else if($day_type == 'Yesterday'){
                                    echo 'Today Sales Report ('.date("d-M-Y", strtotime("yesterday")).')';
                                } else {
                                    echo 'Overall Sales Report';
                                }
                            ?>
                        </h3>
                        <div class="invoice">
                            <table>
                                <thead>
                                    <tr>
                                        <th width="6%" class="text-center">#</th>
                                        <th width="19%">Details</th>
                                        <th width="20%" class="text-right">Debit Amt(₹)</th>
                                        <th width="20%" class="text-right">Credit Amt(₹)</th>
                                        <th width="18%">Sales Person</th>
                                        <th width="17%">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($daily_sales)) {
                                        $i = 1; 
                                        foreach($daily_sales as $sale){
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo sprintf("%02d", $i); ?></td>
                                        <td class="" style="text-transform:capitalize;"><?php echo $sale['description']; ?></td>
                                        <td class="text-right">
                                            <h4 class="text-danger">
                                                <?php 
                                                    if($sale['amount_type'] == 'exp') 
                                                        echo '₹'.$sale['amount'];
                                                    
                                                    if($sale['amount_type'] == 'exp' && $sale['amount_mode'] == 'open_cash') 
                                                        echo '<small class="text-bold text-warning" style="font-size:12px;"> (Open Cash)</small>';
                                                    
                                                    if($sale['amount_type'] == 'exp' && $sale['amount_mode'] == 'gpay') 
                                                        echo '<small class="text-bold text-warning" style="font-size:12px;"> (GPay)</small>';
                                                    
                                                    if($sale['amount_type'] == 'exp' && $sale['amount_mode'] == 'open_gpay') 
                                                        echo '<small class="text-bold text-warning" style="font-size:12px;"> (Open GPay)</small>';
                                                ?>
                                            </h4>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="text-success">
                                                <?php 
                                                    if($sale['amount_type'] != 'exp') 
                                                        echo '₹'.$sale['amount']; 
                                                    
                                                    if($sale['amount_type'] != 'exp' && $sale['amount_mode'] == 'open_cash') 
                                                        echo '<small class="text-bold text-warning" style="font-size:12px;"> (Open Cash)</small>';

                                                    if($sale['amount_type'] != 'exp' && $sale['amount_mode'] == 'open_gpay') 
                                                        echo '<small class="text-bold text-warning" style="font-size:12px;"> (Open GPay)</small>';

                                                    if($sale['amount_type'] != 'exp' && $sale['amount_mode'] == 'gpay') 
                                                        echo '<small class="text-bold text-warning" style="font-size:12px;"> (GPay)</small>';

                                                    if($sale['amount_type'] == 'late') 
                                                        echo '<small class="text-bold text-warning" style="font-size:12px;"> (Late Pay)</small>';

                                                    if($sale['amount_type'] == 'card') echo '<small class="text-bold text-warning" style="font-size:12px;"> (Card Pay)</small>'; 
                                                ?>
                                            </h4>
                                        </td>
                                        <td class=""><?php echo $sale['name']; ?></td>
                                        <td class="">
                                            <?php echo date('d-m-y H:i', strtotime($sale['date_added'])); ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                        }
                                    }?>
                                    
                                </tbody>
                            </table>
							<br/>
                            <?php if($day_type == 'Today' || $day_type == 'Yesterday') {  ?>
							<table>
                                <thead>
                                    <tr>
                                        <th class="text-center">Cash Income (₹)</th>
                                        <th class="text-center">Cash Expenses (₹)</th>
                                        <th class="text-center">Cash Available (₹)</th>
										<th class="text-center">Gpay Income (₹)</th>
                                        <th class="text-center">Gpay Expenses (₹)</th>
                                        <th class="text-center">Gpay Available (₹)</th>
                                    </tr>
                                </thead>
								<tbody>
									<tr>
										<td class="text-center text-info"><h3><?php if(!empty($today_stats)) { if(!empty($today_stats->today_income)) echo $today_stats->today_income; else echo '0'; } ?></h3></td>
										<td class="text-center text-danger"><h3><?php if(!empty($today_stats)) { if(!empty($today_stats->today_expense)) echo $today_stats->today_expense; else echo '0'; } ?></h3></td>
										<td class="text-center text-success"><h3><?php if(!empty($today_stats)) { if(!empty($today_stats->today_available)) echo $today_stats->today_available; else echo '0'; } ?></h3></td>
										
                                        <td class="text-center text-info"><h3><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_income)) echo $gpay_stats->gpay_income; else echo '0'; } ?></h3></td>
										<td class="text-center text-warning"><h3><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_expense)) echo $gpay_stats->gpay_expense; else echo '0'; } ?></h3></td>
										<td class="text-center text-success"><h3><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_available)) echo $gpay_stats->gpay_available; else echo '0'; } ?></h3></td>
									</tr>
								</tbody>
							</table>
                            <?php } ?>
                        </div>
						<?php if($day_type == 'Today') {  ?>
                        <div style="width:200px; float:right;">
                            <div class="footer-sign" style="height:60px;text-align:center;" >
                            </div>
                            <div style="text-align:center;" >
                                <h4>Signature</h4>    
                            </div>
                        </div>
						<?php } ?>
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>