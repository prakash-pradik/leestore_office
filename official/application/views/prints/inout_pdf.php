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
                                            <img src="http://billing.leestoreindia.com/assets/img/invoice/logo.jpg" width="100" alt="">
                                        </a>
                                    </td>
                                    <td class="text-right">
                                        <p># 4765/5, Ayyanarpuram 1st Street,</p>
                                        <p>Alangudi Road, Pudukkottai,</p>
                                        <p>+91- 99945 78802</p>
                                        <p>+91- 96265 89922</p>
                                        <p>info@leestoreindia.com</p>
                                    </td>
                                </tr>
                            </table>
                        </header>
                        <h3 class="text-center" style="text-transform:capitalize;padding-bottom:10px"> <?php echo $amount_type; ?> Reports </h3>
                        <div class="invoice">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-center" width="10%">#</th>
                                        <th>Name</th>
                                        <th class="text-right" width="26%">Balance Amount (₹)</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($amounts)) {
                                        $i = 1; 
                                        foreach($amounts as $amount){
                                            if($amount['total_available'] !== '0'){
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td><?php echo $amount['name']; ?></td>
                                        <td class="text-right">
                                            <h4><?php echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $amount['total_available']); ?> ₹<h4>
                                        </td>
                                        <td>
                                            <h4 style="text-transform:capitalize;">
                                              <?php echo $amount['notes']; ?>
                                            </h4>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                        } }
                                    }?>
                                    
                                </tbody>
                            </table>
							<h4>Total Amount: ₹ <?php 
                                if(!empty($amount_stats)) { 
                                    if(!empty($amount_stats->total_credit)){
                                        $amt = ($amount_stats->total_debit - $amount_stats->total_credit);
                                        echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $amt);
                                    }
                                    else echo '0'; 
                                } else echo '0'; ?>
                            </h4>
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