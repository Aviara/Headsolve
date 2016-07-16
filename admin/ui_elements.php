<?php
include('header.php');
?>
<!-- start: BODY -->
<div ng-view></div>
<body>
    <!-- start: SLIDING BAR (SB) -->
    <!-- end: SLIDING BAR -->
    <div class="main-wrapper">
        <!-- start: TOPBAR -->
        <!-- end: TOPBAR -->
        <!-- start: PAGESLIDE LEFT -->
        <!-- end: PAGESLIDE LEFT -->
        <!-- start: PAGESLIDE RIGHT -->
        <div id="pageslide-right" class="pageslide slide-fixed inner">
            <div class="right-wrapper">
                <ul class="nav nav-tabs nav-justified" id="sidebar-tab">
                    <li class="active">
                        <a href="#users" role="tab" data-toggle="tab"><i class="fa fa-users"></i></a>
                    </li>
                    <li>
                        <a href="#notifications" role="tab" data-toggle="tab"><i class="fa fa-bookmark "></i></a>
                    </li>
                    <li>
                        <a href="#settings" role="tab" data-toggle="tab"><i class="fa fa-gear"></i></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="users">
                        <div class="users-list">
                            <h5 class="sidebar-title">On-line</h5>
                            <ul class="media-list">
                                <li class="media">
                                    <a href="#">
                                        <i class="fa fa-circle status-online"></i>
                                        <img alt="..." src="assets/images/avatar-2.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nicole Bell</h4>
                                            <span> Content Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="user-label">
                                            <span class="label label-default">3</span>
                                        </div>
                                        <i class="fa fa-circle status-online"></i>
                                        <img alt="..." src="assets/images/avatar-3.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Steven Thompson</h4>
                                            <span> Visual Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <i class="fa fa-circle status-online"></i>
                                        <img alt="..." src="assets/images/avatar-4.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Patterson</h4>
                                            <span> Web Editor </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <i class="fa fa-circle status-online"></i>
                                        <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Kenneth Ross</h4>
                                            <span> Senior Designer </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h5 class="sidebar-title">Off-line</h5>
                            <ul class="media-list">
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-6.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nicole Bell</h4>
                                            <span> Content Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="user-label">
                                            <span class="label label-default">3</span>
                                        </div>
                                        <img alt="..." src="assets/images/avatar-7.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Steven Thompson</h4>
                                            <span> Visual Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-8.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Patterson</h4>
                                            <span> Web Editor </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-9.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Kenneth Ross</h4>
                                            <span> Senior Designer </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-10.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Patterson</h4>
                                            <span> Web Editor </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">Kenneth Ross</h4>
                                            <span> Senior Designer </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="user-chat">
                            <div class="sidebar-content">
                                <a class="sidebar-back" href="#"><i class="fa fa-chevron-circle-left"></i> Back</a>
                            </div>
                            <div class="user-chat-form sidebar-content">
                                <div class="input-group">
                                    <input type="text" placeholder="Type a message here..." class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-blue no-radius" type="button">
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ol class="discussion sidebar-content">
                                <li class="other">
                                    <div class="avatar">
                                        <img src="assets/images/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                        <span class="time"> 51 min </span>
                                    </div>
                                </li>
                                <li class="self">
                                    <div class="avatar">
                                        <img src="assets/images/avatar-1.jpg" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                        <span class="time"> 37 mins </span>
                                    </div>
                                </li>
                                <li class="other">
                                    <div class="avatar">
                                        <img src="assets/images/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="messages">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="tab-pane" id="notifications">
                        <div class="notifications">
                            <div class="pageslide-title">
                                You have 11 notifications
                            </div>
                            <ul class="pageslide-list">
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="label label-primary"><i class="fa fa-user"></i></span> <span class="message"> New user registration</span> <span class="time"> 1 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 7 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 8 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 16 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="label label-primary"><i class="fa fa-user"></i></span> <span class="message"> New user registration</span> <span class="time"> 36 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="label label-warning"><i class="fa fa-shopping-cart"></i></span> <span class="message"> 2 items sold</span> <span class="time"> 1 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="javascript:void(0)">
                                        <span class="label label-danger"><i class="fa fa-user"></i></span> <span class="message"> User deleted account</span> <span class="time"> 2 hour</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="view-all">
                                <a href="javascript:void(0)">
                                    See all notifications <i class="fa fa-arrow-circle-o-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="settings">
                        <h5 class="sidebar-title">General Settings</h5>
                        <ul class="media-list">
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green" checked="checked">
                                        Enable Notifications
                                    </label>
                                </div>
                            </li>
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green" checked="checked">
                                        Show your E-mail
                                    </label>
                                </div>
                            </li>
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green">
                                        Show Offline Users
                                    </label>
                                </div>
                            </li>
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green" checked="checked">
                                        E-mail Alerts
                                    </label>
                                </div>
                            </li>
                            <li class="media">
                                <div class="checkbox sidebar-content">
                                    <label>
                                        <input type="checkbox" value="" class="green">
                                        SMS Alerts
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <div class="sidebar-content">
                            <button class="btn btn-success">
                                <i class="icon-settings"></i> Save Changes
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs" id="style_selector">
                    <div id="style_selector_container">
                        <div class="pageslide-title">
                            Style Selector
                        </div>
                        <div class="box-title">
                            Choose Your Layout Style
                        </div>
                        <div class="input-box">
                            <div class="input">
                                <select name="layout" class="form-control">
                                    <option value="default">Wide</option><option value="boxed">Boxed</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-title">
                            Choose Your Header Style
                        </div>
                        <div class="input-box">
                            <div class="input">
                                <select name="header" class="form-control">
                                    <option value="fixed">Fixed</option><option value="default">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-title">
                            Choose Your Sidebar Style
                        </div>
                        <div class="input-box">
                            <div class="input">
                                <select name="sidebar" class="form-control">
                                    <option value="fixed">Fixed</option><option value="default">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-title">
                            Choose Your Footer Style
                        </div>
                        <div class="input-box">
                            <div class="input">
                                <select name="footer" class="form-control">
                                    <option value="default">Default</option><option value="fixed">Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-title">
                            10 Predefined Color Schemes
                        </div>
                        <div class="images icons-color">
                            <a href="#" id="default"><img src="assets/images/color-1.png" alt="" class="active"></a>
                            <a href="#" id="style2"><img src="assets/images/color-2.png" alt=""></a>
                            <a href="#" id="style3"><img src="assets/images/color-3.png" alt=""></a>
                            <a href="#" id="style4"><img src="assets/images/color-4.png" alt=""></a>
                            <a href="#" id="style5"><img src="assets/images/color-5.png" alt=""></a>
                            <a href="#" id="style6"><img src="assets/images/color-6.png" alt=""></a>
                            <a href="#" id="style7"><img src="assets/images/color-7.png" alt=""></a>
                            <a href="#" id="style8"><img src="assets/images/color-8.png" alt=""></a>
                            <a href="#" id="style9"><img src="assets/images/color-9.png" alt=""></a>
                            <a href="#" id="style10"><img src="assets/images/color-10.png" alt=""></a>
                        </div>
                        <div class="box-title">
                            Backgrounds for Boxed Version
                        </div>
                        <div class="images boxed-patterns">
                            <a href="#" id="bg_style_1"><img src="assets/images/bg.png" alt=""></a>
                            <a href="#" id="bg_style_2"><img src="assets/images/bg_2.png" alt=""></a>
                            <a href="#" id="bg_style_3"><img src="assets/images/bg_3.png" alt=""></a>
                            <a href="#" id="bg_style_4"><img src="assets/images/bg_4.png" alt=""></a>
                            <a href="#" id="bg_style_5"><img src="assets/images/bg_5.png" alt=""></a>
                        </div>
                        <div class="style-options">
                            <a href="#" class="clear_style">
                                Clear Styles
                            </a>
                            <a href="#" class="save_style">
                                Save Styles
                            </a>
                        </div>
                    </div>
                    <div class="style-toggle open"></div>
                </div>
            </div>
        </div>
        <!-- end: PAGESLIDE RIGHT -->
        <!-- start: MAIN CONTAINER -->
        <div class="main-container inner">
            <!-- start: PAGE -->
            <div class="main-content">
                <!-- start: PANEL CONFIGURATION MODAL FORM -->
                <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title">Panel Configuration</h4>
                            </div>
                            <div class="modal-body">
                                Here will be a configuration form
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Save changes
                                </button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- end: SPANEL CONFIGURATION MODAL FORM -->
                <div class="container">
                    <!-- start: PAGE HEADER -->
                    <!-- start: TOOLBAR -->
                    <div class="toolbar row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="page-header">
                                <h1>UI Elements <small>common UI features &amp; Elements</small></h1>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <a href="#" class="back-subviews">
                                <i class="fa fa-chevron-left"></i> BACK
                            </a>
                            <a href="#" class="close-subviews">
                                <i class="fa fa-times"></i> CLOSE
                            </a>
                            <div class="toolbar-tools pull-right">
                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right">
                                    <!-- start: TO-DO DROPDOWN -->
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                                            <i class="fa fa-plus"></i> SUBVIEW
                                            <div class="tooltip-notification hide">
                                                <div class="tooltip-notification-arrow"></div>
                                                <div class="tooltip-notification-inner">
                                                    <div>
                                                        <div class="semi-bold">
                                                            HI THERE!
                                                        </div>
                                                        <div class="message">
                                                            Try the Subview Live Experience
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-light dropdown-subview">
                                            <li class="dropdown-header">
                                                Notes
                                            </li>
                                            <li>
                                                <a href="#newNote" class="new-note"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new note</a>
                                            </li>
                                            <li>
                                                <a href="#readNote" class="read-all-notes"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Read all notes</a>
                                            </li>
                                            <li class="dropdown-header">
                                                Calendar
                                            </li>
                                            <li>
                                                <a href="#newEvent" class="new-event"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new event</a>
                                            </li>
                                            <li>
                                                <a href="#showCalendar" class="show-calendar"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show calendar</a>
                                            </li>
                                            <li class="dropdown-header">
                                                Contributors
                                            </li>
                                            <li>
                                                <a href="#newContributor" class="new-contributor"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new contributor</a>
                                            </li>
                                            <li>
                                                <a href="#showContributors" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show all contributor</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                                            <span class="messages-count badge badge-default hide">3</span> <i class="fa fa-envelope"></i> MESSAGES
                                        </a>
                                        <ul class="dropdown-menu dropdown-light dropdown-messages">
                                            <li>
                                                <span class="dropdown-header"> You have 9 messages</span>
                                            </li>
                                            <li>
                                                <div class="drop-down-wrapper ps-container">
                                                    <ul>
                                                        <li class="unread">
                                                            <a href="javascript:;" class="unread">
                                                                <div class="clearfix">
                                                                    <div class="thread-image">
                                                                        <img src="./assets/images/avatar-2.jpg" alt="">
                                                                    </div>
                                                                    <div class="thread-content">
                                                                        <span class="author">Nicole Bell</span>
                                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                        <span class="time"> Just Now</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" class="unread">
                                                                <div class="clearfix">
                                                                    <div class="thread-image">
                                                                        <img src="./assets/images/avatar-3.jpg" alt="">
                                                                    </div>
                                                                    <div class="thread-content">
                                                                        <span class="author">Steven Thompson</span>
                                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                        <span class="time">8 hrs</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <div class="clearfix">
                                                                    <div class="thread-image">
                                                                        <img src="./assets/images/avatar-5.jpg" alt="">
                                                                    </div>
                                                                    <div class="thread-content">
                                                                        <span class="author">Kenneth Ross</span>
                                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                        <span class="time">14 hrs</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="view-all">
                                                <a href="pages_messages.html">
                                                    See All
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-search">
                                        <a href="#">
                                            <i class="fa fa-search"></i> SEARCH
                                        </a>
                                        <!-- start: SEARCH POPOVER -->
                                        <div class="popover bottom search-box transition-all">
                                            <div class="arrow"></div>
                                            <div class="popover-content">
                                                <!-- start: SEARCH FORM -->
                                                <form class="" id="searchform" action="#">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-main-color btn-squared" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button> </span>
                                                    </div>
                                                </form>
                                                <!-- end: SEARCH FORM -->
                                            </div>
                                        </div>
                                        <!-- end: SEARCH POPOVER -->
                                    </li>
                                </ul>
                                <!-- end: TOP NAVIGATION MENU -->
                            </div>
                        </div>
                    </div>
                    <!-- end: TOOLBAR -->
                    <!-- end: PAGE HEADER -->
                    <!-- start: BREADCRUMB -->
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="#">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    UI Elements
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- end: BREADCRUMB -->
                    <!-- start: PAGE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- start: ALERTS PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Alerts</h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Wrap any text and an optional dismiss button in <code> .alert </code>
                                        and one of the four contextual classes (e.g., <code> .alert-success </code>
                                        ) for basic alert messages.
                                    </p>
                                    <p>
                                        Use the <code> .alert-link </code>
                                        utility class to quickly provide matching colored links within any alert.
                                    </p>
                                    <div class="alert alert-success">
                                        <button data-dismiss="alert" class="close">
                                            &times;
                                        </button>
                                        <strong>Well done!</strong> You successfully read <a class="alert-link" href="#">
                                            this important alert message</a>
                                        .
                                    </div>
                                    <div class="alert alert-info">
                                        <button data-dismiss="alert" class="close">
                                            &times;
                                        </button>
                                        <strong>Heads up!</strong>
                                        This <a class="alert-link" href="#">
                                            alert needs your attention</a>
                                        , but it's not super important.
                                    </div>
                                    <div class="alert alert-warning">
                                        <button data-dismiss="alert" class="close">
                                            &times;
                                        </button>
                                        <strong>Warning!</strong>
                                        Better check yourself, you're <a class="alert-link" href="#">
                                            not looking too good</a>
                                        .
                                    </div>
                                    <div class="alert alert-danger">
                                        <button data-dismiss="alert" class="close">
                                            &times;
                                        </button>
                                        <strong>Oh snap!</strong>
                                        <a class="alert-link" href="#">
                                            Change a few things up</a>
                                        and try submitting again.
                                    </div>
                                </div>
                            </div>
                            <!-- end: ALERTS PANEL -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- start: NOTIFICATION PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Notifications</h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-block alert-danger fade in">
                                        <button data-dismiss="alert" class="close" type="button">
                                            &times;
                                        </button>
                                        <h4 class="alert-heading"><i class="fa fa-times"></i> Error!</h4>
                                        <p>
                                            Duis mollis, est non commodo luctus,
                                            nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-red">
                                                Take this action
                                            </a>
                                            <a href="#" class="btn btn-light-grey">
                                                Or do this
                                            </a>
                                        </p>
                                    </div>
                                    <div class="alert alert-block alert-success fade in">
                                        <button data-dismiss="alert" class="close" type="button">
                                            &times;
                                        </button>
                                        <h4 class="alert-heading"><i class="fa fa-check"></i> Success!</h4>
                                        <p>
                                            Duis mollis, est non commodo luctus,
                                            nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-green">
                                                Take this action
                                            </a>
                                            <a href="#" class="btn btn-light-grey">
                                                Or do this
                                            </a>
                                        </p>
                                    </div>
                                    <div class="alert alert-block alert-info fade in">
                                        <button data-dismiss="alert" class="close" type="button">
                                            &times;
                                        </button>
                                        <h4 class="alert-heading"><i class="fa fa-info"></i> Info!</h4>
                                        <p>
                                            Duis mollis, est non commodo luctus,
                                            nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-blue">
                                                Take this action
                                            </a>
                                            <a href="#" class="btn btn btn-light-grey">
                                                Or do this
                                            </a>
                                        </p>
                                    </div>
                                    <div class="alert alert-block alert-warning fade in">
                                        <button data-dismiss="alert" class="close" type="button">
                                            &times;
                                        </button>
                                        <h4 class="alert-heading"><i class="fa fa-exclamation"></i> Warning!</h4>
                                        <p>
                                            Duis mollis, est non commodo luctus,
                                            nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-yellow">
                                                Take this action
                                            </a>
                                            <a href="#" class="btn btn-light-grey">
                                                Or do this
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end: NOTIFICATION PANEL -->
                            <!-- start: LIST GROUP -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">List <span class="text-bold">Group</span></h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.
                                    </p>
                                    <h5 class="text-bold">Basic example with Badges</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <span class="badge">14</span>
                                            Cras justo odio
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">2</span>
                                            Dapibus ac facilisis in
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge">1</span>
                                            Morbi leo risus
                                        </li>
                                    </ul>
                                    <h5 class="text-bold">Linked items</h5>
                                    <div class="list-group">
                                        <a class="list-group-item active" href="#">
                                            Cras justo odio
                                        </a>
                                        <a class="list-group-item" href="#">
                                            Dapibus ac facilisis in</a>
                                        <a class="list-group-item" href="#">
                                            Morbi leo risus</a>
                                        <a class="list-group-item" href="#">
                                            Porta ac consectetur ac</a>
                                        <a class="list-group-item" href="#">
                                            Vestibulum at eros</a>
                                    </div>
                                    <h5 class="text-bold">Contextual classes</h5>
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-success" href="#">
                                            Dapibus ac facilisis in</a>
                                        <a class="list-group-item list-group-item-info" href="#">
                                            Cras sit amet nibh libero</a>
                                        <a class="list-group-item list-group-item-warning" href="#">
                                            Porta ac consectetur ac</a>
                                        <a class="list-group-item list-group-item-danger" href="#">
                                            Vestibulum at eros</a>
                                    </div>
                                    <h5 class="text-bold">Custom content</h5>
                                    <p>
                                        Add nearly any HTML within, even for linked list groups like the one below.
                                    </p>
                                    <div class="list-group">
                                        <a class="list-group-item active" href="#">
                                            <h5 class="list-group-item-heading">List group item heading</h5>
                                            <p class="list-group-item-text">
                                                Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
                                            </p>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <h5 class="list-group-item-heading">List group item heading</h5>
                                            <p class="list-group-item-text">
                                                Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
                                            </p>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <h5 class="list-group-item-heading">List group item heading</h5>
                                            <p class="list-group-item-text">
                                                Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: LIST GROUP -->
                            <!-- start: TOOLTIPS PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Tooltips</h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Tight pants next level keffiyeh
                                        <a data-original-title="Default tooltip" class="tooltips" href="#">
                                            you probably
                                        </a>
                                        haven't heard of them.
                                        Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
                                        <a data-original-title="Another tooltip" class="tooltips" href="#">
                                            have a
                                        </a>
                                        terry richardson vinyl chambray.
                                        <a data-original-title="12" title="" class="tooltips" href="#">
                                            twitter handle
                                        </a>
                                        freegan cred raw denim single-origin coffee viral.
                                    </p>
                                    <p>
                                        <button data-original-title="Tooltip in top" data-placement="top" class="btn tooltips">
                                            Top
                                        </button>
                                        <button data-original-title="Tooltip in left" data-placement="left" class="btn tooltips">
                                            Left
                                        </button>
                                        <button data-original-title="Tooltip in right" data-placement="right" class="btn tooltips">
                                            Right
                                        </button>
                                        <button data-original-title="Tooltip in bottom" data-placement="bottom" class="btn tooltips">
                                            Bottom
                                        </button>
                                    </p>
                                </div>
                            </div>
                            <!-- end: TOOLTIPS PANEL -->
                            <!-- start: POPOVERS PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Popovers</h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Tight pants next level keffiyeh
                                        <a data-original-title="Default Popover" data-content="Popover body goes here! Popover body goes here!" class="popovers" href="javascript:;">
                                            trigger me on click
                                        </a>
                                        haven't heard of them.
                                        Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
                                        <a data-original-title="Another Popover" data-content="Popover body goes here! Popover body goes here!" data-trigger="hover" class="popovers" href="javascript:;">
                                            trigger me on hover
                                        </a>
                                        terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa.
                                    </p>
                                    <p>
                                        <button data-original-title="Popover in top" data-content="Popover body goes here! Popover body goes here!" data-placement="top" data-trigger="hover" id="test" class="btn popovers">
                                            Top
                                        </button>
                                        <button data-original-title="Popover in left" data-content="Popover body goes here! Popover body goes here!" data-placement="left" data-trigger="hover" class="btn popovers">
                                            Left
                                        </button>
                                        <button data-original-title="Popover in right" data-content="Popover body goes here! Popover body goes here!" data-placement="right" data-trigger="hover" class="btn popovers">
                                            Right
                                        </button>
                                        <button data-original-title="Popover in bottom" data-content="Popover body goes here! Popover body goes here!" data-placement="bottom" data-trigger="hover" class="btn popovers">
                                            Bottom
                                        </button>
                                    </p>
                                </div>
                            </div>
                            <!-- end: POPOVERS PANEL -->
                            <!-- start: PULSATE PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Pulsate</h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <h5>Pulsate any page elements.</h5>
                                    <div id="pulsate-regular padding-5">
                                        Repeating Pulsate
                                    </div>
                                    <div class="space20"></div>
                                    <span class="label label-info"> NOTE!</span>
                                    <span> Pulsate works in Chrome, Safari and Firefox. Prettiest in Firefox since it supports Outline-radius </span>
                                </div>
                            </div>
                            <!-- end: PULSATE PANEL -->
                            <!-- start: MEDIA OBJECTS -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Media <span class="text-bold">Objects</span></h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="space20">
                                        Abstract object styles for building various types of components (like blog comments, Tweets, etc) that feature a left or right aligned image alongside textual content.
                                    </p>
                                    <ul class="media-list">
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" class="media-object" data-src="holder.js/64x64">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                <p>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                </p>
                                                <!-- Nested media object -->
                                                <div class="media">
                                                    <a href="#" class="pull-left">
                                                        <img alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" class="media-object" data-src="holder.js/64x64">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Nested media heading</h4>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                        <!-- Nested media object -->
                                                        <div class="media">
                                                            <a href="#" class="pull-left">
                                                                <img alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" class="media-object" data-src="holder.js/64x64">
                                                            </a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Nested media heading</h4>
                                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Nested media object -->
                                                <div class="media">
                                                    <a href="#" class="pull-left">
                                                        <img alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" class="media-object" data-src="holder.js/64x64">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Nested media heading</h4>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-right">
                                                <img alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" class="media-object" data-src="holder.js/64x64">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end: MEDIA OBJECTS -->
                            <!-- start: THUMBNAILS -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Thumbnails</h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Extend Bootstrap's grid system with the thumbnail component to easily display grids of images, videos, text, and more.
                                    </p>
                                    <h5>Default</h5>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#" class="thumbnail">
                                                <img data-src="holder.js/100%x180" alt="100%x180">
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#" class="thumbnail">
                                                <img data-src="holder.js/100%x180" alt="100%x180">
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#" class="thumbnail">
                                                <img data-src="holder.js/100%x180" alt="100%x180">
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#" class="thumbnail">
                                                <img data-src="holder.js/100%x180" alt="100%x180">
                                            </a>
                                        </div>
                                    </div>
                                    <h5>Custom Content</h5>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="thumbnail">
                                                <img data-src="holder.js/100%x200" alt="">
                                                <div class="caption">
                                                    <h3>Thumbnail label</h3>
                                                    <p>
                                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                    </p>
                                                    <p>
                                                        <a href="#" class="btn btn-blue">
                                                            Button
                                                        </a>
                                                        <a href="#" class="btn btn-default">
                                                            Button
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="thumbnail">
                                                <img data-src="holder.js/100%x200" alt="">
                                                <div class="caption">
                                                    <h3>Thumbnail label</h3>
                                                    <p>
                                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                    </p>
                                                    <p>
                                                        <a href="#" class="btn btn-red">
                                                            Button
                                                        </a>
                                                        <a href="#" class="btn btn-default">
                                                            Button
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: THUMBNAILS -->
                        </div>
                        <div class="col-md-6">
                            <!-- start: PROGRESS BARS PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Progress <span class="text-bold">Bars</span></h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.
                                    </p>
                                    <div class="alert alert-block alert-warning">
                                        Progress bars use CSS3 gradients, transitions, and animations to achieve all their effects. These features are not supported in IE7-9 or older versions of Firefox. Versions earlier than Internet Explorer 10 and Opera 12 do not support animations.
                                    </div>
                                    <h5>Basic</h5>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            <span class="sr-only"> 60% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only"> 40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only"> 20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only"> 60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only"> 80% Complete</span>
                                        </div>
                                    </div>
                                    <h5>Striped</h5>
                                    <div class="progress progress-striped progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only"> 60% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-striped progress-sm">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only"> 40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only"> 20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-striped progress-sm">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only"> 60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only"> 80% Complete (danger)</span>
                                        </div>
                                    </div>
                                    <h5>Animated</h5>
                                    <div class="progress progress-striped active progress-xs">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only"> 60% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-striped active progress-sm">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only"> 40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only"> 20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-striped active progress-sm">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only"> 60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only"> 80% Complete (danger)</span>
                                        </div>
                                    </div>
                                    <h5>Stacked</h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                            <span class="sr-only"> 35% Complete (success)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                            <span class="sr-only"> 20% Complete (warning)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                            <span class="sr-only"> 10% Complete (danger)</span>
                                        </div>
                                    </div>
                                    <h5>With label</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            60%
                                        </div>
                                    </div>
                                    <h5>Animated When Appear With Custom Style</h5>
                                    <div class="progress progress-xs transparent-black no-radius">
                                        <div aria-valuetransitiongoal="60" class="progress-bar partition-blue animate-progress-bar" ></div>
                                    </div>
                                    <div class="progress progress-sm transparent-black no-radius">
                                        <div aria-valuetransitiongoal="40" class="progress-bar partition-green animate-progress-bar" ></div>
                                    </div>
                                    <div class="progress transparent-black no-radius">
                                        <div aria-valuetransitiongoal="20" class="progress-bar partition-azure animate-progress-bar" ></div>
                                    </div>
                                    <div class="progress progress-sm transparent-black no-radius">
                                        <div aria-valuetransitiongoal="60" class="progress-bar partition-orange animate-progress-bar" ></div>
                                    </div>
                                    <div class="progress transparent-black no-radius">
                                        <div aria-valuetransitiongoal="80" class="progress-bar partition-purple animate-progress-bar" ></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: PROGRESS BARS PANEL -->
                            <!-- start: LABELS AND BADGES PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Labels and <span class="text-bold">Badges</span></h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <h5>Available labels</h5>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Labels</th>
                                                <th>Class</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="label label-default"> Default</span></td>
                                                <td><code> label label-default </code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-success"> Success</span></td>
                                                <td><code> label label-success </code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning"> Warning</span></td>
                                                <td><code> label label-warning; </code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-danger"> Danger</span></td>
                                                <td><code> label label-danger </code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-info"> Info</span></td>
                                                <td><code> label label-info </code></td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-inverse"> Inverse</span></td>
                                                <td><code> label label-inverse </code></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h5>Available badges</h5>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="hidden-xs">Name</th>
                                                <th>Example</th>
                                                <th>Class</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="hidden-xs"> Default </td>
                                                <td><span class="badge"> 1</span></td>
                                                <td><code> badge badge-default </code></td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs"> Success </td>
                                                <td><span class="badge badge-success"> 2</span></td>
                                                <td><code> badge badge-success </code></td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs"> Warning </td>
                                                <td><span class="badge badge-warning"> 4</span></td>
                                                <td><code> badge badge-warning </code></td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs"> Danger </td>
                                                <td><span class="badge badge-danger"> 6</span></td>
                                                <td><code> badge badge-danger </code></td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs"> Info </td>
                                                <td><span class="badge badge-info"> 8</span></td>
                                                <td><code> badge badge-info </code></td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs"> Inverse </td>
                                                <td><span class="badge badge-inverse"> 10</span></td>
                                                <td><code> badge badge-inverse </code></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end: LABELS AND BADGES PANEL -->
                            <!-- start: PAGINATION PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Pagination</h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Provide pagination links for your site or app with the multi-page pagination component, or the simpler pager alternative.
                                        Simple pagination, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.
                                    </p>
                                    <h5>Basic</h5>
                                    <div>
                                        <ul class="pagination pagination-lg margin-bottom-10">
                                            <li>
                                                <a href="#">
                                                    Prev
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Next
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="pagination margin-bottom-10">
                                            <li>
                                                <a href="#">
                                                    Prev
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    4
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Next
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="pagination pagination-sm margin-bottom-10">
                                            <li>
                                                <a href="#">
                                                    Prev
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    4
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Next
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5>Colorful</h5>
                                    <div>
                                        <ul class="pagination pagination-blue margin-bottom-10">
                                            <li class="disabled">
                                                <a href="#"><i class="fa fa-chevron-left"></i></a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    4
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="pagination pagination-green margin-bottom-10">
                                            <li class="disabled">
                                                <a href="#"><i class="fa fa-chevron-left"></i></a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    4
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="pagination pagination-red margin-bottom-10">
                                            <li class="disabled">
                                                <a href="#"><i class="fa fa-chevron-left"></i></a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    4
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="border-bottom border-light padding-bottom-10">Pager Default</h5>
                                    <ul class="pager">
                                        <li>
                                            <a href="#">
                                                Previous</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Next</a>
                                        </li>
                                    </ul>
                                    <h5 class="border-bottom border-light padding-bottom-10">Aligned links</h5>
                                    <ul class="pager">
                                        <li class="previous">
                                            <a href="#">
                                                ← Older</a>
                                        </li>
                                        <li class="next">
                                            <a href="#">
                                                Newer →</a>
                                        </li>
                                    </ul>
                                    <h5 class="border-bottom border-light padding-bottom-10">Optional disabled state</h5>
                                    <ul class="pager">
                                        <li class="previous disabled">
                                            <a href="#">
                                                ← Older</a>
                                        </li>
                                        <li class="next">
                                            <a href="#">
                                                Newer →</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end: PAGINATION PANEL -->
                            <!-- start: DYNAMIC PAGINATION PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Dynamic <span class="text-bold">Pagination</span></h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <h5>page-clicked Event</h5>
                                    <div id="paginator-content-1" class="alert alert-info">
                                        Click on the pages to trigger the page-clicked event.
                                    </div>
                                    <ul id="paginator-example-1" class="pagination-purple"></ul>
                                    <h5>page-changed Event</h5>
                                    <div id="paginator-content-2" class="alert alert-info">
                                        Click on the pages to trigger the page-clicked event.
                                    </div>
                                    <ul id="paginator-example-2"></ul>
                                    <div>
                                        Go to page:
                                        <select id="paginator-changed-select">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end: DYNAMIC PAGINATION PANEL -->
                            <!-- start: WELLS -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Wells</h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Use the well as a simple effect on an element to give it an inset effect.
                                    </p>
                                    <div class="well">
                                        Look, I'm in a well!
                                    </div>
                                    <div class="well well-lg">
                                        Look, I'm in a large well!
                                    </div>
                                    <div class="well well-sm">
                                        Look, I'm in a small well!
                                    </div>
                                </div>
                            </div>
                            <!-- end: WELLS -->
                            <!-- start: IMAGE SHAPES -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Image <span class="text-bold">shapes</span></h4>
                                    <div class="panel-tools">										
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                                </li>										
                                            </ul>
                                        </div>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Add classes to an <code> &lt;img&gt;</code>
                                        element to easily style images in any project.
                                    </p>
                                    <img data-src="holder.js/140x140" class="img-rounded" alt="A generic square placeholder image with rounded corners">
                                    <img data-src="holder.js/140x140" class="img-circle" alt="A generic square placeholder image where only the portion within the circle circumscribed about said square is visible">
                                    <img data-src="holder.js/140x140" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
                                </div>
                            </div>
                            <!-- end: IMAGE SHAPES -->
                        </div>
                    </div>
                    <!-- end: PAGE CONTENT-->
                </div>
                <div class="subviews">
                    <div class="subviews-container"></div>
                </div>
            </div>
            <!-- end: PAGE -->
        </div>
        <!-- end: MAIN CONTAINER -->
        <!-- start: FOOTER -->
        <footer class="inner">
            <div class="footer-inner">
                <div class="pull-left">
                    2014 &copy; Rapido by cliptheme.
                </div>
                <div class="pull-right">
                    <span class="go-top"><i class="fa fa-chevron-up"></i></span>
                </div>
            </div>
        </footer>
        <!-- end: FOOTER -->
        <!-- start: SUBVIEW SAMPLE CONTENTS -->
        <!-- *** NEW NOTE *** -->
        <div id="newNote">
            <div class="noteWrap col-md-8 col-md-offset-2">
                <h3>Add new note</h3>
                <form class="form-note">
                    <div class="form-group">
                        <input class="note-title form-control" name="noteTitle" type="text" placeholder="Note Title...">
                    </div>
                    <div class="form-group">
                        <textarea id="noteEditor" name="noteEditor" class="hide"></textarea>
                        <textarea class="summernote" placeholder="Write note here..."></textarea>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="#" class="btn btn-info close-subview-button">
                                Close
                            </a>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-info save-note" type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- *** READ NOTE *** -->
        <div id="readNote">
            <div class="barTopSubview">
                <a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
            </div>
            <div class="noteWrap col-md-8 col-md-offset-2">
                <div class="panel panel-note">
                    <div class="e-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="panel-heading">
                                <h3>This is a Note</h3>
                            </div>
                            <div class="panel-body">
                                <div class="note-short-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                                </div>
                                <div class="note-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
                                    Quis aute iure reprehenderit in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur.
                                    <br>
                                    Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <br>
                                    Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                    <br>
                                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                    <br>
                                    Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                    <br>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                    <br>
                                    Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                    <br>
                                    Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                </div>
                                <div class="note-options pull-right">
                                    <a href="#readNote" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="avatar-note"><img src="assets/images/avatar-2-small.jpg" alt="">
                                </div>
                                <span class="author-note">Nicole Bell</span>
                                <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                                    2014-02-18T00:00:00-05:00
                                </time>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel-heading">
                                <h3>This is the second Note</h3>
                            </div>
                            <div class="panel-body">
                                <div class="note-short-content">
                                    Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem, quia voluptas sit...
                                </div>
                                <div class="note-content">
                                    Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <br>
                                    Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                    <br>
                                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                    <br>
                                    Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                    <br>
                                    Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                    <br>
                                    Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                </div>
                                <div class="note-options pull-right">
                                    <a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="avatar-note"><img src="assets/images/avatar-3-small.jpg" alt="">
                                </div>
                                <span class="author-note">Steven Thompson</span>
                                <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                                    2014-02-18T00:00:00-05:00
                                </time>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel-heading">
                                <h3>This is yet another Note</h3>
                            </div>
                            <div class="panel-body">
                                <div class="note-short-content">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores...
                                </div>
                                <div class="note-content">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                    <br>
                                    Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <br>
                                    Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                    <br>
                                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                </div>
                                <div class="note-options pull-right">
                                    <a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="avatar-note"><img src="assets/images/avatar-4-small.jpg" alt="">
                                </div>
                                <span class="author-note">Ella Patterson</span>
                                <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                                    2014-02-18T00:00:00-05:00
                                </time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *** SHOW CALENDAR *** -->
        <div id="showCalendar" class="col-md-10 col-md-offset-1">
            <div class="barTopSubview">
                <a href="#newEvent" class="new-event button-sv" data-subviews-options='{"onShow": "editEvent()"}'><i class="fa fa-plus"></i> Add new event</a>
            </div>
            <div id="calendar"></div>
        </div>
        <!-- *** NEW EVENT *** -->
        <div id="newEvent">
            <div class="noteWrap col-md-8 col-md-offset-2">
                <h3>Add new event</h3>
                <form class="form-event">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="event-id hide" type="text">
                                <input class="event-name form-control" name="eventName" type="text" placeholder="Event Name...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="checkbox" class="all-day" data-label-text="All-Day" data-on-text="True" data-off-text="False">
                            </div>
                        </div>
                        <div class="no-all-day-range">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="form-group">
                                        <span class="input-icon">
                                            <input type="text" class="event-range-date form-control" name="eventRangeDate" placeholder="Range date"/>
                                            <i class="fa fa-clock-o"></i> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all-day-range">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="form-group">
                                        <span class="input-icon">
                                            <input type="text" class="event-range-date form-control" name="ad_eventRangeDate" placeholder="Range date"/>
                                            <i class="fa fa-calendar"></i> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hide">
                            <input type="text" class="event-start-date" name="eventStartDate"/>
                            <input type="text" class="event-end-date" name="eventEndDate"/>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-control selectpicker event-categories">
                                    <option data-content="<span class='event-category event-cancelled'>Cancelled</span>" value="event-cancelled">Cancelled</option>
                                    <option data-content="<span class='event-category event-home'>Home</span>" value="event-home">Home</option>
                                    <option data-content="<span class='event-category event-overtime'>Overtime</span>" value="event-overtime">Overtime</option>
                                    <option data-content="<span class='event-category event-generic'>Generic</span>" value="event-generic" selected="selected">Generic</option>
                                    <option data-content="<span class='event-category event-job'>Job</span>" value="event-job">Job</option>
                                    <option data-content="<span class='event-category event-offsite'>Off-site work</span>" value="event-offsite">Off-site work</option>
                                    <option data-content="<span class='event-category event-todo'>To Do</span>" value="event-todo">To Do</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="summernote" placeholder="Write note here..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="#" class="btn btn-info close-subview-button">
                                Close
                            </a>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-info save-new-event" type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- *** READ EVENT *** -->
        <div id="readEvent">
            <div class="noteWrap col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="event-title">Event Title</h2>
                        <div class="btn-group options-toggle pull-right">
                            <button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                                <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                                <li>
                                    <a href="#newEvent" class="edit-event">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="delete-event">
                                        <i class="fa fa-times"></i> Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <span class="event-category event-cancelled">Cancelled</span>
                        <span class="event-allday"><i class='fa fa-check'></i> All-Day</span>
                    </div>
                    <div class="col-md-12">
                        <div class="event-start">
                            <div class="event-day"></div>
                            <div class="event-date"></div>
                            <div class="event-time"></div>
                        </div>
                        <div class="event-end"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="event-content"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *** NEW CONTRIBUTOR *** -->
        <div id="newContributor">
            <div class="noteWrap col-md-8 col-md-offset-2">
                <h3>Add new contributor</h3>
                <form class="form-contributor">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="errorHandler alert alert-danger no-display">
                                <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                            </div>
                            <div class="successHandler alert alert-success no-display">
                                <i class="fa fa-ok"></i> Your form validation is successful!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="contributor-id hide" type="text">
                                <label class="control-label">
                                    First Name <span class="symbol required"></span>
                                </label>
                                <input type="text" placeholder="Insert your First Name" class="form-control contributor-firstname" name="firstname">
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Last Name <span class="symbol required"></span>
                                </label>
                                <input type="text" placeholder="Insert your Last Name" class="form-control contributor-lastname" name="lastname">
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Email Address <span class="symbol required"></span>
                                </label>
                                <input type="email" placeholder="Text Field" class="form-control contributor-email" name="email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Password <span class="symbol required"></span>
                                </label>
                                <input type="password" class="form-control contributor-password" name="password">
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Confirm Password <span class="symbol required"></span>
                                </label>
                                <input type="password" class="form-control contributor-password-again" name="password_again">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">
                                    Gender <span class="symbol required"></span>
                                </label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey contributor-gender" value="F" name="gender">
                                        Female
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey contributor-gender" value="M" name="gender">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Permits <span class="symbol required"></span>
                                </label>
                                <select name="permits" class="form-control contributor-permits" >
                                    <option value="View and Edit">View and Edit</option>
                                    <option value="View Only">View Only</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="fileupload fileupload-new contributor-avatar" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail"><img src="assets/images/anonymous.jpg" alt="" width="50" height="50"/>
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                    <div class="contributor-avatar-options">
                                        <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                                            <input type="file">
                                        </span>
                                        <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    SEND MESSAGE (Optional)
                                </label>
                                <textarea class="form-control contributor-message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="#" class="btn btn-info close-subview-button">
                                Close
                            </a>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-info save-contributor" type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- *** SHOW CONTRIBUTORS *** -->
        <div id="showContributors">
            <div class="barTopSubview">
                <a href="#newContributor" class="new-contributor button-sv"><i class="fa fa-plus"></i> Add new contributor</a>
            </div>
            <div class="noteWrap col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="contributors">
                            <div class="options-contributors hide">
                                <div class="btn-group">
                                    <button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                        <span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                                        <li>
                                            <a href="#newContributor" class="show-subviews edit-contributor">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="delete-contributor">
                                                <i class="fa fa-times"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: SUBVIEW SAMPLE CONTENTS -->
    </div>
<?php
    include('footer.php');
?>