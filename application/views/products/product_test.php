<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header" onload="myFunction();">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Product
            </h1>
        </div>
    </div>
    <script>
       
        </script>
    <img src="http://localhost/Git_projects/leestore_billing/assets/img/barcodes/barcode_11.png">
    <div class="row" id="product_row">
        <form action="<?php echo base_url('products/insert_product_test'); ?>" id="product-validation" method="post" class="form-horizontal form-bordered product-form" enctype="multipart/form-data">
            <div class="col-md-7">
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Product</strong> Details</h2>
                    </div>
                    
                        <div class="row" style="margin:0px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Name..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Category Name <span class="text-danger">*</span></label>
                                    <select id="category_name" name="category_name" class="form-control">
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 1</label>
                                    <input type="text" id="imei_number1" name="imei_number1" class="form-control" placeholder="IMEI 1.." maxlength="16">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 2</label>
                                    <input type="text" id="imei_number2" name="imei_number2" class="form-control" placeholder="IMEI 2.." maxlength="16">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Serial Number</label>
                                    <input type="text" id="serial_number" name="serial_number" class="form-control" placeholder="Serial #..">
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
                                <input type="text" id="price" name="price" class="form-control numeric" placeholder="" maxlength="7">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Cost Price <span class="text-danger">*</span></label>
                                <input type="text" id="cost_price" name="cost_price" class="form-control numeric" placeholder="" maxlength="7">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Selling Price <span class="text-danger">*</span></label>
                                <input type="text" id="sell_price" name="sell_price" class="form-control numeric" placeholder="" maxlength="7">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Margin(%)</label>
                                <input type="text" id="margin" name="margin" class="form-control" placeholder="" readonly="true">
                            </div>
                        </div>
                    </div>
                </div>
                <!------ Price Block ----->
            </div>

            <div class="col-md-7">
                <div class="form-group">
                    <div class="col-xs-12 text-right" style="display:flex; justify-content: space-between;">
                        <h4 class="text-info"><a href="<?php echo base_url('products_list'); ?>" class="text-info"><< Back</a></h4>
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
