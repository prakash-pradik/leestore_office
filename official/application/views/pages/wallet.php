<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-wallet"></i>Wallet
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    

    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="pull-right" style="margin-bottom:10px;">
                <a href="#modal-due" class="btn btn-success " data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <?php if(!empty($wallets)) {
            $i = 1; 
            foreach($wallets as $wallet){
        ?>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light" style="display:flex; justify-content:space-between">
                        <strong><?php echo $wallet['details']; ?></strong>
                        <div class="btn-group btn-group-xs">
                            <button data-id="<?php echo $wallet['id']; ?>" data-details="<?php echo $wallet['details']; ?>" data-amount="<?php echo $wallet['amount']; ?>" onclick="fetchWalletData(this);" title="Edit" class="btn btn-sm btn-info enable-tooltip"><i class="fa fa-pencil"></i></button>
                            <button data-id="<?php echo $wallet['id']; ?>" onclick="deleteWalletData(this);" data-toggle="tooltip" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen">₹ <?php echo preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $wallet['amount']); ?></span></div>
            </a>
        </div>
        <?php } } ?>
    </div>

    <div id="modal-due" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header text-center bg-success">
                    <h2 class="modal-title"><i class="fa fa-plus"></i> Add New Wallet</h2>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/insert_wallet_data'); ?>" id="wallet-validation" method="post" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Details</label>
                            <div class="col-md-8">
                                <input type="text" id="wallet_details" name="wallet_details" class="form-control" placeholder="Details..">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" id="wallet_amount" name="wallet_amount" class="form-control" placeholder="Enter Amount" require="true">
                                    <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-xs-12 text-right">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Modal Body -->
            </div>
        </div>
    </div>

    <div id="modal-wallet-update" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header text-center bg-info">
                    <h2 class="modal-title"><i class="fa fa-edit"></i> Edit Wallet</h2>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/insert_wallet_data'); ?>" id="wallet-update-validation" method="post" class="form-horizontal form-bordered">
                        <input type="hidden" id="update_wallet_id" name="update_wallet_id">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Details</label>
                            <div class="col-md-8">
                                <input type="text" id="update_wallet_details" name="wallet_details" class="form-control" placeholder="Details..">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-email">Amount</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" id="update_wallet_amount" name="wallet_amount" class="form-control" placeholder="Enter Amount" require="true">
                                    <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-xs-12 text-right">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info">Update Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Modal Body -->
            </div>
        </div>
    </div>

<script>
    var base_url = document.getElementById("base_url").value;

    function deleteWalletData(mythis){
        var id = $(mythis).data('id');
        swal({
            title: "Are you sure?", 
            text: "You won't be able to revert this!", 
            type: "warning",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            showCancelButton: true
        })
        .then((result) => {
            if (result.value) {
                
                $.ajax({
                    url: base_url+'admin/delete_by_id',
                    type: 'post',
                    data: {id : id, tbl_name : 'wallets'},
                    success: function(res){
                        window.location.href = base_url+'wallet';
                    }
                });
            }
        })
    }

    function fetchWalletData(mythis){
        $("#update_wallet_id").val($(mythis).data('id'));
        $("#update_wallet_details").val($(mythis).data('details'));
        $("#update_wallet_amount").val($(mythis).data('amount'));
        $('#modal-wallet-update').modal('show');
    }

</script>
<style>
    .table-responsive {
        min-height: 580px !important;
    }
</style>
</div>