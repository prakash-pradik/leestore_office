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
</script>