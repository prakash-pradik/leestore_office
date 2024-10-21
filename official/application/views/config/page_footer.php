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
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>User Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
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


<div id="modal-user-update" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-user"></i> Update User Details</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/update_user'); ?>" id="user-validation" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="user_id" name="user_id" value="">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Name..">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="user_phone" name="user_phone" class="form-control" placeholder="Phone Number..">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
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

<div id="modal-emp-update" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-user"></i> Update Employee Details</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/update_employee'); ?>" id="user-validation" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="emp_id" name="emp_id" value="">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="emp_name" name="emp_name" class="form-control" placeholder="Name..">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="emp_phone" name="emp_phone" class="form-control" placeholder="Phone Number..">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
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


<div id="modal-sales-income" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-angle-double-down"></i> Add New Sale</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_sales'); ?>" id="sale-income-validation" method="post" class="form-horizontal form-bordered">
					<input type="hidden" id="sale_type" name="sale_type" class="form-control" value="inc">
					<div class="form-group">
                        <label class="col-md-4 control-label">Sales Person</label>
                        <div class="col-md-8">
                            <select id="emp_id" name="emp_id" class="form-control" size="1" require="true">
                            <option value="">Please select</option>
                            <?php if(!empty($employees)) {
                                $i = 1; 
                                foreach($employees as $emp){
                                    echo '<option value="'.$emp['id'].'">'.$emp['name'].'</option>';
                                }
                            }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Description</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="sale_desc" name="sale_desc" class="form-control" placeholder="Description..">
                                <span class="input-group-addon"><i class="gi gi-notes"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="sale_amt" name="sale_amt" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Amount Mode</label>
                        <div class="col-md-8">
                            <select id="amount_mode" name="amount_mode" class="form-control" size="1" require="true">
								<option value="">Please select</option>
								<option value="cash">Cash</option>
								<option value="gpay">Gpay</option>
                                <option value="card_pay">Card Pay</option>
                                <option value="late_pay">Late Pay</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Amount</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-sales-income-update" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-warning">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Update Details</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/update_sales'); ?>" id="sale-income-validation" method="post" class="form-horizontal form-bordered">
					<input type="hidden" id="update_sale_type" name="sale_type" class="form-control" value="">
                    <input type="hidden" id="update_sale_id" name="sale_id" class="form-control" value="">
					<div class="form-group">
                        <label class="col-md-4 control-label">Sales Person</label>
                        <div class="col-md-8">
                            <select id="update_emp_id" name="emp_id" class="form-control" size="1" require="true">
                            <option value="">Please select</option>
                            <?php if(!empty($employees)) {
                                $i = 1; 
                                foreach($employees as $emp){
                                    echo '<option value="'.$emp['id'].'">'.$emp['name'].'</option>';
                                }
                            }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Description</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="update_sale_desc" name="sale_desc" class="form-control" placeholder="Description..">
                                <span class="input-group-addon"><i class="gi gi-notes"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="update_sale_amt" name="sale_amt" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Amount Mode</label>
                        <div class="col-md-8">
                            <select id="update_amount_mode" name="amount_mode" class="form-control" size="1" require="true">
								<option value="">Please select</option>
								<option value="cash">Cash</option>
								<option value="gpay">Gpay</option>
                                <option value="card_pay">Card Pay</option>
                                <option value="late_pay">Late Pay</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Update Amount</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-sales-expense" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-angle-double-down"></i> Add New Expenses</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_sales'); ?>" id="sale-exp-validation" method="post" class="form-horizontal form-bordered">
					<input type="hidden" id="sale_type" name="sale_type" class="form-control" value="exp">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-8">
                            <select id="emp_id" name="emp_id" class="form-control" size="1" require="true">
                            <option value="">Please select</option>
                            <?php if(!empty($employees)) {
                                $i = 1; 
                                foreach($employees as $emp){
                                    echo '<option value="'.$emp['id'].'">'.$emp['name'].'</option>';
                                }
                            }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Description</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="sale_desc" name="sale_desc" class="form-control" placeholder="Description..">
                                <span class="input-group-addon"><i class="gi gi-notes"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="sale_amt" name="sale_amt" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Amount Mode</label>
                        <div class="col-md-8">
                            <select id="amount_mode" name="amount_mode" class="form-control" size="1" require="true">
								<option value="">Please select</option>
								<option value="cash">Cash</option>
								<option value="gpay">Gpay</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Save Expense</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-custom-range" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-filter"></i> Filter Full Report</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('full_report/custom'); ?>" id="sale-income-validation" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="example-daterange1">Select Date Range</label>
                        <div class="col-md-8">
                            <div class="input-group input-daterange" data-date-format="yyyy/mm/dd">
                                <input type="text" id="example-daterange1" name="example-daterange1" class="form-control text-center input-datepicker-close" placeholder="From">
                                <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                                <input type="text" id="example-daterange2" name="example-daterange2" class="form-control text-center input-datepicker-close" placeholder="To">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Get Data</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-new-employee" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-angle-double-down"></i> Add New Employee</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_employee'); ?>" id="income-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" id="insert_type" name="insert_type" value="new">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="income_user_name" name="income_user_name" class="form-control" placeholder="Name..">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="income_user_phone" name="income_user_phone" class="form-control" placeholder="Phone Number..">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Birth Date</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="income_user_birth" name="income_user_birth" class="form-control input-datepicker-close" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">Address</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="income_user_address" name="income_user_address" class="form-control" placeholder="Address..">
                                <span class="input-group-addon"><i class="gi gi-home"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Photo</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="file" id="income_user_photo" name="income_user_photo">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Employee</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-new-buy" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-shopping-cart"></i> Add New Buy</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_buy_mobile'); ?>" id="buy-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" id="purchase_type" name="purchase_type" value="buy">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Customer Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Name..">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="customer_phone" name="customer_phone" class="form-control" placeholder="Phone Number..">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Model</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="phone_name" name="phone_name" class="form-control" placeholder="Phone Model..">
                                <span class="input-group-addon"><i class="gi gi-iphone"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Details</label>
                        <div class="col-md-8">
                            <textarea id="phone_details" name="phone_details" rows="4" class="form-control" placeholder="Tell us phone details.."></textarea>
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

