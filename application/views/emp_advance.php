<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-inr"></i>Employee Advances
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Advance</strong> Table</h2>

            <div class="block-options pull-right">
                <a href="#modal-income" class="btn btn-alt btn-sm btn-success " data-toggle="modal" title="Add New User"><i class="fa fa-user-plus"></i> Add New Advance</a>

                <a href="#modal-income-old" class="btn btn-alt btn-sm btn-info" data-toggle="modal" title="Update User"><i class="fa fa-user-plus"></i> Update Advance</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="income-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Name</th>
                        <th>Total Debit (₹)</th>
                        <!-- <th>Total Credit</th> -->
                        <th>Balance Amount (₹)</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($incomes)) {
                        $i = 1; 
                        foreach($incomes as $income){
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td><a class="text-info" href="<?php echo base_url('employee_details/'.$income['id']); ?>"><?php echo $income['name']; ?></a></td>
                        <td>₹ <?php echo $income['total_credit']; ?></td>
                        <!-- <td><?php echo $income['total_debit']; ?></td> -->
                        <td><h4 class="text-success">₹ <?php echo $income['total_available']; ?></h4></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-user_id="<?php echo $income['id']; ?>" onclick="deleteAdvData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
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

<div id="modal-income" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <button type="submit" class="btn btn-success">Save Amount</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="modal-income-old" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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

    function deleteAdvData(mythis){
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
                        data: {userId : userId, tbl_name : 'employee_advance'},
                        success: function(res){
                            window.location.href = base_url+'employee_advance';
                        }
                    });

                }
            })
    }    
</script>