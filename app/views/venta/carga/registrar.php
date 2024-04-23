<section class="section">
    <div class="section-header">
        <h1>Registro de carga</h1>
        <div class="section-header-breadcrumb">
            <a href="<?= $data['ruta_carga'] ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-chevron-left"></i> Regresar</a>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <?php if ($data['id_compra'] == '0') : ?>
                    <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            <div class="alert-title">¡Atencion!</div>
                            Debes asignar una compra a esta carga
                        </div>
                    </div>
                <?php elseif ($data['estado_carga'] == 'borrador') : ?>
                    <div class="alert alert-light alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            <div class="alert-title">¡Atencion!</div>
                            Esta carga esta en borradores! a lo que termines presiona en guardar carga
                        </div>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-body">
                        <p class="text-center">Asignacion de compra</p>

                        <div class="row ">
                            <div class="col-12 col-md-12 col-lg-12 mb-2 ">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="codigo_compra" disabled placeholder="Codigo compra">
                                        <input type="text" class="form-control" id="fecha_compra" disabled placeholder="Fecha compra">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_seleccionar_compra">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <p class="text-center">Registro de rubro</p>
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-4 mb-2">
                                <div class="input-group">
                                    <input type="text" placeholder="Rubro" id="nombre_rubro" disabled class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_seleccionar_rubro">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 col-lg-8 mb-2">
                                <div class="input-group">
                                    <div class="input-group">
                                        <input type="text" id="cantidad_rubro" placeholder="Cantidad" class="form-control">
                                        <select class="form-control" id="medida_rubro">
                                            <option selected value="none" disabled>Medida</option>
                                            <option value="cestas">Cestas</option>
                                            <option value="sacos">Sacos</option>
                                            <option value="kilos">Kilos</option>
                                            <option value="unidades">Unidades</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 text-center">
                                <input type="button" class="btn btn-success" disabled id="btn_agregar_carga" value="Agregar rubro"> |
                                <input type="button" class="btn btn-danger" disabled id="btn_limpiar_registro_rubro" value="Limpiar rubro">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                        

                            <div class="col-12 col-md-12 mt-2">
                                <p class="text-center">
                                    <b>Vehiculos carga</b>
                                </p>
                                <p class="text-center">
                                    <input type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_seleccionar_vehiculo" value="Buscar vehiculo">
                                </p>
                                <ul id="vehiculos_registrados_carga" class="list-unstyled user-details list-unstyled-border list-unstyled-noborder"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="form-group text-center">
                                    <label>Fecha Carga</label>
                                    <div class="input-group mb-3">
                                        <input type="date" id="fecha_carga" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" id="btn_guardar_carga" type="button">Pasar a inventario</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">

                                <div class="row justify-content-center">
                                    <div class="col-sm-3 col-6 text-center justify-content-center" id="total_sacos_lbl" style="display: none;">
                                        <div class="text-center">Sacos</div>
                                        <h6 id="total_sacos"></h6>

                                    </div>
                                    <div class="col-sm-3 col-6 text-center justify-content-center" id="total_cestas_lbl" style="display: none;">
                                        <div class="text-center">Cestas</div>
                                        <h6 id="total_cestas"></h6>
                                    </div>
                                    <div class="col-sm-3 col-6 text-center justify-content-center" id="total_kilos_lbl" style="display: none;">
                                        <div class="text-center">Kilos</div>
                                        <h6 id="total_kilos"></h6>
                                    </div>
                                    <div class="col-sm-3 col-6 text-center justify-content-center" id="total_unidades_lbl" style="display: none;">
                                        <div class="text-center">Unidades</div>
                                        <h6 id="total_unidades"></h6>
                                    </div>
                                </div>

                                <table class="table text-center table-striped table-sm">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th>Rubro</th>
                                            <th>Cantidad</th>
                                            <th>Opc</th>
                                        </tr>
                                    </thead>
                                    <tbody id="rubros_registrados">

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_seleccionar_vehiculo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar vehiculo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group text-center">
                            <label>Puedes buscar por placa, modelo o conductor</label>
                            <input type="text" placeholder="Buscar" id="busqueda_vehiculos" autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <ul id="resultados_vehiculos" class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">

                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_seleccionar_rubro">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar rubro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group text-center">
                            <label>Busqueda de rubro</label>
                            <input type="text" placeholder="Buscar" autocomplete="off" id="buscar_rubro" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table text-center table-striped table-sm">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>Rubro</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="resultados_busqueda_rubro">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_editar_producto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar rubro | <span id="nombre_rubro_editar"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <b class="text-center">Datos actuales</b>
                        <table class="table text-center table-striped table-sm">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>Cantidad</th>
                                    <th>Restante</th>
                                    <th>Medida</th>
                                </tr>
                            </thead>
                            <tbody id="rubros_registrados">
                                <tr>
                                    <td id="cantidad_editar_anterior"></td>
                                    <td id="inventario_rubro_editar"></td>
                                    <td id="medida_editar_anterior"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="alertas_editar">
                    <div class="alert alert-primary text-center" style="display: none;" id="alerta_medida"></div>
                    <div class="alert alert-success text-center" style="display: none;" id="alerta_sumar"></div>
                    <div class="alert alert-danger text-center" style="display: none;" id="alerta_restar"></div>
                    <div class="alert alert-dark alert-has-icon" style="display: none;" id="alerta_detalle">
                        <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
                        <div class="alert-body">
                            <div class="alert-title">¡Atencion!</div>
                            <span id="contenido_detalle_alerta"></span>
                        </div>
                    </div>
                </div>



                <p style="display: none;" id="detalles_editar" class="text-center"></p>
                <div style="display: none;" class="alert alert-danger text-center" id="alerta_editar">
                    <span id="contenido_alerta"></span>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group text-center">
                            <label>Cantidad nueva</label>
                            <input type="text" id="cantidad_editar" autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group text-center">
                            <label>Medida nueva</label>
                            <select class="form-control" id="medida_editar">
                                <option value="cestas">Cestas</option>
                                <option value="sacos">Sacos</option>
                                <option value="kilos">Kilos</option>
                                <option value="unidades">Unidades</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" style="display: none;" id="btn_guardar_cambios">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_eliminar">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Eliminar rubro?</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body"> Estas apunto de eliminar un rubro registrado en la carga.<br>¿Deseas continuar?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-shadow" id="btn_eliminar_rubro">Eliminar!</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_seleccionar_compra">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <p>Compras disponibles</p>
                        <table class="table text-center table-striped table-sm">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>Codigo</th>
                                    <th>Fecha</th>
                                    <th><i class="fas fa-align-justify"></i></th>
                                </tr>
                            </thead>
                            <tbody id="resultados_compras_disponibles">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<input type="hidden" value="<?= $data['carga'] ?>" id="id_carga">
