<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Full Reports
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
	<div class="block full">
        <div class="block-title">
            <h2><strong>Full Reports</strong> Table</h2>
            <div class="block-options pull-right">
				<a href="<?php echo base_url('Admin/print/'.$this->uri->segment(2)); ?>" class="btn btn-alt btn-info" data-toggle="tooltip" title="Print"><i class="gi gi-print"></i></a>

                <a href="<?php echo base_url('createExcel'); ?>" class="btn btn-alt btn-success" data-toggle="tooltip" title="Excel"><i class="fi fi-xls"></i></a>

                <?php 
                    if($this->uri->segment(2) == 'all') $filter_name = 'Report All'; 
                    if($this->uri->segment(2) == 'week') $filter_name = 'This Week'; 
                    if($this->uri->segment(2) == 'last_week') $filter_name = 'Last Week'; 
                    if($this->uri->segment(2) == 'month') $filter_name = 'This Month'; 
                    if($this->uri->segment(2) == 'last_month') $filter_name = 'Last Month'; 
                    if($this->uri->segment(2) == 'custom') $filter_name = 'Custom'; 
                ?>
                
                <div class="btn-group btn-group-md">
                    <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><?php echo $filter_name; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="<?php if($this->uri->segment(2) == 'all') echo 'active'; ?>">
                            <a href="<?php echo base_url('full_report/all'); ?>">All</a>
                        </li>
                        <li class="<?php if($this->uri->segment(2) == 'week') echo 'active'; ?>">
                            <a href="<?php echo base_url('full_report/week'); ?>">This Week</a>
                        </li>
                        <li class="<?php if($this->uri->segment(2) == 'last_week') echo 'active'; ?>">
                            <a href="<?php echo base_url('full_report/last_week'); ?>">Last Week</a>
                        </li>
                        <li class="<?php if($this->uri->segment(2) == 'month') echo 'active'; ?>">
                            <a href="<?php echo base_url('full_report/month'); ?>">This Month</a>
                        </li>
                        <li class="<?php if($this->uri->segment(2) == 'last_month') echo 'active'; ?>">
                            <a href="<?php echo base_url('full_report/last_month'); ?>">Last Month</a>
                        </li>
                        <li class="<?php if($this->uri->segment(2) == 'custom') echo 'active'; ?>">
                            <a href="#modal-custom-range" data-toggle="modal">Custom</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="table-responsive">
            <table id="income-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Details</th>
                        <th class="text-right">Debit Amount (₹)</th>
                        <th class="text-right">Credit Amount (₹)</th>
						<th>Sales Person</th>
                        <th>Date Added</th>
                        <!-- <th class="text-center">Actions</th> -->
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
                        <td class="text-right"><h4 class="text-danger"><?php if($sale['amount_type'] == 'exp') echo $sale['amount'].' ₹'; if($sale['amount_type'] == 'exp' && $sale['amount_mode'] == 'gpay') echo '<h5 class="text-bold text-warning"> (GPay)</h5>'; ?></h4></td>
						<td class="text-right"><h4 class="text-success"><?php if($sale['amount_type'] != 'exp') echo $sale['amount'].' ₹'; if($sale['amount_type'] == 'late') echo '<h5 class="text-bold text-warning"> (Late Pay)</h5>'; if($sale['amount_type'] != 'exp' && $sale['amount_mode'] == 'gpay') echo '<h5 class="text-bold text-warning"> (GPay)</h5>'; ?></h4></td>
						<td class=""><?php echo $sale['name']; ?></td>
                        <td class=""><?php echo date('d-m-Y H:i a', strtotime($sale['date_added'])); ?></td>
                        <!-- <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-user_id="<?php echo $sale['id']; ?>" onclick="deleteSalesData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td> -->
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