<div id="modal-new-sell" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-shopping-cart"></i> Add New Sell</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_buy_mobile'); ?>" id="sell-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" id="purchase_type" name="purchase_type" value="sell">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Customer Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Name..">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="customer_phone" name="customer_phone" class="form-control" placeholder="Phone Number..">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Model</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="phone_name" name="phone_name" class="form-control" placeholder="Phone Model..">
                                <span class="input-group-addon"><i class="gi gi-iphone"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Details</label>
                        <div class="col-md-8">
                            <textarea id="phone_details" name="phone_details" rows="4" class="form-control" placeholder="Tell us phone details.."></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-update-buysell" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-shopping-cart"></i> Update Details</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/update_buy_mobile'); ?>" id="update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" id="update_buy_id" name="update_buy_id" value="">
                    <input type="hidden" id="update_purchase_type" name="purchase_type" value="">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Customer Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="update_customer_name" name="customer_name" class="form-control" placeholder="Name..">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="update_customer_phone" name="customer_phone" class="form-control" placeholder="Phone Number..">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Model</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="update_phone_name" name="phone_name" class="form-control" placeholder="Phone Model..">
                                <span class="input-group-addon"><i class="gi gi-iphone"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Details</label>
                        <div class="col-md-8">
                            <textarea id="update_phone_details" name="phone_details" rows="4" class="form-control" placeholder="Tell us phone details.."></textarea>
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

