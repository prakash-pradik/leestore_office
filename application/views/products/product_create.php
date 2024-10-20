<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Product
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="javascript:window.history.go(-1);" class="text-info"><h5>Back Page</h5></a></li>
    </ul>
    
    <div class="row">
        <form action="<?php echo base_url('products/insert_product'); ?>" id="product-validation" method="post" class="form-horizontal form-bordered product-form" enctype="multipart/form-data">
            <div class="col-md-7">
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Product</strong> Details</h2>
                    </div>
                        <?php 
                            $storeId = $selected = $disabled = '';
                            if(isset($session_user) && $session_user['role_type'] === 'Manager'){
                                $storeId = $session_user['store_id'];
                                $disabled = 'disabled';
                            } 
                        ?>
                        <div class="row" style="margin:0px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Store<span class="text-danger">*</span></label>
                                    <?php if(isset($session_user) && $session_user['role_type'] === 'Manager'){ ?>
                                        <input type="hidden" name="product_store" class="form-control" placeholder="Name.." value="<?php echo $session_user['store_id']; ?>" readonly>
                                        <select class="form-control" <?php echo $disabled; ?>>
                                            <option value="">Please select</option>
                                            <?php if(!empty($stores)) {
                                                $i = 1; 
                                                foreach($stores as $store){

                                                    if($store['id'] == $storeId)
                                                        $selected = 'selected';
                                                    else
                                                        $selected = '';
                                            ?>
                                                <option value="<?php echo $store['id']; ?>" <?php echo $selected; ?> ><?php echo $store['store_name']; ?></option>
                                            <?php } } ?>
                                        </select>

                                    <?php } else { ?>
                                        
                                    <select id="new_product_store" name="product_store" class="form-control" <?php echo $disabled; ?>>
                                        <option value="">Please select</option>
                                        <?php if(!empty($stores)) {
                                            $i = 1; 
                                            foreach($stores as $store){

                                                if($store['id'] == $storeId)
                                                    $selected = 'selected';
                                        ?>
                                            <option value="<?php echo $store['id']; ?>" <?php echo $selected; ?> ><?php echo $store['store_name']; ?></option>
                                        <?php } } ?>
                                    </select>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Product Type <span class="text-danger">*</span></label>
                                    <select id="" name="product_type" class="form-control">
                                        <option value="">Please select</option>
                                        <option value="stock">Stock</option>
                                        <option value="non-stock">Non-Stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" id="" name="product_name" class="form-control" placeholder="Name..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Category Name <span class="text-danger">*</span></label>
                                    <select id="" name="category_name" class="form-control">
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Brand Name</label>
                                    <select id="" name="brand_id" class="form-control">
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 1</label>
                                    <input type="text" id="" name="imei_number1" class="form-control" placeholder="IMEI 1.." maxlength="16">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 2</label>
                                    <input type="text" id="" name="imei_number2" class="form-control" placeholder="IMEI 2.." maxlength="16">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Serial Number</label>
                                    <input type="text" id="" name="serial_number" class="form-control" placeholder="Serial #..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Barcode</label>
                                    <input type="text" id="barcode" name="barcode" class="form-control" placeholder="Barcode..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <input type="file" id="product_image" name="product_image">
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>

            <div class="col-md-5">
                <!------ Price Block ----->
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Price</strong> Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">MRP <span class="text-danger">*</span></label>
                                <input type="text" name="price" class="form-control numeric price" placeholder="" maxlength="7">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Cost Price <span class="text-danger">*</span></label>
                                <input type="text" name="cost_price" class="form-control numeric cost_price" placeholder="" maxlength="7">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Selling Price <span class="text-danger">*</span></label>
                                <input type="text" name="sell_price" class="form-control numeric sell_price" placeholder="" maxlength="7">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Margin(%)</label>
                                <input type="text" name="margin_val" class="form-control margin_val" placeholder="" readonly="true">
                            </div>
                        </div>
                    </div>
                </div>
                <!------ Price Block ----->

                <!------ Stock Block ----->
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Stock</strong> Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <input type="text" id="qnty" name="qnty" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Re-order Quantity</label>
                                <input type="text" id="reorder_qnty" name="reorder_qnty" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <!------ Stock Block ----->
            </div>

            <div class="col-md-7">
                <div class="form-group">
                    <div class="col-xs-12 text-right" style="display:flex; justify-content: end;">
                        <div>
                        <button type="reset" class="btn btn-warning btn-lg">Clear</button>
                        <button type="submit" class="btn btn-success btn-lg">Create</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

</div>
