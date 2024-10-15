
    <div id="page-content">
        <!-- Datatables Header -->
        <div class="content-header">
            <div class="header-section">
                <h1>
                    Location: <strong><?php echo get_title(); ?></strong> Date: <strong id="time_txt"></strong>
                </h1>
            </div>
        </div>
        
        <div class="row">
            <form action="javascript:void(0);" id="pos-validation" method="post" class="form-horizontal form-bordered product-form" enctype="multipart/form-data">
                <div class="col-md-8">
                    <div class="block">
                        
                        <div class="row" style="margin:0px;">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Bill Date </label>
                                    <input type="text" id="bill_date" name="bill_date" class="form-control input-datepicker-close" data-date-format="mm/dd/yyyy" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Customer <span class="text-danger">*</span></label>
                                    <select id="pos_customer" name="pos_customer" class="form-control input-lg input-select2">
                                        <option value="">Please select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label" style="visibility:hidden;">Add Customer</label>
                                    <a href="#modal-new-customer" data-toggle="modal" class="btn btn-info enable-tooltip" title="Add Customer"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Product Barcode</label>
                                    <input type="text" id="product_barcode" name="product_barcode" class="form-control">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="block">
                        <div class="table-responsive product-list-block">
                            <table id="general-table" class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th style="width:35%;">Product</th>
                                        <th style="width:15%;">Unit Price (₹)</th>
                                        <th class="text-center" style="width:20%;">Quantity</th>
                                        <th class="text-right">Sub Total (₹)</th>
                                        <th style="width: 150px;" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="product_tbody">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="block">
                        <div class="text-center">
                            <button type="button" class="btn btn-lg btn-primary" onclick="saveCash('credit');">
                                <i class="fa fa-credit-card"></i> Credit
                            </button>
                            <button type="button" class="btn btn-lg btn-info" onclick="saveCash('draft');">
                                <i class="fa fa-hourglass-start"></i> Draft
                            </button>
                            <button type="button" class="btn btn-lg btn-warning">
                                <i class="gi gi-sort"></i> Multi Pay
                            </button>
                            <button type="button" class="btn btn-lg btn-success" onclick="saveCash('cash');">
                                <i class="fa fa-inr"></i> Cash
                            </button>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!------ Price Block ----->
                    <div class="block">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Select Category</label>
                                    <select id="pos_category" name="pos_category" class="form-control">
                                        <option value="">Please select</option>
                                        <?php if(!empty($categories)) {
                                            $i = 1; 
                                            foreach($categories as $category){
                                        ?>
                                            <option value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></option>
                                        <?php  } } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Select Brand</label>
                                    <select id="pos_brand" name="pos_brand" class="form-control">
                                        <option value="">Please select</option>
                                        <?php if(!empty($brands)) {
                                            $i = 1; 
                                            foreach($brands as $brand){
                                        ?>
                                            <option value="<?php echo $brand['id']; ?>"><?php echo $brand['brand_name']; ?></option>
                                        <?php  } } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="control-label">Select Product</label>
                                    <select id="pos_product" name="pos_product" class="form-control input-select2">
                                        <option value="">Select category first</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label" style="visibility:hidden;">Add</label>
                                    <a href="#modal-new-product" data-toggle="modal" class="btn btn-info" title="Add Product" target="_blank"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                    <!------ Price Block ----->
                    <input type="hidden" id="total_quantity" value="">
                    <div class="block net-amount-block">
                        <div class="form-group">
                            <label class="col-md-5 control-label">Discount :</label>
                            <div class="col-md-5 text-right">
                                <div class="input-group" style="width:60%; float:right;">
                                    <input type="text" id="net_discount" name="net_discount" class="form-control numeric" maxlength="3">
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">Gross Amount :</label>
                            <div class="col-md-5 text-right">
                                <p class="form-control-static gross_amount">0.00</p>
                                <input type="hidden" id="gross_amount" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">Discount Amount :</label>
                            <div class="col-md-5 text-right">
                                <p class="form-control-static discount_amount">0.00</p>
                                <input type="hidden" id="discount_amount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">IGT Amount :</label>
                            <div class="col-md-5 text-right">
                                <p class="form-control-static">18%</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">Total Payable :</label>
                            <div class="col-md-5 text-right">
                                <p class="form-control-static total_payable">0.00</p>
                                <input type="hidden" id="total_payable">
                            </div>
                        </div>
                        <div class="bg-info">
                            <h3>Net Amount (₹)</h3>
                            <h2 class="net_amount">0.00</h2> 
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

