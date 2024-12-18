<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-inr"></i>Outcome List
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Outcome</strong> Table</h2>

            <div class="block-options pull-right">
                
                <span class="label label-success" style="font-size:20px;">
                    <strong>₹ <?php if(!empty($amount_stats)) {
                        //$amount = money_format('%!i', $amount);                         
                        if(!empty($amount_stats->total_credit)){
                            $amt = ($amount_stats->total_debit - $amount_stats->total_credit);
                            echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $amt);
                        }
                        else echo '0'; 
                        } else echo '0'; ?></strong>
                </span>
            
                <a href="#modal-outcome" class="btn btn-success" data-toggle="modal" title="Add New User"><i class="fa fa-user-plus"></i> Add New Amount</a>

                <!-- <a href="#modal-outcome-old" class="btn btn-alt btn-sm btn-info" data-toggle="modal" title="Update User"><i class="fa fa-user-plus"></i> Update Amount</a> -->
            </div>
        </div>

        <div class="table-responsive">
            <table id="outcome-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" width="5%">ID</th>
                        <th width="20%">Name</th>
                        <th>Total Debit (₹)</th>
                        <!-- <th>Total Credit</th> -->
                        <th>Balance Amount (₹)</th>
                        <th width="30%">Notes</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($outcomes)) {
                        $i = 1; 
                        foreach($outcomes as $outcome){
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td><a class="text-info" href="<?php echo base_url('user_details/'.$outcome['id']); ?>"><?php echo $outcome['name']; ?></a></td>
                        <td>₹ <?php echo $outcome['total_credit']; ?></td>
                        <!-- <td><?php echo $outcome['total_debit']; ?></td> -->
                        <td><h4 class="text-danger">₹ <?php echo $outcome['total_available']; ?></h4></td>
                        <td><?php echo $outcome['notes']; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-inc_type="plus" data-user_id="<?php echo $outcome['id']; ?>" onclick="fetchOutcomeData(this);" data-toggle="tooltip" title="Add" class="btn btn-success"><i class="fa fa-plus"></i></a>
                                <a href="javascript:void(0)" data-inc_type="minus" data-user_id="<?php echo $outcome['id']; ?>" onclick="fetchOutcomeData(this);" data-toggle="tooltip" title="Minus" class="btn btn-warning"><i class="fa fa-minus"></i></a>
                            </div>
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-user_id="<?php echo $outcome['id']; ?>" onclick="deleteOutcomeData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
    <!-- END Datatables Content -->


<div id="modal-outcome" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-angle-double-down"></i> Add New Outcome</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_outcome_data'); ?>" id="income-validation" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                    <input type="hidden" id="insert_type" name="insert_type" value="new">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="income_user_name" name="income_user_name" class="form-control" placeholder="Enter Name">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label">Phone Number</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="income_user_phone" name="income_user_phone" class="form-control" placeholder="Phone Number.." maxlength="10">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Second Number</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="income_user_second" name="income_user_second" class="form-control" placeholder="Phone Number.." maxlength="10">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="income_amt_value" name="income_amt_value" class="form-control" placeholder="Enter Amount">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Notes</label>
                        <div class="col-md-8">
                            <textarea id="income_notes" name="income_notes" rows="4" class="form-control" placeholder="Notes.."></textarea>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Amount</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-outcome-old" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-info">
                <h2 class="modal-title"><i class="fa fa-angle-double-down"></i> Update Outcome</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_outcome_data'); ?>" id="income-validation-old" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="insert_type" name="insert_type" value="old">
                    <input type="hidden" id="old_user_id" name="old_user_id" value="">
                    <input type="hidden" id="old_amount_type" name="old_amount_type" value="">
                    <!-- <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-8">
                            <select id="old_user_id" name="old_user_id" class="form-control" size="1" require="true">
                            <option value="">Please select</option>
                            <?php if(!empty($users)) {
                                $i = 1; 
                                foreach($users as $user){
                                    echo '<option value="'.$user['id'].'">'.$user['name'].'</option>';
                                }
                            }?>
                            </select>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="old_income_amt" name="old_income_amt" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Notes</label>
                        <div class="col-md-8">
                            <textarea id="old_income_notes" name="old_income_notes" rows="4" class="form-control" placeholder="Notes.."></textarea>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Update Amount</button>
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

    function deleteOutcomeData(mythis){
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
                        data: {userId : userId, tbl_name : 'outcomes'},
                        success: function(res){
                            window.location.href = base_url+'outcomes';
                        }
                    });

                }
            })
    }

    function fetchOutcomeData(mythis){
        var incType = $(mythis).data('inc_type');
        var userId = $(mythis).data('user_id');

        if(incType == 'plus'){
            $("#insert_type").val('new_plus');
            $("#old_amount_type").val('DEB');
        }else{
            $("#insert_type").val('old');
            $("#old_amount_type").val('CRE');
        }

        $("#old_user_id").val(userId);
        
        $('#modal-outcome-old').modal('show');
        
    }
</script>

</div>