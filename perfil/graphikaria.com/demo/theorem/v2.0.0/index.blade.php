<!DOCTYPE html>
<html class="is-dashboard" lang="en">

<!-- Mirrored from graphikaria.com/demo/theorem/v2.0.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Aug 2016 15:32:03 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title></title>
  <meta name="author" content="">
  <meta name="description" content="">

  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/favicon-152.html">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="assets/ico/favicon-144.html">

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/simple-lines/simple-line-icons.css">
  <link rel="stylesheet" href="assets/bootstrap-select/bootstrap-select.min.css">
  <link rel="stylesheet" href="assets/prism/prism.css">
  <link rel="stylesheet" href="assets/summernote/summernote.css">
  <link rel="stylesheet" href="assets/tags-input/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="assets/css/theme.min.css">
  <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/selectivizr-min.js"></script>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div class="dashboard-wrapper">
    <aside class="dashboard-sidebar sidebar-primary">
      <div class="sidebar-header text-center">
        <a class="navbar-brand" href="#link">
          <img class="brand-logo" alt="Logo" src="assets/img/logo-white.png">
          <span class="brand-name">Dashboard</span>
        </a><!-- /.navbar-brand -->
      </div><!-- /.sidebar-header -->
      <div class="sidebar-subheader text-center">
        <img class="img-circle" src="assets/img/user-male-2.jpg" width="100" height="100" alt="img">
        <p class="no-margin"><strong>Cooper Black</strong></p>
        <p><small><i class="fa fa-globe"></i> Paris, France</small></p>
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
          <a href="login.html">
            <i class="icon-logout"></i>
            Desconectarse
          </a>
        </li>
      </ul><!-- /.sidebar-nav -->
    </aside><!-- /.sidebar -->

    <aside class="dashboard-sidebar sidebar-secondary">
      <div class="sidebar-header">
        <button type="button" class="btn btn-link pull-left vertical-align" data-toggle="sidebar-secondary"><i class="fa fa-fw fa-times-circle fa-lg text-white"></i></button>
        <p class="pull-left vertical-align"><strong>Notifications:</strong></p>
      </div><!-- /.sidebar-header -->
      <ul class="sidebar-nav">
        <li class="new">
          <a href="#link">
            <div class="media media-post">
              <img class="media-left" src="assets/img/user-female-1.jpg" alt="img">
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
              <img class="media-left" src="assets/img/user-female-2.jpg" alt="img">
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
              <img class="media-left" src="assets/img/user-male-1.jpg" alt="img">
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
              <img class="media-left" src="assets/img/user-male-2.jpg" alt="img">
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
              <img class="media-left" src="assets/img/user-male-2.jpg" alt="img">
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

    <!-- Page content -->
    <main class="page-content">
      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-xs-3">
              <button type="button" class="btn navbar-btn btn-link pull-left" data-toggle="sidebar-primary"><i class="fa fa-fw text-white fa-align-justify"></i></button>
            </div><!-- /.col -->
            <div class="col-xs-6 text-center">
              <a class="navbar-brand" href="#link">
                <!-- <img class="brand-logo" alt="Logo" src="assets/img/logo-white.png"> -->
                <span class="brand-name">Dashboard</span>
              </a>
            </div><!-- /.col -->
            <div class="col-xs-3">
              <button type="button" class="btn navbar-btn btn-link btn-group pull-right" data-toggle="sidebar-secondary">
                <i class="glyphicon glyphicon-flash text-white"></i>
                <span class="label label-danger notif-count">6</span>
              </button>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </nav><!-- /.navbar.navbar-inverse -->

      <section class="bg-custom-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="padding-md">
                <h1><span class="text-white">Super Duper</span></h1>
                <h2><span class="text-white">Admin Interface</span></h2>
                <a href="##" class="btn btn-white btn-outline">Buy Now!</a>
              </div><!-- /.padding -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="padding-md bg-black-trans">
          <div class="row">
            <div class="col-md-12 text-right">
              <h2><i class="icon-social-twitter"></i> @admin</h2>
              <p><strong>379 Followers 63 Following 120 Posts</strong></p>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.padding -->
      </section>

      <section class="section-xs bg-info">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <strong><i class="fa fa-fw fa-exclamation-triangle"></i> Status:</strong> All systems working properly!
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>

      <section class="section-xs bg-white border-default">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <ol class="breadcrumb no-margin">
                <li><a href="#link">Main</a></li>
                <li><a href="#link">Section</a></li>
                <li class="active">Current</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>

      <section class="section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="headline">Filterable Gallery:</h2>
              <ul id="filters" class="tags">
                <li class="active"><a href="#link" data-filter="*">Show All</a></li>
                <li><a href="#link" data-filter=".apples">apples</a></li>
                <li><a href="#link" data-filter=".kiwis">kiwis</a></li>
                <li><a href="#link" data-filter=".oranges">oranges</a></li>
              </ul><!-- /#filters.tags -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <br class="spacer-lg">
          <div class="row">
            <div class="isotope-container">
              <div class="col-md-3 isotope-item apples">
                <div class="widget">
                  <div class="thumbnail">
                    <div class="overlay-container">
                      <img src="assets/img/img-400x400.jpg" alt="img">
                      <div class="overlay-content overlay-animated">
                        <h3>Design</h3>
                        <p>Design is the creation of a plan or convention for the construction of an object or a system </p>
                      </div><!-- /.overlay-content -->
                    </div><!-- /.overlay-container -->
                  </div><!-- /.thumbnail -->
                  <h5 class="no-margin">Project Iteration</h5>
                  <small>Item Preview</small>
                </div><!-- /.widget -->
              </div><!-- /.col -->
              <div class="col-md-3 isotope-item kiwis">
                <div class="widget">
                  <div class="thumbnail">
                    <div class="overlay-container">
                      <img src="assets/img/img-400x400.jpg" alt="img">
                      <div class="overlay-content overlay-animated">
                        <h3>Design</h3>
                        <p>Design is the creation of a plan or convention for the construction of an object or a system </p>
                      </div><!-- /.overlay-content -->
                    </div><!-- /.overlay-container -->
                  </div><!-- /.thumbnail -->
                  <h5 class="no-margin">Project Iteration</h5>
                  <small>Item Preview</small>
                </div><!-- /.widget -->
              </div><!-- /.col -->
              <div class="col-md-3 isotope-item oranges">
                <div class="widget">
                  <div class="thumbnail">
                    <div class="overlay-container">
                      <img src="assets/img/img-400x400.jpg" alt="img">
                      <div class="overlay-content overlay-animated">
                        <h3>Design</h3>
                        <p>Design is the creation of a plan or convention for the construction of an object or a system </p>
                      </div><!-- /.overlay-content -->
                    </div><!-- /.overlay-container -->
                  </div><!-- /.thumbnail -->
                  <h5 class="no-margin">Project Iteration</h5>
                  <small>Item Preview</small>
                </div><!-- /.widget -->
              </div><!-- /.col -->
              <div class="col-md-3 isotope-item oranges">
                <div class="widget">
                  <div class="thumbnail">
                    <div class="overlay-container">
                      <img src="assets/img/img-400x400.jpg" alt="img">
                      <div class="overlay-content overlay-animated">
                        <h3>Design</h3>
                        <p>Design is the creation of a plan or convention for the construction of an object or a system </p>
                      </div><!-- /.overlay-content -->
                    </div><!-- /.overlay-container -->
                  </div><!-- /.thumbnail -->
                  <h5 class="no-margin">Project Iteration</h5>
                  <small>Item Preview</small>
                </div><!-- /.widget -->
              </div><!-- /.col -->
              <div class="col-md-3 isotope-item apples">
                <div class="widget">
                  <div class="thumbnail">
                    <div class="overlay-container">
                      <img src="assets/img/img-400x400.jpg" alt="img">
                      <div class="overlay-content overlay-animated">
                        <h3>Design</h3>
                        <p>Design is the creation of a plan or convention for the construction of an object or a system </p>
                      </div><!-- /.overlay-content -->
                    </div><!-- /.overlay-container -->
                  </div><!-- /.thumbnail -->
                  <h5 class="no-margin">Project Iteration</h5>
                  <small>Item Preview</small>
                </div><!-- /.widget -->
              </div><!-- /.col -->
              <div class="col-md-3 isotope-item kiwis">
                <div class="widget">
                  <div class="thumbnail">
                    <div class="overlay-container">
                      <img src="assets/img/img-400x400.jpg" alt="img">
                      <div class="overlay-content overlay-animated">
                        <h3>Design</h3>
                        <p>Design is the creation of a plan or convention for the construction of an object or a system </p>
                      </div><!-- /.overlay-content -->
                    </div><!-- /.overlay-container -->
                  </div><!-- /.thumbnail -->
                  <h5 class="no-margin">Project Iteration</h5>
                  <small>Item Preview</small>
                </div><!-- /.widget -->
              </div><!-- /.col -->
              <div class="col-md-3 isotope-item oranges">
                <div class="widget">
                  <div class="thumbnail">
                    <div class="overlay-container">
                      <img src="assets/img/img-400x400.jpg" alt="img">
                      <div class="overlay-content overlay-animated">
                        <h3>Design</h3>
                        <p>Design is the creation of a plan or convention for the construction of an object or a system </p>
                      </div><!-- /.overlay-content -->
                    </div><!-- /.overlay-container -->
                  </div><!-- /.thumbnail -->
                  <h5 class="no-margin">Project Iteration</h5>
                  <small>Item Preview</small>
                </div><!-- /.widget -->
              </div><!-- /.col -->
              <div class="col-md-3 isotope-item oranges">
                <div class="widget">
                  <div class="thumbnail">
                    <div class="overlay-container">
                      <img src="assets/img/img-400x400.jpg" alt="img">
                      <div class="overlay-content overlay-animated">
                        <h3>Design</h3>
                        <p>Design is the creation of a plan or convention for the construction of an object or a system </p>
                      </div><!-- /.overlay-content -->
                    </div><!-- /.overlay-container -->
                  </div><!-- /.thumbnail -->
                  <h5 class="no-margin">Project Iteration</h5>
                  <small>Item Preview</small>
                </div><!-- /.widget -->
              </div><!-- /.col -->
            </div><!-- /.isotope-container -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>


    </main><!-- /.page-content -->

  </div><!-- /.dashboard-wrapper -->

  <!-- last but not least the javascript -->
  <script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.html"><\/script>')</script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/prism/prism.js"></script>
  <script src="assets/bootstrap-select/bootstrap-select.min.js"></script>
  <script src="assets/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/jquery.countdown/jquery.countdown.min.js"></script>
  <script src="assets/summernote/summernote.min.js"></script>
  <script src="assets/tags-input/bootstrap-tagsinput.min.js"></script>
  <script src="assets/autosize/jquery.autosize.min.js"></script>
  <script src="assets/validator/validator.min.js"></script>
  <script src="assets/chartjs/Chart.min.js"></script>
  <script src="assets/jquery-labelauty/jquery-labelauty.js"></script>
  <script src="assets/js/holder.js"></script>
  <script src="assets/js/demo.js"></script>
</body>

<!-- Mirrored from graphikaria.com/demo/theorem/v2.0.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Aug 2016 15:32:38 GMT -->
</html>