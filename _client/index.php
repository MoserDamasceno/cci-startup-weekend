<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/flacto_1.5/blue_2_light/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 May 2017 01:05:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <title>CCI - Cotrate Confie Indique</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../assets/plugins/morris/morris.css">

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="?page=dashboard" class="logo">
                            <span>CC<span>I</span></span>
                            <!--<span><img src="../assets/images/logo.png" alt="logo" style="height: 20px;"></span>-->
                        </a>
                    </div>
                    <!-- End Logo container-->

                    <?php if (isset($_GET['page'])): ?>
                    <div class="navbar-custom navbar-left">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">
                                <li>
                                    <a href="index-2.html">
                                        <span><i class="zmdi zmdi-view-dashboard"></i></span>
                                        <span> Dashboard </span> </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">
                                        <span><i class="zmdi zmdi-invert-colors"></i></span>
                                        <span> User Interface </span> </a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li><a href="ui-buttons.html">Buttons</a></li>
                                                <li><a href="ui-cards.html">Cards</a></li>
                                                <li><a href="ui-typography.html">Typography </a></li>
                                                <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                                <li><a href="ui-icons.html">Icons</a></li>
                                                <li><a href="ui-images.html">Images</a>
                                                <li><a href="ui-widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-modals.html">Modals</a></li>
                                                <li><a href="ui-notification.html">Notification</a></li>
                                                <li><a href="ui-range-slider.html">Range Slider</a></li>
                                                <li><a href="ui-components.html">Components</a>
                                                <li><a href="ui-sweetalert.html">Sweet Alert</a>
                                                <li><a href="ui-masonry.html">Masonry</a>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><span><i class="zmdi zmdi-layers"></i></span><span> Other </span> </a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Forms</a>
                                            <ul class="submenu">
                                                <li><a href="form-elements.html">Form Elements</a></li>
                                                <li><a href="form-advanced.html">Advanced Form</a></li>
                                                <li><a href="form-validation.html">Form Validation</a></li>
                                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                                <li><a href="form-summernote.html">Summernote</a></li>
                                                <li><a href="form-uploads.html">Form Uploads</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Tables</a>
                                            <ul class="submenu">
                                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                                <li><a href="tables-datatable.html">Data Table</a></li>
                                                <li><a href="tables-editable.html">Editable Table</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Charts</a>
                                            <ul class="submenu">
                                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                                <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                                <li><a href="chart-other.html">Other Chart</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="#">Maps</a>
                                            <ul class="submenu">
                                                <li><a href="map-google.html">Google Maps</a></li>
                                                <li><a href="map-vector.html">Vector Maps</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <span><i class="zmdi zmdi-collection-item"></i></span><span> Pages </span> </a>
                                    <ul class="submenu">
                                        <li><a href="page-starter.html">Starter Page</a></li>
                                        <li><a href="page-timeline.html">Timeline</a></li>
                                        <li><a href="page-login.html">Login</a></li>
                                        <li><a href="page-register.html">Register</a></li>
                                        <li><a href="page-recoverpw.html">Recover Password</a></li>
                                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                        <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                        <li><a href="page-404.html">Error 404</a></li>
                                    </ul>
                                </li>

                            </ul>
                            <!-- End navigation menu  -->
                        </div>
                    </div>
                    <?php endif; ?>


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <?php if (isset($_GET['page'])): ?>
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline m-b-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="zmdi zmdi-notifications-none"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>

                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <img src="../assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>


        </header>
        <!-- End Navigation Bar-->

        <?php include((isset($_GET['page']) ? $_GET['page'] : 'login') . '.html'); ?>

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
		<script src="../assets/plugins/morris/morris.min.js"></script>
		<script src="../assets/plugins/raphael/raphael-min.js"></script>

        <!-- Counter Up  -->
        <script src="../assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="../assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Dashboard init -->
        <script src="../assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/flacto_1.5/blue_2_light/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 May 2017 01:05:39 GMT -->
</html>