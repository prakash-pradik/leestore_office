        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url(JS); ?>/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url(JS); ?>/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url(JS); ?>/plugins.js"></script>
        <script src="<?php echo base_url(JS); ?>/app.js"></script>

		<script src="<?php echo base_url(JS); ?>/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>

        <script src="<?php echo base_url(JS); ?>/pages/formsValidation.js"></script>
        <script>$(function(){ FormsValidation.init(); });</script>

        <script>
            $(document).ready(function(){
                startTime();
            })
            function startTime() {
                const today = new Date();
                let hours = checkTime(today.getHours());
                let minutes = checkTime(today.getMinutes());
                let seconds = checkTime(today.getSeconds());
                let ampm = hours >= 12 ? 'PM' : 'AM';

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
        </script>

        