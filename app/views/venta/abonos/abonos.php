<section class="section">
    <div class="section-header">
        <h1>Abonos</h1>
    </div>

    <div class="section-body">

        <div id="principal">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ultimos abonos realizados</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_seleccionar_factura">Nuevo abono</a>
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped text-center table-sm">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th>fecha</th>
                                            <th>operacion</th>
                                            <th>nombre</th>
                                            <th>factura</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="abonos_recientes">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <h4 id="total_facturas_pendientes"></h4>
                            <div class="card-description">Facturas pendientes de pago</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list" id="facturas_mas_antiguas">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="abonos" style="display: none;">

            <div class=" row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Valor factura</h4>
                            </div>
                            <div class="card-body">
                                <span id="valor_factura"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total abonado</h4>
                            </div>
                            <div class="card-body">
                                <span id="total_abonado"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Restante</h4>
                            </div>
                            <div class="card-body">
                                <span id="total_restante"></span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Confirmar factura</h4>
                            </div>
                            <div class="card-body">
                                <a href="#" id="marcar_como_pago" class="btn btn-md mt-2 btn-dark">Marcar como pago!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12 col-md-5 col-lg-5">
                    <div class="alert alert-light alert-has-icon" id="alerta_factura_paga" style="display: none;">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                            <div class="alert-title">Atencion!</div>
                            Esta factura ya esta completa, recuerda marcarla como pago!
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Datos factura</h4>
                            <div class="card-header-action">
                                <a href="#" onclick="regresar_a_abonos()" class="btn btn-primary"><i class="fas fa-angle-left"></i> Regresar</a>
                            </div>
                        </div>



                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Nombre</label>
                                    <input type="text" id="nombre_cliente" class="form-control" disabled>

                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Cedula</label>
                                    <input type="text" id="cedula_cliente" class="form-control" disabled>

                                </div>
                                <div class="form-group col-md-12 col-12">
                                    <label>Fecha factura</label>
                                    <input type="text" id="fecha_factura" class="form-control" disabled>
                                </div>

                            </div>
                            <div class="small text-center">Progreso de cancelacion de factura</div>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" id="porcentaje" data-width="0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> </div>
                            </div>
                            <div class="row">
                                <div class="col-12" class="text-center">
                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_registrar_abono">Registrar abono</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table-invoice">
                                <table class="table table-sm table-striped  text-center">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th class="text-white">Metodo</th>
                                            <th class="text-white">Monto</th>
                                            <th class="text-white">Fecha</th>
                                            <th class="text-white"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabla_abonos_factura">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row justify-content-center" style="display: none;">
                <div class="col-12 col-sm-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Registro de abono</h4>

                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-12 col-md-4">
                                    <div class="form-group text-center">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group text-center">
                                        <label>Cedula</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group text-center">
                                        <label>Fecha factura</label>
                                        <input type="text" class="form-control" disabled>
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


