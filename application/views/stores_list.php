<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Stores List
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
                        <td class="text-center"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
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
</div>


