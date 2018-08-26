<?php ?>

<!-- top bar navigation -->
<div class="headerbar">

    <!-- LOGO -->
    <div class="headerbar-left">
        <a href="index.php" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>QMAC</span></a>
    </div>

    <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fa fa-fw fa-question-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5><small>Help and Support</small></h5>
                    </div>

                    <!-- item-->
                    <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                        <p class="notify-details ml-0">
                            <b>Do you want custom development to integrate this theme?</b>
                            <span>Contact Us</span>
                        </p>
                    </a>

                </div>
            </li>

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                    </div>

                    <!-- item-->
                    <a href="#" class="dropdown-item notify-item">
                        <p class="notify-details ml-0">
                            <b>Jokn Doe</b>
                            <span>New message received</span>
                            <small class="text-muted">2 minutes ago</small>
                        </p>
                    </a>

                </div>
            </li>

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                    </div>

                    <!-- item-->
                    <a href="#" class="dropdown-item notify-item">
                        <div class="notify-icon bg-faded">
                            <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                        </div>
                        <p class="notify-details">
                            <b>John Doe</b>
                            <span>User registration</span>
                            <small class="text-muted">3 minutes ago</small>
                        </p>
                    </a>

                </div>
            </li>

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                    </div>

                    <!-- item-->
                    <a href="pro-profile.html" class="dropdown-item notify-item">
                        <i class="fa fa-user"></i> <span>Profile</span>
                    </a>

                    <!-- item-->
                    <a href="#" class="dropdown-item notify-item">
                        <i class="fa fa-power-off"></i> <span>Logout</span>
                    </a>

                    <!-- item-->
                    <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                        <i class="fa fa-external-link"></i> <span>Pike Admin</span>
                    </a>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </li>
        </ul>

    </nav>

</div>

<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>

                <li class="submenu">
                    <a class="active" href="index.php"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                </li>

                <li class="submenu">
                    <a class="pro" href="#"><i class="fa fa-fw fa-star"></i><span> Pike Admin PRO </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="pro-profile.php">My Profile</a></li>
                        <li><a href="pro-users.php">Users</a></li>
                    </ul>
                </li>

            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!-- End Sidebar -->

<!-- End Navigation -->
