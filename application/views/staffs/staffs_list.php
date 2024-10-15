<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Staffs List
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
            <h2><strong>Staffs</strong> Table</h2>
            <div class="block-options pull-right">
                <a href="#modal-new-staff" class="btn btn-success" data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Staff Name</th>
                        <th>Store Name</th>
                        <th>Phone Number</th>
                        <th>User Name</th>
                        <th>Staff Role</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($staffs)) {
                        $i = 1; 
                        foreach($staffs as $staf){
                    ?>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0);" class="text-info"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a></td>
                        <td class="text-capitalize"><a href="javascript:void(0);" class="text-info"><?php echo $staf['full_name']; ?></a></td>
                        <td class="text-capitalize"><?php echo $staf['store_name']; ?></td>
						<td class="text-capitalize">+91-<?php echo $staf['phone_number']; ?></td>
                        <td class=""><?php echo $staf['user_name']; ?></td>
                        <td class="text-capitalize"><?php echo $staf['role_type']; ?></td>
                        <td class="text-center">
                            <a href="#modal-assign-staff" data-id="<?php echo $staf['id']; ?>" onclick="fetchStaffDetails(this);" data-toggle="modal" title="Assign" class="btn btn-warning enable-tooltip"><i class="fa fa-chain-broken"></i></a>
    
                            <div class="btn-group">
                                <a href="#modal-update-staff" data-id="<?php echo $staf['id']; ?>" onclick="fetchStaffDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $staf['id']; ?>" onclick="deleteStaffData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
