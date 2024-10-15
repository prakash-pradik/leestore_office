                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-left">
                            <span id="year-copy1">2024</span> &copy; <a href="#" target="_blank">Lee Store</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="javascript:void(0);" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" id="update-password">
                
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user_password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user_confirm_password">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user_confirm_password" name="user_confirm_password" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->


<div id="modal-update-category" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Update Category</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

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
                <form action="<?php echo base_url('staffs/insert_staff'); ?>" id="staff-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
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
                                    <input type="text" id="staff_password" name="staff_password" class="form-control" placeholder="********" maxlength="8">
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
                <form action="<?php echo base_url('staffs/update_staff'); ?>" id="staff-update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
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
                                    <input type="text" name="staff_phone_number" class="form-control staff_phone_number" placeholder="Phone Number..">
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
                                    <input type="text" name="staff_password" class="form-control staff_password" placeholder="******">
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

<div id="modal-new-customer" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Customer</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <?php //echo base_url('admin/insert_customer'); ?>
                <form action="javascript:void(0);" id="customer-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Full Name</label>
                        <div class="col-md-8">
                            <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Name..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                            <input type="text" id="customer_phone" name="customer_phone" class="form-control numeric" placeholder="Phone Number.." maxlength="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Address</label>
                        <div class="col-md-8">
                            <textarea id="customer_address" name="customer_address" rows="4" class="form-control" placeholder="Address.."></textarea>
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

<div id="modal-new-product" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Product</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="javascript:void(0);" id="product-modal-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" id="product_type" name="product_type" value="non-stock" >
                    <div class="row">
                        <?php if(isset($session_user) && $session_user['role_type'] === 'super_admin') {  ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Store<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <select id="product_store" name="product_store" class="form-control">
                                        <option value="">Please select</option>
                                        <?php if(isset($stores)) {
                                            $i = 1; 
                                            foreach($stores as $store){
                                        ?>
                                            <option value="<?php echo $store['id']; ?>" ><?php echo $store['store_name']; ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>
                            <input type="hidden" id="product_store" name="product_store" value="<?php if(isset($session_user) && $session_user['role_type'] !== 'super_admin') echo $session_user['store_id'];  ?>" >
                        <?php } ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Name<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Name..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Category Name<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <select id="modal_category_name" name="category_name" class="form-control">
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Brand Name</label>
                                <div class="col-md-8">
                                    <select id="brand_id" name="brand_id" class="form-control">
                                        <option value="">Please select</option>
                                        <?php if(!empty($brands)) {
                                            foreach($brands as $brand){
                                        ?>
                                            <option value="<?php echo $brand['id']; ?>"><?php echo $brand['brand_name']; ?></option>
                                        <?php
                                            }
                                        }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">IMEI Number 1</label>
                                <div class="col-md-8">
                                    <input type="text" id="imei_number1" name="imei_number1" class="form-control" placeholder="IMEI 1..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">IMEI Number 2</label>
                                <div class="col-md-8">
                                    <input type="text" id="imei_number2" name="imei_number2" class="form-control" placeholder="IMEI 1..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Serial Number</label>
                                <div class="col-md-8">
                                    <input type="text" id="serial_number" name="serial_number" class="form-control" placeholder="Serial #..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">MRP<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" id="price" name="price" class="form-control numeric" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Cost Price<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" id="cost_price" name="cost_price" class="form-control numeric" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Selling Price<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" id="sell_price" name="sell_price" class="form-control numeric" placeholder="">
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