<div id="modal-view-buysell" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-shopping-cart"></i> View Details</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="javascript:;" class="form-horizontal form-bordered" >
                    <div class="form-group">
                        <label class="col-md-4 control-label">Customer Name :</label>
                        <div class="col-md-8">
                            <strong><p class="form-control-static view_customer_name"></p></strong>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Phone Number :</label>
                        <div class="col-md-8">
                            <strong><p class="form-control-static view_phone_number"></p></strong>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Model :</label>
                        <div class="col-md-8">
                            <strong><p class="form-control-static view_phone_name"></p></strong>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone Details :</label>
                        <div class="col-md-8">
                            <strong><p class="form-control-static view_phone_details"></p></strong>
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<script>
    var base_url = document.getElementById("base_url").value; //$('#base_url').val();
	
	function fetchDetails(mythis){
		$('#user_id').val( $(mythis).data('user_id') );
		$('#user_name').val( $(mythis).data('name') );
		$('#user_phone').val( $(mythis).data('phone') );
	}

    function fetchEmpDetails(mythis){
		$('#emp_id').val( $(mythis).data('user_id') );
		$('#emp_name').val( $(mythis).data('name') );
		$('#emp_phone').val( $(mythis).data('phone') );
	}

    function deleteData(mythis){
        var userId = $(mythis).data('user_id');
        swal({
            title: "Are you sure?", 
            text: "You won't be able to revert this!", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            showCancelButton: true
        })
            .then((result) => {
                if (result.value) {

                    $.ajax({
                        url: base_url+'admin/delete_row',
                        type: 'post',
                        data: {userId : userId, tbl_name : 'users'},
                        success: function(res){
                            window.location.href = base_url;
                        }
                    });

                }
            })
    }
    
    function deleteEmpData(mythis){
        var userId = $(mythis).data('user_id');
        swal({
            title: "Are you sure?", 
            text: "You won't be able to revert this!", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            showCancelButton: true
        })
            .then((result) => {
                if (result.value) {

                    $.ajax({
                        url: base_url+'admin/delete_row',
                        type: 'post',
                        data: {userId : userId, tbl_name : 'employees'},
                        success: function(res){
                            window.location.href = base_url;
                        }
                    });

                }
            })
    }
    
    function deleteSalesData(mythis){
        var userId = $(mythis).data('user_id');
        swal({
            title: "Are you sure?", 
            text: "You won't be able to revert this!", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            showCancelButton: true
        })
            .then((result) => {
                if (result.value) {
                    $.ajax({
                        url: base_url+'admin/delete_sales',
                        type: 'post',
                        data: {userId : userId, tbl_name : 'daily_sales'},
                        success: function(res){
                            window.location.href = base_url+'daily_sales';
                        }
                    });
                }
            })
    }

    function fetchBuySellDetails(mythis){
        var id = $(mythis).data('id');
        $.ajax({
            url: base_url+'admin/fetch_data',
            type: 'post',
            data: {id : id, tbl_name : 'buysell_mobiles'},
            dataType: "json",
            success: function(res){
                console.log(res.customer_name);
                $('.view_customer_name').text(res.customer_name);
                $('.view_phone_number').text(res.phone_number);
                $('.view_phone_name').text(res.phone_name);
                $('.view_phone_details').text(res.details);

                $('#update_buy_id').val(res.id);
                $('#update_purchase_type').val(res.purchase_type);
                $('#update_customer_name').val(res.customer_name);
                $('#update_customer_phone').val(res.phone_number);
                $('#update_phone_name').val(res.phone_name);
                $('#update_phone_details').val(res.details);
            }
        });
    }

    function deleteBuyData(mythis){
        //$.fn.dataTable.ext.errMode = 'none';
        var id = $(mythis).data('id');
        swal({
            title: "Are you sure?", 
            text: "You won't be able to revert this!", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            showCancelButton: true
        })
            .then((result) => {
                if (result.value) {
                    $.ajax({
                        url: base_url+'admin/delete_by_id',
                        type: 'post',
                        data: {id : id, tbl_name : 'buysell_mobiles'},
                        success: function(res){
                            
                            $(mythis).parent().parent().parent().remove();
                            swal("Deleted!", "Data Successfully Deleted", "success");
                            setTimeout(() => {
                                window.location.href = base_url+'buy_sell';    
                            }, 3000);
                        }
                    });
                }
            })
    }

    function fetchSaleDetails(mythis){
        var id = $(mythis).data('id');
        $.ajax({
            url: base_url+'admin/fetch_data',
            type: 'post',
            data: {id : id, tbl_name : 'daily_sales'},
            dataType: "json",
            success: function(res){
                console.log(res);
                $("#update_sale_id").val(res.id);
                $("#update_sale_type").val(res.amount_type);
                $("#update_emp_id").val(res.emp_id).change();
                $("#update_sale_desc").val(res.description);
                $("#update_sale_amt").val(res.amount);
                $("#update_amount_mode").val(res.amount_mode).change();
               
            }
        });
    }

    function deleteInactive(mythis){
        var saleId = $(mythis).data('id');
        swal({
            title: "Are you sure?", 
            text: "You won't be able to revert this!", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            showCancelButton: true
        })
            .then((result) => {
                if (result.value) {
                    $.ajax({
                        url: base_url+'admin/delete_inactive',
                        type: 'post',
                        data: {saleId : saleId, tbl_name : 'daily_sales'},
                        success: function(res){
                            window.location.href = base_url+'inactive_sales';
                        }
                    });
                }
            })
    }

    function deleteAll(tbl_name){
        swal({
            title: "Are you sure?", 
            text: "You won't be able to revert this!", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            showCancelButton: true
        })
            .then((result) => {
                if (result.value) {
                    $.ajax({
                        url: base_url+'admin/delete_all',
                        type: 'post',
                        dataType:'json',
                        data: {tbl_name : tbl_name},
                        success: function(res){
                            window.location.reload();
                        }
                    });
                }
            })
    }
</script>