<input type="hidden" id="ruta_buscar_vehiculos" value="<?= $data['ruta_buscar_vehiculo'] ?>">
<input type="hidden" id="ruta_obtener_vehiculos_carga" value="<?= $data['ruta_obtener_vehiculos_carga'] ?>">
<input type="hidden" id="ruta_registrar_vehiculo_carga" value="<?= $data['ruta_registrar_vehiculo_carga']; ?>">
<input type="hidden" id="ruta_eliminar_vehiculo_carga" value="<?= $data['ruta_eliminar_vehiculo_carga']; ?>">
<input type="hidden" id="ruta_obtener_rubros_carga" value="<?= $data['ruta_obtener_rubros_carga']; ?>">
<input type="hidden" id="ruta_obtener_fecha_carga" value="<?= $data['ruta_obtener_fecha_carga']; ?>">
<input type="hidden" id="ruta_buscar_rubro" value="<?= $data['ruta_buscar_rubro'] ?>">
<input type="hidden" id="ruta_registrar_rubro_carga" value="<?= $data['ruta_registrar_rubro_carga']; ?>">
<input type="hidden" id="ruta_obtener_rubro_carga_detalle" value="<?= $data['ruta_obtener_detalle_rubro_carga']; ?>">
<input type="hidden" id="ruta_guardar_editar" value="<?= $data['ruta_guardar_editar'] ?>">
<input type="hidden" id="ruta_eliminar_rubro" value="<?= $data['ruta_eliminar_rubro'] ?>">
<input type="hidden" id="ruta_guardar_carga" value="<?= $data['ruta_guardar_carga']; ?>">
<input type="hidden" id="ruta_obtener_compras_pendientes" value="<?= $data['ruta_obtener_compras_pendientes']; ?>">
<input type="hidden" id="ruta_asignar_compra_carga" value="<?= $data['ruta_asignar_compra_carga']; ?>">


<input type="hidden" id="codigo_rubro">
<input type="hidden" id="id_rubro_editar">
<input type="hidden" id="id_rubro_eliminar">
<input type="hidden" id="id_compra_seleccionada">