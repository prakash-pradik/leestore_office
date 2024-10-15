
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Product Update
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="javascript:window.history.go(-1);" class="text-info"><h5>Back Page</h5></a></li>
    </ul>
    
    <div class="row">
        <form action="<?php echo base_url('products/update_product'); ?>" id="product-update-validation" method="post" class="form-horizontal form-bordered product-form" enctype="multipart/form-data">
            <div class="col-md-7">
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Product</strong> Details</h2>
                    </div>
                        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product->id; ?>">
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
                                    <select id="" name="product_store" class="form-control" <?php echo $disabled; ?>>
                                        <option value="">Please select</option>
                                        <?php if(!empty($stores)) {
                                            $i = 1; 
                                            foreach($stores as $store){
                                                if($store['id'] == $product->store_id)
                                                    $selected = 'selected';
                                        ?>
                                            <option value="<?php echo $store['id']; ?>" <?php echo $selected; ?>><?php echo $store['store_name']; ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Product Type <span class="text-danger">*</span></label>
                                    <select id="" name="product_type" class="form-control">
                                        <option value="">Please select</option>
                                        <option value="stock" <?php if($product->product_type == 'stock') echo 'selected'; ?>  >Stock</option>
                                        <option value="non-stock" <?php if($product->product_type == 'non-stock') echo 'selected'; ?>>Non-Stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" id="" name="product_name" class="form-control" placeholder="Name.." value="<?php echo $product->product_name; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Category Name <span class="text-danger">*</span></label>
                                    <select id="category_name" name="category_name" class="form-control">
                                        <option value="">Please select</option>
                                        <?php if(!empty($categories)) {
                                            foreach($categories as $cate){
                                                if($cate['id'] == $product->category_id)
                                                    $selected = 'selected';
                                                else
                                                    $selected = '';
                                        ?>
                                            <option value="<?php echo $cate['id']; ?>" <?php echo $selected; ?> ><?php echo $cate['category_name']; ?></option>
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
                                                if($brand['id'] == $product->brand_id)
                                                    $brand_selected = 'selected';
                                                else
                                                    $brand_selected = '';
                                        ?>
                                            <option value="<?php echo $brand['id']; ?>" <?php echo $brand_selected; ?>><?php echo $brand['brand_name']; ?></option>
                                        <?php
                                            }
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 1</label>
                                    <input type="text" id="" name="imei_number1" class="form-control" placeholder="IMEI 1.." maxlength="16" value="<?php echo $product->imei_number1; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 2</label>
                                    <input type="text" id="" name="imei_number2" class="form-control" placeholder="IMEI 2.." maxlength="16" value="<?php echo $product->imei_number2; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Serial Number</label>
                                    <input type="text" id="" name="serial_number" class="form-control" placeholder="Serial #.." value="<?php echo $product->serial_number; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Barcode</label>
                                    <input type="text" id="barcode" name="barcode" class="form-control" placeholder="Barcode.." value="<?php echo $product->barcode; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <input type="file" id="" name="product_image" value="<?php echo $product->image; ?>">
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
                                <input type="text" id="" name="price" class="form-control numeric price" placeholder="" maxlength="7" value="<?php echo $product->price; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Cost Price <span class="text-danger">*</span></label>
                                <input type="text" id="" name="cost_price" class="form-control numeric cost_price" placeholder="" maxlength="7" value="<?php echo $product->cost_price; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Selling Price <span class="text-danger">*</span></label>
                                <input type="text" id="" name="sell_price" class="form-control numeric sell_price" placeholder="" maxlength="7" value="<?php echo $product->sell_price; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Margin(%)</label>
                                <input type="text" id="" name="margin_val" class="form-control margin_val" placeholder="" readonly="true" value="<?php echo $product->margin; ?>">
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
                                <input type="text" id="qnty" name="qnty" class="form-control" placeholder="" value="<?php echo $product->qnty; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Re-order Quantity</label>
                                <input type="text" id="reorder_qnty" name="reorder_qnty" class="form-control" placeholder="" value="<?php echo $product->reorder_qnty; ?>">
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
                        <button type="submit" class="btn btn-success btn-lg">Update</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

</div>
