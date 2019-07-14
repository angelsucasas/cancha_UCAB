
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard InvestigaUCAB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::asset('assets/app/images/logo-ucab-icono.png')}}">

        <!-- plugin css -->
        <link href="{{URL::asset('assets/app/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{URL::asset('assets/app/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/app/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/app/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
        
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{URL::asset('assets/app/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{ Auth::user()->name}} 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bienvenido!</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Mi Cuenta</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Opciones</span>
                            </a>

                            <div class="dropdown-divider">
                            </div>

                            <!-- item-->
                            <a class="dropdown-item notify-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fe-log-out"></i>
                            <span>Desconectarse</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="{{route('home')}}" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{URL::asset('assets/app/images/logo-light-large.png')}}" alt="" height="50">
                        </span>
                    </a>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navegacion</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-square-edit-outline"></i>
                                    <span> Investigaciones</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="index.html">Crear</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-2.html">Ver 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title"> DASHBOARD</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                    </div> <!-- container -->

                    @yield('content')

                </div> <!-- content -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Vendor js -->
        <script src="{{URL::asset('assets/app/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{URL::asset('assets/app/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{URL::asset('assets/app/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{URL::asset('assets/app/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <!-- Dashboard 2 init -->
        <script src="{{URL::asset('assets/app/js/pages/dashboard-2.init.js')}}"></script>

        <!-- App js-->
        <script src="{{URL::asset('assets/app/js/app.min.js')}}"></script>
        
    </body>
</html>