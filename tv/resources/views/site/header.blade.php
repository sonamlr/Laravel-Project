<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <!-- <title>Student Dashboard </title> -->
    @stack('title');
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="shortcut icon" href="assets/images/android-chrome-512x512.png">

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <style>
        .delete {
            color: red;
        }

        .edit {
            color: green;
        }

        .error {
            color: red;
        }

        .project {
            display: block;
        }
    </style>


</head>

<body data-sidebar="colored" class="sidebar-enable">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">



        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="" alt="logo-sm-dark" width="150px">
                            </span>
                            <span class="logo-lg">
                                <img src="" alt="logo-dark" width="150px">
                            </span>
                        </a>

                        <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <!-- <img src="" alt="logo-sm-light" width="100px"> -->
                            </span>
                            <span class="logo-lg">
                                <!-- <img src="" alt="logo-light" width="100"> -->
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- start page title -->
                    <div class="page-title-box align-self-center d-none d-md-block">

                        <h4 class="page-title mb-0">Dashboard</h4>
                    </div>
                    <!-- end page title -->
                </div>


            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">

                        <img src="" alt="logo-sm-dark" width="150px">
                    </span>
                    <span class="logo-lg">
                        <img src="" alt="logo-dark" width="150px">
                    </span>
                </a>

                <a href="#" class="logo logo-light">
                    <span class="logo-sm">
                        <!-- <img src="" alt="logo-sm-light" width="150px"> -->
                    </span>
                    <span class="logo-lg">
                        <!-- <img src="" alt="logo-light" width="150px"> -->
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <div data-simplebar class="vertical-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li class="waves-effect">
                            <a href="{{ url('/dashboard') }}"> <i class="uim uim-airplay"></i> <span>Dashboard</span> </a>
                        </li>
                         <li class="waves-effect">
                            <a href="{{ url('/pendrivelist') }}"> <i class="mdi  mdi-cable-data"></i> <span>Pendrive</span> </a>
                        </li>
                         <li class="waves-effect">
                            <a href="{{ url('/pendriverecord') }}"> <i  class='ri-file-line' ></i> <span>Record</span> </a>
                        </li> 
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uim uim-chart-pie"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ url('/chartbypendrive') }}">  <span>Pendrive</span> </a>
                                </li>
                                <li>
                                    <a href="{{ url('/chartbyschool') }}"> <span>School</span> </a>
                                </li>
                                <li>
                                    <a href="{{ url('/chartbydate') }}">  <span>Other</span> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="waves-effect">
                            <a href="{{ url('/') }}"> <i class="ri-logout-box-r-line"></i> <span>Logout</span> </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="dropdown px-3 sidebar-user sidebar-user-info">
                <button type="button" class="btn w-100 px-0 border-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center">


                        <div class="flex-grow-1 ms-2 text-start">
                            <span class="ms-1 fw-medium user-name-text">Admin Panel</span>
                        </div>

                        <div class="flex-shrink-0 text-end">
                            <i class="mdi mdi-dots-vertical font-size-16"></i>
                        </div>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>

                    <a class="dropdown-item" href="#"><span class="badge bg-primary mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>

                </div>
            </div>

        </div>