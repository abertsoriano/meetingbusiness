<!DOCTYPE html>
<html lang="en" class="is-dashboard">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title></title>
  <meta name="author" content="">
  <meta name="description" content="">

  <link rel="shortcut icon" href="ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="ico/favicon-152.html">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="ico/favicon-144.html">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="js/assets/simple-lines/simple-line-icons.css">
  <link rel="stylesheet" href="js/assets/bootstrap-select/bootstrap-select.min.css">
  <link rel="stylesheet" href="js/assets/prism/prism.css">
  <link rel="stylesheet" href="js/assets/summernote/summernote.css">
  <link rel="stylesheet" href="js/assets/tags-input/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="css/theme.min.css">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/selectivizr-min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  </head>

  <body>
  <div class="dashboard-wrapper">
    <!-- #left part -->
    <aside class="dashboard-sidebar sidebar-primary">
      <div class="sidebar-header text-center">
        <a class="navbar-brand" href="#link">
          <img class="brand-logo" alt="Logo" src="img/logo-white.png">
          <span class="brand-name">REUNEOS</span>
        </a><!-- /.navbar-brand -->
      </div><!-- /.sidebar-header -->
      <div class="sidebar-subheader text-center">
        <img class="img-circle" src="img/user-male-2.jpg" width="100" height="100" alt="img">
        <p class="no-margin"><strong>{{ Auth::user()->name }}</strong></p>
        <p><small><i class="fa fa-globe"></i> Lima, Peru</small></p>
        <p><a href="#link" class="btn btn-outline btn-primary">Edit Profile</a></p>
      </div><!-- /.sidebar-subheader -->
      <div class="sidebar-subheader">
        <form role="search">
          <input type="text" class="form-control" placeholder="Search">
        </form>
      </div><!-- /.sidebar-subheader -->
      <ul class="sidebar-nav">
        <li class="active">
          <a href="index.html">
            <i class="icon-home"></i>
            Home
          </a>
        </li>
        <li class="header"><i class="fa fa-circle-o text-info"></i> Administrar</li>
        <li>
          <a href="publishing.html">
            <i class="icon-note"></i>
            Reunión
          </a>
        </li>

        <li>
          <a href="edit-profile.html">
            <i class="icon-user"></i>
            Editar Perfil
          </a>
        </li>
        <li>
          <a href="calendar.html">
            <i class="icon-calendar"></i>
            Calendario
          </a>
        </li>
        <li class="header"><i class="fa fa-circle-o text-warning"></i> Otros</li>
        <li>
          <a href="stats.html">
            <i class="icon-pie-chart"></i>
            Stats
          </a>
        </li>
        <li>
          <a href="activity.html">
            <i class="icon-fire"></i>
            Activity
          </a>
        </li>
        <li>
          <a href="widgets.html">
            <i class="icon-grid"></i>
            Widgets
          </a>
        </li>
        <li>
          <a href="tables.html">
            <i class="icon-layers"></i>
            Data
          </a>
        </li>
        <li class="header"><i class="fa fa-circle-o text-success"></i> Settings</li>
        <li>
          <a href="pricing.html">
            <i class="icon-basket-loaded"></i>
            Pricing
          </a>
        </li>
        <li>
          <a href="settings.html">
            <i class="icon-equalizer"></i>
            Settings
          </a>
        </li>
        <li>
          <a href="#link" data-toggle="collapse" data-target="#submenu-1">
            <i class="icon-folder"></i>
            Dropdown
          </a>
          <ul class="sidebar-nav-dropdown collapse" id="submenu-1">
            <li class="active"><a href="#link"><i class="fa fa-fw fa-angle-right"></i> Submenu</a></li>
            <li><a href="#link"><i class="fa fa-fw fa-angle-right"></i> Submenu</a></li>
            <li><a href="#link"><i class="fa fa-fw fa-angle-right"></i> Submenu</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ url('logout') }}">
            <i class="icon-logout"></i>
            Desconectarse
          </a>
        </li>
      </ul><!-- /.sidebar-nav -->
    </aside><!-- /.sidebar -->
    <!-- #left part end -->
    <!-- #Header -->
    <aside class="dashboard-sidebar sidebar-secondary">
      <div class="sidebar-header">
        <button type="button" class="btn btn-link pull-left vertical-align" data-toggle="sidebar-secondary">
          <i class="fa fa-fw fa-times-circle fa-lg text-white"></i>
        </button>
        <p class="pull-left vertical-align"><strong>Notifications:</strong></p>
      </div><!-- /.sidebar-header -->
      <ul class="sidebar-nav">
        <li class="new">
          <a href="#link">
            <div class="media media-post">
              <img class="media-left" src="img/user-female-1.jpg" alt="img">
              <div class="media-body">
                <span class="media-heading">Lucida Sans</span>
                Has added 3 new pictures to her cloud instance
                <span class="media-meta"><i class="fa fa-clock-o"></i> 5 minutes ago</span>
              </div><!-- /.media-body -->
            </div><!-- /.media -->
          </a>
        </li>
        <li class="new">
          <a href="#link">
            <div class="media media-post">
              <img class="media-left" src="img/user-female-2.jpg" alt="img">
              <div class="media-body">
                <span class="media-heading">Cambria Serif</span>
                Has added 3 new pictures to her cloud instance
                <span class="media-meta"><i class="fa fa-clock-o"></i> 5 minutes ago</span>
              </div><!-- /.media-body -->
            </div><!-- /.media -->
          </a>
        </li>
        <li>
          <a href="#link">
            <div class="media media-post">
              <img class="media-left" src="img/user-male-1.jpg" alt="img">
              <div class="media-body">
                <span class="media-heading">Calisto MT</span>
                Has added 3 new pictures to her cloud instance
                <span class="media-meta"><i class="fa fa-clock-o"></i> 5 minutes ago</span>
              </div><!-- /.media-body -->
            </div><!-- /.media -->
          </a>
        </li>
        <li>
          <a href="#link">
            <div class="media media-post">
              <img class="media-left" src="img/user-male-2.jpg" alt="img">
              <div class="media-body">
                <span class="media-heading">Cooper Black</span>
                Has added 3 new pictures to her cloud instance
                <span class="media-meta"><i class="fa fa-clock-o"></i> 5 minutes ago</span>
              </div><!-- /.media-body -->
            </div><!-- /.media -->
          </a>
        </li>
        <li>
          <a href="#link">
            <div class="media media-post">
              <div class="media-left">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-info"></i>
                  <i class="fa fa-code-fork fa-stack-1x fa-inverse"></i>
                </span>
              </div>
              <div class="media-body">
                <span class="media-heading">Cooper Black</span>
                Has sent a pull request
                <span class="media-meta"><i class="fa fa-clock-o"></i> 5 minutes ago</span>
              </div><!-- /.media-body -->
            </div><!-- /.media -->
          </a>
        </li>
        <li>
          <a href="#link">
            <div class="media media-post">
              <div class="media-left">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x text-danger"></i>
                  <i class="fa fa-code-fork fa-stack-1x fa-inverse"></i>
                </span>
              </div>
              <div class="media-body">
                <span class="media-heading">Calisto MT</span>
                Has has filed a bug report
                <span class="media-meta"><i class="fa fa-clock-o"></i> 5 minutes ago</span>
              </div><!-- /.media-body -->
            </div><!-- /.media -->
          </a>
        </li>
        <li>
          <a href="#link">
            <div class="media media-post">
              <img class="media-left" src="img/user-male-2.jpg" alt="img">
              <div class="media-body">
                <span class="media-heading">Calisto MT</span>
                Has has filed a bug report
                <span class="media-meta">
                  <i class="fa fa-clock-o"></i> 5 minutes ago
                </span>
              </div><!-- /.media-body -->
            </div><!-- /.media -->
          </a>
        </li>
      </ul><!-- /.sidebar-nav -->
    </aside><!-- /.sidebar -->
    <!-- #Header end -->
    <main class="page-content">
      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-xs-3">
              <button type="button" class="btn navbar-btn btn-link pull-left" data-toggle="sidebar-primary">
                <i class="fa fa-fw text-white fa-align-justify"></i></button>
            </div><!-- /.col -->
            <div class="col-xs-6 text-center">
              <a class="navbar-brand" href="#link">
                <!-- <img class="brand-logo" alt="Logo" src="img/logo-white.png"> -->
                <span class="brand-name">USUARIO</span>
              </a>
            </div><!-- /.col -->
            <div class="col-xs-3">
              <button type="button" class="btn navbar-btn btn-link btn-group pull-right" data-toggle="sidebar-secondary">
                <i class="fa fa-flash text-white fa-lg"></i>
                <span class="label label-danger notif-count">6</span>
              </button>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </nav><!-- /.navbar.navbar-inverse -->
      @yield('content')
    </main>
  </div><!-- /.dashboard-wrapper -->
  <!-- last but not least the javascript -->
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <!--<script src="prism/prism.js"></script>
  <script src="bootstrap-select/bootstrap-select.min.js"></script>
  <script src="isotope/isotope.pkgd.min.js"></script>
  <script src="jquery.countdown/jquery.countdown.min.js"></script>
  <script src="summernote/summernote.min.js"></script>
  <script src="tags-input/bootstrap-tagsinput.min.js"></script>
  <script src="autosize/jquery.autosize.min.js"></script>
  <script src="validator/validator.min.js"></script>
  <script src="chartjs/Chart.min.js"></script>-->
  <!--<script src="js/assets/jquery-labelauty/jquery-labelauty.js"></script>-->
  <!--<script src="js/holder.js"></script>-->
  <script src="js/demo.js"></script>
  </body>
  </html>