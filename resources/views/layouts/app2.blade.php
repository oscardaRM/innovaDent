<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Bienvenido a InnovaDent Huetamo') }}</title>-->
    <title>Bienvenido a InnovaDent Huetamo</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- ASSETS CSS INSPINIA -->

    <link href="{{asset('css/bootstrap.min.css')}}  " rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
    <!--CHOOSEN SELECT-->
    <link href="{{asset('css/plugins/chosen/bootstrap-chosen.css')}}" rel="stylesheet">

</head>
<body>
    <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <div style="width:50px; height:56px;">
                                <img alt="image" class="img-circle" style="width:100%;" src="{{Auth::user()->user_photo ? asset(Auth::user()->user_photo) : asset('img/profile.jpg')}}">
                                </div>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                                </span> <span class="text-muted text-xs block">{{Auth::user()->role->name}} <b class="caret"></b></span> </span> </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="profile.html">Perfil</a></li>
                                    <li><a href="login.html">Logout</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                IDH
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/home') }}"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                        </li>
                        @if(auth()->user()->role->id == 1)
                        <li>
                            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Personal</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/users/cashier/index">Cajeras</a></li>
                                <li><a href="/users/doctor/index">Medicos</a></li>
                                <li><a href="/users/admin/index">Administradores</a></li>
                            </ul>
                        </li>
                        @endif
                        <li>
                            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Operaciones</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/patients">Pacientes</a></li>
                                <li><a href="index.html">Consultas</a></li>
                                <li><a href="treatments">Tratamientos</a></li>
                                @if(auth()->user()->role->id == 1)
                                <li><a href="/stores">Tiendas</a></li>
                                <li><a href="/concepts">Servicios</a></li>
                                <li><a href="/patients">Corte de Caja</a></li>
                                @endif
                            </ul>
                        </li>
                        <li>
                            <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Citas</span></a>
                        </li>
                    </ul>

                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <!--<form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>-->
                </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            >
                                <i class="fa fa-sign-out"></i> {{ __('Cerrar Sesión') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                        </li>
                    </ul>

                </nav>
            </div>
                <!-- Main content-->
                <div class="wrapper wrapper-content">

                <main class="py-4">
                    @yield('content')
                </main>
                

                </div>
                <!-- END Main content-->

            </div><!--END PAGE-WRAPPER-->
    </div><!--END WRAPPER-->

<!--  SCRIPTS INSPINIA  -->

 <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{asset('js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>

    <script src="{{asset('js/plugins/jasny/jasny-bootstrap.min.js')}}"></script>

    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

    <script src="{{asset('js/plugins/chosen/chosen.jquery.js')}}"></script>

    <script>
        $('.chosen-select').chosen({width: "100%"});
    </script>

</body>
</html>
