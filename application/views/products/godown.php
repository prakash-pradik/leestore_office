<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Godown Manage
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
            <h2><strong>Godown</strong> Table</h2>
            <div class="block-options pull-right">
                <a href="#modal-new-stock" class="btn btn-success" data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Product Name</th>
                        <th>No.Of Stocks</th>
                        <th>Supplier Name</th>
                        <!-- <th class="text-center">Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($stocks)) {
                        $i = 1; 
                        foreach($stocks as $stock){
                    ?>
                    <tr>
                        <td class="text-center"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
                        <td class="text-capitalize"><?php echo $stock['product_name']; ?></td>
                        <td class=""><?php echo $stock['total_number']; ?></td>
                        <td class="text-capitalize"><a href="<?php echo base_url('supplier/'.$stock['supplier_id']); ?>" class="text-info"><?php echo $stock['supplier_name']; ?></a></td>
                        <!-- <td class="text-center">
                            <div class="btn-group">
                                <a href="#modal-update-staff" data-id="<?php echo $stock['id']; ?>" onclick="fetchStaffDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $stock['id']; ?>" onclick="deleteStaffData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td> -->
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

    <div id="modal-new-stock" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Stock</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('insert_stock'); ?>" id="stock-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">Category</label>
                        <div class="col-md-8">
                            <select id="stock_category" name="stock_category" class="form-control" >
                                <option value="">Please select</option>
                                <?php if(!empty($categories)) {
                                    foreach($categories as $cate){
                                ?>
                                    <option value="<?php echo $cate['id']; ?>"><?php echo $cate['category_name']; ?></option>
                                <?php
                                    }
                                }?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Products</label>
                        <div class="col-md-8">
                            <select id="stock_product_id" name="stock_product_id" class="form-control">
                                <option value="">Please select</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="supplier_type" name="supplier_type" value="old">
                    <div id="old_supplier_block">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Supplier</label>
                            <div class="col-md-8">
                                <select id="stock_supplier_id" name="stock_supplier_id" class="form-control">
                                    <option value="">Please select</option>
                                    <?php if(!empty($suppliers)) {
                                        foreach($suppliers as $sup){
                                    ?>
                                        <option value="<?php echo $sup['id']; ?>"><?php echo $sup['supplier_name']; ?></option>
                                    <?php
                                        }
                                    }?>
                                </select>
                                <a href="javascript:void(0)" onclick="showSupplierBlock('new');" class="sub_text">New Supplier</a>
                            </div>
                        </div>
                    </div>
                    <div id="new_supplier_block" style="display:none;">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Supplier Name</label>
                            <div class="col-md-8">
                                <input type="text" id="supplier_name" name="supplier_name" class="form-control" placeholder="Name..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Supplier Phone</label>
                            <div class="col-md-8">
                                <input type="text" id="supplier_phone" name="supplier_phone" class="form-control" placeholder="Phone..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8">
                                <textarea id="supplier_details" name="supplier_details" rows="4" class="form-control" placeholder="Address.."></textarea>

                                <a href="javascript:void(0)" onclick="showSupplierBlock('old');" class="sub_text">Old Supplier</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">No.of Stock</label>
                        <div class="col-md-8">
                            <input type="text" id="stock_number" name="stock_number" class="form-control" placeholder="Stock..">
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

</div>
