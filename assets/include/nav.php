<?php ?>

<div class="headerbar">

    <div class="headerbar-left">
        <a href="../index.php" class="logo"><img alt="Logo" src="../assets/images/logo.png" /> <span>QMAC</span></a>
    </div>

    <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5><small><span class="label label-danger pull-xs-right">12</span>Messages</small></h5>
                    </div>

                    <!-- item-->
                    <a href="#" class="dropdown-item notify-item">
                        <p class="notify-details ml-0">
                            <span>Nouveau message</span>
                        </p>
                    </a>

                </div>
            </li>

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                    <div class="dropdown-item noti-title">
                        <h5><small><span class="label label-danger pull-xs-right">5</span>Notification</small></h5>
                    </div>

                    <a href="#" class="dropdown-item notify-item">
                        <div class="notify-icon bg-faded">
                            <img src="../assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                        </div>
                        <p class="notify-details">
                            <span>nouvel utilisateur</span>
                        </p>
                    </a>
                </div>
            </li>

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="../assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Bonjour, admin</small> </h5>
                    </div>

                    <a href="#" class="dropdown-item notify-item">
                        <i class="fa fa-user"></i> <span>Profile</span>
                    </a>

                    <a href="#" class="dropdown-item notify-item">
                        <i class="fa fa-power-off"></i> <span>Déconnexion</span>
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
                    <a class="active" href="../index.php"><i class="fa fa-fw fa-bars"></i><span> Administration </span> </a>
                </li>

                <li class="submenu">
                    <a class="pro" href="#"><i class="fa fa-fw fa-star"></i><span> Gestion utilisateur </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="../pages/pro-profile.php">Mon Profile</a></li>
                        <li><a href="../pages/pro-users.php">Utilisateurs</a></li>
                        <li><a href="../pages/pro-users-create.php">Creer un Utilisateur</a></li>
                    </ul>
                </li>

            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
