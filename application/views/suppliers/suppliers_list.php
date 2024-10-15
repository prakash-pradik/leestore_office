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
                                <a href="<?php echo base_url('supplier/'.$supplier['id']); ?>" data-toggle="tooltip" title="View" class="btn btn-default enable-tooltip"><i class="fa fa-eye"></i></a>

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
</div>


