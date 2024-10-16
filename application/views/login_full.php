<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Lee Store - POS</title>

        <meta name="description" content="Lee Store Admin Panel">
        <meta name="author" content="Prakash Freddie">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <link rel="shortcut icon" href="<?php echo base_url(IMG); ?>/favicon.png">

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo base_url(CSS); ?>/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo base_url(CSS); ?>/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo base_url(CSS); ?>/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo base_url(CSS); ?>/themes.css">

        <link rel="stylesheet" href="<?php echo base_url(CSS); ?>/themes/night.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?php echo base_url(JS); ?>/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <img src="<?php echo base_url(IMG); ?>/placeholders/backgrounds/login_full_bg.jpg" alt="Login Full Background" class="full-bg animation-pulseSlow">
        <div id="login-container" class="animation-fadeIn">
            <!-- Login Title -->
            <div class="login-title text-center">
                <h1><strong>Login</strong> to POS Panel</h1>
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <form action="<?php echo base_url('login/user_login'); ?>" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                <input type="text" id="login-email" name="login-email" class="form-control input-lg" placeholder="User Name...">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-left: 5px; margin-right: 5px;">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-transparent"><i class="gi gi-asterisk"></i></button>
                                </span>
                                <input type="password" id="login-password" name="login-password" class="form-control" placeholder="Password...">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-transparent show_pass"><i class="fa fa-eye-slash" id="pass_icon"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-4">
                            
                        </div>
                        <div class="col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-angle-right"></i> Login to POS</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                        <?php
                            $message = $this->session->flashdata('posMessage');
                            if(isset($message) && $message != "")
                            echo mymessage($message);
                        ?>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->
            </div>
            <!-- END Login Block -->
        </div>
        
        <style>
            .push-top-bottom {
                margin-top: 20px;
                margin-bottom: 40px;
            }
        </style>
        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url(JS); ?>/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url(JS); ?>/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url(JS); ?>/plugins.js"></script>
        <script src="<?php echo base_url(JS); ?>/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url(JS); ?>/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script>
        <script>
            $(document).ready(function(){
                var pass_show = false;
                $(".show_pass").click(function(){
                    
                    if(pass_show){
                        $("#pass_icon").removeClass('fa-eye').addClass('fa-eye-slash');
                        $("#login-password").attr('type', 'password');
                        pass_show = false;
                    }else{
                        $("#pass_icon").removeClass('fa-eye-slash').addClass('fa-eye');
                        $("#login-password").attr('type', 'text');
                        pass_show = true;
                    }
                })
            })
        </script>
    </body>
</html>