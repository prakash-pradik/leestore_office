<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-user"></i>Customers List
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
            <h2><strong>Customers</strong> Table</h2>
            <div class="block-options pull-right">
                <a href="#modal-new-customer" class="btn btn-success" data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th class="text-center">Sales Count</th>
                        <th class="text-left">Sales Amount (₹)</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($customers)) {
                        $i = 1; 
                        foreach($customers as $cus){
                    ?>
                    <tr>
                        <td class="text-center"><a href="<?php echo base_url('customer/'.$cus['id']); ?>" class="text-info"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a></td>
                        <td class="text-capitalize"><a href="<?php echo base_url('customer/'.$cus['id']); ?>" class="text-info"><?php echo $cus['name']; ?></a></td>
						<td class="text-capitalize">+91-<?php echo $cus['phone_number']; ?></td>
                        <td class="text-center"><?php echo $cus['order_count']; ?></td>
                        <td class="text-left">₹ <?php echo number_format($cus['order_total'], 2); ?></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="<?php echo base_url('customer/'.$cus['id']); ?>" data-toggle="tooltip" title="View" class="btn btn-success enable-tooltip"><i class="fa fa-eye"></i></a>

                                <a href="#modal-update-customer" data-id="<?php echo $cus['id']; ?>" onclick="fetchCustomerDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $cus['id']; ?>" onclick="deleteCustomerData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

<div id="modal-update-customer" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Update Customer</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('customers/update_customer'); ?>" id="customer-update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" name="customer_id" id="customer_id">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Full Name</label>
                        <div class="col-md-8">
                            <input type="text" id="update_customer_name" name="customer_name" class="form-control" placeholder="Name..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                            <input type="text" id="update_customer_phone" name="customer_phone" class="form-control numeric" placeholder="Phone Number.." maxlength="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Address</label>
                        <div class="col-md-8">
                            <textarea id="update_customer_address" name="customer_address" rows="4" class="form-control" placeholder="Address.."></textarea>
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


