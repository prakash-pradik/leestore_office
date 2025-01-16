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
                        <h3 class="text-center" style="padding-bottom:10px"> Products Report</h3>
                        <div class="invoice">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
										<th>Category</th>
										<th>Price (₹)</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($products)) {
										$i = 1; 
										foreach($products as $prod){
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td style="text-transform:capitalize;"><?php echo $prod['product_name']; ?></td>
										<td style="text-transform:capitalize;"><?php echo $prod['category_name']; ?></td>
										<td class="text-capitalize">₹ <?php echo number_format($prod['sell_price'],2); ?></td>
                                        <td>
                                            <h4 class="text-danger"> <?php echo $prod['qnty']; ?> </h4>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                        }
                                    }?>
                                    
                                </tbody>
                            </table>
                            
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