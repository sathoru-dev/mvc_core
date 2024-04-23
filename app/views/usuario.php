<section class="section">
    <div class="section-header">
        <h1>Bienvenid@ <?= $this->obtener_sesion('nombre') ?> al panel usuarios</h1>
    </div>
    <div class="section-body">

        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-8">
                <div class="card">
                    <div class="card-body">

                        <ul class="nav nav-tabs justify-content-center" id="tab_usuarios" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="listado_usuarios-tab" data-toggle="tab" href="#listado_usuarios" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="fas fa-align-center"></i> Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="registro_usuarios-tab" data-toggle="tab" href="#registro_usuarios" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class="fas fa-plus-circle"></i> Registro</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="contenido_tab_usuarios">
                            <div class="tab-pane fade active show" id="listado_usuarios" role="tabpanel" aria-labelledby="listado_usuarios-tab">
                                <div class="form-group text-center">
                                    <label>Buscar Usuario</label>
                                    <input type="text" placeholder="Nombre, nombre de usuario" autocomplete="off" id="buscar_usuario" class="form-control">
                                </div>
                                <ul id="resultados_busqueda_usuario" class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">

                                </ul>
                            </div>
                            <div class="tab-pane fade" id="registro_usuarios" role="tabpanel" aria-labelledby="registro_usuarios-tab">
                                <h6 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> Registro de usuario <i class="fas fa-exclamation-triangle"></i></h6>

                                <div class="row">
                                    <div class="col-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label>Tipo usuario</label>
                                            <select class="form-control" id="r_tipo_usuario">
                                                <option value="Comun" selected>Comun</option>
                                                <option value="Admin">Administrador</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Nombre ej. Juan...</label>
                                            <input type="text" autocomplete="off" id="r_nombre" placeholder="Nombre" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-5">
                                        <div class="form-group">
                                            <label>Nombre de usuario (Iniciar sesion)</label>
                                            <input type="text" autocomplete="off" id="r_nombre_usuario" placeholder="Nombre" class="form-control">
                                        </div>
                                    </div>
                                    <form class="col-12 col-md-12 col-lg-12" action="#">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="form-group text-center">
                                                    <label>Contraseña</label>
                                                    <input type="password" autocomplete="off" id="r_clave_usuario" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="form-group text-center">
                                                    <label>Repetir contraseña</label>
                                                    <input type="password" autocomplete="off" id="r_repetir_clave_usuario" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="col-12 col-md-12 text-center">
                                        <input type="button" class="btn btn-success" id="btn_registro_usuario" value="Registrar"> |
                                        <input type="button" class="btn btn-danger" id="btn_limpiar_registro_usuario" value="Limpiar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>


<div class="modal fade" tabindex="-1" role="dialog" id="modal_verificar_identidad">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alerta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center text-danger">
                    <i class="fas fa-exclamation-triangle"></i> Primero nesesitamos verificar quien eres tu! <i class="fas fa-exclamation-triangle"></i>
                </p>
                <small class="text-center">Por favor introduce tu contraseña</small>

                <div class=" row">
                    <div class="form-group col-md-12 col-12">
                        <label>Contraseña</label>
                        <form action="#">
                            <input type="password" autocomplete="off" id="r_v_clave" class="form-control" required="">
                            <div class="invalid-feedback"> Por favor introduce tu contraseña </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="btn_validar_identidad">Validar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_cambiar_clave">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambiar contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-center"><i style="font-size: 25px;" class="fas fa-user-alt"></i> <span id="nombre_cambio_clave"></span></h5>

                <div class=" row">
                    <div class="form-group col-md-12 col-12">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group text-center">
                                        <label>Nueva contraseña</label>
                                        <input type="password" autocomplete="off" id="cambio_clave" class="form-control" required="">
                                        <div class="invalid-feedback"> Por favor introduce tu contraseña </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group text-center">
                                        <label>Confirmar nueva contraseña</label>
                                        <input type="password" autocomplete="off" id="repetir_cambio_clave" class="form-control" required="">
                                        <div class="invalid-feedback"> Por favor introduce tu contraseña </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="text-center text-danger">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        Por seguridad introduce tu contraseña
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </p>
                                    <div class="form-group text-center">
                                        <label>Contraseña actual</label>
                                        <input type="password" autocomplete="off" id="validar_cambio_clave" class="form-control" required="">
                                        <div class="invalid-feedback"> Por favor introduce tu contraseña </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="btn_cambiar_clave">Cambiar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_cambiar_nombres">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambiar nombres</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-center">Actualizar nombres</h5>
                <div class="text-center pb-1">
                    <small>Puedes cambiar el nombre de usuario (Iniciar Sesion) y el
                        nombre
                    </small>
                </div>

                <div class=" row">
                    <div class="form-group col-md-12 col-12">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group text-center">
                                        <label>Nombre</label>
                                        <input type="text" autocomplete="off" id="cambio_nombre" class="form-control" required="">
                                        <div class="invalid-feedback"> Por favor escribe un nombre </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group text-center">
                                        <label>Nombre usuario (Iniciar sesion)</label>
                                        <input type="text" autocomplete="off" id="cambio_nombre_usuario" class="form-control" required="">
                                        <div class="invalid-feedback"> Por favor introduce un nombre de usuario </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="text-center text-danger">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        Por seguridad introduce tu contraseña
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </p>
                                    <div class="form-group text-center">
                                        <label>Contraseña actual</label>
                                        <input type="password" autocomplete="off" id="validar_cambio_nombre" class="form-control" required="">
                                        <div class="invalid-feedback"> Por favor introduce tu contraseña </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="btn_cambiar_nombre">Cambiar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_eliminar_usuario">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center text-danger">
                    <i class="fas fa-exclamation-triangle"></i> Primero nesesitamos verificar quien eres tu! <i class="fas fa-exclamation-triangle"></i>
                </p>
                <p class="text-center">
                    <small class="text-center">Por favor introduce tu contraseña</small>
                </p>

                <div class=" row">
                    <div class="form-group col-md-12 col-12">
                        <label>Contraseña</label>
                        <form action="#">
                            <input type="password" autocomplete="off" id="r_e_clave" class="form-control" required="">
                            <div class="invalid-feedback"> Por favor introduce tu contraseña </div>
                        </form>
                    </div>
                </div>
                <p class="text-center text-danger">
                    ¿Realmente quieres eliminar el usuario: <b><span id="nombre_usuario_eliminar"></span></b> del sistema?
                </p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="btn_validar_eliminar_usuario">Validar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="ruta_busqueda_usuarios" value="<?= $data['ruta_busqueda_usuarios'] ?>">
<input type="hidden" id="ruta_registrar_usuario" value="<?= $data['ruta_registrar_usuarios'] ?>">
<input type="hidden" id="ruta_cambio_clave" value="<?= $data['ruta_cambio_clave'] ?>">
<input type="hidden" id="ruta_cambio_nombre" value="<?= $data['ruta_cambio_nombre'] ?>">
<input type="hidden" id="id_usuario" value="<?= $data['id_usuario'] ?>">
<input type="hidden" id="ruta_deshabilitar_usuario" value="<?= $data['ruta_deshabilitar_usuario'] ?>">
<input type="hidden" id="ruta_habilitar_usuario" value="<?= $data['ruta_habilitar_usuario'] ?>">
<input type="hidden" id="ruta_eliminar_usuario" value="<?= $data['ruta_eliminar_usuario'] ?>">
<input type="hidden" id="id_usuario_cambiar_clave">
<input type="hidden" id="id_usuario_cambiar_nombres">
<input type="hidden" id="id_usuario_eliminar">