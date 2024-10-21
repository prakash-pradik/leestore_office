<!-- Page content -->
<div id="page-content">
    <!-- Invoice Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-inr"></i>Invoice
            </h1>
        </div>
    </div>
    <!-- END Invoice Header -->

    <!-- Invoice Block -->
    <div class="block full">
        <!-- Invoice Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="<?php echo base_url('sales/invoice_pdf/'.$order->id); ?>" target="_blank" class="btn btn-alt btn-info"><i class="fa fa-print"></i> Print</a>
            </div>
            <h2><strong>Invoice</strong> #<?php echo $order->invoice_no; ?></h2>
        </div>
        <!-- END Invoice Title -->
        
        <!-- Invoice Content -->
        <div class="row block-section">
            <!-- Company Info -->
            <div class="col-md-9 customer-details">
                <h4><?php echo $order->customer_name; ?> </h4>
                <address>
                    <?php echo $order->customer_address; ?><br>
                    <i class="fa fa-phone"></i> +91 - <?php echo $order->customer_phone; ?><br>
                </address>
            </div>
            <!-- END Company Info -->

            <!-- Client Info -->
            <div class="col-md-3 text-right">
                <table class="invoice-block" style="width:80%; float:right;"> 
                    <tr>
                        <td class="text-right"><h5>Invoice No: </h5></td>
                        <td><h5><?php echo $order->invoice_no; ?></h5></td>
                    </tr>
                    <tr>
                        <td class="text-right"><h5>Invoice Date: </h5></td>
                        <td><h5><?php echo date('d-m-Y', strtotime($order->order_date)); ?></h5></td>
                    </tr>
                </table>
            </div>
            <!-- END Client Info -->
        </div>
        <!-- END 2 Column grid -->

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th style="width: 8%;" class="text-center">Sl.NO</th>
                        <th style="width: 30%;">DESCRIPTION OF GOODS</th>
                        <th style="width: 10%;" class="text-center">HSN/SAC</th>
                        <th style="width: 8%;" class="text-center">QTY</th>
                        <th style="width: 10%;" class="text-center">UNIT PRICE</th>
                        <th style="width: 12%;" class="text-right">AMOUNT</th>
                    </tr>
                </thead>
                <tbody >
                    <?php 
                    $count = 0;
                    if(!empty($order_items)) {
                        $count = count($order_items);
                        $i = 1;  $quantity = 0;
                        foreach($order_items as $items){
                    
                    ?>
                    <tr>
                        <td class="text-center"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
                        <td class="product-details">
                            <h5>
                                <?php 
                                    echo $items['product_name'];
                                    if($items['product_imei1'] != "" || $items['product_imei2'] != "" || $items['product_serial'] != ""){
                                        if($items['product_imei1'] != ""){
                                            echo "<br/><small>( IMEI1: ".$items['product_imei1']."";
                                        }
                                        if($items['product_imei2'] != ""){
                                            echo "<br/>IMEI2: ".$items['product_imei1']."";
                                        }

                                        if($items['product_serial'] != ""){
                                            echo "<br/><small>( Serial: ".$items['product_serial']."";
                                        }
                                        echo " )</small>";   
                                    } 
                                    if($items['product_model'] != ""){
                                        echo ' ('.$items['product_model'].')';
                                    }
                                ?>
                            </h5>
                        </td>
                        <td></td>
                        <td class="text-center"><strong><?php echo $items['quantity']; ?></strong></td>
                        <td class="text-center"><?php echo number_format($items['price']); ?></td>
                        <td class="text-right"><strong><?php echo number_format($items['sub_total'],2); ?></strong></td>
                    </tr>
                    <?php   $i++; 
                            $quantity = $quantity + $items['quantity'];
                            } 
                        } 
                    ?>
                    <?php if($order->order_discount !== 0){ ?>
                        <tr class="discount_row">
                            <td></td><td></td><td></td><td></td>
                            <td class="text-left"> 
                                <h5>Discount : <?php echo $order->order_discount; ?>%</h5>
                            </td>
                            <td class="text-right">
                                <h5>
                                    <strong>
                                    <?php 
                                        $disAmt = ($order->order_discount / 100) * $order->gross_amount; 
                                        echo number_format($disAmt,2);
                                    ?>
                                    </strong>
                                </h5>
                            </td>
                        </tr>
                    <?php  } ?>
                    <tr>
                        <td colspan="2" style="max-height: 70px !important;">
                            <div class="alert alert-success alert-dismissable" style="margin-bottom:0px;">
                            <?php 
                                if($order->payment_mode == 'multipay'){
                                    if(isset($order_cash)){
                                        foreach($order_cash as $key => $val){
                                            echo '<h4 class="text-capitalize">'.$val['pay_mode'].': ₹'.number_format($val['price'],2).'</h4>';
                                        }
                                    }

                                    if($order->balance_amount !== "" && $order->balance_amount !== "0.00"){
                                        echo '<h4 class="text-capitalize" style="color:red;">Balance : ₹'.number_format($order->balance_amount,2).'</h4>';
                                    }
                                }

                                if($order->payment_mode == 'upi' || $order->payment_mode == 'cash'){
                                    echo '<h4 class="text-capitalize">'.$order->payment_mode.' : ₹'.number_format($order->total_paid,2).'</h4>';
                                }
                            ?>
                            </div>
                        </td>
                        <td ></td>
                        <td class="text-center"> 
                            <strong><?php echo $order->quantity; ?></strong>
                        </td>
                        <td>
                            <h4>CSGT : 9%</h4>
                            <h4>SSGT : 9%</h4>
                        </td>
                        <td class="text-right">
                            <h4>TOTAL</h4>
                            <h4><?php echo number_format($order->net_amount,2); ?></h4>
                        </td>
                    </tr>
            
                </tbody>
            </table>
        </div>
        <!-- END Table -->

        <!--
        <div class="invoice-content" id="invoiceContent">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo base_url(IMG); ?>/invoice/top_border.png" class="top_border" alt="top border">
                </div>
            </div>
            <div class="invoice-content-block">
                <div class="row block-section">
                    <div class="col-sm-7">
                        <div class="invoice-logo d-flex justify-content-between align-items-end">
                            <img src="<?php echo base_url(IMG); ?>/invoice/logo.png" alt="photo" >
                            <table> 
                                <tr>
                                    <td class="text-right"><h5>Invoice No: </h5></td>
                                    <td><h5><?php echo $order->invoice_no; ?></h5></td>
                                </tr>
                                <tr>
                                    <td class="text-right"><h5>Invoice Date: </h5></td>
                                    <td><h5><?php echo date('d-m-Y', strtotime($order->order_date)); ?></h5></td>
                                </tr>
                            </table>
                        </div>
                        <div class="customer-details">
                            <table>
                                <tr>
                                    <td><h5>M/S :</h5></td><td class="dotted-line"><h5> <?php echo $order->customer_name; ?> </h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Contact :</h5></td><td class="dotted-line"><h5><?php echo $order->customer_phone; ?></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Address :</h5></td><td class="dotted-line"><h5> <?php echo $order->customer_address; ?></h5></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 company-details">
                        <table>
                            <tr rowspan="2">
                                <td class="phone-section">
                                    <img src="<?php echo base_url(IMG); ?>/invoice/whatsapp_logo.png" class="wa_logo" alt="wa_logo">
                                    <div>
                                        <h3>+91 99945 78802</h3>
                                        <h3>+91 96265 89922</h3>
                                    </div>
                                </td>
                                <td class="qr-section" rowspan="2">
                                    <img src="<?php echo base_url(IMG); ?>/invoice/qrcode.png" alt="qr_code">
                                </td>
                            </tr>
                            <tr class="text-left">
                                <td class="link-section">
                                    <h5>info@leestoreindia.com</h5>
                                    <h5>www.leestoreindia.com</h5>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="social-section d-flex align-items-center">
                                    <img src="<?php echo base_url(IMG); ?>/invoice/instagram_logo.png" class="instagram_logo" alt="insta_logo">
                                    <div>
                                        <h6>@leestore_india</h6>
                                        <h6>@pandijegan.k</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="gst-section">
                                    <h5>GSTIN : 33DRNPP3773C1ZM </h5> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="address-section">
                                    <h5>
                                        #4765/5, Ayyanarpuram 1st Street, <br/>
                                        Alangudi Road, Pudukkottai - 622001<br/>
                                        Tamilnadu, India.
                                    </h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <table style="width:93%;">
                <tr><td>
                <div class="descrip-block">
                    <img src="http://localhost/Git_projects/leestore_billing/assets/img/invoice/tab_bg1.png" alt="tab img" style="width:100%; height:630px">
                    <table class="table table-vcenter table-condensed table-borderless products_list">
                        <thead>
                            <tr>
                                <th style="width: 8%;" class="text-center">S.NO</th>
                                <th style="width: 30%;">DESCRIPTION OF GOODS</th>
                                <th style="width: 10%;" class="text-center">HSN/SAC</th>
                                <th style="width: 8%;" class="text-center">QTY</th>
                                <th style="width: 10%;" class="text-center">UNIT PRICE</th>
                                <th style="width: 12%;" class="text-right">AMOUNT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $count = 0;
                            if(!empty($order_items)) {
                                $count = count($order_items);
                                $i = 1;  $quantity = 0;
                                foreach($order_items as $items){
                            
                            ?>
                            <tr>
                                <td class="text-center"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
                                <td>
                                    <h5><?php echo $items['product_name']; ?></h5>
                                </td>
                                <td></td>
                                <td class="text-center"><strong><?php echo $items['quantity']; ?></strong></td>
                                <td class="text-center"><?php echo number_format($items['price']); ?></td>
                                <td class="text-right"><strong><?php echo number_format($items['sub_total'],2); ?></strong></td>
                            </tr>
                            <?php   $i++; 
                                    $quantity = $quantity + $items['quantity'];
                                    } 
                                } 
                            ?>
                            <?php
                                for ($x = $count; $x < 5; $x++) {
                                    echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
                                }
                            ?>
                            <?php if($order->order_discount !== 0){ ?>
                                <tr class="discount_row">
                                    <td></td><td></td><td></td><td></td>
                                    <td class="text-left"> 
                                        <h5>Discount : <?php echo $order->order_discount; ?>%</h5>
                                    </td>
                                    <td class="text-right">
                                        <h5>
                                            <strong>
                                            <?php 
                                                $disAmt = ($order->order_discount / 100) * $order->gross_amount; 
                                                echo number_format($disAmt,2);
                                            ?>
                                            </strong>
                                        </h5>
                                    </td>
                                </tr>
                            <?php  } ?>
                            <tr>
                                <td colspan="3" style="max-height: 70px !important;">
                                    <div class="product-logos d-flex align-items-center">
                                        <img src="<?php echo base_url(IMG); ?>/invoice/apple_logo.png" class="apple_logo" alt="apple logo">
                                        <img src="<?php echo base_url(IMG); ?>/invoice/leeq_logo.png" class="leeq_logo" alt="leeq logo">
                                        <img src="<?php echo base_url(IMG); ?>/invoice/hello.png" class="hello_logo" alt="leeq logo">
                                    </div>
                                </td>
                                <td class="text-center"> 
                                    <strong><?php echo $order->quantity; ?></strong>
                                </td>
                                <td>
                                    <h4>CSGT : 9%</h4>
                                    <h4>SSGT : 9%</h4>
                                </td>
                                <td class="text-right">
                                    <h4>TOTAL</h4>
                                    <h4><?php echo number_format($order->net_amount,2); ?></h4>
                                </td>
                            </tr>
                    
                        </tbody>
                    </table>
                </div>
                </td></tr>
                </table>
                <div class="footer-block">
                    <table>
                        <tr>
                            <td style="width:60%">
                                <h5>Terms & Conditions</h5>
                                <p>Note: Mobile handset and laptop system and all electronics goods are warranted for a period defined by the respective manufactures against defect in material & workmanship Lee Store is not given warrant and does not hold out any warranty of product sold.</p>
                                <h6>GOODS RECEIVED IN WORKING CONDITION</h6>
                            </td>
                            <td class="sale-person">
                                <h4>SALES PERSON:</h4>
                            </td>
                        </tr>

                        <tr class="signature-row">
                            <td>
                                <h5>Customer Signature</h5>
                            </td>
                            <td class="sale-person">
                                <h5>Signature</h5>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo base_url(IMG); ?>/invoice/bottom_border.png" class="bottom_border" alt="bottom border">
                </div>
            </div>
        </div> -->

        <!-- END Invoice Content -->
    </div>
    <!-- END Invoice Block -->
</div>
<!-- END Page Content -->