<!DOCTYPE html>
<html lang="es" data-textdirection="ltr" class="loading">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta name="description"
    content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
  <meta name="keywords"
    content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app" />
  <meta name="author" content="PIXINVENT" />
  <title>Projecto Arquitectura de Computadoras</title>
  <link rel="apple-touch-icon" sizes="60x60" href="../../app-assets/images/ico/apple-icon-60.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../app-assets/images/ico/apple-icon-76.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="../../app-assets/images/ico/apple-icon-120.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="../../app-assets/images/ico/apple-icon-152.png" />
  <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico" />
  <link rel="shortcut icon" type="image/png" href="../../app-assets/images/ico/favicon-32.png" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-touch-fullscreen" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="default" />
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css" />
  <!-- font icons-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/icomoon.css" />
  <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/pace.css" />
  <!-- END VENDOR CSS-->
  <!-- BEGIN ROBUST CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css" />
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css" />
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css" />
  <!-- END ROBUST CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css" />
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css" />
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css" />
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
  <!-- END Custom CSS-->


  <!-- BEGIN PERSONALES CSS-->
  <link rel="stylesheet" type="text/css" href="../../assets/personales/css/personal.css" />
  <!-- END CSS-->
</head>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns"
  class="vertical-layout vertical-menu 2-columns fixed-navbar">
  <!-- navbar-fixed-top-->
  <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li class="nav-item mobile-menu hidden-md-up float-xs-left">
            <a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="navbar-brand nav-link"><img alt="branding logo"
                src="../../app-assets/images/logo/robust-logo-light.png"
                data-expand="../../app-assets/images/logo/robust-logo-light.png"
                data-collapse="../../app-assets/images/logo/robust-logo-small.png" class="brand-logo" /></a>
          </li>
          <li class="nav-item hidden-md-up float-xs-right">
            <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i
                class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content container-fluid">
        <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
          <ul class="nav navbar-nav">
            <li class="nav-item hidden-sm-down">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"> </i></a>
            </li>
            <li class="nav-item hidden-sm-down">
              <a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a>
            </li>
          </ul>
          <ul class="nav navbar-nav float-xs-right">

            <li class="dropdown dropdown-user nav-item">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span
                  class="avatar avatar-online"><img src="../../app-assets/images/portrait/small/avatar-s-1.png"
                    alt="avatar" /><i></i></span><span class="user-name">Admin</span></a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item"><i class="icon-head"></i> Editar Perfil</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="icon-power3"></i> Salir</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <!-- main menu-->
  <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
      <input type="text" placeholder="Buscar" class="menu-search form-control round" />
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
      <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
        <li class="nav-item">
          <a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.dash.main"
              class="menu-title">Operaciones</span><span
              class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span></a>
          <ul class="menu-content">
            <li class="active">
              <a href="index.php" data-i18n="nav.dash.main" class="menu-item">Calcular IEEE754</a>
            </li>
            <li>
              <a href="#" data-i18n="nav.dash.main" class="menu-item">Calcular Suma</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
  </div>
  <!-- / main menu-->



  <div class="app-content content container-fluid">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-1">
          <h2 class="content-header-title">Suma de Números IEEE754</h2>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Operaciones</a>
              </li>
              <li class="breadcrumb-item active">Calcular Suma IEEE754
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-body">



        <!-- Basic Tables start -->
        <div class="row">
          <div class="col-xs-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">IEEE754</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-body collapse in">
                <div class="text card-block card-dashboard">

                  <div class="col-xl-12 col-lg-12 col-xs-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-block">
                          <div class="media">
                            <div class="media-body text-xs-left">


                              <h2 class="teal">CALCULAR SUMA DE NÚMEROS IEEE754</h2>

                            </div>
                            <div class="media-right media-middle">
                              <i class="icon-user1 teal font-large-2 float-xs-right"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>




                  <div class="col-xl-12 col-lg-12 col-xs-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-block">
                          <div class="media">
                            <div class="media-body text-xs-left">

                              <div>
                              
                               <!-- Agregamos parte que hace la suma de los números -->
                                <?php  include "sumaNumerosieee754.php"; ?>

                              </div>

                              




                            </div>
                            <div class="media-right media-middle">
                              <i class="icon-pencil teal font-large-2 float-xs-right"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
          <!-- Basic Tables end -->



        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->




    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2">
        <span class="float-md-left d-xs-block d-md-inline-block">Copyright &copy; 2020
          <a href="" target="_blank"
            class="text-bold-800 grey darken-2">PROJANET </a>. </span>
      </p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="../../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->


    <!-- LOS SCRIPT PARA LAS OPERACIONES-->
   
    <script src="../../assets/personales/js/personal.js"></script>

    <script src="../../assets/personales/js/ieee754.js"></script>
    <script src="../../assets/personales/js/ieee7540.js"></script>
    <script>
      function valida() {
        var validacion = document.getElementById("decimal").value;
        if (validacion == 0) {
          alert(validacion);
          alert("ingrese valor diferente de cero \n este no tiene representacion en formato ieee754");

        } else {
          solver();

        }
      }
    </script>




</body>

</html>