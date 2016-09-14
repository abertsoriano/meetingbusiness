<!DOCTYPE html>
<html lang="en">
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

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="simple-lines/simple-line-icons.css">
  <link rel="stylesheet" href="bootstrap-select/bootstrap-select.min.css">
  <link rel="stylesheet" href="prism/prism.css">
  <link rel="stylesheet" href="summernote/summernote.css">
  <link rel="stylesheet" href="tags-input/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="css/theme.min.css">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/selectivizr-min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>





  <!-- #left part -->
  	 <div class="dashboard-wrapper">
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
          <a href="login.html">
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
        <button type="button" class="btn btn-link pull-left vertical-align" data-toggle="sidebar-secondary"><i class="fa fa-fw fa-times-circle fa-lg text-white"></i></button>
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
                <!-- <img class="brand-logo" alt="Logo" src="img/logo-white.png"> -->
                <span class="brand-name">USUARIO</span>
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
   </section>


@yield('content')

   <!-- Page content -->
    <main class="page-content">
      <section class="section-xs bg-white border-default">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <ol class="breadcrumb no-margin">
                <li class="active">Perfil</li>
                <li><a href="#link">Solicitud</a></li>
                <li><a href="#link">Configuración</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>

      <section class="section-sm">
        <div class="container-fluid">
          <h1 class="headline">Mi perfil</h1>
          <div class="row">
            <div class="col-sm-12 col-md-8">
              <h4>Editar información</h4>
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-avatar">Cargar Imagen</label>
                  <div class="col-sm-9">
                    <img class="img-thumbnail" src="img/user-male-2.jpg" alt="user" width="100" height="100">
                    <input class="form-control" type="file" name="user-avatar">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-website">Primer Nombre</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" id="user-website" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="public-name">Segundo Nombre</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" id="public-name" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-handle">Primer Apellido</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" id="user-handle" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-handle">Segundo Apellido</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" id="user-handle" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-email">Correo</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" id="user-email" placeholder="Correo">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-email-confirm">Confirme correo</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" id="user-email-confirm" placeholder="Correo">
                    <p class="help-block">No usar espacios</p>
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-password">Página Web</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" id="user-password" placeholder="www.">
                    <p class="help-block">No usar espacios</p>
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-password-confirm">Fecha de Nacimiento</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" id="user-password-confirm" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-password-confirm">Sexo</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" id="user-password-confirm" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-password-confirm">Documento de Identificación</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" id="user-password-confirm" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-password-confirm">Dirección</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" id="user-password-confirm" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-password-confirm">Código Postal</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" id="user-password-confirm" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-password-confirm">País</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" id="user-password-confirm" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-password-confirm">Teléfono Móvil</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" id="user-password-confirm" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-password-confirm">Teléfono Fijo</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" id="user-password-confirm" placeholder="...">
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <br class="spacer-md">
                <!-- /   <div class="form-group">
                  <label class="col-sm-3 control-label" for="user-bio">Brief Bio</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="6" id="user-bio" placeholder="Tell us about yourself"></textarea>
                  </div>  
                </div> /.form-group -->
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-inverse">Guardar</button>
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
              </form><!-- /.form-horizontal -->
            </div><!-- /.col -->


                    
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div><strong>Contactos Recomendados</strong></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                  <div class="media media-post">
                    <img class="media-left img-circle" src="img/user-female-1.jpg" alt="img">
                    <div class="media-body">
                      <div class="media-content">
                        <span class="media-heading">L.Sans:</span>
                        Diseñadora Gráfica desea formar su propia agencia de Publicidad...
                        <span class="media-meta"><i class="fa fa-clock-o"></i>Lima - Perú</span>
                      </div><!-- /.media-content -->
                    </div><!-- /.media-body -->
                  </div><!-- /.media-post -->
                  
                  <div class="media media-post">
                    <img class="media-left img-circle" src="img/user-female-2.jpg" alt="img">
                    <div class="media-body">
                      <div class="media-content">
                        <span class="media-heading">C.Rojas:</span>
                        Emprendedor experimentado en ventas desea unirse algún tipo de idea creativa para formar un negocio...
                        <span class="media-meta"><i class="fa fa-clock-o"></i>Chiclayo - Perú</span>
                      </div><!-- /.media-content -->
                    </div><!-- /.media-body -->
                  </div><!-- /.media-post -->
                  <div class="media media-post">
                    <img class="media-left img-circle" src="	img/user-male-2.jpg" alt="img">
                    <div class="media-body">
                      <div class="media-content">
                        <span class="media-heading">P.Quispe:</span>
                        Inversionista desea reunirse con algún futuro Socio para crear una empresa...
                        <span class="media-meta"><i class="fa fa-clock-o"></i>Lima - Perú</span>
                      </div><!-- /.media-content -->
                    </div><!-- /.media-body -->
                  </div><!-- /.media-post -->
                  <div class="media media-post">
                    <img class="media-right img-circle" src="img/user-male-1.jpg" alt="img">
                    <div class="media-body">
                      <div class="media-content">
                        <span class="media-heading">M.Ventura:</span>
                        Analista Contable desea laborar en alguna compañía del rubro financiero...
                        <span class="media-meta"><i class="fa fa-clock-o"></i> Callao - Perú</span>
                      </div><!-- /.media-content -->
                    </div><!-- /.media-body -->
                  </div><!-- /.media-post -->







                </div><!-- /.panel-body -->
                <div class="panel-footer">
                  <p><strong>Buscar por Interés:</strong></p>
                  <p><textarea class="form-control" rows="1" placeholder="Buscar..."></textarea></p>
                </div><!-- /.panel-footer -->
              </div><!-- /.panel -->
            </div><!-- /.col -->




          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>

    </main><!-- /.page-content -->

  </div><!-- /.dashboard-wrapper -->



  <!-- last but not least the javascript -->
  <script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.html"><\/script>')</script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="prism/prism.js"></script>
  <script src="bootstrap-select/bootstrap-select.min.js"></script>
  <script src="isotope/isotope.pkgd.min.js"></script>
  <script src="jquery.countdown/jquery.countdown.min.js"></script>
  <script src="summernote/summernote.min.js"></script>
  <script src="tags-input/bootstrap-tagsinput.min.js"></script>
  <script src="autosize/jquery.autosize.min.js"></script>
  <script src="validator/validator.min.js"></script>
  <script src="chartjs/Chart.min.js"></script>
  <script src="jquery-labelauty/jquery-labelauty.js"></script>
  <script src="js/holder.js"></script>
  <script src="js/demo.js"></script>


  </body>
  </html>