
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Product View
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="javascript:window.history.go(-1);" class="text-info"><h5>Back Page</h5></a></li>
    </ul>
    
    <div class="row">
        <form action="<?php echo base_url('products/update_product'); ?>" id="product-update-validation" method="post" class="form-horizontal form-bordered product-form" enctype="multipart/form-data">
            <div class="col-md-6">
                
				<div class="block">
                    <div class="block-title">
                        <h2><strong>Product</strong> Details</h2>
                    </div>
                        <div class="row" style="margin:0px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Store</label>
                                    <p class="form-control-static"><?php echo $product->store_name; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Product Type </label>
                                    <p class="form-control-static text-capitalize"><?php echo $product->product_type; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Product Name </label>
                                    <p class="form-control-static"><?php echo $product->product_name; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Category Name </label>
                                    <p class="form-control-static"><?php if(isset($product->category_name)) echo $product->category_name; else echo '-'; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Brand Name</label>
                                    <p class="form-control-static"><?php if(isset($product->brand_name)) echo $product->brand_name; else echo '-'; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 1</label>
                                    <p class="form-control-static"><?php if(isset($product->imei_number1) && $product->imei_number1 !== '') echo $product->imei_number1; else echo '-'; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 2</label>
                                    <p class="form-control-static"><?php if(isset($product->imei_number2) && $product->imei_number2 !== '') echo $product->imei_number2; else echo '-'; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Serial Number</label>
                                    <p class="form-control-static"><?php if(isset($product->serial_number) && $product->serial_number !== '') echo $product->serial_number; else echo '-'; ?></p>
                                </div>
                            </div>
                            <?php if($product->barcode != "") { ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Barcode</label><br/>
                                    <img src="<?php echo base_url(UPLOADS).'barcodes/'.$product->barcode.'.png'; ?>" style="width:100px">
                                    <p class="form-control-static"><?php echo $product->barcode; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($product->image != "") { ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Image</label><br/>
                                    <img src="<?php echo base_url(UPLOADS).'products/'.$product->image.'.jpg'; ?>" style="width:100px">
                                </div>
                            </div>
                            <?php } ?>
                            
                        </div>
                </div>
				<!------ Price Block ----->
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Price</strong> Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">MRP  </label>
                                <p class="form-control-static"><?php echo $product->price; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Cost Price  </label>
                                <p class="form-control-static"><?php echo $product->cost_price; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Selling Price  </label>
                                <p class="form-control-static"><?php echo $product->sell_price; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Margin(%)</label>
                                <p class="form-control-static"><?php echo $product->margin; ?>%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!------ Price Block ----->
				<!------ Stock Block ----->
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Stock</strong> Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <p class="form-control-static"><?php echo $product->qnty; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Re-order Quantity</label>
                                <p class="form-control-static"><?php echo $product->reorder_qnty; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!------ Stock Block ----->
				
            </div>

            <div class="col-md-6">        
				<div class="block">
                    <div class="block-title">
                        <h2><strong>Sales</strong> List</h2>
                    </div>
                    
					<div class="table-responsive">
						<table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
							<thead>
								<tr>
									<th class="text-center">Sl.No</th>
									<th class="">Invoice #</th>
									<th class="">Customer Name</th>
									<th class="">Date & Time</th>
								</tr>
							</thead>
							<tbody>
								<?php if(!empty($orders)) {
									$i = 1; 
									foreach($orders as $order){
								?>
								<tr>
									<td class="text-center" style="width: 10%;"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
									<td style="width:20%;"><a href="<?php echo base_url('invoice/'.$order['ord_id']); ?>" class="text-info"><?php echo $order['invoice_no']; ?></a></td>
									<td class=""><?php echo $order['customer_name']; ?></td>
									<td><?php echo date('d-m-Y h:i a', strtotime($order['date_added'])); ?></td>
								</tr>
								<?php
								$i++;
									}
								}?>
								
							</tbody>
						</table><br/>
					</div>
				
                </div>
            </div>

        </form>

    </div>

</div>
