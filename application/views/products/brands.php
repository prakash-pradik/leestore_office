<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Brands List
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->
    <?php
        $message = $this->session->flashdata('message');
        if(isset($message) && $message != "")
        echo successmessage($message);
    ?>
    
    <div class="row">
        <div class="col-md-7">
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Brand</strong> Table</h2>
                    <div class="block-options pull-right">
                        <a href="javascript:void(0);" class="btn btn-success" onclick="showBrandForm(true);"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Sl.No</th>
                                <th>Brand Name</th>
                                <th>Status</th>
                                <th>Date Added</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($brands)) {
                                $i = 1; 
                                foreach($brands as $brand){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
                                <td class="text-capitalize"><?php echo $brand['brand_name']; ?></td>
                                <td class="">
                                    <?php 
                                    if($brand['status'] == 1) 
                                        echo '<span class="label label-success">Active</span>';
                                    else
                                        echo '<span class="label label-warning">Deactive</span>';
                                    ?>
                                </td>
                                <td class=""><?php echo date('d-m-Y H:i a', strtotime($brand['date_added'])); ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="javascript:void(0);" data-id="<?php echo $brand['id']; ?>" data-name="<?php echo $brand['brand_name']; ?>" data-storeid="<?php echo $brand['store_id']; ?>" onclick="fetchBrandDetails(this);" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-id="<?php echo $brand['id']; ?>" onclick="deleteBrandData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
        </div>

        <div class="col-md-5">
            <?php 
                $storeId = $selected = $disabled = '';
                if(isset($session_user) && $session_user['role_type'] === 'Manager'){
                    $storeId = $session_user['store_id'];
                    $disabled = 'disabled';
                } 
            ?>
            <div class="block full" id="brand_new_block" style="display:none;">
                <div class="block-title">
                    <h2><strong>Add New</strong> Brand</h2>
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Close" onclick="showBrandForm(false);"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <form action="<?php echo base_url('insert_brand'); ?>" id="brand-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Store <span class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <select id="" name="brand_store" class="form-control" <?php echo $disabled; ?>>
                                <option value="">Please select</option>
                                <?php if(!empty($stores)) {
                                    $i = 1; 
                                    foreach($stores as $store){

                                        if($store['id'] == $storeId)
                                            $selected = 'selected';
                                        else
                                            $selected = '';
                                ?>
                                    <option value="<?php echo $store['id']; ?>" <?php echo $selected; ?>><?php echo $store['store_name']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Brand Name</label>
                        <div class="col-md-8">
                            <input type="text" id="brand_name" name="brand_name" class="form-control" placeholder="Name..">
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
                
            </div>

            <div class="block full" id="brand_update_block" style="display:none;">
                <div class="block-title">
                    <h2><strong>Update</strong> Brand</h2>
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Close" onclick="showBrandForm(false);"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <form action="<?php echo base_url('update_brand'); ?>" id="brand-update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" class="brand_id" name="brand_id" value="">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Store <span class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <select id="" name="brand_store" class="form-control brand_store" <?php echo $disabled; ?>>
                                <option value="">Please select</option>
                                <?php if(!empty($stores)) {
                                    $i = 1; 
                                    foreach($stores as $store){
                                        if($store['id'] == $storeId)
                                            $selected = 'selected';
                                        else
                                            $selected = '';
                                ?>
                                    <option value="<?php echo $store['id']; ?>" <?php echo $selected; ?>><?php echo $store['store_name']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Brand Name</label>
                        <div class="col-md-8">
                            <input type="text" id="" name="brand_name" class="form-control brand_name" placeholder="Name..">
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
