<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Inactive Sales
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
	<div class="block full">
        <div class="block-title">
            <h2><strong>Inactive Sales</strong> Table</h2>
            <div class="block-options pull-right">
                <?php if(!empty($daily_sales)) { ?>
                    <a href="javascript:void(0);" class="btn btn-alt btn-sm btn-danger" onclick="deleteAll('daily_sales')"><i class="fa fa-trash"></i> Delete All</a>
                <?php } ?>
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
                        <th>Date Added</th>
                        <th class="text-center">Actions</th>
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
                        <td class=""><?php echo date('d-m-Y H:i a', strtotime($sale['date_added'])); ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-id="<?php echo $sale['id']; ?>" onclick="deleteInactive(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
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
