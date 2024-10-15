<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Category List
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
                    <h2><strong>Category</strong> Table</h2>
                    <div class="block-options pull-right">
                        <a href="javascript:void(0);" class="btn btn-success" onclick="showCategoryForm(true);"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Sl.No</th>
                                <th>Category Name</th>
                                <th style="width:20%;">Status</th>
                                <!-- <th>Date Added</th> -->
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($categories)) {
                                $i = 1; 
                                foreach($categories as $cate){
                            ?>
                            <tr>
                                <td class="text-center"><a href="javascript:void(0);" class="text-info"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a></td>
                                <td class="text-capitalize"><a href="javascript:void(0);" class="text-info"><?php echo $cate['category_name']; ?></a></td>
                                <td class="">
                                    <?php 
                                    if($cate['status'] == 1) 
                                        echo '<span class="label label-success">Active</span>';
                                    else
                                        echo '<span class="label label-warning">Deactive</span>';
                                    ?>
                                </td>
                                <!-- <td class=""><?php echo date('d-m-Y H:i a', strtotime($cate['date_added'])); ?></td> -->
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" data-id="<?php echo $cate['id']; ?>" onclick="fetchCatDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-id="<?php echo $cate['id']; ?>" onclick="deleteCatData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
            <div class="block full" id="category_new_block" style="display:none;">
                <div class="block-title">
                    <h2><strong>Add New</strong> Category</h2>
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Close" onclick="showCategoryForm(false);"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                
                <form action="<?php echo base_url('insert_category'); ?>" id="category-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Store <span class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <select id="" name="category_store" class="form-control" <?php echo $disabled; ?>>
                                <option value="">Please select</option>
                                <?php if(!empty($stores)) {
                                    $i = 1; 
                                    foreach($stores as $store){

                                        if($store['id'] == $storeId)
                                            $selected = 'selected';
                                ?>
                                    <option value="<?php echo $store['id']; ?>" <?php echo $selected; ?>><?php echo $store['store_name']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Category Name <span class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Name..">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="col-md-4 control-label">Details</label>
                        <div class="col-md-8">
                            <textarea id="category_details" name="category_details" rows="4" class="form-control" placeholder="Tell us details.."></textarea>
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

            <div class="block full" id="category_update_block" style="display:none;">
                <div class="block-title">
                    <h2><strong>Update</strong> Category</h2>
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Close" onclick="showCategoryForm(false);"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <form action="<?php echo base_url('update_category'); ?>" id="category-update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <input type="hidden" class="category_id" name="category_id" value="">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Store <span class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <select id="" name="category_store" class="form-control category_store" <?php echo $disabled; ?>>
                                <option value="">Please select</option>
                                <?php if(!empty($stores)) {
                                    $i = 1; 
                                    foreach($stores as $store){
                                        if($store['id'] == $storeId)
                                            $selected = 'selected';
                                ?>
                                    <option value="<?php echo $store['id']; ?>" <?php echo $selected; ?>><?php echo $store['store_name']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Category Name <span class="text-danger">*</span></label>
                        <div class="col-md-8">
                            <input type="text" id="update_category_name" name="category_name" class="form-control category_name" placeholder="Name..">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="col-md-4 control-label">Details</label>
                        <div class="col-md-8">
                            <textarea id="update_category_details" name="category_details" rows="4" class="form-control category_details" placeholder="Tell us details.."></textarea>
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
        </div>

    </div>

</div>
