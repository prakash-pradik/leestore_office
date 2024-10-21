<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-users"></i>Staffs List
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

    <div id="modal-new-staff" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Staff</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('staffs/insert_staff'); ?>" id="staff-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" style="padding-bottom:5px;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Store<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <select id="staff_store" name="staff_store" class="form-control">
                                        <option value="">Please select</option>
                                        <?php if(!empty($stores)) {
                                            $i = 1; 
                                            foreach($stores as $store){
                                        ?>
                                            <option value="<?php echo $store['id']; ?>"><?php echo $store['store_name']; ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Full Name<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" id="staff_full_name" name="staff_full_name" class="form-control" placeholder="Name..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone Number<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" id="staff_phone_number" name="staff_phone_number" class="form-control numeric" placeholder="Phone Number.." maxlength="10">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">User Name<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" id="staff_user_name" name="staff_user_name" class="form-control" placeholder="User Name..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Password<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" id="staff_password" name="staff_password" class="form-control" placeholder="********" maxlength="12">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" id="staff_email" name="staff_email" class="form-control" placeholder="Email..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Date of Birth</label>
                                <div class="col-md-8">
                                    <input type="text" id="staff_dob" name="staff_dob" class="form-control input-datepicker-close" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gender</label>
                                <div class="col-md-8">
                                    <select id="staff_gender" name="staff_gender" class="form-control">
                                        <option value="">Please select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-md-4 control-label">Profile Image</label>
                                <div class="col-md-8">
                                    <input type="file" id="staff_photo" name="staff_photo">
                                </div>
                            </div> -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address   <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <textarea id="staff_address" name="staff_address" rows="4" class="form-control" placeholder="Address.."></textarea>
                                </div>
                            </div>
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

<div id="modal-update-staff" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Update Staff</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('staffs/update_staff'); ?>" id="staff-update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" style="padding-bottom:5px;">
                    <input type="hidden" class="staff_edit_id" name="staff_edit_id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Store<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <select id="" name="staff_store" class="form-control staff_store">
                                        <option value="">Please select</option>
                                        <?php if(!empty($stores)) {
                                            $i = 1; 
                                            foreach($stores as $store){
                                        ?>
                                            <option value="<?php echo $store['id']; ?>"><?php echo $store['store_name']; ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Full Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="staff_full_name" class="form-control staff_full_name" placeholder="Name..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="staff_phone_number" class="form-control staff_phone_number" placeholder="Phone Number.." maxlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">User Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="staff_user_name" class="form-control staff_user_name" placeholder="User Name..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-8">
                                    <input type="text" name="staff_password" class="form-control staff_password" placeholder="******" maxlength="12">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="staff_email" class="form-control staff_email" placeholder="Email..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Date of Birth</label>
                                <div class="col-md-8">
                                    <input type="text" name="staff_dob" class="form-control staff_dob input-datepicker-close" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gender</label>
                                <div class="col-md-8">
                                    <select name="staff_gender" class="form-control staff_gender">
                                        <option value="">Please select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address</label>
                                <div class="col-md-8">
                                    <textarea name="staff_address" rows="4" class="form-control staff_address" placeholder="Address.."></textarea>
                                </div>
                            </div>
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

<div id="modal-assign-staff" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-warning">
                <h2 class="modal-title"><i class="fa fa-chain-broken"></i> Assign Role</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('staffs/assign_role'); ?>" id="assginRole-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" name="assign_emp_id" id="assign_emp_id" >
                    <div class="form-group">
                        <label class="col-md-4 control-label">Role Type</label>
                        <div class="col-md-8">
                            <select id="staff_role_type" name="staff_role_type" class="form-control" placeholder="Select Role...">
                                <option value="">Please select</option>
                                <?php if(!empty($roles)) {
                                    foreach($roles as $role){
                                ?>
                                <option value="<?php echo $role['role_name']; ?>"><?php echo $role['role_name']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Assign</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

</div>