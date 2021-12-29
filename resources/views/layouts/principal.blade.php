<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196"  href="{{ asset('images/logopag.png') }}">
	<title>TSTM - Home</title>

    <link rel="stylesheet" href="{{asset("libs/bower/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("bower/material-design-iconic-font/dist/css/material-design-iconic-font.css")}}">
	<!-- build:css ../assets/css/app.min.css -->
    <link rel="stylesheet" href="{{asset("libs/bower/animate.css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("libs/bower/fullcalendar/dist/fullcalendar.min.css")}}">
    <link rel="stylesheet" href="{{asset("libs/bower/perfect-scrollbar/css/perfect-scrollbar.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/core.css")}}">
 {{--    <link rel="stylesheet" href="{{asset("css/app.css")}}"> --}}
    <link rel="stylesheet" href="{{asset("css/app-css.css")}}">

	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">

    <script src="{{asset("bower/breakpoints.js/dist/breakpoints.min.js")}}"></script>

 <script>
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>

  <script language="javascript" type="text/javascript" src="js/funciones.js"></script>
  <script language="javascript" type="text/javascript" src="js/funcionesM.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="sweetalert2.all.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://www.jsdelivr.com/package/npm/chart.js"></script>

  <script src="{{asset("js/app.js")}}"></script>
  <link rel="stylesheet" href="{{asset("css/elements/infobox.css")}}">

	<style>
	    .class{
	        font-family:Helvetica Neue, Helvetica,Arial,sans-serif;
	    }
      .div_C_programacionSC{
    text-align: center;
    justify-content: center;
    width: 100%;
    display: inline-flex;
      }
      .margin_C_programacionSC{
        margin-left: 2rem;
        width: 28%;
      }
      .conta{
        display: inline-flex;
       text-align: center;
        width: 100%;
        justify-content: center;
      }
      .ml{
        margin-left: 1rem;
      }
      .input{

  }
  .a{
      display:flex;
  }
	</style>