<div class="modal fade" tabindex="-1" role="dialog" id="modal_seleccionar_factura">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar factura</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-9">
                        <div class="form-group text-center">
                            <label>Puedes buscar por cedula o nombre</label>
                            <input type="text" placeholder="Buscar" id="busqueda_clientes" autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group text-center">
                            <label>Registros</label>
                            <input type="text" value="<?= REGISTROS ?>" id="limite_registros" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table text-center table-striped table-sm" id="tabla_clientes">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>nombre</th>
                                    <th>facturas pendientes</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody id="resultados_clientes">

                            </tbody>
                        </table>
                        <div id="tabla_facturas" style="display: none;">
                            <button type="button" id="regresar_a_clientes" class="btn btn-success btn-sm mb-1"><i class='fas fa-angle-left'></i> Regresar</button>
                            <table class="table text-center table-striped table-sm">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th>fecha</th>
                                        <th>opc</th>
                                    </tr>
                                </thead>
                                <tbody id="resultados_facturas">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_registrar_abono">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registro de abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center"><i class="fas fa-hand-holding-usd"></i> Metodos de pago</p>
                <ul class="nav nav-tabs justify-content-center" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="transferencia-tab" data-toggle="tab" href="#transferencia" role="tab" aria-controls="transfrenecia" aria-selected="true">Transferencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dolares-tab" data-toggle="tab" href="#dolares" role="tab" aria-controls="home" aria-selected="false">Dolares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="punto-tab" data-toggle="tab" href="#punto" role="tab" aria-controls="profile" aria-selected="false">Punto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pago_movil-tab" data-toggle="tab" href="#pago_movil" role="tab" aria-controls="profile" aria-selected="false">Pago movil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " id="bolivares-tab" data-toggle="tab" href="#bolivares" role="tab" aria-controls="contact" aria-selected="false">Bolivares (efectivo)</a>
                    </li>
                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">
                    <!--Transferencia-->
                    <div class="tab-pane fade active show" id="transferencia" role="tabpanel" aria-labelledby="transferencia-tab">
                        <p class="text-center">
                            Datos de origen de la transferencia
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <div class="form-group text-center">
                                    <label>Banco origen</label>
                                    <input type="text" id="banco_transferencia_origen" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Referencia</label>
                                    <input type="text" id="referencia_transferencia" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group text-center">
                                    <label>Fecha</label>
                                    <input type="date" value="<?= date("Y-m-d") ?>" id="fecha_transferencia" class="form-control">
                                </div>
                            </div>
                        </div>
                        <p class="text-center">
                            Datos de destino de la transferencia
                        </p>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Banco destino</label>
                                    <input type="text" id="banco_transferencia_destino" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group text-center">
                                    <label>Bolivares</label>
                                    <input type="text" id="bolivares_transferencia" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="form-group text-center">
                                    <label>Tasa dolar</label>
                                    <input type="text" id="tasa_transferencia" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group text-center">
                                    <label>Total dolares</label>
                                    <input type="text" disabled id="dolares_transferencia" disabled class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="button" value="Registrar" class="btn btn-success" id="btn_registrar_transferencia"> |
                                <input type="button" value="Limpiar" class="btn btn-danger" id="btn_limpiar_transferencia"> | 
                                <button type="button"class="btn btn-primary" onclick="obtener_valor_dolar_bcv_actual('tasa_transferencia')"><i class="fas fa-sync-alt"></i> Obtener dolar</button>
                            </div>
                        </div>
                    </div>

                    <!--Dolares-->
                    <div class="tab-pane fade" id="dolares" role="tabpanel" aria-labelledby="dolares-tab">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Dolares</label>
                                    <input type="text" id="dolares_dolares" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Fecha</label>
                                    <input type="date" value="<?= date("Y-m-d") ?>" id="fecha_dolares" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Referencia</label>
                                    <input type="text" id="referencia_dolares" autocomplete="off" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="button" value="Registrar" class="btn btn-success" id="btn_registrar_dolares"> |
                                <input type="button" value="Limpiar" class="btn btn-danger" id="btn_limpiar_dolares">
                            </div>
                        </div>
                    </div>

                    <!--Punto-->
                    <div class="tab-pane fade" id="punto" role="tabpanel" aria-labelledby="punto-tab">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Bolivares</label>
                                    <input type="text" id="bolivares_punto" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Tasa dolar</label>
                                    <input type="text" id="tasa_punto" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Total dolares</label>
                                    <input type="text" id="dolares_punto" disabled class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group text-center">
                                    <label>Fecha</label>
                                    <input type="date" value="<?= date("Y-m-d") ?>" id="fecha_punto" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Referencia</label>
                                    <input type="text" id="referencia_punto" autocomplete="off" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="button" value="Registrar" class="btn btn-success" id="btn_registrar_punto"> |
                                <input type="button" value="Limpiar" class="btn btn-danger" id="btn_limpiar_punto"> |
                                <button type="button"class="btn btn-primary" onclick="obtener_valor_dolar_bcv_actual('tasa_punto')"><i class="fas fa-sync-alt"></i> Obtener dolar</button>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pago_movil" role="tabpanel" aria-labelledby="pago_movil-tab">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Banco origen</label>
                                    <input type="text" id="banco_pago_movil_origen" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Bolivares</label>
                                    <input type="text" id="bolivares_pagomovil" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Tasa dolar</label>
                                    <input type="text" id="tasa_pagomovil" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Total dolares</label>
                                    <input type="text" id="dolares_pagomovil" disabled class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Banco destino</label>
                                    <input type="text" id="banco_pago_movil_destino" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group text-center">
                                    <label>Fecha</label>
                                    <input type="date" value="<?= date("Y-m-d") ?>" id="fecha_pagomovil" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Referencia</label>
                                    <input type="text" id="referencia_pagomovil" autocomplete="off" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="button" value="Registrar" class="btn btn-success" id="btn_registrar_pago_movil"> |
                                <input type="button" value="Limpiar" class="btn btn-danger" id="btn_limpiar_pago_movil"> |
                                <button type="button"class="btn btn-primary" onclick="obtener_valor_dolar_bcv_actual('tasa_pagomovil')"><i class="fas fa-sync-alt"></i> Obtener dolar</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bolivares" role="tabpanel" aria-labelledby="bolivares-tab">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Bolivares</label>
                                    <input type="text" id="bolivares_bolivares" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Tasa dolar</label>
                                    <input type="text" id="tasa_bolivares" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Total dolares</label>
                                    <input type="text" id="dolares_bolivares" disabled class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group text-center">
                                    <label>Fecha</label>
                                    <input type="date" value="<?= date("Y-m-d") ?>" id="fecha_bolivares" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group text-center">
                                    <label>Referencia</label>
                                    <input type="text" id="referencia_bolivares" autocomplete="off" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input type="button" value="Registrar" class="btn btn-success" id="btn_registrar_bolivares"> |
                                <input type="button" value="Limpiar" class="btn btn-danger" id="btn_limpiar_bolivares"> |
                                <button type="button"class="btn btn-primary" onclick="obtener_valor_dolar_bcv_actual('tasa_bolivares')"><i class="fas fa-sync-alt"></i> Obtener dolar</button>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_editar_abono">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class=" row">
                    <div class="col-12 col-md-6">
                        <div class="form-group text-center">
                            <label>Referencia</label>
                            <input type="text" id="referencia_editar" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group text-center">
                            <label>Fecha</label>
                            <input type="date" value="<?= date("Y-m-d") ?>" id="fecha_editar" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="form-group text-center">
                            <label>Metodo</label>
                            <input type="text" id="metodo_editar" disabled class="form-control">
                            <small>Si deseas cambiar el metodo de pago no es posible, mejor elimina el movimiento y vuelve a registralo</small>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group text-center">
                            <label>Bolivares</label>
                            <input type="text" id="bolivares_editar" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group text-center">
                            <label>Tasa dolar</label>
                            <input type="text" id="tasa_editar" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group text-center">
                            <label>Total dolares</label>
                            <input type="text" id="dolares_editar" class="form-control">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="guardar_cambios_editar">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_eliminar_abono">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar abono?</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body" id="contenido_alerta_eliminar">¿Estas segur@ de eliminar este abono?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-shadow" id="btn_eliminar_abono">Eliminar!</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="ruta_estadisticas_abono" value="<?= $ruta_estadisticas_abono ?>">
<input type="hidden" id="ruta_buscar_clientes_facturas" value="<?= $ruta_buscar_clientes_facturas ?>">
<input type="hidden" id="ruta_obtener_facturas" value="<?= $ruta_obtener_facturas ?>">
<input type="hidden" id="ruta_obtener_datos_facturas" value="<?= $ruta_obtener_datos_facturas ?>">
<input type="hidden" id="ruta_estadisticas_factura_abono" value="<?= $ruta_estadisticas_factura_abono ?>">
<input type="hidden" id="ruta_registrar_abono" value="<?= $ruta_registrar_abono ?>">
<input type="hidden" id="ruta_eliminar_abono" value="<?= $ruta_eliminar_abono ?>">
<input type="hidden" id="ruta_editar_abono" value="<?= $ruta_editar_abono ?>">
<input type="hidden" id="ruta_editar_guardar_abono" value="<?= $ruta_editar_guardar_abono ?>">
<input type="hidden" id="ruta_confirmar_factura" value="<?= $ruta_confirmar_factura ?>">

<input type="hidden" id="id_factura">
<input type="hidden" id="id_cliente">
<input type="hidden" id="id_editar">
<input type="hidden" id="id_abono_eliminar">