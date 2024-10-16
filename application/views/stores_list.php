<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-shop"></i>Stores List
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
            <h2><strong>Stores</strong> Table</h2>
            <div class="block-options pull-right">
                <a href="#modal-new-store" class="btn btn-success" data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Store Name</th>
                        <th>Store Address</th>
                        <th>Date Added</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($stores)) {
                        $i = 1; 
                        foreach($stores as $store){
                    ?>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0);" class="text-info"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a></td>
                        <td class="text-capitalize"><a href="javascript:void(0);" class="text-info"><?php echo $store['store_name']; ?></a></td>
						<td class="text-capitalize"><?php echo $store['store_address']; ?></td>
                        <td class="text-capitalize"><?php echo date('d M Y', strtotime($store['date_added'])) ; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="#modal-update-store" data-id="<?php echo $store['id']; ?>" onclick="fetchStoreDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $store['id']; ?>" onclick="deleteStoreData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

    <div id="modal-new-store" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Store</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <?php //echo base_url('admin/insert_customer'); ?>
                <form action="<?php echo base_url('stores/insert_store'); ?>" id="store-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Store Name</label>
                        <div class="col-md-8">
                            <input type="text" name="store_name" class="form-control" placeholder="Name..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Address</label>
                        <div class="col-md-8">
                            <textarea name="store_address" rows="4" class="form-control" placeholder="Address.."></textarea>
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

<div id="modal-update-store" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Update Store</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <?php //echo base_url('admin/insert_customer'); ?>
                <form action="<?php echo base_url('stores/update_store'); ?>" id="store-update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" id="store_id" name="store_id">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Store Name</label>
                        <div class="col-md-8">
                            <input type="text" name="store_name" class="form-control store_name" placeholder="Name..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Address</label>
                        <div class="col-md-8">
                            <textarea name="store_address" rows="4" class="form-control store_address" placeholder="Address.."></textarea>
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