</head>


  <body class="menubar-left menubar-unfold menubar-light theme-primary" onload="Home();">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">

  <!-- navbar header -->
  <div class="navbar-header">

    <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-more"></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-search"></span>
    </button>
    <a href="" class="navbar-brand" style="text-align: center;">
		<span class="brand-icon"><i class="menu-caret zmdi zmdi-hc-sm zmdi-view-dashboard"></i></span>
		<span class="brand-name">TSTM</span>
    </a>
  </div><!-- .navbar-header -->

  <div class="navbar-container container-fluid">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
        <li class="hidden-float hidden-menubar-top">
          <a href="" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
          </a>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float" id="etiq_titu">Inicio</h5>
        </li>
      </ul>

      <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
          <ul class="dropdown-menu animated flipInY">
			<li><a href="javascript:void(0)"><h5 id="etiq_name"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>{{Auth::user()->nombre}}</h5></a></li>
            <li><a href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="zmdi m-r-md zmdi-hc-lg zmdi-square-down"></i>Cerrar Sesión</a></li>

		  </ul>

        </li>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      </ul>
    </div>
  </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light" style=" overflow: scroll;">
  <div class="menubar-scroll" style="height: 946px; ">
    <div class="menubar-scroll-inner" >
      <ul class="app-menu">
        <li class="has-submenu">
          <a class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-money zmdi-hc-lg"></i>
            <span class="menu-text">Compras</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="/nueva_programacion"><span class="menu-text">Nueva programación</span></a></li>
            <li><a href="javascript:C_Editar_programacion();"><span class="menu-text">Editar programación</span></a></li>
            <li><a href="javascript:C_Reportes();"><span class="menu-text">Reportes</span></a></li>
          </ul>
        </li>
        {{-- Recibo --}}
        <li class="has-submenu">
          <a class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-caret-right-circle zmdi-hc-lg"></i>
            <span class="menu-text">Recibo</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a><span class="menu-text">Dashboard</span></a></li>
            <li><a><span class="menu-text">Programación diaria</span></a></li>
            <li><a><span class="menu-text">Recepción</span></a></li>
            <li><a><span class="menu-text">Reportes</span></a></li>
          </ul>
        </li>
        {{-- Recibo --}}
        {{-- envio --}}
        <li class="has-submenu">
          <a class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-caret-left-circle zmdi-hc-lg"></i>
            <span class="menu-text">Envío</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="javascript:Nueva_programacion_envios();"><span class="menu-text">Subir layout envíos</span></a></li>
            <li><a href="javascript:Cargar_modulo_dashboard2();"><span class="menu-text">Dashboard</span></a></li>
            <li><a href="javascript:Cargar_modulo_reportes_envio();"><span class="menu-text">Reportes</span></a></li>
            <li><a href="javascript:Cargar_modulo_usuarios();"><span class="menu-text">Configuración</span></a></li>
          </ul>
	    </li>
        {{-- envio --}}
        {{-- configuracion --}}
        <li class="has-submenu">
          <a class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
            <span class="menu-text">Configuración</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="/users"><span class="menu-text">Usuarios</span></a></li>
            <li><a><span class="menu-text">Usuarios Kioskos</span></a></li>
            <li><a><span class="menu-text">Catálogos</span></a></li>
            <li><a><span class="menu-text">Materia prima</span></a></li>
            <li><a href="/listas_ventas"><span class="menu-text">Ventas</span></a></li>
            <li><a href="/listas_cal_sal" ><span class="menu-text">Sal / Cal</span></a></li>
            <li><a><span class="menu-text">Bypro</span></a></li>
            <li><a href="/listas_cali/create"><span class="menu-text">Calidad</span></a></li>
            <li><a><span class="menu-text">Update inventario</span></a></li>
            <li><a><span class="menu-text">Materia prima</span></a></li>
            <li><a><span class="menu-text">Reporte global</span></a></li>
          </ul>
        </li>
       {{-- configuracion --}}

	  </ul><!-- .app-menu -->

	</div><!-- .menubar-scroll-inner -->

  </div><!-- .menubar-scroll -->

</aside>
<!--========== END app aside -->

<!-- navbar search -->


<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div id="app" class="app">
	<div style="background: #f5f5f5; padding:10px; border-radius:10px;" id="content" class="content">
        @yield('content')

    </div>
</div><!-- .wrap -->
  <!-- APP FOOTER -->

  <!-- /#app-footer -->
</main>

	<!-- build:js ../assets/js/core.min.js -->

    <script src="{{asset("js/app.js")}}"></script>
    <script src="{{asset("libs/bower/jquery/dist/jquery.js")}}"></script>
    <script src="{{asset("libs/bower/jquery-ui/jquery-ui.min.js")}}"></script>
	<script src="{{asset("libs/bower/jQuery-Storage-API/jquery.storageapi.min.js")}}"></script>
    <script src="{{asset("libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js")}}"></script>
    <script src="{{asset("libs/bower/jquery-slimscroll/jquery.slimscroll.js")}}"></script>
    <script src="{{asset("libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js")}}"></script>
    <script src="{{asset("libs/bower/PACE/pace.min.js")}}"></script>
    <script src="{{asset("js/script.js")}}"></script>{{--
    {!!Html::script('js/script.js')!!} --}}
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
	<!-- endbuild -->

	<!-- build:js ../assets/js/app.min.js -->

	 <script src="{{asset("js/library.js")}}"></script>
      <script src="{{asset("js/plugins.js")}}"></script>
     <script src="{{asset("js/app.js")}}"></script>
     <script src="{{asset("js/app-nativo.js")}}"></script>
	<!-- endbuild -->
    <script src="{{asset("bower/moment/moment.js")}}"></script>
    <script src="{{asset("bower/fullcalendar/dist/fullcalendar.min.js")}}"></script>
    <script src="{{asset("js/fullcalendar.js")}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
@yield('javascript')

</html>
