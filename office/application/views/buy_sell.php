<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Buy/Sell Mobiles
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <?php
        $message = $this->session->flashdata('officeMessage');
        if(isset($message) && $message != "")
        echo successmessage($message);
    ?>

    <!-- Main Content -->
	<div class="row">
        <!----- Buy Mobile Table ----->
        <div class="col-md-6">
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Buy Mobiles</strong> Table</h2>

                    <div class="block-options pull-right">
                        <a href="#modal-new-buy" class="btn btn-success" data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="buys-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Model</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($buy_mobiles)) {
                                $i = 1; 
                                foreach($buy_mobiles as $buy){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td><a class="text-info" href="<?php echo base_url('employee_details/'.$buy['id']); ?>"><?php echo $buy['customer_name']; ?></a></td>
                                <td><?php echo $buy['phone_number']; ?></td>
                                <td><?php echo $buy['phone_name']; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="#modal-view-buysell" data-id="<?php echo $buy['id']; ?>" onclick="fetchBuySellDetails(this);" data-toggle="modal" title="View" class="btn btn-info enable-tooltip"><i class="fa fa-eye"></i></a>
                                        <a href="#modal-update-buysell" data-toggle="modal" title="Update" data-placement="top" class="btn btn-default enable-tooltip" data-id="<?php echo $buy['id']; ?>" onclick="fetchBuySellDetails(this)"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-id="<?php echo $buy['id']; ?>" onclick="deleteBuyData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
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
        <!----- End Buy Mobile Table ----->
        
        <!----- Sell Mobile Table ----->
        <div class="col-md-6">
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Sell Mobiles</strong> Table</h2>

                    <div class="block-options pull-right">
                        <a href="#modal-new-sell" class="btn btn-info" data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="sells-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Model</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($sell_mobiles)) {
                                $i = 1; 
                                foreach($sell_mobiles as $sell){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td><a class="text-info" href="<?php echo base_url('user_details/'.$sell['id']); ?>"><?php echo $sell['customer_name']; ?></a></td>
                                <td><?php echo $sell['phone_number']; ?></td>
                                <td><?php echo $sell['phone_name']; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="#modal-view-buysell" data-id="<?php echo $sell['id']; ?>" onclick="fetchBuySellDetails(this);" data-toggle="modal" title="View" class="btn btn-info enable-tooltip"><i class="fa fa-eye"></i></a>
                                        <a href="#modal-update-buysell" data-toggle="modal" title="Update" data-placement="top" class="btn btn-default enable-tooltip" data-id="<?php echo $sell['id']; ?>" onclick="fetchBuySellDetails(this)"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-id="<?php echo $sell['id']; ?>" onclick="deleteBuyData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
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
        <!----- End Sell Mobile Table ----->
    
    </div>
    <!-- END Main Content -->
</div>
