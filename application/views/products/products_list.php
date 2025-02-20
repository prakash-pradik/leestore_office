<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Products List
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->
    <?php
        $message = $this->session->flashdata('message');
        if(isset($message) && $message != "")
        echo successmessage($message);
    ?>
    <!-- Datatables Content -->
	<div class="block full">
        <div class="block-title">
            <h2><strong>Product</strong> Table</h2>
            <div class="block-options pull-right">
				<a href="<?php echo base_url('Prints/productsPdf'); ?>" class="btn btn-alt btn-warning" data-toggle="tooltip" title="Print"><i class="gi gi-print"></i></a>
                <a href="<?php echo base_url('product_create'); ?>" class="btn btn-success" data-toggle="tooltop" title="Add New"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Product Name</th>
                        <th>Brand Name</th>
                        <th>Category Name</th>
                        <th>Price (₹)</th>
                        <th>Qty</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($products)) {
                        $i = 1; 
                        foreach($products as $prod){
                    ?>
                    <tr>
                        <td class="text-center"><a href="<?php echo base_url('product_view/'.$prod['id']); ?>" class="text-info" target="_blank"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a></td>
                        <td class="text-capitalize"><a href="<?php echo base_url('product_view/'.$prod['id']); ?>" class="text-info" target="_blank"><?php echo $prod['product_name']; ?></a></td>
						<td class="text-capitalize"><?php if(!empty($prod['brand_name'])) echo $prod['brand_name']; else echo '-'; ?></td>
                        <td class="text-capitalize"><?php echo $prod['category_name']; ?></td>
                        <td class="text-capitalize">₹ <?php echo number_format($prod['sell_price'],2); ?></td>
                        <td class="text-capitalize"><?php if(!empty($prod['qnty'])) echo $prod['qnty']; else echo '0'; ?></td>
                        <td class="text-center">
							
                            <div class="btn-group btn-group-xs">
								<a href="#modal-update-quantity" data-toggle="modal" title="Quantity" class="btn btn-warning" data-id="<?php echo $prod['id']; ?>" data-name="<?php echo $prod['product_name']; ?>" data-qnty="<?php echo $prod['qnty']; ?>" onclick="fetchQuantity(this);"><i class="fa fa-plus"></i></a>
								<?php if(!empty($session_user) && $session_user['role_type'] === 'Manager' ) { ?>
                                <a href="<?php echo base_url('product_view/'.$prod['id']); ?>" data-toggle="tooltip" title="View" class="btn btn-success" target="_blank"><i class="fa fa-eye"></i></a>

                                <a href="<?php echo base_url('product_update/'.$prod['id']); ?>" data-id="<?php echo $prod['id']; ?>" data-toggle="tooltip" title="Update" class="btn btn-info"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $prod['id']; ?>" onclick="deleteProductData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								<?php } ?>
                            </div>
							
                        </td>
                    </tr>
                    <?php
                    $i++;
                        }
                    }?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
	
	<div id="modal-update-quantity" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header text-center bg-info">
					<h2 class="modal-title"><i class="fa fa-pencil"></i> Update Quantity</h2>
				</div>
				<!-- END Modal Header -->

				<!-- Modal Body -->
				<div class="modal-body">
					<form action="<?php echo base_url('products/update_quantity'); ?>" id="quantity-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
						<input type="hidden" name="update_product_id" id="update_product_id">
						
						<div class="form-group">
							<label class="col-md-4 control-label">Product Name</label>
							<div class="col-md-8">
								<p class="form-control-static" id="update_name"></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Available Quantity</label>
							<div class="col-md-8">
								<p class="form-control-static" id="update_avail_qnty"></p>
								<input type="hidden" name="update_qnty_old" id="update_qnty_old">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Quantity</label>
							<div class="col-md-8">
								<input type="text" id="update_qnty_new" name="update_qnty_new" class="form-control numeric" placeholder="Quantity.." maxlength="10">
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-xs-12 text-right">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-info">Update</button>
							</div>
						</div>
					</form>
				</div>
				<!-- END Modal Body -->
			</div>
		</div>
	</div>
	
	<script>
	function fetchQuantity(mythis){
		$("#update_product_id").val($(mythis).data('id'));
		$("#update_qnty_old").val($(mythis).data('qnty'));
		$("#update_name").text($(mythis).data('name'));
		$("#update_avail_qnty").text($(mythis).data('qnty'));
		
	}
	</script>
	
</div>
