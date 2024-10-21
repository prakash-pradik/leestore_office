<div id="page-content">
    <!-- Daily Sales Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-inr"></i>Daily Sales
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
					</h3>
				</div>
			</a>
		</div>
		<div class="col-lg-9">
			<div class="block full">
				<div class="block-title">
					<h2><strong>Daily Sales</strong> Table</h2>

					<div class="block-options pull-right">
						<?php if(!empty($daily_sales)) { ?>
						
						<a href="<?php echo base_url('Prints/excelToday/today'); ?>" class="btn btn-alt btn-success" data-toggle="tooltip" title="Excel"><i class="fi fi-xls"></i></a>

						<a href="<?php echo base_url('Prints/print/today'); ?>" class="btn btn-alt btn-warning" data-toggle="tooltip" title="Print"><i class="gi gi-print"></i></a>
						<?php } ?>

						<a href="#modal-sales-income" class="btn btn-success " data-toggle="modal" title="Add Income"><i class="fa fa-plus"></i> Add New</a>

						<a href="#modal-sales-expense" class="btn btn-info" data-toggle="modal" title="Add Expenses"><i class="fa fa-plus"></i> Add Expenses</a>
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
		
		</div>
	</div>
    <!-- END Daily Sales Content -->
</div>
