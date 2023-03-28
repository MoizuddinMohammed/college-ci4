<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>Montessori English Medium School | Dashboard</title>
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">
    <link href="/dist/css/pages/dashboard.css" rel="stylesheet">
    <link href="/dist/css/pages/responsive.css" rel="stylesheet">
</head>
<body class="skin-red fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Montessori English Medium School</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header id="header-include" class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/assets/images/logo-placeholder1.png" width="40px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="/assets/images/logo-placeholder1.png" width="40px" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs"><span class="font-bold">Montessori</span>School</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-3">
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav mr-auto last_logged">
                        <li class="nav-item"> 
                            <a class="d-block text-white" href="javascript:void(0)"><b>Last Logged In :</b> Thusday, July 12, 2020 12:30 PM</a>
                            <a class="d-block text-white" href="javascript:void(0)"><b>Branch :</b> Hyderabad </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0 mr-3">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"> <i class="icon-note"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/users/profile-picture.jpg" alt="user" class=""> <span class="hidden-md-down">Rahul &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="my-profile.php" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="my-profile.php" class="dropdown-item"><i class="ti-settings"></i> Change Password</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside id="sidebar-include" class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="/assets/images/users/profile-picture.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Rahul Sharma</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="my-profile.php"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="my-profile.php"><i class="ti-settings"></i> Change Password</a></li>
                                <li><a href="/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- COMPONENTS</li>
                        <li><a class="waves-effect waves-dark" href="/dashboard"><i class="icon-speedometer text-primary"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li><a class="waves-effect waves-dark" href="/college"><i class="icon-speedometer text-primary"></i><span class="hide-menu">College</span></a></li>
                        <li><a class="waves-effect waves-dark" href="/blank"><i class="icon-speedometer text-primary"></i><span class="hide-menu">Class</span></a></li>
                        <li><a class="waves-effect waves-dark" href="/blank"><i class="icon-speedometer text-primary"></i><span class="hide-menu">Blank</span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer text-danger"></i><span class="hide-menu">Documents</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/blank">Blank</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->