<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Lee Store Admin</title>

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
        <link rel="stylesheet" href="<?php echo base_url(CSS); ?>/office.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo base_url(CSS); ?>/themes.css">

        <link rel="stylesheet" href="<?php echo base_url(CSS); ?>/themes/night.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?php echo base_url(JS); ?>/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div id="login-alt-container">
                        <!-- Title -->
                        <h1 class="push-top-bottom login-push">
                            <img src="<?php echo base_url(IMG); ?>/logo.png" style="padding: 3px 0px;width:100px"><br>
                            <small>Welcome to Lee Store Office Panel..!</small>
                        </h1>
                        <!-- END Title -->

                        <!-- Key Features -->
                        <ul class="fa-ul text-white">
                            <li><i class="gi gi-home fa-li text-success"></i>NO: 4765/5, </li>
                            <li> Ayyanarpuram 1st Street,</li>
                            <li> Alangudi Road, Pudukkottai,</li>
                            <li> Tamilnadu - 622001.</li>
                            <li><i class="gi gi-phone_alt fa-li text-success"></i> +91- 99945 78802</li>
                            <li> +91- 96265 89922</li>
                            <li><i class="fa fa-envelope fa-li text-success"></i> info@leestoreindia.com</li>
                            <li><i class="gi gi-global fa-li text-success"></i> www.leestoreindia.com</li>
                        </ul>
                        <!-- END Key Features -->

                        <!-- Footer -->
                        <footer class="text-white push-top-bottom login-push">
                            <span id="year-copy"></span> &copy; <a href="https://leestoreindia.com" class="text-white" target="_blank">Lee Store</a>
                        </footer>
                        <!-- END Footer -->
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- Login Container -->
                    <div id="login-container">
                        <!-- Login Title -->
                        <div class="login-title text-center">
                            <h1><strong>Login</strong> to Office Panel</h1>
                        </div>
                        <!-- END Login Title -->

                        <!-- Login Block -->
                        <div class="block push-bit">
                            <!-- Login Form -->
                            <form action="<?php echo base_url('login/user_login'); ?>" method="post" id="form-login" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="login-email" name="login-email" class="form-control input-lg" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-4">
                                        
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                                    </div>
                                </div>

                                <?php
                                    $message = $this->session->flashdata('officeMessage');
                                    if(isset($message) && $message != "")
                                    echo mymessage($message);
                                ?>
                                
                            </form>
                            <!-- END Login Form -->

                        </div>
                        <!-- END Login Block -->
                    </div>
                    <!-- END Login Container -->
                </div>
            </div>
        </div>
        <!-- END Login Alternative Row -->
        
        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url(JS); ?>/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url(JS); ?>/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url(JS); ?>/plugins.js"></script>
        <script src="<?php echo base_url(JS); ?>/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url(JS); ?>/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>