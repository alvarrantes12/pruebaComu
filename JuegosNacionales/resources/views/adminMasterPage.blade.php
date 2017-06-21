<!--Universidad de Costa Rica
Informática Empresarial
IF7102 - Multimedios
Prof. Jonathan Rojas
Proyecto Inscripciones Juegos Nacionales ICODER
Estudiantes:
Paula Álvarez Barrantes – B40301
Elí Hidalgo Quesada - B43429
Stephanie Rojas Alfaro – A54827
I Ciclo, 2017

Clase: adminMasterPage
Vista que implementa una plantilla pre-diseñada, se encarga de crear una pantalla unificada para
el administrador del sistema de inscripciones-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ICODER | ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fonts/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="fonts/ionicons.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="dist/icoderLogo.ico">
  <script type="text/javascript" src="dist/js/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" src="bootstrap/css/bootstrap.css"></link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>       
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/es.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

  
</head>
<body class="hold-transition skin-red sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
   <header class="main-header">
      <!-- Logo -->
     
    <a href="http://www.icoder.go.cr/servicios/juegos-nacionales" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
    
      <span class="logo-mini">J<strong>N</strong></span>
             <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Juegos<strong>Nacionales</strong></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
    
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user"></span><span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <div class="glyphicon glyphicon-ok-sign"></div>

                <p>
                 Usuario
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
   
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li class="treeview">
          <a href="{{URL::to('showP/')}}">
            <i class="glyphicon glyphicon-edit"></i> <span>Personas Inscritas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>

        <li class="treeview">
          <a href="{{URL::to('report/')}}">
            <i class="glyphicon glyphicon-paste"></i> <span>Reporte</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
            
           <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-paste"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Usuarios inscritos</a></li>
            <li><a href="{{URL::to('showRol/')}}"><i class="fa fa-circle-o"></i>Tipos de usurios</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="{{URL::to('edition/')}}">
            <i class="glyphicon glyphicon-calendar"></i> <span>Edición</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
          <li class="treeview">
          <a href="{{URL::to('sport/')}}">
            <i class="glyphicon glyphicon-king"></i> <span>Deportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="{{URL::to('category/')}}">
            <i class="glyphicon glyphicon-knight"></i> <span>Categorías</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="{{URL::to('test/')}}">
            <i class="glyphicon glyphicon-flag"></i> <span>Pruebas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
        
        <li class="treeview">
          <a href="{{URL::to('province/')}}">
            <i class="glyphicon glyphicon-map-marker"></i> <span>Provincias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
          <li class="treeview">
          <a href="{{URL::to('canton/')}}">
            <i class="glyphicon glyphicon-map-marker"></i> <span>Cantones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
           <li class="treeview">
          <a href="{{URL::to('userType/')}}">
            <i class="glyphicon glyphicon-link"></i> <span>Tipos de usuario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
        
        
          
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     

    <!-- Main content -->
     @yield('adminContent')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>v 1.0</b> 
   </div>
   <div class="pull-center">
           <img src="dist/img/icoder.png" class="img" alt="ICODER">  <strong> <a href="http://www.icoder.go.cr/servicios/juegos-nacionales"> Instituto Costarricense del Deporte y la Recreación, 2017</a></strong> 
      </div>
  
 
  </footer>

  
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
