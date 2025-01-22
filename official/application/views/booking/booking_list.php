<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-user"></i>Booking List
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
            <h2><strong>Booking</strong> Table</h2>
            <div class="block-options pull-right">
                <a href="#modal-new-booking" class="btn btn-success" data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Customer Name</th>
                        <th>Phone Number</th>
                        <th class="text-left">Details</th>
						<th class="text-left">Amount</th>
						<th class="">Pay Status</th>
						<th class="">Order Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($booking)) {
                        $i = 1; 
                        foreach($booking as $book){
							
							if($book['pay_type'] == 'paid')
                                $bookStatus = '<a href="javascript:void(0)" class="label label-success">Paid</a>';
                            else if($book['pay_type'] == 'advance')
                                $bookStatus = '<a href="javascript:void(0)" class="label label-warning">Advance</a>';
							else
                                $bookStatus = '<a href="javascript:void(0)" class="label label-info">Just Book</a>';
							
                    ?>
                    <tr>
                        <td class="text-center" width="5%"><a href="javascript:void(0)" class="text-info"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a></td>
                        <td class="text-capitalize" width="16%"><a href="javascript:void(0)" class="text-info"><?php echo $book['name']; ?></a></td>
						<td class="text-capitalize" width="13%">+91-<?php echo $book['phone_number']; ?></td>
                        <td class="text-capitalize"><?php echo $book['details']; ?></td>
						<td class="text-capitalize"><?php if($book['amount'] !== '') echo '₹ '.preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $book['amount']) ?></td>
						<td class="text-capitalize" width="10%"><?php echo $bookStatus; ?></td>
						<td class="text-capitalize" width="10%"><?php echo date('d-m-Y', strtotime($book['date_added'])); ?></td>
                        <td class="text-center" width="10%">
                            <div class="btn-group btn-group-xs">
                                <a href="#modal-view-booking" data-id="<?php echo $book['id']; ?>" onclick="fetchBookingDetails(this);" data-toggle="modal" title="View" class="btn btn-warning enable-tooltip"><i class="fa fa-eye"></i></a>

                                <a href="#modal-update-booking" data-id="<?php echo $book['id']; ?>" onclick="fetchBookingDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $book['id']; ?>" onclick="deleteBookingData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
	
	<div id="modal-new-booking" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header text-center bg-success">
					<h2 class="modal-title"><i class="fa fa-plus"></i> Add New Booking</h2>
				</div>
				<!-- END Modal Header -->

				<!-- Modal Body -->
				<div class="modal-body">
					<form action="<?php echo base_url('booking/insert_booking'); ?>" id="booking-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-md-4 control-label">Customer Name</label>
							<div class="col-md-8">
								<input type="text" id="booking_name" name="booking_name" class="form-control" placeholder="Name..">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Phone Number</label>
							<div class="col-md-8">
								<input type="text" id="booking_phone" name="booking_phone" class="form-control numeric" placeholder="Phone Number.." maxlength="10">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Need</label>
							<div class="col-md-8">
								<textarea id="booking_details" name="booking_details" rows="4" class="form-control" placeholder="Details.."></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Amount</label>
							<div class="col-md-8">
								<input type="text" id="booking_amount" name="booking_amount" class="form-control numeric" placeholder="Amount..">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Pay Status</label>
							<div class="col-md-8">
								<select id="booking_pay" name="booking_pay" class="form-control">
									<option value="">Please select</option>
									<option value="paid">Full Paid</option>
									<option value="advance">Advance</option>
									<option value="just">Just Book</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Address</label>
							<div class="col-md-8">
								<input type="text" id="booking_address" name="booking_address" class="form-control" placeholder="Address..">
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
	
	<div id="modal-update-booking" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header text-center bg-info">
					<h2 class="modal-title"><i class="fa fa-pencil"></i> Update Booking</h2>
				</div>
				<!-- END Modal Header -->

				<!-- Modal Body -->
				<div class="modal-body">
					<form action="<?php echo base_url('booking/update_booking'); ?>" id="booking-update-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
						<input type="hidden" name="booking_id" id="booking_id">
						<div class="form-group">
							<label class="col-md-4 control-label">Customer Name</label>
							<div class="col-md-8">
								<input type="text" id="update_booking_name" name="booking_name" class="form-control" placeholder="Name..">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Phone Number</label>
							<div class="col-md-8">
								<input type="text" id="update_booking_phone" name="booking_phone" class="form-control numeric" placeholder="Phone Number.." maxlength="10">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Need</label>
							<div class="col-md-8">
								<textarea id="update_booking_details" name="booking_details" rows="4" class="form-control" placeholder="Details.."></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Amount</label>
							<div class="col-md-8">
								<input type="text" id="update_booking_amount" name="booking_amount" class="form-control numeric" placeholder="Amount..">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Pay Status</label>
							<div class="col-md-8">
								<select id="update_booking_pay" name="booking_pay" class="form-control">
									<option value="">Please select</option>
									<option value="paid">Full Paid</option>
									<option value="advance">Advance</option>
									<option value="just">Just Book</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Address</label>
							<div class="col-md-8">
								<textarea id="update_booking_address" name="booking_address" rows="4" class="form-control" placeholder="Address.."></textarea>
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
					<h2 class="modal-title"><i class="fa fa-pencil"></i> Booking Details</h2>
				</div>
				<!-- END Modal Header -->

				<!-- Modal Body -->
				<div class="modal-body">
					<form action="javascript:void(0)" id="booking-view-validation" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
						<input type="hidden" name="booking_id" id="view_booking_id">
						<fieldset>
							<div class="form-group">
								<label class="col-md-4 control-label">Customer Name</label>
								<div class="col-md-8">
									<p class="form-control-static" id="view_booking_name"></p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Phone Number</label>
								<div class="col-md-8">
									<p class="form-control-static" id="view_booking_phone"></p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Need</label>
								<div class="col-md-8">
									<p class="form-control-static" id="view_booking_details"></p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Amount</label>
								<div class="col-md-8">
									<p class="form-control-static" id="view_booking_amount"></p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Pay Status</label>
								<div class="col-md-8">
									<p class="form-control-static text-capitalize" id="view_booking_pay"></p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Address</label>
								<div class="col-md-8">
									<p class="form-control-static" id="view_booking_address"></p>
								</div>
							</div>
						</fieldset>
						<div class="form-group form-actions">
							<div class="col-xs-12 text-right">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-warning">Deliver</button>
							</div>
						</div>
					</form>
				</div>
				<!-- END Modal Body -->
			</div>
		</div>
	</div>

</div>


