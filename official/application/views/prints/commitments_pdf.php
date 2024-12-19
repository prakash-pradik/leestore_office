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
                        <?php 
                            $dueType = 'Due'; 
                            if($due_type == 'due')
                                $dueType = 'Banking Due';
                            else if($due_type == 'interest')
                                $dueType = 'Interest';
                            else if($due_type == 'credit')
                                $dueType = 'Credit Cards';
                            else
                                $dueType = 'Jewels';
                        ?>
                        <h3 class="text-center" style="padding-bottom:10px"> <?php echo $dueType; ?> Reports </h3>
                        <div class="invoice">
                            <table>
                                <thead>
                                    <tr>
                                        <th width="10%" class="text-center">#</th>
                                        <th width="15%" class="text-center">Date</th>
                                        <th width="25%">Details</th>
                                        <th width="20%" class="text-right">Amount (₹)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($dues)) {
                                        $i = 1; 
                                        foreach($dues as $due){
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td class="text-center"><?php echo $due['monthly_date']; ?></td>
                                        <td class="">
                                            <h4 class="text-info" style="text-transform:capitalize;">
                                              <?php echo $due['details']; ?>
                                            </h4>
                                        </td>
                                        <td class="text-right">
                                            <h4>₹ <?php echo $due['amount']; ?><h4>
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