<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-user"></i>Late Pay List
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->
    <?php
        $message = $this->session->flashdata('message');
        if(isset($message) && $message != "")
        echo successmessage($message);
    ?>
    <!-- Datatables Content -->
	<div class="block full">
        <div class="block-title">
            <h2><strong>Late Pay</strong> Table</h2>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-left">Details</th>
						<th class="text-left">Amount</th>
						<th class="">Sale Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($sales_list)) {
                        $i = 1; 
                        foreach($sales_list as $sale){					
                    ?>
                    <tr>
                        <td class="text-center" width="5%"><a href="javascript:void(0)" class="text-info"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a></td>
                        <td class="text-capitalize"><?php echo $sale['description']; ?></td>
						<td class="text-capitalize"><?php if($sale['amount'] !== '') echo '₹ '.preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $sale['amount']) ?></td>
						<td class="text-capitalize" width="10%"><?php echo date('d-m-Y', strtotime($sale['date_added'])); ?></td>
                        <td class="text-center" width="10%">
                            <div class="btn-group btn-group-xs">
                                <a href="#modal-view-booking" data-id="<?php echo $sale['id']; ?>" onclick="fetchLateDetails(this);" data-toggle="modal" title="View" class="btn btn-warning enable-tooltip"><i class="fa fa-eye"></i></a>

                                <a href="#modal-update-booking" data-id="<?php echo $sale['id']; ?>" onclick="fetchLateDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $sale['id']; ?>" onclick="deleteLateData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
	
	<div id="modal-update-booking" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header text-center bg-info">
					<h2 class="modal-title"><i class="fa fa-pencil"></i> Update Late Pay</h2>
				</div>
				<!-- END Modal Header -->

				<!-- Modal Body -->
				<div class="modal-body">
					<form action="<?php echo base_url('admin/update_late'); ?>" id="booking-update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
						<input type="hidden" name="late_id" id="late_id">
						<div class="form-group">
							<label class="col-md-4 control-label">Description</label>
							<div class="col-md-8">
								<textarea id="update_late_desc" name="update_late_desc" rows="4" class="form-control" placeholder="Description.."></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Amount</label>
							<div class="col-md-8">
								<input type="text" id="update_late_amount" name="update_late_amount" class="form-control numeric" placeholder="Amount..">
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
	
	<div id="modal-view-booking" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header text-center bg-warning">
					<h2 class="modal-title"><i class="fa fa-eye"></i> Late Pay Details</h2>
				</div>
				<!-- END Modal Header -->

				<!-- Modal Body -->
				<div class="modal-body">
					<form action="<?php echo base_url('admin/latePayUpdate'); ?>" id="" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
						<input type="hidden" name="view_late_id" id="view_late_id">
						<fieldset>
							<div class="form-group">
								<label class="col-md-4 control-label">Description</label>
								<div class="col-md-8">
									<p class="form-control-static" id="view_late_desc"></p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Amount</label>
								<div class="col-md-8">
									<p class="form-control-static" id="view_late_amount"></p>
								</div>
							</div>
						</fieldset>
						<div class="form-group form-actions">
							<div class="col-xs-12 text-right">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-warning">Payment</button>
							</div>
						</div>
					</form>
				</div>
				<!-- END Modal Body -->
			</div>
		</div>
	</div>

	<script>
		function fetchLateDetails(mythis) {
			var id = $(mythis).data('id');
			$.ajax({
				url: base_url + 'admin/fetch_data',
				type: 'post',
				data: { id: id, tbl_name: 'daily_sales' },
				dataType: "json",
				success: function (res) {
					
					$('#late_id, #view_late_id').val(res.id);
					$('#update_late_desc').val(res.description);
					$('#update_late_amount').val(res.amount);

					$('#view_late_desc').text(res.description);
					$('#view_late_amount').text(res.amount);
				}
			});
		}

		function deleteLateData(mythis) {
                var id = $(mythis).data('id');
                
                swal({
                    title: "Are you sure?", 
                    text: "You won't be able to revert this!",
                    type: "warning",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Yes, Confirm it!",
                    showCancelButton: true
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: base_url + 'admin/delete_by_id',
                            type: 'post',
                            data: { id: id, tbl_name: 'daily_sales' },
                            success: function (res) {

                                $(mythis).parent().parent().parent().remove();

                                swal({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                }).then((res1) => {
                                    if (res1.value) {
                                        window.location.reload();
                                    }
                                });

                                setTimeout(() => {
                                    location.reload();
                                }, 3000);
                            }
                        });
                    }
                });
            }
	</script>

</div>


