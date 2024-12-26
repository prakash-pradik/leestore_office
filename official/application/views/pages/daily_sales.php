<div id="page-content">
    <!-- Daily Sales Header -->
    <div class="content-header">
        <div class="header-section" style="padding-bottom: 0px; padding-top: 22px;">
			<?php
				$cashBalance = 0; $gpayBalance = 0; 
				$av_cash = 0; $av_gpay = 0;
				$store_cash = 0; $store_gpay = 0;

				if(isset($day_close) && !empty($day_close)){
					$cashBalance = $day_close->balance_cash; 
					$gpayBalance = $day_close->balance_gpay;
				}
			
				if(!empty($open_stats)) { 
					if(!empty($open_stats->available_cash)) $av_cash = $open_stats->available_cash; 
					else $av_cash = '0';
					
					if(!empty($open_stats->available_gpay)) $av_gpay = $open_stats->available_gpay; 
					else $av_gpay = '0';
				} 
			?>

			<div class="row">
				<div class="col-md-3 hidden-xs">
					<h1>Daily Sales</h1>		
				</div>
				<?php if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') { ?>
				<div class="col-md-2 text-center">
					<h1>
						<label class="text-center">Opening Cash<br/><span class="text-success">₹
						<?php 
							echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $cashBalance); 
						?></span></label>
					</h1>
				</div>
				<div class="col-md-2 text-center">
					<h1>
						<label class="text-center">Available Cash<br/><span class="text-success">₹
						<?php 
							$av_cash = $cashBalance - $av_cash;
							echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $av_cash); 
						?></span></label>
					</h1>
				</div>
				<div class="col-md-1 hidden-xs"></div>
				<div class="col-md-2 text-center">
					<h1><label class="text-center">Opening Gpay<br/><span class="text-info">₹<?php echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $gpayBalance); ?></span></label></h1>
				</div>
				<div class="col-md-2 text-center">
					<h1>
						<label class="text-center">Available Gpay<br/><span class="text-info">₹
						<?php
							$av_gpay = $gpayBalance - $av_gpay; 
							echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $av_gpay); 
						?></span></label>
					</h1>
				</div>
				<?php } ?>

			</div>			
        </div>
    </div>
    <!-- END Daily Sales Header -->

    <!-- Daily Sales Content -->
	<div class="row">
		<div class="col-lg-3 col-sm-12">
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-info">
						<i class="fa fa-inr"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown text-info">
						₹ <strong><?php if(!empty($today_stats)) { if(!empty($today_stats->today_income)) echo $today_stats->today_income; else echo '0'; } ?></strong><br>
						<small>Store Cash Income</small>
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-fire">
						<i class="fa fa-inr"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown text-danger">
						₹ <strong><?php if(!empty($today_stats)) { if(!empty($today_stats->today_expense)) echo $today_stats->today_expense; else echo '0'; } ?></strong><br>
						<small>Store Cash Expenses</small>
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background">
						<i class="fa fa-inr"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown">
						₹ <strong>
						<?php 
							if(!empty($today_stats)) { 
								if(!empty($today_stats->today_available)) 
									$store_cash = $today_stats->today_available; 
								else $store_cash = 0;
								
								echo $store_cash;
							} 
						?></strong><br>
						<small>Store Cash Available</small>

						<input type="hidden" id="cash_available" value="<?php if(!empty($today_stats)) { if(!empty($today_stats->today_available)) echo $today_stats->today_available; else echo '0'; } ?>">
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-info">
						<i class="fa fa-credit-card"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown text-info">
						₹ <strong><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_income)) echo $gpay_stats->gpay_income; else echo '0'; } ?></strong><br>
						<small>Store Gpay Income</small>
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-fire">
						<i class="fa fa-credit-card"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown text-danger">
						₹ <strong> <?php if(!empty($gpay_stats)) {  if(!empty($gpay_stats->gpay_expense)) echo $gpay_stats->gpay_expense; else echo '0'; } ?></strong><br>
						<small>Store Gpay Expenses</small>
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background">
						<i class="fa fa-credit-card"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown">
						₹ <strong>
						<?php 
							if(!empty($gpay_stats)) { 
								if(!empty($gpay_stats->gpay_available)) 
									$store_gpay = $gpay_stats->gpay_available; 
								else $store_gpay = 0;
								
								echo $store_gpay;
						} ?></strong><br>
						<small>Store Gpay Available</small>

						<input type="hidden" id="gpay_available" value="<?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_available)) echo $gpay_stats->gpay_available; else echo '0'; } ?>">
					</h3>
				</div>
			</a>
		</div>

		<div class="col-lg-9 col-sm-12 order-first order-md-last">
			<div class="block full">
				<div class="block-title" style="display:flex;justify-content:space-between;">
					<h2><strong>Daily Sales</strong> Table</h2>
					<input type="hidden" id="store_id" value="<?php if(isset($storeId)) echo $storeId; ?>">
					<?php if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') { ?>
						<!-- <select id="store_id" name="store_id" class="form-control" size="1" require="true" style="width:200px;" onChange="onChangeStore(this);">
							<option value="">Please select</option>
							<?php if(!empty($stores)) {
								$i = 1; 
								foreach($stores as $store){
									echo '<option value="'.$store['id'].'">'.$store['store_name'].'</option>';
								}
							}?>
						</select> -->
					<?php } ?>
					<div class="block-options pull-right">
						
						<?php if(!empty($daily_sales)) { ?>
						
						<!-- <a href="<?php echo base_url('Prints/excelToday/today'); ?>" class="btn btn-alt btn-success" data-toggle="tooltip" title="Excel"><i class="fi fi-xls"></i></a> -->

						<a href="<?php echo base_url('Prints/print/today'); ?>" class="btn btn-alt btn-warning" data-toggle="tooltip" title="Print"><i class="gi gi-print"></i></a>
						<?php } ?>

						<a href="#modal-sales-income" class="btn btn-success " data-toggle="modal" title="Add Income"><i class="fa fa-plus"></i> Add New</a>

						<a href="#modal-sales-expense" class="btn btn-danger" data-toggle="modal" title="Add Expenses"><i class="fa fa-minus"></i> Add Expenses</a>
					</div>
				</div>

				<div class="table-responsive">
					<table id="income-datatable" class="table table-vcenter table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th width="5%" class="text-center">Sl.No</th>
								<th >Details</th>
								<th width="18%" class="text-right">Today Debit (₹)</th>
								<th width="18%" class="text-right">Today Credit (₹)</th>
								<th width="18%">Sales Person</th>
								<th width="10%" class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php if(!empty($daily_sales)) {
								$i = 1; 
								foreach($daily_sales as $sale){
							?>
							<tr>
								<td class="text-center"><?php echo $i; ?></td>
								<td class="text-capitalize"><?php echo $sale['description']; ?></td>
								<td class="text-right">
									<h4 class="text-danger"><?php if($sale['amount_type'] == 'exp') echo $sale['amount'].' ₹'; if($sale['amount_type'] == 'exp' && $sale['amount_mode'] == 'gpay') echo '<small class="text-bold text-warning"> (GPay)</small>'; ?></h4>
								</td>
								<td class="text-right">
									<h4 class="text-success">
										<?php if($sale['amount_type'] != 'exp') echo $sale['amount'].' ₹'; 
										if($sale['amount_type'] == 'late') echo '<small class="text-bold text-warning"> (Late Pay)</small>'; 
										if($sale['amount_type'] != 'exp' && $sale['amount_mode'] == 'gpay') echo '<small class="text-bold text-warning"> (GPay)</small>'; 
										if($sale['amount_type'] == 'card') echo '<small class="text-bold text-warning"> (Card Pay)</small>'; ?> 
									</h4>
								</td>
								<td class=""><?php echo $sale['name']; ?></td>
								<td class="text-center">
									<div class="btn-group">
										<?php if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') { ?>
											<a href="#modal-sales-income-update" data-id="<?php echo $sale['id']; ?>" onclick="fetchSaleDetails(this);" data-toggle="modal" title="Update" class="btn btn-warning enable-tooltip btn-sm"><i class="fa fa-pencil"></i></a>
										<?php } ?>
										<a href="javascript:void(0)" data-user_id="<?php echo $sale['id']; ?>" onclick="deleteSalesData(this);" data-toggle="tooltip" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
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
			<?php 

			if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') {

				if(isset($day_close) && !empty($day_close)){ 
					$curDate = date("Y-m-d"); 
					$getDate = $day_close->closing_date;
					if($curDate !== $getDate) { 
			?>
			<div class="block">
				<div class="form-group row">
					<div class="col-xs-4">
						<h4>
							<label class="text-center">Overall Cash Available<br/><span class="text-success" style="font-size:30px">₹
							<?php
								$overall_cash = $av_cash + $store_cash;
								echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $overall_cash); 
							?>
							</span></label>
						</h4>
					</div>
					<div class="col-xs-4">
						<h4>
							<label class="text-center">Overall Gpay Available<br/><span class="text-info" style="font-size:30px">₹
							<?php 
								$overall_gpay = $av_gpay + $store_gpay;
								echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $overall_gpay); 
							?>
							</span></label>
						</h4>
					</div>
					<div class="col-xs-4 text-right"><br/>
						<button type="button" class="btn btn-success" onClick="dayClose();">Day Closing</button>
					</div>
				</div>
			</div>
			<?php } } 
			
				}
			?>
			
		</div>
	</div>
    <!-- END Daily Sales Content -->


	<div id="modal-sales-income" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header text-center bg-success">
					<h2 class="modal-title"><i class="fa fa-angle-double-down"></i> Add New Sale</h2>
				</div>
				
				<div class="modal-body">
					<form action="<?php echo base_url('admin/insert_sales'); ?>" id="sale-income-validation" method="post" class="form-horizontal form-bordered">
						<input type="hidden" id="sale_type" name="sale_type" class="form-control" value="inc">
						<div class="form-group">
							<label class="col-md-4 control-label">Sales Person</label>
							<div class="col-md-8">
								<select id="emp_id" name="emp_id" class="form-control" size="1" require="true">
								<option value="">Please select</option>
								<?php if(!empty($employees)) {
									$i = 1; 
									foreach($employees as $emp){
										echo '<option value="'.$emp['id'].'">'.$emp['name'].'</option>';
									}
								}?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Description</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="text" id="sale_desc" name="sale_desc" class="form-control" placeholder="Description..">
									<span class="input-group-addon"><i class="gi gi-notes"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="user-settings-email">Amount</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="text" id="sale_amt" name="sale_amt" class="form-control" placeholder="Enter Amount" require="true">
									<span class="input-group-addon"><i class="fa fa-inr"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Amount Mode</label>
							<div class="col-md-8">
								<select id="amount_mode" name="amount_mode" class="form-control" size="1" require="true">
									<option value="">Please select</option>
									<option value="cash">Cash</option>
									<option value="gpay">Gpay</option>
									<option value="card_pay">Card Pay</option>
									<option value="late_pay">Late Pay</option>
									<?php 
										if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') {
									?>
									<option value="open_cash">Open Cash</option>
									<option value="open_gpay">Open Gpay</option>
									<?php } ?>
								</select>
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
			</div>
		</div>
	</div>

	<div id="modal-sales-income-update" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header text-center bg-warning">
					<h2 class="modal-title"><i class="fa fa-pencil"></i> Update Details</h2>
				</div>
				
				<div class="modal-body">
					<form action="<?php echo base_url('admin/update_sales'); ?>" id="sale-income-validation" method="post" class="form-horizontal form-bordered">
						<input type="hidden" id="update_sale_type" name="sale_type" class="form-control" value="">
						<input type="hidden" id="update_sale_id" name="sale_id" class="form-control" value="">
						<div class="form-group">
							<label class="col-md-4 control-label">Sales Person</label>
							<div class="col-md-8">
								<select id="update_emp_id" name="emp_id" class="form-control" size="1" require="true">
								<option value="">Please select</option>
								<?php if(!empty($employees)) {
									$i = 1; 
									foreach($employees as $emp){
										echo '<option value="'.$emp['id'].'">'.$emp['name'].'</option>';
									}
								}?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Description</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="text" id="update_sale_desc" name="sale_desc" class="form-control" placeholder="Description..">
									<span class="input-group-addon"><i class="gi gi-notes"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="user-settings-email">Amount</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="text" id="update_sale_amt" name="sale_amt" class="form-control" placeholder="Enter Amount" require="true">
									<span class="input-group-addon"><i class="fa fa-inr"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Amount Mode</label>
							<div class="col-md-8">
								<select id="update_amount_mode" name="amount_mode" class="form-control" size="1" require="true">
									<option value="">Please select</option>
									<option value="cash">Cash</option>
									<option value="gpay">Gpay</option>
									<option value="card_pay">Card Pay</option>
									<option value="late_pay">Late Pay</option>
									<?php 
										if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') {
									?>
									<option value="open_cash">Open Cash</option>
									<option value="open_gpay">Open Gpay</option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-xs-12 text-right">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-warning">Update Amount</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="modal-sales-expense" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header text-center bg-danger">
					<h2 class="modal-title"><i class="fa fa-angle-double-down"></i> Add New Expenses</h2>
				</div>
				<!-- END Modal Header -->

				<!-- Modal Body -->
				<div class="modal-body">
					<form action="<?php echo base_url('admin/insert_sales'); ?>" id="sale-exp-validation" method="post" class="form-horizontal form-bordered">
						<input type="hidden" id="sale_type" name="sale_type" class="form-control" value="exp">
						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-8">
								<select id="emp_id" name="emp_id" class="form-control" size="1" require="true">
								<option value="">Please select</option>
								<?php if(!empty($employees)) {
									$i = 1; 
									foreach($employees as $emp){
										echo '<option value="'.$emp['id'].'">'.$emp['name'].'</option>';
									}
								}?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Description</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="text" id="sale_desc" name="sale_desc" class="form-control" placeholder="Description..">
									<span class="input-group-addon"><i class="gi gi-notes"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="user-settings-email">Amount</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="text" id="sale_amt" name="sale_amt" class="form-control" placeholder="Enter Amount" require="true">
									<span class="input-group-addon"><i class="fa fa-inr"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Amount Mode</label>
							<div class="col-md-8">
								<select id="amount_mode" name="amount_mode" class="form-control" size="1" require="true">
									<option value="">Please select</option>
									<option value="cash">Cash</option>
									<option value="gpay">Gpay</option>
									<?php 
										if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') {
									?>
									<option value="open_cash">Open Cash</option>
									<option value="open_gpay">Open Gpay</option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-xs-12 text-right">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-danger">Save Expense</button>
							</div>
						</div>
					</form>
				</div>
				<!-- END Modal Body -->
			</div>
		</div>
	</div>
	
</div>
