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
                        <th>Cost Price (₹)</th>
                        <th>Sell Price (₹)</th>
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
                        <td class="text-capitalize">₹ <?php echo number_format($prod['cost_price'],2); ?></td>
                        <td class="text-capitalize">₹ <?php echo number_format($prod['sell_price'],2); ?></td>
                        <td class="text-capitalize"><?php if(!empty($prod['qnty'])) echo $prod['qnty']; else echo '0'; ?></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="<?php echo base_url('product_view/'.$prod['id']); ?>" data-toggle="tooltip" title="View" class="btn btn-success" target="_blank"><i class="fa fa-eye"></i></a>

                                <a href="<?php echo base_url('product_update/'.$prod['id']); ?>" data-id="<?php echo $prod['id']; ?>" data-toggle="tooltip" title="Update" class="btn btn-info"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $prod['id']; ?>" onclick="deleteProductData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
</div>
