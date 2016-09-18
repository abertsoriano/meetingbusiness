@extends('layouts.profiles')

@section('content')
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
                        <img class="media-left img-circle" src="    img/user-male-2.jpg" alt="img">
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
</main>
@endsection
