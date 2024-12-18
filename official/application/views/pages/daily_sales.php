<div id="page-content">
    <!-- Daily Sales Header -->
    <div class="content-header">
        <div class="header-section" style="padding-bottom: 0px; padding-top: 22px;">
            <h1 style="display:flex; justify-content: space-between;">
				<span>Daily Sales</span>
				<?php
					$cashBalance = 0; $gpayBalance = 0; 
					if(isset($day_close) && !empty($day_close)){
						$cashBalance = $day_close->balance_cash; 
						$gpayBalance = $day_close->balance_gpay;
					}
				?>
				<label class="text-center">Opening Balance(Cash)<br/><span>₹<?php echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $cashBalance); ?></span></label>
				<label class="text-center">Opening Balance(Gpay)<br/><span>₹<?php echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $gpayBalance); ?></span></label>
				<i class="fa fa-inr"></i>
            </h1>

			
        </div>
    </div>
    <!-- END Daily Sales Header -->

    <!-- Daily Sales Content -->
	<div class="row">
		<div class="col-lg-3">
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-spring">
						<i class="fa fa-inr"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown">
						₹ <strong><?php if(!empty($today_stats)) { if(!empty($today_stats->today_income)) echo $today_stats->today_income; else echo '0'; } ?></strong><br>
						<small>Total Income</small>
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-fire">
						<i class="fa fa-inr"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown">
						₹ <strong><?php if(!empty($today_stats)) { if(!empty($today_stats->today_expense)) echo $today_stats->today_expense; else echo '0'; } ?></strong><br>
						<small>Total Expenses</small>
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-amethyst">
						<i class="fa fa-inr"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown">
						₹ <strong><?php if(!empty($today_stats)) { if(!empty($today_stats->today_available)) echo $today_stats->today_available; else echo '0'; } ?></strong><br>
						<small>Total Available</small>
						<input type="hidden" id="cash_available" value="<?php if(!empty($today_stats)) { if(!empty($today_stats->today_available)) echo $today_stats->today_available; else echo '0'; } ?>">
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-spring">
						<i class="fa fa-credit-card"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown">
						₹ <strong><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_income)) echo $gpay_stats->gpay_income; else echo '0'; } ?></strong><br>
						<small>Gpay Income</small>
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-fire">
						<i class="fa fa-credit-card"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown">
						₹ <strong><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_expense)) echo $gpay_stats->gpay_expense; else echo '0'; } ?></strong><br>
						<small>Gpay Expenses</small>
					</h3>
				</div>
			</a>
			<a href="javascript:void(0)" class="widget widget-hover-effect1">
				<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-amethyst">
						<i class="fa fa-credit-card"></i>
					</div>
					<h3 class="widget-content text-right animation-pullDown">
						₹ <strong><?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_available)) echo $gpay_stats->gpay_available; else echo '0'; } ?></strong><br>
						<small>Gpay Available</small>
						<input type="hidden" id="gpay_available" value="<?php if(!empty($gpay_stats)) { if(!empty($gpay_stats->gpay_available)) echo $gpay_stats->gpay_available; else echo '0'; } ?>">
					</h3>
				</div>
			</a>
			
		</div>
		<div class="col-lg-9">
			<div class="block full">
				<div class="block-title" style="display:flex;justify-content:space-between;">
					<h2><strong>Daily Sales</strong> Table</h2>

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
						
						<a href="<?php echo base_url('Prints/excelToday/today'); ?>" class="btn btn-alt btn-success" data-toggle="tooltip" title="Excel"><i class="fi fi-xls"></i></a>

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
			<div class="form-group">
				<div class="col-xs-12 text-right">
					<button type="button" class="btn btn-success" onClick="dayClose();">Day Closing</button>
				</div>
			</div>
			<?php } } 
			
				}
			?>
			
		</div>
	</div>
    <!-- END Daily Sales Content -->
	
</div>
