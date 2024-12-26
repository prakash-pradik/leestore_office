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

                    <div class="block-options pull-right">
                        <a href="#modal-user-update" class="btn btn-info" data-toggle="modal" title="Update" data-user_id="<?php echo $user->id; ?>" data-name="<?php echo $user->name; ?>" data-phone="<?php echo $user->phone_number; ?>" data-second="<?php echo $user->second_number; ?>" onclick="fetchDetails(this)"><i class="fa fa-pencil"></i></a>
                    </div>
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
                            <td class="text-right"><strong>Second Number</strong></td>
                            <td><?php if(!empty($user)) echo $user->second_number; ?></td>
                        </tr>
                        <!-- <tr>
                            <td class="text-right"><strong>Address</strong></td>
                            <td><?php if(!empty($user)) echo $user->address; ?></td>
                        </tr> -->
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
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span class="label label-success" style="font-size:20px;">
                            <strong>₹ <?php if(!empty($income_stats)) { if(!empty($income_stats->balance_amt)) echo $income_stats->balance_amt; else echo '0'; } else echo '0'; ?></strong>
                        </span>
                        <!-- <a href="#modal-add-advance" class="btn btn-alt btn-sm btn-success " data-toggle="modal" title="Add New User"><i class="fa fa-user-plus"></i> Add New Advance</a>

                        <a href="#modal-update-advance" class="btn btn-alt btn-sm btn-info" data-toggle="modal" title="Update User"><i class="fa fa-user-plus"></i> Update Advance</a> -->
                    </div>
                    <h2><i class="fa fa-inr"></i> <strong>Income</strong> Table</h2>
                </div>
                
                <div class="table-responsive">
                    <table id="advance-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Sl.No</th>
                                <th>Notes</th>
                                <th class="text-right">Amount (₹)</th>
                                <th class="">Date & Time</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($incomes)) {
                                $i = 1; 
                                foreach($incomes as $inc){
                            ?>
                            <tr>
                                <td class="text-center" style="width: 10%;"><?php echo $i; ?></td>
                                <td style="width: 30%;"><?php echo $inc['notes']; ?></td>
                                <td class="text-right"><strong class="<?php if($inc['amount_type'] == 'DEB') echo 'text-success'; else echo 'text-danger'; ?>">₹ <?php echo $inc['amount']; ?></strong></td>
                                <td><?php echo date('d-m-Y h:i a', strtotime($inc['date_added'])); ?></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" data-id="<?php echo $inc['id']; ?>" data-user_id="<?php echo $inc['user_id']; ?>" data-amount="<?php echo $inc['amount']; ?>" data-notes="<?php echo $inc['notes']; ?>" onclick="fetchEditData(this, 'incomes')" class="btn btn-default enable-tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-id="<?php echo $inc['id']; ?>" onclick="deleteAmtData(this, 'incomes');" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
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
            </div>

            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span class="label label-danger" style="font-size:20px;">
                            <strong>₹ <?php if(!empty($outcome_stats)) { if(!empty($outcome_stats->balance_amt)) echo $outcome_stats->balance_amt; else echo '0'; } else echo '0'; ?></strong>
                        </span>
                    </div>
                    <h2><i class="fa fa-inr"></i> <strong>Outcomes</strong> Table</h2>
                </div>
                
                <div class="table-responsive">
                    <table id="advance-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Sl.No</th>
                                <th>Notes</th>
                                <th class="text-right">Amount (₹)</th>
                                <th class="">Date & Time</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($outcomes)) {
                                $i = 1; 
                                foreach($outcomes as $out){
                            ?>
                            <tr>
                                <td class="text-center" style="width: 10%;"><?php echo $i; ?></td>
                                <td style="width: 30%;"><?php echo $out['notes']; ?></td>
                                <td class="text-right"><strong class="<?php if($out['amount_type'] == 'DEB') echo 'text-success'; else echo 'text-danger'; ?>">₹ <?php echo $out['amount']; ?></strong></td>
                                <td><?php echo date('d-m-Y h:i a', strtotime($out['date_added'])); ?></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" data-id="<?php echo $out['id']; ?>" data-user_id="<?php echo $out['user_id']; ?>" data-amount="<?php echo $out['amount']; ?>" data-notes="<?php echo $out['notes']; ?>" onclick="fetchEditData(this, 'outcomes')" class="btn btn-default enable-tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-id="<?php echo $out['id']; ?>" onclick="deleteAmtData(this, 'outcomes');" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
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
            </div>

        </div>
    </div>
</div>

<div id="modal-edit-income" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-primary">
                <h2 class="modal-title"><i class="fa fa-inr"></i> Edit Income</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/update_user_amount'); ?>" id="income-validation-old" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="edit_id" name="edit_id" value="">
                    <input type="hidden" id="edit_userId" name="edit_userId" value="">
                    <input type="hidden" id="edit_table" name="edit_table" value="">
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="edit_amt" name="edit_amt" class="form-control" placeholder="Enter Amount" require="true" >
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Notes</label>
                        <div class="col-md-8">
                            <textarea id="edit_notes" name="edit_notes" rows="4" class="form-control" placeholder="Notes.."></textarea>
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
<script>
    var base_url = document.getElementById("base_url").value; //$('#base_url').val();
    var empId = document.getElementById("emp_id").value;

    function deleteAmtData(mythis, tbl_name){
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
                    data: {id : id, tbl_name : tbl_name},
                    success: function(res){
                        window.location.href = base_url+'user_details/'+empId;
                    }
                });

            }
        })
    }

    function fetchEditData(mythis, tbl_name){
        $("#edit_id").val($(mythis).data('id'));
        $("#edit_userId").val($(mythis).data('user_id'));
        $("#edit_amt").val($(mythis).data('amount'));
        $("#edit_notes").val($(mythis).data('notes'));
        $("#edit_table").val(tbl_name);

        $('#modal-edit-income').modal('show');
    }
</script>
