

<a class="closedbar inner hidden-sm hidden-xs" href="#">
</a>
<nav id="pageslide-left" class="pageslide inner">
    <div class="navbar-content">
        <!-- start: SIDEBAR -->
        <div class="main-navigation left-wrapper transition-left">
            <div class="navigation-toggler hidden-sm hidden-xs">
                <a href="#main-navbar" class="sb-toggle-left">
                </a>
            </div>
            <div class="user-profile border-top padding-horizontal-10 block">
                <div class="inline-block">
                    <img src="<?php echo BASE_URL ?>/assets/images/avatar-1.jpg" alt="">
                </div>
                <div class="inline-block">
                    <h5 class="no-margin"> Welcome </h5>
                    <h4 class="no-margin">  <?php 
                                            $objUser = $this->session->userdata('user');
                                            if (true == valObj($objUser, 'stdClass')) {
                                                echo $objUser->firstName . ' ' . $objUser->lastName;
                                            }
                                        ?> </h4>
                    <a class="btn user-options sb_toggle">
                        <i class="fa fa-cog"></i>
                    </a>
                </div>
            </div>
            <!-- start: MAIN NAVIGATION MENU -->
            <ul class="main-navigation-menu">
                <li>
                    <a href="#/dashboard"><i class="fa fa-home"></i> <span class="title"> Dashboard </span><span class="label label-default pull-right ">LABEL</span> </a>
                </li>
                <li class="">
                    <a href=""><i class="fa fa-home"></i><span class="title">Room's & Offer's</span><span class="label label-success pull-right ">Add/View/Delete</span> </a>
                    <ul class="sub-menu">
                        <li><a href="#/add-room-type"><span class="title">Add Room Type's </span><span class="label label-success pull-right ">Add</span></a></li>
                        <li><a href="#/view-room-type"><span class="title"> View Room Types</span><span class="label label-success pull-right ">view</span></a></li>
                        <li><a href="#/add-room"><span class="title">Add New Room</span><span class="label label-success pull-right ">Add</span></a></li>
                        <li><a href="#/view-room"><span class="title">View Rooms </span><span class="label label-success pull-right ">view</span></a></li>                       
                        <li><a href="#/add-room-offer"><span class="title">Add Room Offer's </span><span class="label label-success pull-right ">Add</span></a></li>
                        <li><a href="#/view-room-offer"><span class="title"> View Offers</span><span class="label label-success pull-right ">view</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i class="fa fa-home active"></i><span class="title">Resorts</span><span class="label label-success pull-right ">Add/View</span> </a>
                    <ul class="sub-menu">
                        <li><a href="#/add-resorts"><span class="title"> Add Resorts </span><span class="label label-success pull-right ">Add</span></a></li>
                        <li><a href="#/view-resorts"><span class="title"> View Resorts </span><span class="label label-success pull-right ">view</span></a></li>
                        <li><a href="#/insert-resort-images"><span class="title"> Upload Resort Images </span><span class="label label-success pull-right ">view</span></a></li>
                        <li><a href="#/view-resort-images"><span class="title"> View Resorts Images </span><span class="label label-success pull-right ">view</span></a></li>
<!--                        <li><a href="#/add-resort-useful-info"><span class="title">Add Resort Useful-info </span><span class="label label-success pull-right ">Add</span></a></li>
                        <li><a href="#/view-resort-useful-info"><span class="title"> View Resort Useful-info</span><span class="label label-success pull-right ">view</span></a></li>-->
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-info"></i> <span class="title pull-left">Resort Policies&Info</span><span class="label label-success pull-right ">Add/View/Delete</span></i> </a>
                    <ul class="sub-menu">
                        <li><a href="#/add-policies">Add Resort Policies<i class="icon-arrow"></i><span class="label label-success pull-right ">Add</span></a></li>
                        <li><a href="#/view-policies">View Resort Policies<i class="icon-arrow"></i><span class="label label-success pull-right ">View</span></a></li>
                        <li><a href="#/add-resort-useful-info">Add Resort Info<i class="icon-arrow"></i><span class="label label-success pull-right ">Add</span></a></li>
                        <li><a href="#/view-resort-useful-info"><span class="title"> View Resort Useful-info</span><span class="label label-success pull-right ">view</span></a></li>
                    </ul>
                </li>
                  <li>
                    <a href="javascript:void(0)"><i class="fa fa-cogs"></i> <span class="title"> Employees </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="#/add-employee"> <span class="title"> Add Employee</span></a></li>
                        <li><a href="#/view-employees"><span class="title"> View Employees </span></a></li>
                        <li><a href="#/add-employee-type"><span class="title"> Add Employee Type </span></a></li>
                        <li><a href="#/view-employee-types"><span class="title"> View Employee Type </span></a></li>       
                    </ul>
                </li>
            </ul>
            <!-- end: MAIN NAVIGATION MENU -->
        </div>
        <!-- end: SIDEBAR -->
    </div>
    <div class="slide-tools">
        <div class="col-xs-6 text-left no-padding">
            <a class="btn btn-sm status" href="#">
                Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
            </a>
        </div>
        <div class="col-xs-6 text-right no-padding">
            <a class="btn btn-sm log-out text-right" href="login_login.html">
                <i class="fa fa-power-off"></i> Log Out
            </a>
        </div>
    </div>
</nav>