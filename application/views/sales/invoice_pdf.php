<html>
<head>
	<title>Invoice Pdf</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div id="page-content">
		<div class="container" style="padding:0px;">
			<?php 
				if($order->store_id == 1){
					$image = 'http://billing.leestoreindia.com/assets/img/invoice/bg_ls.jpg';
					$width1 = '35%';
				} else{
					$image = 'http://billing.leestoreindia.com/assets/img/invoice/bg_leeq.jpg';
					$width1 = '35%';
				}
			?>
			
			<div style="background-image: url('<?php echo $image; ?>'); background-size: contain; height:100%; width:100%">
				
				<div class="invoice-content-block" style="padding-left: 55px; padding-right: 50px; padding-top: 3px;">
					<div class="block-section" style="margin-top:145px; margin-left:290px;">
						<p style="font-size:13px;margin-bottom:0px;"><?php echo $order->invoice_no; ?></p>
						<p style="font-size:13px;margin-top:-4px;"><?php echo date('d-m-Y', strtotime($order->order_date)); ?></p>
					</div>
					
					<div class="block-section" style="margin-top:28px; margin-left:70px;">
						<p style="font-size:16px;margin-bottom:0px;"><?php echo $order->customer_name; ?></p>
						<p style="font-size:16px;margin-top:7px;"><?php if($order->customer_address !== '') echo $order->customer_address; else echo '-'; ?></p>
						<p style="font-size:16px;margin-top:10px;"><?php if($order->customer_phone !== '') echo $order->customer_phone; else echo '-'; ?></p>
					</div>
					
					<div>
						<table class="table table-vcenter products_list" style="margin-top:90px;background-color:rgba(255, 0, 0, 0);">
							<tbody>
								<?php if(!empty($order_items)) {
									$count = count($order_items);
									$i = 1;  $quantity = 0;
									foreach($order_items as $items){
								
								?>
								<tr style="">
									<td style="text-align:center; width:5%; background-color:rgba(255, 0, 0, 0);height:50px;"><p style="font-size:16px;"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></p></td>
									<td width="<?php echo $width1; ?>" style="background-color:rgba(255, 0, 0, 0); padding-left:28px;">
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
									<td style="width:20%; background-color:rgba(255, 0, 0, 0);"></td>
									
									<td width="10%" style="background-color:rgba(255, 0, 0, 0);"><strong><?php echo $items['quantity']; ?></strong></td>
									<td width="10%" style="background-color:rgba(255, 0, 0, 0);"><?php echo number_format($items['price']); ?></td>
									<td class="text-right" style="background-color:rgba(255, 0, 0, 0);"><strong><?php echo number_format($items['sub_total'],2); ?></strong></td>
								</tr>
								<?php $i++; 
								$quantity = $quantity + $items['quantity'];
										} 
									} 
								?>
								<?php
									for ($x = $count; $x < 5; $x++) {
										echo "<tr><td colspan='5' style='background-color:rgba(255, 0, 0, 0);height:50px;'></td></tr>";
									}
								?>
								<?php if($order->order_discount !== 0){ ?>
									<tr class="discount_row">
										<td colspan="4" style="background-color:rgba(255, 0, 0, 0);"></td>
										<td class="text-left" style="background-color:rgba(255, 0, 0, 0);"> 
											<h5>Discount : <?php echo $order->order_discount; ?>%</h5>
										</td>
										<td class="text-right" style="background-color:rgba(255, 0, 0, 0);">
											<h5>
												<?php 
													$disAmt = ($order->order_discount / 100) * $order->gross_amount; 
													echo number_format($disAmt,2);
												?>
											</h5>
										</td>
									</tr>
								<?php  } ?>
								<tr>
									<td colspan="3" style="background-color:rgba(255, 0, 0, 0);"></td>
									<td class="text-center" style="background-color:rgba(255, 0, 0, 0);height:20px;"></td>
									<td style="background-color:rgba(255, 0, 0, 0);"><h4 style="padding-top:50px"></h4></td>
									<td class="text-right" style="background-color:rgba(255, 0, 0, 0);"></td>
								</tr>
								<tr>
									<td colspan="3" style="background-color:rgba(255, 0, 0, 0);"></td>
									<td class="text-center" style="background-color:rgba(255, 0, 0, 0);"> 
										<?php //echo $quantity; ?>
									</td>
									<td style="background-color:rgba(255, 0, 0, 0);">
										<h4>9</h4>
										<h4>9</h4>
									</td>
									<td class="text-right" style="background-color:rgba(255, 0, 0, 0);">
										<h4 style="margin-top:20px;"><?php echo number_format($order->net_amount,2); ?></h4>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
