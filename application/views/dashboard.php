<div id="page-content">
    <!-- eCommerce Dashboard Header -->
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li>
                <a href="<?php echo base_url('dashboard'); ?>" class="bg-amethyst"><i class="fa fa-bar-chart"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo base_url('products'); ?>" class="bg-success"><i class="gi gi-shopping_bag"></i> Products</a>
            </li>
            <li>
                <a href="<?php echo base_url('customers'); ?>" class="bg-warning"><i class="gi gi-user"></i> Customers</a>
            </li>
			<li>
                <a href="<?php echo base_url('payments'); ?>" class="bg-info" target="_blank"><i class="fa fa-inr"></i> Payments</a>
            </li>
        </ul>
    </div>
    <!-- END eCommerce Dashboard Header -->

    <div class="row">
        <?php if(!empty($session_user) && ($session_user['role_type'] === 'super_admin')) { ?>
        <div class="col-md-12 col-lg-12">
            <div class="block">
                <!-- eShop Overview Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <div class="btn-group btn-group-sm">
                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle" data-toggle="dropdown"><span id="filter_name">This Month</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="">
                                    <a href="javascript:void(0)" onclick="getStats('today', 'Today');">Today</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" onclick="getStats('week', 'This Week');">This Week</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" onclick="getStats('last_week', 'Last Week');">Last Week</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" onclick="getStats('month', 'This Month');">This Month</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" onclick="getStats('last_month', 'Last Month');">Last Month</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h2><strong>Shop</strong> Overview</h2>
                </div>
                <!-- END eShop Overview Title -->
                <!-- eShop Overview Content -->
                <div class="row push">
                    <div class="col-xs-6">
                        <h3>
                            <strong class="animation-fadeInQuick">
                                <span id="order_count_span"><?php if(isset($stats)) echo str_pad($stats->order_count, 2, '0', STR_PAD_LEFT); else echo '0'; ?></span>
                            </strong><br>
                            <small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Total Sales</a></small>
                        </h3>
                    </div>
                    <div class="col-xs-6">
                        <h3>
                            <strong class="animation-fadeInQuick">₹ 
                                <span id="order_total_span"><?php if(isset($stats)) echo number_format($stats->order_total, 2); else echo '0.00'; ?></span>
                            </strong><br>
                            <small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Net Profit</a></small>
                        </h3>
                    </div>
                    <div class="col-xs-6">
                        <h3>
                            <strong class="animation-fadeInQuick">
                                <span id="total_store_span"><?php if(isset($stats)) echo str_pad($stats->stores_count, 2, '0', STR_PAD_LEFT); else echo '0'; ?></span>
                            </strong><br>
                            <small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Stores</a></small>
                        </h3>
                    </div>
                    <div class="col-xs-6">
                        <h3>
                            <strong class="animation-fadeInQuick">
                                <span id="total_staff_span"><?php if(isset($stats)) echo str_pad($stats->staffs_count, 2, '0', STR_PAD_LEFT); else echo '0'; ?></span>
                            </strong><br>
                            <small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Staffs</a></small>
                        </h3>
                    </div>
                    <div class="col-xs-6">
                        <h3>
                            <strong class="animation-fadeInQuick">
                                <span id="order_customer_span"><?php if(isset($stats)) echo str_pad($stats->customer_count, 2, '0', STR_PAD_LEFT); else echo '0'; ?></span>
                            </strong><br>
                            <small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Customers</a></small>
                        </h3>
                    </div>
                    <div class="col-xs-6">
                        <h3>
                            <strong class="animation-fadeInQuick">
                                <span id="order_product_span"><?php if(isset($stats)) echo str_pad($stats->product_count, 2, '0', STR_PAD_LEFT); else echo '0'; ?></span>
                            </strong><br>
                            <small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Products</a></small>
                        </h3>
                    </div>

                    <div class="col-xs-6">
                        <h3>
                            <strong class="animation-fadeInQuick">
                                <span id="total_conv_rate"><?php if(isset($stats)) echo number_format(($stats->order_count/$stats->customer_count)*100, 2) ;  ?></span>%</strong><br>
                            <small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Conv. Rate</a></small>
                        </h3>
                    </div>
                </div>
                <!-- END eShop Overview Content -->
            </div>
        </div>
        <?php } ?>
        
		<?php if(!empty($session_user) && ($session_user['role_type'] === 'super_admin' || $session_user['role_type'] === 'Manager')) { ?>
        <div class="col-md-6 col-lg-6">
            <div class="block" style="min-height: 430px;">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="<?php echo base_url('customers'); ?>" class="btn btn-sm btn-success" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                    </div>
                    <h2><strong>Top 10</strong> Customers</h2>
                </div>

                <table class="table table-borderless table-striped table-vcenter table-bordered">
                    <thead>
                        <tr>
                            <th width="5%" class="text-center">Id</th>
                            <th>Name</th>
                            <!-- <th class="hidden-xs">Phone Number</th> -->
                            <th width="25%" class="hidden-xs text-center">Sales Count</th>
                            <th width="30%" class="text-right">Sales Amount (₹)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //var_dump($customers); 
                            if(isset($customers) && $customers != ""){
                                foreach($customers as $cus){
                        ?>
                        <tr>
                            <td class="text-center"><a href="<?php echo base_url('customer/'.$cus['id']); ?>" class="text-info"><small><?php echo 'CUS.'.str_pad($cus['id'], 2, '0', STR_PAD_LEFT); ?></small></a></td>
                            <td class="text-capitalize"><a href="<?php echo base_url('customer/'.$cus['id']); ?>" class="text-info"><?php echo $cus['name']; ?></a></td>
                            <!-- <td class="hidden-xs"><?php echo '+91-'.$cus['phone_number']; ?></td> -->
                            <td class="hidden-xs text-center"><?php echo $cus['order_count']; ?></td>
                            <td class="text-right"><strong>₹<?php echo number_format($cus['order_total'],2); ?></strong></td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="block" style="min-height: 430px;">
                <div class="block-title">
                    <div class="block-options pull-right">
						<a href="<?php echo base_url('products_list'); ?>" class="btn btn-sm btn-success" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                    </div>
                    <h2><strong>Top 10</strong> Products</h2>
                </div>

                <table class="table table-borderless table-striped table-vcenter table-bordered">
                    <thead>
                        <tr>
                            <th width="5%" class="text-center">Id</th>
                            <th>Name</th>
                            <th class="hidden-xs text-center">Sales Count</th>
                            <!--<th width="27%" class="text-right">Sales Amount (₹)</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            //var_dump($products); 
                            if(isset($products) && $products != ""){
                                foreach($products as $prod){
                        ?>
                        <tr>
                            <td class="text-center" style="width: 100px;"><a href="<?php echo base_url('product_view/'.$prod['id']); ?>" class="text-info"><small>PID.<?php echo str_pad($prod['id'], 2, '0', STR_PAD_LEFT); ?></small></a></td>
                            <td><a href="<?php echo base_url('product_view/'.$prod['id']); ?>" class="text-info"><?php echo $prod['product_name']; ?></a></td>
                            <td class="text-center"><strong><?php echo $prod['order_count']; ?></strong></td>
                            <!--<td class="text-right"><strong>₹<?php echo number_format($prod['order_total'],2); ?></strong></td>-->
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>
		<?php } ?>
		
		<?php if(!empty($session_user) && ($session_user['role_type'] === 'super_admin' || $session_user['role_type'] === 'Manager' || $session_user['role_type'] === 'Biller')) { ?>
		<div class="col-md-12 col-lg-12">
            <div class="block" style="min-height: 430px;">
                <div class="block-title">
                    <h2><strong>Top </strong> Re-Order Products</h2>
					<div class="block-options pull-right">
						<a href="<?php echo base_url('reOrderPrint'); ?>" target="_blank" class="btn btn-alt btn-warning" data-toggle="tooltip" title="Print"><i class="gi gi-print"></i></a>
                    </div>
                </div>
				<table id="reorder-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th >Name</th>
                            <!-- <th class="hidden-xs">Phone Number</th> -->
                            <th class="text-center">Quantity</th>
							<th class="">Store Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //var_dump($customers); 
                            if(isset($reorders) && $reorders != ""){
                                foreach($reorders as $reo){
                        ?>
                        <tr>
                            <td class="text-center"><a href="<?php echo base_url('product_view/'.$reo['id']); ?>" class="text-info"><small><?php echo 'PID.'.str_pad($reo['id'], 2, '0', STR_PAD_LEFT); ?></small></a></td>
                            <td class=""><a href="<?php echo base_url('product_view/'.$reo['id']); ?>" class="text-info"><?php echo $reo['product_name']; ?></a></td>
                            <td class="hidden-xs text-center text-danger"><strong><?php echo $reo['qnty']; ?></strong></td>
							<td><?php echo $reo['store_name']; ?></td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>
		<?php } ?>

    </div>
</div>
