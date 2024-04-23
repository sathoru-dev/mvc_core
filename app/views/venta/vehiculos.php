<section class="section">
    <div class="section-header">
        <h1>Vehiculos</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="listado_vehiculos-tab" data-toggle="tab" href="#listado_vehiculos" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="fas fa-align-center"></i> Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="registro_vehiculo-tab" data-toggle="tab" href="#registro_vehiculo" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class="fas fa-plus-circle"></i> Registro</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent5">
                            <div class="tab-pane fade active show" id="listado_vehiculos" role="tabpanel" aria-labelledby="listado_vehiculos-tab">
                                <ul id="vehiculos_registrados" class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">

                                </ul>

                            </div>
                            <div class="tab-pane fade" id="registro_vehiculo" role="tabpanel" aria-labelledby="registro_vehiculo-tab">
                                <p class="text-center">Registro de vehiculo</p>
                                <div class="row">

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <input type="text" id="placa_registro" placeholder="Placa" style="text-transform:uppercase;" autocomplete="off" maxlength="7" class="form-control">
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" id="btn_validar_placa" type="button"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="modelo_registro" disabled autocomplete="off" placeholder="Modelo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12-col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <input type="text" id="nombre_registro" disabled autocomplete="off" placeholder="Nombre conductor" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 text-center">
                                        <input type="button" class="btn btn-success" disabled id="btn_registro_vehiculo" value="Registrar"> |
                                        <input type="button" class="btn btn-danger" id="btn_limpiar_registro" value="Limpiar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Datos vehiculo</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-danger" id="alerta_desactivado" style="display: none;"><i class="fas fa-exclamation-triangle"></i> Vehiculo deshabilitado <i class="fas fa-exclamation-triangle"></i></p>
                        <div class="row">

                            <div class="form-group col-12 col-md-4 col-lg-4">
                                <label>Placa</label>

                                <div class="input-group ">
                                    <input type="text" class="form-control" id="placa_editar" disabled value="N/S" required="">
                                    <div class="input-group-append">
                                        <button id="btn_editar_placa" class="btn btn-primary" disabled type="button"><i class="fas fa-pen"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-12 col-md-4 col-lg-4">
                                <label>Modelo vehiculo</label>

                                <div class="input-group ">
                                    <input type="text" class="form-control" id="modelo_editar" disabled value="N/S" required="">
                                    <div class="input-group-append">
                                        <button id="btn_editar_modelo" class="btn btn-primary" disabled type="button"><i class="fas fa-pen"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-12 col-md-4 col-lg-4">
                                <label>Conductor</label>

                                <div class="input-group ">
                                    <input type="text" class="form-control" id="conductor_editar" disabled value="N/S" required="">
                                    <div class="input-group-append">
                                        <button id="btn_editar_conductor" class="btn btn-primary" disabled type="button"><i class="fas fa-pen"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-6 col-md-4 col-lg-4">
                                <label>Viajes realizados</label>

                                <div class="input-group ">
                                    <input type="text" class="form-control" id="viajes_realizados" disabled value="N/S" required="">
                                </div>

                            </div>

                            <div class="form-group col-6 col-md-4 col-lg-4">
                                <label>Cambios aceite</label>

                                <div class="input-group ">
                                    <input type="text" class="form-control" id="cambios_aceite_editar" disabled value="N/S" required="">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" disabled type="button" id="btn_cambios_aceite_editar" data-toggle="modal" data-target="#modalCambioAceite" ><i class="fas fa-oil-can"></i></button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="text-center">Viajes recientes</div>
                        <div class="row">
                            <table class="table text-center table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Carga</th>
                                    </tr>
                                </thead>
                                <tbody id="listado_viajes_recientes">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="modalCambioAceite">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambio de aceite</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="fecha_cambio_aceite">Fecha de cambio</label>
                    <input id="fecha_cambio_aceite" type="date" class="form-control" autocomplete="off" required autofocus>
                    <div class="invalid-feedback">
                        Por favor introduce una fecha
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btn_registrar_cambio_aceite" class="btn btn-primary">Registrar Cambio</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_editar_vehiculo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar datos vehiculos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="tab_editar_placa" style="display: none;">
                    <h4 class="text-center">Cambiar placa de vehiculo</h4>
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nuevo placa</label>
                                <input type="text" id="placa_v_editar" placeholder="Placa" style="text-transform:uppercase;" autocomplete="off" maxlength="7" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_editar_modelo" style="display: none;">
                    <h4 class="text-center">Cambiar modelo de vehiculo</h4>
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nuevo modelo</label>
                                <input type="text" id="modelo_v_editar" placeholder="Modelo" autocomplete="off" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_editar_conductor" style="display: none;">
                    <h4 class="text-center">Cambiar conductor de vehiculo</h4>
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nuevo conductor</label>
                                <input type="text" id="conductor_v_editar" placeholder="Conductor" autocomplete="off" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="btn_actualizar_vehiculo">Actualizar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="ruta_validar_placa" value="<?= $data['validar_placa'] ?>">
<input type="hidden" id="registrar_vehiculo" value="<?= $data['registrar_vehiculo'] ?>">
<input type="hidden" id="obtener_vehiculos" value="<?= $data['listado_vehiculo'] ?>">
<input type="hidden" id="detalles_vehiculos" value="<?= $data['detalles_vehiculo'] ?>">
<input type="hidden" id="deshabilitar_vehiculo" value="<?= $data['deshabilitar_vehiculo'] ?>">
<input type="hidden" id="habilitar_vehiculo" value="<?= $data['habilitar_vehiculo'] ?>">
<input type="hidden" id="id_vehiculo_seleccionado" value="<?= $data['habilitar_vehiculo'] ?>">
<input type="hidden" id="ruta_registrar_cambio_aceite" value="<?= $data['cambio_aceite'] ?>">
<input type="hidden" id="ruta_editar_vehiculo" value="<?= $data['editar'] ?>">
<input type="hidden" id="dato_editar_vehiculo">

