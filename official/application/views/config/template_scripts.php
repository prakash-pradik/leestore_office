        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url(JS); ?>/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url(JS); ?>/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url(JS); ?>/plugins.js"></script>
        <script src="<?php echo base_url(JS); ?>/app.js"></script>

		<script src="<?php echo base_url(JS); ?>/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>

        <script src="<?php echo base_url(JS); ?>/pages/officeValidation.js"></script>
        <script>$(function(){ OfficeValidation.init(); });</script>

        <script>
            $(document).ready(function(){
                startTime();
            })
            function startTime() {
                const today = new Date();
                let hours = today.getHours();
                let minutes = checkTime(today.getMinutes());
                let seconds = checkTime(today.getSeconds());
                let ampm = hours >= 12 ? 'PM' : 'AM';

                hours = hours % 12;
                hours = hours ? hours : 12;
                hours = checkTime(hours);

                let day     = checkTime(today.getUTCDate());
                let month   = checkTime(today.getUTCMonth() + 1); // months from 1-12
                let year    = today.getUTCFullYear();

                document.getElementById('time_txt').innerHTML =  day+"-"+month+"-"+year+" "+ hours + ":" + minutes + ":" + seconds +" "+ ampm;
                setTimeout(startTime, 1000);
            }

            function checkTime(i) {
                if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
            }
            
            function fetchBookingDetails(mythis) {
                var id = $(mythis).data('id');
                $.ajax({
                    url: base_url + 'admin/fetch_data',
                    type: 'post',
                    data: { id: id, tbl_name: 'booking' },
                    dataType: "json",
                    success: function (res) {
                        
                        $('#booking_id').val(res.id);
                        $('#update_booking_name').val(res.name);
                        $('#update_booking_phone').val(res.phone_number);
                        $('#update_booking_details').val(res.details);
                        $('#update_booking_amount').val(res.amount);
                        $('#update_booking_pay').val(res.pay_type);
                        $('#update_booking_address').val(res.address);
                        
                        $('#view_booking_id').val(res.id);
                        $('#view_booking_name').text(res.name);
                        $('#view_booking_phone').text(res.phone_number);
                        $('#view_booking_details').text(res.details);
                        $('#view_booking_address').text(res.address);
                        $('#view_booking_amount').text(res.amount);
                        $('#view_booking_pay').text(res.pay_type);
                    }
                });
            }

            function deleteBookingData(mythis) {
                var id = $(mythis).data('id');
                
                swal({
                    title: "Are you sure?", 
                    text: "You won't be able to revert this!",
                    type: "warning",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Yes, Confirm it!",
                    showCancelButton: true
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: base_url + 'admin/delete_by_id',
                            type: 'post',
                            data: { id: id, tbl_name: 'booking' },
                            success: function (res) {

                                $(mythis).parent().parent().parent().remove();

                                swal({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                }).then((res1) => {
                                    if (res1.value) {
                                        window.location.reload();
                                    }
                                });

                                setTimeout(() => {
                                    location.reload();
                                }, 3000);
                            }
                        });
                    }
                });
            }

            function deliverBooking(){
                var id = $('#view_booking_id').val();
                swal({
                    title: "Are you sure?",
                    text: "Product deliver to this customer!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delivery it!"
                }).then((result) => {
                    if (result.value) {
                        $("#modal-view-booking").modal('hide');
                        $.ajax({
                            url: base_url + 'booking/deliver_booking',
                            type: 'post',
                            data: { id: id, tbl_name: 'booking' },
                            success: function (res) {

                                swal({
                                    title: "Delivered!",
                                    text: "Product successfully delivered.!",
                                }).then((res1) => {
                                    if (res1.value) {
                                        window.location.reload();
                                    }
                                });

                                setTimeout(() => {
                                    location.reload();
                                }, 3000);
                            }
                        });
                    }
                });
                
            }
        </script>

        