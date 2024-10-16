<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Roles Type List
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
    <div class="row">

        <div class="col-md-7">
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Roles Type</strong> Table</h2>
                    <div class="block-options pull-right">
                        <a href="javascript:void(0);" class="btn btn-success" onclick="showRoleForm(true);"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Sl.No</th>
                                <th>Role Name</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($roles)) {
                                $i = 1; 
                                foreach($roles as $role){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
                                <td class="text-capitalize"><?php echo $role['role_name']; ?></td>
                                <td class="">
                                    <?php 
                                    if($role['status'] == 1) 
                                        echo '<span class="label label-success">Active</span>';
                                    else
                                        echo '<span class="label label-warning">Deactive</span>';
                                    ?>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" data-id="<?php echo $role['id']; ?>" data-name="<?php echo $role['role_name']; ?>" onclick="fetchRoleDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>

                                        <a href="javascript:void(0)" data-id="<?php echo $role['id']; ?>" onclick="deleteRoleData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
        </div>
        
        <div class="col-md-5">
            <div class="block full" id="role_new_block" style="display:none;">
                <div class="block-title">
                    <h2><strong>Add New</strong> Role Type</h2>
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Close" onclick="showRoleForm(false);"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                
                <form action="<?php echo base_url('insert_role'); ?>" id="role-validation" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Role Name</label>
                        <div class="col-md-8">
                            <input type="text" id="" name="role_name" class="form-control" placeholder="Name..">
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="block full" id="role_update_block" style="display:none;">
                <div class="block-title">
                    <h2><strong>Update</strong> Role Type</h2>
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Close" onclick="showRoleForm(false);"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                
                <form action="<?php echo base_url('update_role'); ?>" id="role-update-validation" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" class="update_role_id" name="update_role_id" value="">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Role Name</label>
                        <div class="col-md-8">
                            <input type="text" id="" name="role_name" class="form-control role_name" placeholder="Name..">
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>
