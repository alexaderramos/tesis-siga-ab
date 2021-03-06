<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title') - San Vicente de Paúl</title>


    <link rel="icon" href="images/favicon.ico" type="image/ico"/>
        <link href="{{asset('gentelella/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <link href="{{asset('gentelella/vendors/dropzone/dist/min/dropzone.min.css')}}../" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('gentelella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('gentelella/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('gentelella/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"
          rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('gentelella/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('gentelella/build/css/custom.min.css')}}" rel="stylesheet">
    <style> 
.x_content, table.tile td ul li a, table.tile_info {
    width: 100%;
    height: 1000px;
}
    .main_menu_side {
        background-color: ;
    }


</style>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ route('home') }}" class="site_title"><i class="fa fa-university"></i> <span style="font-size: 18px" class="titulocolegio">San Vicente de Paúl</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <a href="{{ route('users.profile') }}"><img src="{{asset('gentelella/images/img.jpg')}}" alt="..." class="img-circle profile_img"></a>
                    </div>
                    <div class="profile_info">
                        <span>Bienvenido,</span>
                        <h2> {{ Auth::user()->name }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-users"></i>  Usuarios <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('people.index') }}">Personas</a></li>
                                    <li><a href="{{ route('students.index') }}">Alumnos</a></li>
                                    <li><a href="{{ route('parents.index') }}">Padres</a></li>
                                     <li><a href="{{ route('teachers.index') }}">Docentes</a></li>
                                    <li><a href="{{ route('users.index') }}">Usuarios</a></li>
                                     
                                </ul>
                            <li><a><i class="fa fa-folder-open"></i>  Matrículas <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('matriculation.index') }}">Alumno</a></li>

                                 
                                </ul>
                                   </li>
                            <li><a><i class="fa fa-user"></i>  Docentes <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                   
                                     <li><a href="{{ route('scores.index') }}">Registrar Notas</a></li>
                                     <li><a href="{{ route('assistance.index') }}">Asistencia Alumnos</a></li>

                                </ul>
                            </li>
                            </li>
                         
                        {{--       <li><a><i class="fa fa-file"></i>  Notas <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('scores.list') }}">Notas</a></li>
                             
                                </ul>
                            </li> --}}
                            <li><a><i class="fa fa-edit"></i>  Libretas <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('scores.generate') }}">Generar libretas</a></li>
                         
                                </ul>
                            </li>
                            <li><a><i class="fa fa-shopping-cart"></i>  Pagos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('payments.index') }}">Gestionar Pagos</a></li>
                             
                                </ul>
                            </li>
                                <li><a><i class="fa fa-graduation-cap"></i>  Programación Academ. <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('year.index') }}">Año</a></li>
                                    <li><a href="{{ route('period.index') }}">Periodo</a></li>
                                    <li><a href="{{ route('grades.index') }}">Grados</a></li>
                                    <li><a href="{{ route('courses.index') }}">Cursos</a></li>
                                    <li><a href="{{ route('loadwork.index') }}">Horarios</a></li>
                                     <li><a href="{{ route('scores.add') }}">Notas</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-folder"></i>  Reportes <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('teachers.list') }}">Docentes</a></li>
                                    <li><a href="{{  route('parents.list') }}">Padres de Familia</a></li>
                                    <li><a href="{{  route('students.list') }}">Alumnos matriculados</a></li>
                                    <li><a href="{{  route('scores.list') }}">Notas</a></li>
                                    <li><a href="{{  route('payments.list') }}">Pagos</a></li>
                        
                                </ul>
                            </li>
                                <li><a><i class="fa fa-envelope"></i> Notificaciones <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{  route('notification.index') }}">Crear Notificaón</a></li>
                             
                                </ul>
                            </li>
                        </ul>
                    </div>

                   
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="images/img.jpg" alt=""> {{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Perfil</a></li>
                               <li><a href="javascript:;">Ayuda </a></li>
 <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit(); ">
                                        <i class="fa fa-sign-out pull-right"></i> Cerrar sesión
                                    </a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
     {{ csrf_field() }}
 </form>


                                </li>
                            </ul>
                        </li>

                <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                          <span></span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-calendar"></i>
                               
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                            <a>
                                       
                                        <span>
                          <span></span>
                          <span class="time"></span>
                        </span>
                                        <span class="message">
                       2019                        </span>
                                    </a>
                                </li>
                                <li>
                                            <a>
                                       
                                        <span>
                          <span></span>
                          <span class="time"></span>
                        </span>
                                        <span class="message">
                       2018                       </span>
                                    </a>
                                </li>
                                <li>
                                            <a>
                                       
                                        <span>
                          <span></span>
                          <span class="time"></span>
                        </span>
                                        <span class="message">
                       2017                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                       
                                        <span>
                          <span></span>
                          <span class="time"></span>
                        </span>
                                        <span class="message">
                       2016                       </span>
                                    </a>
                                </li>
                                <li>
                                    {{-- <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div> --}}
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                San Vicente de Paúl</a> </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('gentelella/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('gentelella/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('gentelella/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('gentelella/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('gentelella/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('gentelella/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{ asset('gentelella/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{ asset('gentelella/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{ asset('gentelella/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{ asset('gentelella/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('gentelella/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{ asset('gentelella/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{ asset('gentelella/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{ asset('gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{ asset('gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{ asset('gentelella/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{ asset('gentelella/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('gentelella/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{ asset('gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{ asset('gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('gentelella/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script src="{{ asset('gentelella/vendors/validator/validator.js" ') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{  asset('gentelella/build/js/custom.min.js')}}">
    <script src="{{  asset('gentelella/vendors/dropzone/dist/min/dropzone.min.js')}}"></script>


<script src="{{  asset('gentelella/vendors/nprogress/nprogress.js')}}" type="f5c146173eb647e78aa64e31-text/javascript"></script>

<script src="{{  asset('gentelella/vendors/dropzone/dist/min/dropzone.min.js')}}" ></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="f5c146173eb647e78aa64e31-|49" defer=""></script>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../vendors/jquery/dist/jquery.min.js" type="9a818d14e59a2a2e9b3266cf-text/javascript"></script>

<script src="{{asset('gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="9a818d14e59a2a2e9b3266cf-text/javascript"></script>

<script src="{{asset('gentelella/vendors/fastclick/lib/fastclick.js')}}" type="9a818d14e59a2a2e9b3266cf-text/javascript"></script>

<script src="{{asset('gentelella/vendors/nprogress/nprogress.js')}}" type="9a818d14e59a2a2e9b3266cf-text/javascript"></script>

<script src="{{asset('gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}" type="9a818d14e59a2a2e9b3266cf-text/javascript"></script>
<script src="{{asset('gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js')}}" type="9a818d14e59a2a2e9b3266cf-text/javascript"></script>
<script src="{{asset('gentelella/vendors/google-code-prettify/src/prettify.js')}}" type="9a818d14e59a2a2e9b3266cf-text/javascript"></script>

<script src="{{asset('gentelella/build/js/custom.min.js" type="9a818d14e59a2a2e9b3266cf-text/javascript')}}"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="9a818d14e59a2a2e9b3266cf-|49" defer=""></script></body>
</html>
</body>
</html>
