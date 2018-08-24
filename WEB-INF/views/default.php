<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 14/08/18
 * Time: 10:00
 */
$config = new Config();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Just for fun, just for task" name="description" />
    <meta content="Syahril Hermana" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo $config->base_url() ?>assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php echo $config->base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $config->base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $config->base_url() ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $config->base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo $config->base_url() ?>assets/js/modernizr.min.js"></script>

    <!-- jQuery  -->
    <script src="<?php echo $config->base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/waves.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/plugins/counterup/jquery.counterup.min.js"></script>

</head>


<body>

<div id="wrapper">
    <div class="topbar">

        <div class="topbar-left">
            <a href="<?php echo $config->base_url() ?>main" class="logo">
                        <span>
                            <img src="<?php echo $config->base_url() ?>assets/images/logo.png" alt="" height="16">
                        </span>
                <i>
                    <img src="<?php echo $config->base_url() ?>assets/images/logo_sm.png" alt="" height="28">
                </i>
            </a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i class="fi-bell noti-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                        </div>

                        <div class="slimscroll" style="max-height: 190px;">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Samuel <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fi-head"></i> <span>My Account</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fi-power"></i> <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-light waves-effect">
                        <i class="dripicons-menu"></i>
                    </button>
                </li>
            </ul>

        </nav>

        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Navigation</li>
                        <li>
                            <a href="index.html">
                                <i class="fi-air-play"></i><span> Request </span>
                            </a>
                        </li>
                    </ul>

                </div>

                <div class="clearfix"></div>

            </div>
        </div>

    </div>

    <div class="content-page">

        <div class="content">
            <div class="container-fluid">
                <?php include_once $content; ?>
            </div>
        </div>

        <footer class="footer text-right">
            2018 © STIKOM Binaniaga.
        </footer>

    </div>
</div>


<!-- Chart JS -->
<script src="<?php echo $config->base_url() ?>assets/plugins/chart.js/chart.bundle.js"></script>

<!-- init dashboard -->
<script src="<?php echo $config->base_url() ?>assets/pages/jquery.dashboard.init.js"></script>

<!-- App js -->
<script src="<?php echo $config->base_url() ?>assets/js/jquery.core.js"></script>
<script src="<?php echo $config->base_url() ?>assets/js/jquery.app.js"></script>

</body>
</html>