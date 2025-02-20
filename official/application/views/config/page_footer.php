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
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                    <div class="form-group">
                        <label class="col-md-4 control-label">Second Number</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="user_second" name="user_second" class="form-control" placeholder="Phone Number..">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Update</button>
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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
        $('#user_second').val( $(mythis).data('second') );
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
        var storeId = $("#store_id").val();
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
                            window.location.href = base_url+'daily_sales/'+storeId;
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

    function onChangeStore(mythis){
        var storeId = $(mythis).val();
        window.location.href = base_url+'daily_sales/'+storeId;
    }

    function dayClose(){
        var cashAvailable = $("#overall_cash").val();
        var gpayAvailable = $("#overall_gpay").val();
        swal({
            title: "Are you sure?", 
            text: "do you want close the today transaction!", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, Confirm it!",
            showCancelButton: true
        })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url+'admin/day_close',
                    type: 'post',
                    dataType:'json',
                    data: {cashAvailable : cashAvailable, gpayAvailable:gpayAvailable},
                    success: function(res){
                        console.log(res);
                        if(res == 'success'){
                            swal({
                                title: "Day Closed!",
                                text: "Your today account closed."
                            }).then((res1) => {
                                if (res1.value) {
                                    window.location.reload();
                                }
                            });
                        } else {
                            alert("Something Wrong..!");
                        }
                    }
                });
            }
        })
    }

    function saveNotes(mythis){
        var noteVal = $(mythis).val();
        
        if(noteVal.length >=5){
            $.ajax({
                url: base_url+'admin/insert_notes',
                type: 'post',
                dataType:'json',
                data: {daily_notes : noteVal},
                success: function(res){
                    console.log(res);
                    if(res == 'success'){
                        
                    } else {
                        console.log("Something Wrong..!");
                    }
                }
            });
        }
    }

    /***** Supplier Page *****/
    function fetchSupplierDetails(mythis) {
        var id = $(mythis).data('id');
        $.ajax({
            url: base_url + 'admin/fetch_data',
            type: 'post',
            data: { id: id, tbl_name: 'suppliers' },
            dataType: "json",
            success: function (res) {
                $('.supplier_id').val(res.id);
                $('.new_supplier_name').val(res.supplier_name);
                $('.new_supplier_phone').val(res.phone_number);
                $('.new_supplier_gst').val(res.gst_number);
                $('.new_supplier_address').val(res.supplier_address);
                $('.new_supplier_city').val(res.city);

                $("#view_supplier_name").text(res.supplier_name);
                $("#view_supplier_phone").text(res.phone_number);
                $("#view_supplier_gst").text(res.gst_number);
                $("#view_supplier_address").text(res.supplier_address);
                $("#view_supplier_city").text(res.city);
            }
        });
    }

    function deleteSupplierData(mythis) {
        var id = $(mythis).data('id');

        swal({
            title: "Are you sure?", 
            text: "You won't be able to revert this!", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            showCancelButton: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url + 'admin/delete_by_id',
                    type: 'post',
                    data: { id: id, tbl_name: 'suppliers' },
                    success: function (res) {

                        $(mythis).parent().parent().parent().remove();

                        swal({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });

                        setTimeout(() => {
                            window.location.reload();
                        }, 3000);
                    }
                });
            }
        });
    }
    /***** End Supplier Page *****/

</script>