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


        <div id="modal-multipay" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center bg-success">
                        <h2 class="modal-title"><i class="gi gi-sort"></i> Multipay Amount</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="javascript:void(0);" id="multipay-validation" method="post" class="form-horizontal form-bordered" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Pay Type</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="pay_type" class="form-control" value="Cash" placeholder="Pay Type.." disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Amount</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="pay_amount" id="cash_pay" class="form-control numeric" placeholder="Amount.." maxlength="6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Pay Type</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="pay_type" class="form-control" value="UPI" placeholder="Pay Type.." disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Amount</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="pay_amount" id="upi_pay" class="form-control numeric" placeholder="Amount.." maxlength="6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-actions">
                                        <div class="col-xs-12 text-right">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success" onclick="saveMultipay();">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <div class="multipay-block">
                                    <h4>Total Payable Amount</h4>
                                    <h3>₹ <strong class="total_payable">0.00</strong></h3>
                                    <h4>Balance Amount</h4>
                                    <h3>₹ <strong class="balance_amount">0.00</strong></h3>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
