<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Sales Draft
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->
    <?php 
        $url_segment = $this->uri->segment(2);
        if($url_segment == 'all') $filter_name = 'All'; 
        if($url_segment == 'week') $filter_name = 'This Week'; 
        if($url_segment == 'last_week') $filter_name = 'Last Week'; 
        if($url_segment == 'month') $filter_name = 'This Month'; 
        if($url_segment == 'last_month') $filter_name = 'Last Month'; 
        if($url_segment == 'custom') $filter_name = 'Custom'; 
    ?>
    <!-- Datatables Content -->
	<div class="block full">
        <div class="block-title">
            <h2><strong>Draft</strong> Table</h2>
            <div class="block-options pull-right">
                <a href="<?php echo base_url('payments'); ?>" target="_blank" class="btn btn-success" data-toggle="tooltop" title="Add New"><i class="fa fa-plus"></i> Add New</a>

                <div class="btn-group btn-group-md">
                    <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><?php echo $filter_name; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="<?php if($url_segment == 'all') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_draft/all'); ?>">Sales All</a>
                        </li>
                        <li class="<?php if($url_segment == 'week') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_draft/week'); ?>">This Week</a>
                        </li>
                        <li class="<?php if($url_segment == 'last_week') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_draft/last_week'); ?>">Last Week</a>
                        </li>
                        <li class="<?php if($url_segment == 'month') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_draft/month'); ?>">This Month</a>
                        </li>
                        <li class="<?php if($url_segment == 'last_month') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_draft/last_month'); ?>">Last Month</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Invoice #</th>
                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Net Amount(₹)</th>
                        <th class="text-center">Qty</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($orders)) {
                        $i = 1; 
                        foreach($orders as $order){
                            
                            if($order['order_status'] == 'draft')
                                $orderStatus = '<a href="javascript:void(0)" class="label label-warning">Draft</a>';
                            else
                                $orderStatus = '<a href="javascript:void(0)" class="label label-info">Pending</a>';
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="<?php echo base_url('sales/invoice/'.$order['id']); ?>" class="text-info" target="_blank"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></a>
                        </td>
                        <td class="text-capitalize">
                            <a href="<?php echo base_url('sales/invoice/'.$order['id']); ?>" class="text-info" target="_blank"><?php echo $order['invoice_no']; ?></a>
                        </td>
						<td class="text-capitalize">
                            <a href="<?php echo base_url('customer/'.$order['customer_id']); ?>" class="text-info" target="_blank"> <?php if(!empty($order['customer_name'])) echo $order['customer_name']; else echo '-'; ?> </a>
                        </td>
                        <td class="text-capitalize">+91-<?php echo $order['customer_phone']; ?></td>
                        <td class="text-capitalize"><?php echo '₹ '.number_format($order['net_amount'],2); ?></td>
                        <td class="text-center"><?php echo $order['quantity']; ?></td>
                        <td class="text-capitalize"><?php echo $orderStatus; ?></td>
                        <td class="text-capitalize"><?php echo date('d-m-Y', strtotime($order['order_date'])); ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?php echo base_url('sales/invoice_pdf/'.$order['id']); ?>" data-toggle="tooltip" title="Invoice" class="btn btn-warning btn-xs" target="_blank"><i class="fa fa-print"></i></a>
                                
                                <a href="<?php echo base_url('pos_update/'.$order['id']); ?>" data-toggle="tooltip" title="Update" class="btn btn-info btn-xs" target="_blank"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $order['id']; ?>" onclick="deleteSalesData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
