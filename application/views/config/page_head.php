        <!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Lee</strong> Store</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->
            
            <!-- Page Container -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                
                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="javascript:void(0);" class="sidebar-brand" style="display:flex; justify-content:center;">
                                <img src="<?php echo base_url(IMG); ?>/logo.png" style="padding: 3px 0px;"><!-- <span class="sidebar-nav-mini-hide"><strong>Lee</strong> Store</span> -->
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url(IMG); ?>/placeholders/avatars/avatar2.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name"> <?php if(!empty($session_user) && $session_user['role_type'] === 'super_admin') echo $session_user['name']; else echo $session_user['full_name']; ?></div>
                                <div class="sidebar-user-links">
                                    <?php if(!empty($session_user) && $session_user['role_type'] === 'super_admin') { ?>
                                        <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <?php } ?>
                                    <a href="<?php echo base_url('logout') ?>" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->                            
                            
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">

                                <?php if(!empty($session_user) && ($session_user['role_type'] === 'super_admin' || $session_user['role_type'] === 'Manager' || $session_user['role_type'] === 'Biller' )) { ?>
									<li>
										<a href="<?php echo base_url('dashboard'); ?>" class="<?php if($this->uri->segment(1) == 'dashboard') echo 'active'; ?>"><i class="gi gi-home sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
									</li>
								
								<?php } ?>
								
								<?php if(!empty($session_user) && ($session_user['role_type'] === 'super_admin' || $session_user['role_type'] === 'Manager' )) { ?>
                                
                                <?php if($session_user['role_type'] === 'super_admin') { ?>
                                <li>
                                    <a href="<?php echo base_url('stores'); ?>" class="<?php if($this->uri->segment(1) == 'stores') echo 'active'; ?>"><i class="gi gi-shop sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Stores List</span></a>
                                </li>
                                
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Admin Manage</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url('staffs') ?>">Staff Admins</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('roles_list') ?>">Role Type Master</a>
                                        </li>
                                    </ul>
                                </li>
                                <?php } } ?>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-cargo sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Product Manage</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url('categories') ?>">Category list</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('brands') ?>">Brand list</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('products') ?>">Product list</a>
                                        </li>
										<?php if(!empty($session_user) && $session_user['role_type'] === 'Manager' ) { ?>
                                        <li>
                                            <a href="<?php echo base_url('godown') ?>">Godown Manage</a>
                                        </li>
										<?php } ?>
                                    </ul>
                                </li>
								
								<li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-inr sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Sales Manage</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url('sales_list/week') ?>">Sales list</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('sales_draft/week') ?>">Sales Draft</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('sales_credit/week') ?>">Sales Credit</a>
                                        </li>
                                    </ul>
                                </li>
                                <?php if(!empty($session_user) && $session_user['role_type'] === 'super_admin') { ?>
                                <li>
                                    <a href="<?php echo base_url('suppliers'); ?>" class="<?php if($this->uri->segment(1) == 'suppliers') echo 'active'; ?>"><i class="gi gi-cart_in sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Suppliers List</span></a>
                                </li>
                                <?php }  ?>
                                <li>
                                    <a href="<?php echo base_url('customers'); ?>" class="<?php if($this->uri->segment(1) == 'customers') echo 'active'; ?>"><i class="hi hi-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Customers List</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('payments'); ?>" class="<?php if($this->uri->segment(1) == 'payments') echo 'active'; ?>" target="_blank"><i class="fa fa-inr sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Payment Billing</span></a>
                                </li>

                            </ul>
                            <!-- END Sidebar Navigation -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->
                        </ul>
                        <!-- END Left Header Navigation -->
                        
                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <li>
                                <h3 class="text-bold" style="margin-right:30px;">
                                    <span id="time_txt"></span>
                                </h3>
                            </li>
                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(IMG); ?>/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <?php if(!empty($session_user) && $session_user['role_type'] === 'super_admin') { ?>
                                    <li class="dropdown-header text-center">Account</li>
                                    
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                        <a href="#modal-user-settings" data-toggle="modal">
                                            <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <?php } ?>
                                    <li>
                                        <a href="<?php echo base_url('logout') ?>"><i class="gi gi-exit fa-fw pull-right"></i> Logout</a>
                                    </li>                                    
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->