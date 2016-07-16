<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" ng-app="laundryErp">
    <!--<![endif]-->
    <!-- start: HEAD -->

    <!-- Mirrored from www.cliptheme.com/demo/rapido/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2015 05:07:31 GMT -->
    <head>
        <title>Admin</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/iCheck/skins/all.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/animate.css/animate.min.css">
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/summernote/dist/summernote.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/toastr/toastr.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/bootstrap-select/bootstrap-select.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/DataTables/media/css/DT_bootstrap.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
        <!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/nvd3/nv.d3.min.css">
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: CORE CSS -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/styles.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js">
        <!--this file is added by jeevan in auto compleate example-->
        
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/styles-responsive.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/plugins.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/themes/theme-style8.css" type="text/css" id="skin_color">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/print.css" type="text/css" media="print"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/custom.css">
       

        <!-- end: CORE CSS -->
        
        <!-- This file is required for form elements -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/plugins/select2/select2.css" />
        <!-- end required file for form elements -->
        
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/datepicker/css/datepicker.css">
        
        <!-- modals functionality required this cSS -->
        <link href="<?php echo BASE_URL; ?>/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo BASE_URL; ?>/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
        
        <!--Notification UI-->
        <link href="<?php echo BASE_URL; ?>/assets/plugins/sweetalert/lib/sweet-alert.css" rel="stylesheet" />
        
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body>
        <!-- start: SLIDING BAR (SB) -->
        <div id="slidingbar-area">
            <div id="slidingbar">
                <div class="row">
                    <!-- start: SLIDING BAR FIRST COLUMN -->
                    <div class="col-md-4 col-sm-4">
                        <h2>My Options</h2>
                        <div class="row">
                            <div class="col-xs-6 col-lg-3">
                                <button class="btn btn-icon btn-block space10">
                                    <i class="fa fa-truck"></i>
                                    Dealivery <span class="badge badge-info partition-red"> 4 </span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <button class="btn btn-icon btn-block space10">
                                    <i class="fa fa-envelope-o"></i>
                                    Messages <span class="badge badge-info partition-red"> 23 </span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <button class="btn btn-icon btn-block space10">
                                    <i class="fa fa-calendar-o"></i>
                                    Calendar <span class="badge badge-info partition-blue"> 5 </span>
                                </button>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <button class="btn btn-icon btn-block space10">
                                    <i class="fa fa-bell-o"></i>
                                    Notifications <span class="badge badge-info partition-red"> 9 </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: SLIDING BAR FIRST COLUMN -->
                    <!-- start: SLIDING BAR SECOND COLUMN -->
                    <div class="col-md-4 col-sm-4">
                        <h2>My Recent Dealivery</h2>
                        <div class="blog-photo-stream margin-bottom-30">
                            <ul class="list-unstyled">
<!--                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image01_th.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image02_th.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image03_th.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image04_th.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image05_th.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image06_th.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image07_th.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image08_th.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image09_th.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo BASE_URL; ?>/assets/images/image10_th.jpg"></a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <!-- end: SLIDING BAR SECOND COLUMN -->
                    <!-- start: SLIDING BAR THIRD COLUMN -->
                    <div class="col-md-4 col-sm-4">
                        <h2>My Info</h2>
                        <?php
                            $objUser = $this->session->userdata('user');
                            if (true == valObj($objUser, 'stdClass')) {
                                echo '<address class="margin-bottom-40">';
                                        echo $objUser->first_name . ' ' . $objUser->last_name;
                                        echo '<br>';
                                        echo $objUser->address_line1 . '<br/>' . $objUser->address_line2 . '<br/>';
                                        echo 'Mob: ' . $objUser->mobile_no . '<br/>';
                                        echo 'Email: ' . $objUser->email_id . '<br/>';
                                echo '</address>';
                                echo '<a class="btn btn-transparent-white" href="admin/edit/' . $objUser->id . '">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>';
                            }
                        ?>
                    </div>
                    <!-- end: SLIDING BAR THIRD COLUMN -->
                </div>
                <div class="row">
                    <!-- start: SLIDING BAR TOGGLE BUTTON -->
                    <div class="col-md-12 text-center">
                        <a href="#" class="sb_toggle"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <!-- end: SLIDING BAR TOGGLE BUTTON -->
                </div>
            </div>
        </div>
        <!-- end: SLIDING BAR -->
        <div class="main-wrapper">
            <!-- start: TOPBAR -->
            <header class="topbar navbar navbar-inverse navbar-fixed-top inner">
                <!-- start: TOPBAR CONTAINER -->
                <div class="container">
                    <div class="navbar-header">
                        <a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- start: LOGO -->

                        <!-- end: LOGO -->
                    </div>
                    <div class="topbar-tools">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">
<!--                            <li>
                                <a href="Admin/logout">
                                            Log Out
                                        </a>
                            </li>-->
                            <!-- start: USER DROPDOWN -->
                            <li class="dropdown current-user">
                                  
                                 <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="javaScript:void(0)">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/avatar-1-small.jpg" class="img-circle" alt=""> <span class="username hidden-xs">
                                        <?php 
                                            $objUser = $this->session->userdata('user');
                                            if (true == valObj($objUser, 'stdClass')) {
                                                echo $objUser->firstName . ' ' . $objUser->lastName;
                                            }
                                        ?>
                                        </span> <i class="fa fa-caret-down "></i>
                                 </a>
                               
                                 <ul class="dropdown-menu dropdown-dark">
<!--                                    <li>
                                        <a href="#/user/profile">
                                            My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#/user/calendar">
                                            My Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#/user/messages">
                                            My Messages (3)
                                        </a>
                                    </li>-->
                                    <li>
                                        <a href="admin/logout">
                                            Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: USER DROPDOWN -->
                            <li class="right-menu-toggle">
                                <a href="#" class="sb-toggle-right">
                                   <!-- <i class="fa fa-globe toggle-icon"></i> <i class="fa fa-caret-right"></i> <!--<span class="notifications-count badge badge-default hide"> 3</span>-->
                                </a>
                            </li>
                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>
                </div>
                <!-- end: TOPBAR CONTAINER -->
            </header>
            <!-- end: TOPBAR -->