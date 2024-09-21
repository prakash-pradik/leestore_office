<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-user"></i>User Details
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <div class="row">
        <div class="col-lg-4">
            <!-- Customer Info Block -->
            <div class="block">
                <!-- Customer Info Title -->
                <div class="block-title">
                    <h2><i class="fa fa-file-o"></i> <strong>User</strong> Info</h2>
                </div>
                <!-- END Customer Info Title -->

                <!-- Customer Info -->
                <div class="block-section text-center">
                    <a href="javascript:void(0)">
                        <img src="<?php echo base_url(IMG); ?>/placeholders/avatars/avatar4@2x.jpg" alt="avatar" class="img-circle">
                    </a>
                    <h3>
                        <strong><?php if(!empty($user)) echo $user->name; ?></strong><br><small></small>
                    </h3>
                    <input type="hidden" id="emp_id" value="<?php if(!empty($user)) echo $user->id; ?>">
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-right" style="width: 50%;"><strong>Social Title</strong></td>
                            <td>Mr.</td>
                        </tr>
                        
                        <tr>
                            <td class="text-right"><strong>Phone Number</strong></td>
                            <td><?php if(!empty($user)) echo $user->phone_number; ?></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Address</strong></td>
                            <td><?php if(!empty($user)) echo $user->address; ?></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Status</strong></td>
                            <td>
                                <?php if(!empty($user)) 
                                    if($user->status == 1) {
                                        echo '<span class="label label-success"><i class="fa fa-check"></i> Active</span>';
                                    } else {
                                        echo '<span class="label label-danger"><i class="fa fa-user-times"></i> Deactive</span>';
                                } ?>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Customer Info -->
            </div>
            <!-- END Customer Info Block -->

        </div>
        <div class="col-lg-8">
            <!-- Orders Block -->
            <div class="block">
                <!-- Orders Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span class="label label-success" style="font-size:20px;">
                            <strong>₹ <?php if(!empty($user_stats)) if(!empty($user_stats->balance_amt)) echo $user_stats->balance_amt; else echo '0'; ?></strong>
                        </span>
                        <!-- <a href="#modal-add-advance" class="btn btn-alt btn-sm btn-success " data-toggle="modal" title="Add New User"><i class="fa fa-user-plus"></i> Add New Advance</a>

                        <a href="#modal-update-advance" class="btn btn-alt btn-sm btn-info" data-toggle="modal" title="Update User"><i class="fa fa-user-plus"></i> Update Advance</a> -->
                    </div>
                    <h2><i class="fa fa-inr"></i> <strong>Income</strong> Table</h2>
                </div>
                <!-- END Orders Title -->

                <!-- Orders Content -->
                <div class="table-responsive">
                    <table id="advance-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Sl.No</th>
                                <th>Details</th>
                                <th class="text-right">Amount (₹)</th>
                                <th class="">Date & Time</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($emp_advance)) {
                                $i = 1; 
                                foreach($emp_advance as $adv){
                            ?>
                            <tr>
                                <td class="text-center" style="width: 10%;"><?php echo $i; ?></td>
                                <td style="width: 30%;"><?php if(!empty($user)) echo $user->name.' Advance'; ?></td>
                                <td class="text-right"><strong class="<?php if($adv['amount_type'] == 'DEB') echo 'text-success'; else echo 'text-danger'; ?>">₹ <?php echo $adv['amount']; ?></strong></td>
                                <td><?php echo date('d-m-Y h:i a', strtotime($adv['date_added'])); ?></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="#modal-edit-advance" data-toggle="modal" title="Edit" data-id="<?php echo $adv['id']; ?>" data-amount="<?php echo $adv['amount']; ?>" onclick="fetchEditData(this)" class="btn btn-default enable-tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-id="<?php echo $adv['id']; ?>" onclick="deleteAdvanceData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $i++;
                                }
                            }?>
                            
                        </tbody>
                    </table><br/>
                </div>
                
                <!-- END Orders Content -->
            </div>
            <!-- END Orders Block -->


        </div>
    </div>
</div>

<div id="modal-add-advance" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-inr"></i> Add New Advance</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_advance_data'); ?>" id="income-validation" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="insert_type" name="insert_type" value="new">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Employee Name</label>
                        <div class="col-md-8">
                            <input type="hidden" id="old_user_id" name="old_user_id" value="<?php if(!empty($user)) echo $user->id; ?>">
                            <p class="form-control-static"><?php if(!empty($user)) echo $user->name; ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="income_amt_value" name="income_amt_value" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
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

<div id="modal-update-advance" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-inr"></i> Update Advance</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_advance_data'); ?>" id="income-validation-old" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="insert_type" name="insert_type" value="old">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Employee Name</label>
                        <div class="col-md-8">
                            <input type="hidden" id="old_user_id" name="old_user_id" value="<?php if(!empty($user)) echo $user->id; ?>">
                            <p class="form-control-static"><?php if(!empty($user)) echo $user->name; ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="old_income_amt" name="old_income_amt" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
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

<div id="modal-edit-advance" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-primary">
                <h2 class="modal-title"><i class="fa fa-inr"></i> Edit Advance</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_advance_data'); ?>" id="income-validation-old" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="insert_type" name="insert_type" value="edit">
                    <input type="hidden" id="edit_table" name="edit_table" value="">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Employee Name</label>
                        <div class="col-md-8">
                            <input type="hidden" id="edit_id" name="edit_id" value="">
                            <p class="form-control-static"><?php if(!empty($user)) echo $user->name; ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="edit_amt" name="edit_amt" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
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
<script>
    var base_url = document.getElementById("base_url").value; //$('#base_url').val();
    var empId = document.getElementById("emp_id").value;

    function deleteAdvanceData(mythis){
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
                    url: base_url+'admin/delete_adv_row',
                    type: 'post',
                    data: {id : id, tbl_name : 'employee_advance'},
                    success: function(res){
                        window.location.href = base_url+'employee_details/'+empId;
                    }
                });

            }
        })
    }
    function fetchEditData(mythis){
        document.getElementById("edit_id").value = $(mythis).data('id');
        document.getElementById("edit_amt").value = $(mythis).data('amount');
    }
</script>
