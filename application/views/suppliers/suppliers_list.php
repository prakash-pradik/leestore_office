<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cart-arrow-down"></i>Suppliers List
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
            <h2><strong>Suppliers</strong> Table</h2>
            <div class="block-options pull-right">
                <a href="#modal-new-supplier" class="btn btn-success" data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Supplier Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>City</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($suppliers)) {
                        $i = 1; 
                        foreach($suppliers as $supplier){
                    ?>
                    <tr>
                        <td class="text-center"><a href="<?php echo base_url('supplier/'.$supplier['id']); ?>" class="text-info"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a></td>
                        <td class="text-capitalize"><a href="<?php echo base_url('supplier/'.$supplier['id']); ?>" class="text-info"><?php echo $supplier['supplier_name']; ?></a></td>
						<td class="text-capitalize">+91-<?php echo $supplier['phone_number']; ?></td>
                        <td class=""><?php echo $supplier['supplier_address']; ?></td>
                        <td class=""><?php echo $supplier['city']; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?php echo base_url('supplier/'.$supplier['id']); ?>" data-toggle="tooltip" title="View" class="btn btn-success enable-tooltip"><i class="fa fa-eye"></i></a>

                                <a href="#modal-update-supplier" data-id="<?php echo $supplier['id']; ?>" onclick="fetchSupplierDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $supplier['id']; ?>" onclick="deleteSupplierData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

<div id="modal-new-supplier" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Supplier</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('suppliers/insert_supplier'); ?>" id="supplier-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">Supplier Name</label>
                        <div class="col-md-8">
                            <input type="text" name="new_supplier_name" class="form-control" placeholder="Name..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Supplier Phone</label>
                        <div class="col-md-8">
                            <input type="text" name="new_supplier_phone" class="form-control numeric" placeholder="Phone.." maxlength="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">GST Number</label>
                        <div class="col-md-8">
                            <input type="text" name="new_supplier_gst" class="form-control" placeholder="GST..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Details</label>
                        <div class="col-md-8">
                            <textarea name="new_supplier_address" rows="4" class="form-control" placeholder="Tell us details.."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">City</label>
                        <div class="col-md-8">
                            <select name="new_supplier_city" class="form-control">
                                <option value="">Please select</option>
                                <?php if(!empty($cities)) {
                                    $i = 1; 
                                    foreach($cities as $city){
                                ?>
                                    <option value="<?php echo $city['name']; ?>"><?php echo $city['name']; ?></option>
                                <?php } } ?>
                            </select>
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

<div id="modal-update-supplier" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Update Supplier</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('suppliers/update_supplier'); ?>" id="supplier-update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" name="supplier_id" class="supplier_id">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Supplier Name</label>
                        <div class="col-md-8">
                            <input type="text" name="new_supplier_name" class="form-control new_supplier_name" placeholder="Name..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Supplier Phone</label>
                        <div class="col-md-8">
                            <input type="text" name="new_supplier_phone" class="form-control new_supplier_phone numeric" placeholder="Phone.." maxlength="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">GST Number</label>
                        <div class="col-md-8">
                            <input type="text" name="new_supplier_gst" class="form-control new_supplier_gst" placeholder="GST..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Address</label>
                        <div class="col-md-8">
                            <textarea name="new_supplier_address" rows="4" class="form-control new_supplier_address" placeholder="Address.."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">City</label>
                        <div class="col-md-8">
                            <select name="new_supplier_city" class="form-control new_supplier_city">
                                <option value="">Please select</option>
                                <?php if(!empty($cities)) {
                                    $i = 1; 
                                    foreach($cities as $city){
                                ?>
                                    <option value="<?php echo $city['name']; ?>"><?php echo $city['name']; ?></option>
                                <?php } } ?>
                            </select>
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

</div>


