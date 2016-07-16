<?php
include('header.php');
?>
<!-- start: SLIDING BAR (SB) -->
<!-- end: SLIDING BAR -->
<div class="main-wrapper">
    <!-- start: TOPBAR -->
    <!-- end: PAGESLIDE LEFT -->
    <!-- start: PAGESLIDE RIGHT -->
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
                            <h1>Tabs &amp; Accordions <small>common tabs &amp; accordion</small></h1>
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
                                Tabs &amp; Accordions
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- end: BREADCRUMB -->
                <!-- start: PAGE CONTENT -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- start: PANLEL TABS -->
                        <div class="panel panel-white panel-tabs">
                            <div class="panel-heading">
                                <h4 class="panel-title">Panel <span class="text-bold">Tabs</span></h4>
                            </div>
                            <div class="panel-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a data-toggle="tab" href="#panel_tab_example1">
                                                Tab 1
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#panel_tab_example2">
                                                Tab 2
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#panel_tab_example3">
                                                Tab 3
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="panel_tab_example1" class="tab-pane fade in active">
                                            <p>
                                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent.
                                            </p>
                                            <p>
                                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                            </p>
                                            <div class="alert alert-warning">
                                                <p>
                                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                </p>
                                                <p>
                                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                                </p>
                                                <p>
                                                    <a class="btn btn-red show-tab" href="#panel_tab_example2">
                                                        Go to tab 2
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="panel_tab_example2" class="tab-pane fade">
                                            <p>
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
                                            </p>
                                            <p>
                                                <a target="_blank" href="ui_tabs_accordions.html?tabId=panel_tab_example2" class="btn btn-purple">
                                                    Activate this tab via URL
                                                </a>
                                            </p>
                                        </div>
                                        <div id="panel_tab_example3" class="tab-pane fade">
                                            <p>
                                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                            </p>
                                            <p>
                                                <a target="_blank" href="ui_tabs_accordions.html?tabId=panel_tab_example3" class="btn btn-blue">
                                                    Activate this tab via URL
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: PANLEL TABS -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- start: INLINE TABS PANEL -->
                        <div class="panel panel-white">
                            <div class="panel-heading">
                                <h4 class="panel-title">Inline <span class="text-bold">Tabs</span></h4>
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
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="tabbable">
                                            <ul id="myTab" class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#myTab_example1" data-toggle="tab">
                                                        <i class="green fa fa-home"></i> Tab 1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#myTab_example2" data-toggle="tab">
                                                        Tab 2 <span class="badge badge-danger">4</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        Dropdown &nbsp; <i class="fa fa-caret-down width-auto"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-info">
                                                        <li>
                                                            <a href="#myTab_example3" data-toggle="tab">
                                                                Dropdown 1
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#myTab_example4" data-toggle="tab">
                                                                Dropdown 2
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="myTab_example1">
                                                    <p>
                                                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent.
                                                    </p>
                                                    <div class="alert alert-info">
                                                        <p>
                                                            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                        </p>
                                                        <p>
                                                            <a href="#myTab_example2" class="btn btn-green show-tab">
                                                                Go to tab 2
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="myTab_example2">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab_example3" class="btn btn-red show-tab">
                                                            Go to Dropdown 1
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab_example3">
                                                    <p>
                                                        Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                                                    </p>
                                                    <p>
                                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab_example4" class="btn btn-purple show-tab">
                                                            Go to Dropdown 2
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab_example4">
                                                    <p>
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab_example1" class="btn btn-purple show-tab">
                                                            Return to tab 1
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="tabbable">
                                            <ul id="myTab2" class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#myTab2_example1" data-toggle="tab">
                                                        Tab 1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#myTab2_example2" data-toggle="tab">
                                                        Tab 2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#myTab2_example3" data-toggle="tab">
                                                        Tab 3
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="myTab2_example1">
                                                    <p>
                                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                    </p>
                                                    <p>
                                                        Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab2_example2">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab2_example3" class="btn btn-blue show-tab">
                                                            Go to tab 3
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab2_example3">
                                                    <p>
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab2_example1" class="btn btn-purple show-tab">
                                                            Return to tab 1
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="tabbable tabs-left">
                                            <ul id="myTab3" class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#myTab3_example1" data-toggle="tab">
                                                        <i class="pink fa fa-dashboard"></i> Tab 1
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#myTab3_example2" data-toggle="tab">
                                                        <i class="blue fa fa-user"></i> Tab 2
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#myTab3_example3" data-toggle="tab">
                                                        <i class="fa fa-rocket"></i> Tab 3
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="myTab3_example1">
                                                    <p>
                                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                    </p>
                                                    <p>
                                                        Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab3_example2">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab3_example3" class="btn btn-green show-tab">
                                                            Go to tab 3
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab3_example3">
                                                    <p>
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab3_example1" class="btn btn-purple show-tab">
                                                            Return to tab 1
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="tabbable tabs-right">
                                            <ul id="myTab4" class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#myTab4_example1" data-toggle="tab">
                                                        <i class="pink fa fa-dashboard"></i> Tab 1
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#myTab4_example2" data-toggle="tab">
                                                        <i class="blue fa fa-user"></i> Tab 2
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#myTab4_example3" data-toggle="tab">
                                                        <i class="fa fa-rocket"></i> Tab 3
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="myTab4_example1">
                                                    <p>
                                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                    </p>
                                                    <p>
                                                        Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab4_example2">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab4_example3" class="btn btn-green show-tab">
                                                            Go to tab 3
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab4_example3">
                                                    <p>
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab4_example1" class="btn btn-purple show-tab">
                                                            Return to tab 1
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="tabbable tabs-below">
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="myTab5_example1">
                                                    <p>
                                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                    </p>
                                                    <p>
                                                        Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab5_example2">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab5_example3" class="btn btn-yellow show-tab">
                                                            Go to tab 3
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab5_example3">
                                                    <p>
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab5_example1" class="btn btn-purple show-tab">
                                                            Return to tab 1
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                            <ul id="myTab5" class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#myTab5_example1" data-toggle="tab">
                                                        Tab 1
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#myTab5_example2" data-toggle="tab">
                                                        Tab 2
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#myTab5_example3" data-toggle="tab">
                                                        Tab 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="tabbable partition-dark">
                                            <ul id="myTab6" class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#myTab6_example1" data-toggle="tab">
                                                        Tab 1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#myTab6_example2" data-toggle="tab">
                                                        Tab 2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#myTab6_example3" data-toggle="tab">
                                                        Tab 3
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="myTab6_example1">
                                                    <p>
                                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                    </p>
                                                    <p>
                                                        Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab6_example2">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab6_example3" class="btn btn-blue show-tab">
                                                            Go to tab 3
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="myTab6_example3">
                                                    <p>
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                                    </p>
                                                    <p>
                                                        <a href="#myTab6_example1" class="btn btn-purple show-tab">
                                                            Return to tab 1
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: INLINE TABS PANEL -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- start: ACCORDION PANEL -->
                        <div class="panel panel-white">
                            <div class="panel-heading">
                                <h4 class="panel-title">Accordions</h4>
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
                                <div class="panel-group accordion" id="accordion">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    <i class="icon-arrow"></i> Collapsible Group Item #1
                                                </a></h5>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                    <i class="icon-arrow"></i> Collapsible Group Item #2
                                                </a></h5>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                    <i class="icon-arrow"></i> Collapsible Group Item #3
                                                </a></h5>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: ACCORDION PANEL -->
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