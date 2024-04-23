<section class="section">
    <div class="section-header">
        <h1>Clientes</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="listado_clientes-tab" data-toggle="tab" href="#listado_clientes" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="fas fa-align-center"></i> Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="registro_clientes-tab" data-toggle="tab" href="#registro_clientes" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class="fas fa-plus-circle"></i> Registro</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent5">
                            <div class="tab-pane fade active show" id="listado_clientes" role="tabpanel" aria-labelledby="listado_clientes-tab">
                                <div class="form-group">
                                    <label>Buscar cliente</label>
                                    <input type="text" placeholder="Nombre, cedula" autocomplete="off" id="buscar_cliente" class="form-control">
                                </div>
                                <table class="table text-center table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Opc</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabla_datos_cliente">

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="registro_clientes" role="tabpanel" aria-labelledby="registro_clientes-tab">
                                <p class="text-center">Registro de cliente</p>

                                <div class="row">
                                    <div class="col-12 col-md-7 col-lg-7">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select class="custom-select" id="nacionalidad_cliente">
                                                    <option value="V">Venezolano</option>
                                                    <option value="E">Extranjero</option>
                                                    <option value="J">Juridico</option>
                                                </select>
                                                <input type="text" autocomplete="off" id="cedula_cliente" placeholder="Cedula" class="form-control">
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" id="btn_validar_cedula" type="button"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-5 col-lg-5">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" id="nombre_cliente" disabled placeholder="Nombre" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12-col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" id="telefono_cliente" disabled placeholder="Telefono (Opcional)" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 text-center">
                                        <input type="button" class="btn btn-success" id="btn_registro_cliente" disabled value="Registrar"> |
                                        <input type="button" class="btn btn-danger" id="btn_limpiar_registro_cliente" disabled value="Limpiar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="alert alert-danger alert-has-icon" id="alerta_cambios_aceite" style="display: none;">
                    <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Atencion</div>
                        El vehiculo ha realizado <strong id="viajes"></strong> viajes y el limite fijado es de <strong id="limite_viajes"></strong>. Debes realizar el cambio de aceite!.
                    </div>
                </div>
                <div class="alert alert-danger alert-has-icon" id="alerta_vehiculo_deshabilitado" style="display: none;">
                    <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Alerta!</div>
                        Este vehiculo se encuentra deshabilitado
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Datos cliente</h4>
                    </div>
                    <div class="card-body">

                        <div id="alerta_seleccion_cliente">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <i class="fas fa-question-circle text-info" style="font-size: 300%;"></i>
                                    <p>No se ha seleccionado ningun cliente!</p>
                                </div>
                            </div>
                        </div>

                        <div id="datos_clientes" style="display: none;">
                            <div class="row">
                                <div class="col-12 col-md-7 col-lg-7">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <select class="custom-select" id="nacionalidad_editar">
                                                <option value="V">Venezolano</option>
                                                <option value="E">Extranjero</option>
                                                <option value="J">Juridico</option>
                                            </select>
                                            <input type="text" autocomplete="off" id="cedula_editar" placeholder="Cedula" class="form-control">
                                            
                                            <div class="input-group-append">
                                                <button class="btn btn-success" id="btn_editar_cedula" type="button"><i class="fas fa-edit"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-5 col-lg-5">
                                    <div class="input-group">
                                        <input type="text" autocomplete="off" id="nombre_editar" placeholder="Nombre" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" id="btn_editar_nombre" type="button"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12-col-md-12 col-lg-12">
                                    <div class="input-group">
                                        <input type="text" autocomplete="off"  id="telefono_editar" placeholder="Telefono" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" id="btn_editar_telefono" type="button"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="statistic-details">
                                <div class="statistic-details-item">
                                    <div class="detail-value" id="facturas_pendientes">N/D</div>
                                    <div class="detail-name">Facturas pendientes</div>
                                    <a style="cursor: pointer" class="text-white badge badge-primary"><i class="fas fa-bars"></i> Detalles</a>
                                </div>
                                <div class="statistic-details-item">
                                    <div class="detail-value" id="facturas_borrador">N/D</div>
                                    <div class="detail-name">Facturas en borrador</div>
                                    <a style="cursor: pointer" class="text-white badge badge-primary"><i class="fas fa-bars"></i> Detalles</a>
                                </div>
                                <div class="statistic-details-item">
                                    <div class="detail-value" id="facturas_paga">N/D</div>
                                    <div class="detail-name">Facturas pagas</div>
                                    <a style="cursor: pointer" class="text-white badge badge-primary"><i class="fas fa-bars"></i> Detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_cedula_duplicada">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cedula existente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Hay un pequeño conflicto! <i class="far fa-surprise" style="font-size: 30px;"></i></h4>
                <p>La cedula: "<b class="text-danger" id="cedula_alerta"></b>" ya se encuentra registrada en el sistema a nombre de 
                "<b class="text-danger" id="nombre_alerta"></b>"</p>

                <p>Si deseas registrar otro cliente con este mismo numero de cedula pulsa Continuar</p>
                

            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="btn_continuar_registro_cliente">Continuar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<input type="hidden" id="ruta_validar_cedula_cliente" value="<?= $data['validar_cedula'] ?>">
<input type="hidden" id="ruta_registrar_cliente" value="<?= $data['registro_cliente'] ?>">
<input type="hidden" id="ruta_buscar_cliente" value="<?= $data['buscar_cliente'] ?>">
<input type="hidden" id="ruta_detalle_cliente" value="<?= $data['detalle_cliente'] ?>">
<input type="hidden" id="ruta_editar_cliente" value="<?= $data['actualizar_cliente'] ?>">

<input type="hidden" id="id_cliente_editar">



