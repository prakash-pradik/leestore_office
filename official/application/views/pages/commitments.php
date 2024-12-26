<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-inr"></i>Commitments
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="row">
        <div class="col-md-6">

            <div class="block full">
                <div class="block-title">
                    <h2><strong>Banking Due</strong> Table</h2>

                    <div class="block-options pull-right">

                        <span class="label label-success" style="font-size:20px;">
                            <strong>₹ <?php 
                                if(!empty($amount_stats)) { 
                                    if(!empty($amount_stats->total_due)){
                                        $amt = $amount_stats->total_due;
                                        echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $amt);
                                    }
                                    else echo '0'; 
                                } else echo '0'; ?></strong>
                        </span>

                        <?php if(!empty($dues)) { ?>
                            <a href="<?php echo base_url('Prints/commitments/due'); ?>" class="btn btn-alt btn-warning" data-toggle="tooltip" title="Print"><i class="gi gi-print"></i></a>
                        <?php } ?> 
                        
                        <a href="#modal-due" class="btn btn-success " data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
                    </div>

                </div>

                <div class="table-responsive">
                    <table id="income-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="15%">Date</th>
                                <th width="35%">Details</th>
                                <th width="30%">Amount (₹)</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($dues)) {
                                $i = 1; 
                                foreach($dues as $due){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $due['monthly_date']; ?></td>
                                <td><a class="text-info" href="javascript:void(0)"><?php echo $due['details']; ?></a></td>
                                <td>₹ <?php echo $due['amount']; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <?php if($due['status'] == 0) {  ?>
                                            <a href="javascript:void(0)" data-id="<?php echo $due['id']; ?>" onclick="updateDueDate(this);" data-toggle="tooltip" title="" class="btn btn-sm btn-warning">Pending</a>
                                        <?php } else { ?>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <?php } ?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" data-id="<?php echo $due['id']; ?>" onclick="deleteDueData(this);" data-toggle="tooltip" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
        </div>

        <div class="col-md-6">
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Monthly Interest</strong> Table</h2>

                    <div class="block-options pull-right">

                        <span class="label label-success" style="font-size:20px;">
                            <strong>₹ <?php 
                                if(!empty($amount_stats)) { 
                                    if(!empty($amount_stats->total_interest)){
                                        $amt = $amount_stats->total_interest;
                                        echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $amt);
                                    }
                                    else echo '0'; 
                                } else echo '0'; ?></strong>
                        </span>

                        <?php if(!empty($interest)) { ?>
                            <a href="<?php echo base_url('Prints/commitments/interest'); ?>" class="btn btn-alt btn-warning" data-toggle="tooltip" title="Print"><i class="gi gi-print"></i></a>
                        <?php } ?>
            
                        <a href="#modal-interest" class="btn btn-success " data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
                    </div>

                </div>

                <div class="table-responsive">
                    <table id="outcome-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="15%">Date</th>
                                <th width="35%">Details</th>
                                <th width="30%">Amount (₹)</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($interest)) {
                                $i = 1; 
                                foreach($interest as $int){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $int['monthly_date']; ?></td>
                                <td><a class="text-info" href="javascript:void(0)"><?php echo $int['details']; ?></a></td>
                                <td>₹ <?php echo $int['amount']; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <?php if($int['status'] == 0) {  ?>
                                            <a href="javascript:void(0)" data-id="<?php echo $int['id']; ?>" onclick="updateDueDate(this);" data-toggle="tooltip" title="" class="btn btn-sm btn-warning">Pending</a>
                                        <?php } else { ?>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <?php } ?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" data-id="<?php echo $int['id']; ?>" onclick="deleteDueData(this);" data-toggle="tooltip" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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

        <div class="col-md-6">
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Credit Card</strong> Table</h2>

                    <div class="block-options pull-right">
                        <span class="label label-success" style="font-size:20px;">
                            <strong>₹ <?php 
                                if(!empty($amount_stats)) { 
                                    if(!empty($amount_stats->total_cc)){
                                        $amt = $amount_stats->total_cc;
                                        echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $amt);
                                    }
                                    else echo '0'; 
                                } else echo '0'; ?></strong>
                        </span>
                        
                        <?php if(!empty($credit)) { ?>
                            <a href="<?php echo base_url('Prints/commitments/credit'); ?>" class="btn btn-alt btn-warning" data-toggle="tooltip" title="Print"><i class="gi gi-print"></i></a>
                        <?php } ?>

                        <a href="#modal-credit" class="btn btn-success " data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
                    </div>

                </div>

                <div class="table-responsive">
                    <table id="cc-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="15%">Date</th>
                                <th width="35%">Details</th>
                                <th width="30%">Amount (₹)</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($credit)) {
                                $i = 1; 
                                foreach($credit as $cre){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $cre['monthly_date']; ?></td>
                                <td><a class="text-info" href="javascript:void(0)"><?php echo $cre['details']; ?></a></td>
                                <td>₹ <?php echo $cre['amount']; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <?php if($cre['status'] == 0) {  ?>
                                            <a href="javascript:void(0)" data-id="<?php echo $cre['id']; ?>" onclick="updateDueDate(this);" data-toggle="tooltip" title="" class="btn btn-sm btn-warning">Pending</a>
                                        <?php } else { ?>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <?php } ?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" data-id="<?php echo $cre['id']; ?>" onclick="deleteDueData(this);" data-toggle="tooltip" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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

        <div class="col-md-6">
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Jewel</strong> Table</h2>

                    <div class="block-options pull-right">
                        <span class="label label-success" style="font-size:20px;">
                            <strong>₹ <?php 
                                if(!empty($amount_stats)) { 
                                    if(!empty($amount_stats->total_jewel)){
                                        $amt = $amount_stats->total_jewel;
                                        echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $amt);
                                    }
                                    else echo '0'; 
                                } else echo '0'; ?></strong>
                        </span>

                        <?php if(!empty($jewel)) { ?>
                            <a href="<?php echo base_url('Prints/commitments/jewel'); ?>" class="btn btn-alt btn-warning" data-toggle="tooltip" title="Print"><i class="gi gi-print"></i></a>
                        <?php } ?>

                        <a href="#modal-jewel" class="btn btn-success " data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
                    </div>

                </div>

                <div class="table-responsive">
                    <table id="jewel-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="15%">Date</th>
                                <th width="35%">Details</th>
                                <th width="30%">Amount (₹)</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($jewel)) {
                                $i = 1; 
                                foreach($jewel as $jw){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $jw['monthly_date']; ?></td>
                                <td><a class="text-info" href="javascript:void(0)"><?php echo $jw['details']; ?></a></td>
                                <td>₹ <?php echo $jw['amount']; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <?php if($jw['status'] == 0) {  ?>
                                            <a href="javascript:void(0)" data-id="<?php echo $jw['id']; ?>" onclick="updateDueDate(this);" data-toggle="tooltip" title="" class="btn btn-sm btn-warning">Pending</a>
                                        <?php } else { ?>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <?php } ?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" data-id="<?php echo $jw['id']; ?>" onclick="deleteDueData(this);" data-toggle="tooltip" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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

    </div>

<div id="modal-due" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Due</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_due_data'); ?>" id="due-validation" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="insert_type" name="insert_type" value="due">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date</label>
                        <div class="col-md-8">
                            <input type="text" id="due_date" name="due_date" class="form-control" placeholder="Date..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Details</label>
                        <div class="col-md-8">
                            <input type="text" id="due_details" name="due_details" class="form-control" placeholder="Details..">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="due_amount" name="due_amount" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Amount</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-interest" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Interest</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_due_data'); ?>" id="due-validation" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="insert_type" name="insert_type" value="interest">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date</label>
                        <div class="col-md-8">
                            <input type="text" id="due_date" name="due_date" class="form-control" placeholder="Date..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Details</label>
                        <div class="col-md-8">
                            <input type="text" id="due_details" name="due_details" class="form-control" placeholder="Details..">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="due_amount" name="due_amount" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Amount</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-credit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Credit Card</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_due_data'); ?>" id="due-validation" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="insert_type" name="insert_type" value="credit">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date</label>
                        <div class="col-md-8">
                            <input type="text" id="due_date" name="due_date" class="form-control" placeholder="Date..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Details</label>
                        <div class="col-md-8">
                            <input type="text" id="due_details" name="due_details" class="form-control" placeholder="Details..">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="due_amount" name="due_amount" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Amount</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-jewel" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Jewel</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url('admin/insert_due_data'); ?>" id="due-validation" method="post" class="form-horizontal form-bordered">
                    <input type="hidden" id="insert_type" name="insert_type" value="jewel">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date</label>
                        <div class="col-md-8">
                            <input type="text" id="due_date" name="due_date" class="form-control" placeholder="Date..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Details</label>
                        <div class="col-md-8">
                            <input type="text" id="due_details" name="due_details" class="form-control" placeholder="Details..">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="due_amount" name="due_amount" class="form-control" placeholder="Enter Amount" require="true">
                                <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Amount</button>
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
    
    function updateDueDate(mythis){
        var id = $(mythis).data('id');
        swal({
            title: "Are you sure?", 
            text: "", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, Confirm it!",
            showCancelButton: true
        })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url+'admin/update_due_data',
                    type: 'post',
                    data: {due_id : id, due_type: 'due'},
                    success: function(res){
                        window.location.href = base_url+'commitment';
                    }
                });
            }
        })
    }

    function deleteIncomeData(mythis){
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
                        data: {userId : userId, tbl_name : 'incomes'},
                        success: function(res){
                            window.location.href = base_url+'incomes';
                        }
                    });
                }
            })
    }

    function fetchIncomeData(mythis){
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
        
        $('#modal-income-old').modal('show');
        
    }
</script>
<style>
    .table-responsive {
        min-height: 580px !important;
    }
</style>
</div>