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
        <title>The Laundry Bag </title>
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
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/styles-responsive.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/plugins.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/themes/theme-style8.css" type="text/css" id="skin_color">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/print.css" type="text/css" media="print"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/custom.css">
        <!-- end: CORE CSS -->

        <!--Notification UI-->
        <link href="<?php echo BASE_URL; ?>/assets/plugins/sweetalert/lib/sweet-alert.css" rel="stylesheet" />

        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body class="login">
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
<!--                <div class="logo logo-disp">
                    <img src="<?php echo BASE_URL; ?>/assets/images/logo.png">
                </div>-->
                <!-- start: LOGIN BOX -->
                <div class="box-login" style="margin-top: 90px;">
                    <h3>Sign in to your account</h3>
                    <p>
                        Please enter your name and password to log in.
                    </p>
                    <form class="form-login" action="<?php echo base_url() . 'admin/login'; ?>" method="post" name="login">
                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                        </div>
                        <fieldset>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                    <i class="fa fa-user"></i> </span>
                            </div>
                            <div class="form-group form-actions">
                                <span class="input-icon">
                                    <input type="password" class="form-control password" name="password" placeholder="Password">
                                    <i class="fa fa-lock"></i>
                                    <a class="forgot" href="#">
                                        I forgot my password
                                    </a> </span>
                            </div>
                            <div class="form-actions">
                                <label for="remember" class="checkbox-inline">
                                    <input type="checkbox" class="grey remember" id="remember" name="remember">
                                    Keep me signed in
                                </label>
                                <button type="submit" class="btn btn-green pull-right">
                                    Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                            <div class="new-account">
                                Don't have an account yet?
                                <a href="#" class="register">
                                    Create an account
                                </a>
                            </div>
                        </fieldset>
                    </form>
                    <!-- start: COPYRIGHT -->
                    <div class="copyright">
                        2014 &copy; Rapido by cliptheme.
                    </div>
                    <!-- end: COPYRIGHT -->
                </div>
                <!-- end: LOGIN BOX -->
                <!-- start: FORGOT BOX -->
                <div class="box-forgot">
                    <h3>Forget Password?</h3>
                    <p>
                        Enter your e-mail address below to reset your password.
                    </p>
                    <form class="form-forgot">
                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                        </div>
                        <fieldset>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <i class="fa fa-envelope"></i> </span>
                            </div>
                            <div class="form-actions">
                                <a class="btn btn-light-grey go-back">
                                    <i class="fa fa-chevron-circle-left"></i> Log-In
                                </a>
                                <button type="submit" class="btn btn-green pull-right">
                                    Submit <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                    <!-- start: COPYRIGHT -->
                    <div class="copyright">
                        2014 &copy; Rapido by cliptheme.
                    </div>
                    <!-- end: COPYRIGHT -->
                </div>
                <!-- end: FORGOT BOX -->
                <!-- start: REGISTER BOX -->
                <div class="box-register">
                    <h3>Sign Up</h3>
                    <p>
                        Enter your personal details below:
                    </p>
                    <form class="form-register">
                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                        </div>
                        <fieldset>
                            <div class="form-group">
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City">
                            </div>
                            <div class="form-group">
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="F" name="gender">
                                        Female
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="M" name="gender">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <p>
                                Enter your account details below:
                            </p>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <i class="fa fa-envelope"></i> </span>
                            </div>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <i class="fa fa-lock"></i> </span>
                            </div>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="password" class="form-control" name="password_again" placeholder="Password Again">
                                    <i class="fa fa-lock"></i> </span>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="agree" class="checkbox-inline">
                                        <input type="checkbox" class="grey agree" id="agree" name="agree">
                                        I agree to the Terms of Service and Privacy Policy
                                    </label>
                                </div>
                            </div>
                            <div class="form-actions">
                                Already have an account?
                                <a href="#" class="go-back">
                                    Log-in
                                </a>
                                <button type="submit" class="btn btn-green pull-right">
                                    Submit <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                    <!-- start: COPYRIGHT -->
                    <div class="copyright">
                        2014 &copy; Rapido by cliptheme.
                    </div>
                    <!-- end: COPYRIGHT -->
                </div>
                <!-- end: REGISTER BOX -->
            </div>
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="<?php echo BASE_URL; ?>/assets/plugins/respond.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/plugins/excanvas.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="<?php echo BASE_URL; ?>/assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
        <!--<![endif]-->
        <script src="<?php echo BASE_URL; ?>/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/plugins/iCheck/jquery.icheck.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/plugins/jquery.transit/jquery.transit.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/js/main.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="<?php echo BASE_URL; ?>/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/js/login.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function () {
                Main.init();
                Login.init();
            });
        </script>
    </body>
    <!-- end: BODY -->
</html>