<section class="section">

    <div class="section-body">
        <div class="row" id="area_compra">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-list-ul"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Compras totales</h4>
                                </div>
                                <div class="card-body">
                                    <span id="tlt_compra"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Compras Pendientes</h4>
                                </div>
                                <div class="card-body">
                                    <span id="pend_compra"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Compras Completadas</h4>
                                </div>
                                <div class="card-body">
                                    <span id="cmplt_compra"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-eraser"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Compras en borrador</h4>
                                </div>
                                <div class="card-body">
                                    <span id="brrd_compra"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">

                    <div class="card-header">
                        <h4>Busqueda de compras <i class="fas fa-search"></i></h4>
                    </div>

                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-6 col-md-4">
                                <label for="fecha_desde">Desde</label>
                                <input type="date" id="fecha_desde" value="<?= date("Y-m-d", strtotime(date("Y-m-d") . "-90 days")) ?>" class="form-control">
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <label for="fecha_hasta">Hasta</label>
                                <input type="date" value="<?= date("Y-m-d") ?>" id="fecha_hasta" class="form-control">
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <label for="tipo_busqueda_compras">Tipo de compra</label>

                                <select class="custom-select" id="tipo_busqueda_compras">
                                    <option selected="ture" value="todas">Todas</option>
                                    <option value="borrador">Borrador</option>
                                    <option value="pendiente">Pendientes</option>
                                    <option value="completada">Completadas</option>
                                </select>
                            </div>
                        </div>

                        <input type="button" class="btn btn-success btn-block" id="btn_mdl_compra" value="Registrar nueva compra">

                        <table class="table table-striped table-sm mt-3">
                            <thead>
                                <tr class="text-center bg-primary text-white">
                                    <th>Rango</th>
                                    <th>Estado</th>
                                    <th><i class="fas fa-bars"></i></th>
                                </tr>
                            </thead>
                            <tbody id="resultados_compra" class="text-center"> </tbody>
                        </table>
                        <nav aria-label="...">
                            <ul class="pagination" id="paginacion_tabla">
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col col-12 col-sm-6 text-center mb-2" id="dv_editar_fecha_compra" style="cursor: pointer;">
                                <div> <strong class="text-bold">Fecha inicio</strong> </div>
                                <span id="inp_registro_compra_fecha_inicio">No seleccionado</span>
                            </div>
                            <div class="col col-12 col-sm-6 text-center mb-2">
                                <div> <strong class="text-bold">Fecha Culminada</strong> </div>
                                <span id="inp_registro_compra_fecha_final">No seleccionado</span>
                            </div>

                            <div class="col col-12 col-sm-4 text-center mb-2">
                                <div> <strong class="text-bold">Codigo compra</strong> </div>
                                <span id="inp_registro_compra_codigo">No seleccionado</span>
                            </div>
                            <div class="col col-6 col-sm-4 text-center mb-2">
                                <div> <strong class="text-bold">Clientes registrados</strong> </div>
                                <span id="inp_registro_compra_total_clientes">No seleccionado</span>
                            </div>
                            <div class="col col-12 col-sm-4 text-center mb-2">
                                <div> <strong class="text-bold">Estado de compra</strong> </div>
                                <span id="inp_registro_compra_estado" style="font-weight: bold;">No seleccionado</span>
                            </div>

                            <div class="col col-6 col-sm-4 text-center mb-2">
                                <div> <strong class="text-bold">Total valor compra</strong> </div>
                                <span id="inp_registro_compra_valor">No seleccionado</span>
                            </div>
                            <div class="col col-6 col-sm-4 text-center mb-2">
                                <div> <strong class="text-bold">Total abonado</strong> </div>
                                <span id="inp_registro_compra_valor_abonado">No seleccionado</span>
                            </div>
                            <div class="col col-6 col-sm-4 text-center mb-2">
                                <div> <strong class="text-bold">Restante</strong> </div>
                                <span id="inp_registro_compra_valor_restante">No seleccionado</span>
                            </div>

                            <div class="col-12" id="alerta_confirmar_compra" style="display: none;">
                                <div class="alert alert-light alert-has-icon">
                                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                    <div class="alert-body">
                                        <div class="alert-title">Muy bien</div>
                                        Esta compra no tiene clientes pendientes por pago. Ya se puede confirmar
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 pb-2" id="contenedor_btn_registrar_cliente">
                                <input type="button" class="btn btn-success btn-block" disabled id="btn_seleccionar_cliente_compra" value="Registrar nuevo cliente">
                            </div>
                            <div class="col-12 col-md-6 pb-2" id="contenedor_pasar_a_pendiente">
                                <input type="button" class="btn btn-primary btn-block" disabled id="btn_pasar_a_pendiente" value="Pasar a pendiente">
                            </div>
                            <div class="col-12 col-md-6 pb-2" id="contenedor_btn_pasar_pago" style="display: none;">
                                <input type="button" class="btn btn-primary btn-block" id="btn_pasar_a_pago" value="Pasar a pago">
                            </div>

                            <div class="col-12 col-md-12 col-lg-12">

                                <table class="table text-center table-striped table-sm">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th>Cliente</th>
                                            <th>Abonos</th>
                                            <th><i class="fas fa-bars"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_clientes_registrados">


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
            *Area de compra de clientes
        -->
        <div class="row" id="area_cliente_compra" style="display: none;">
            <div class="col-12">
                <div class="row">

                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total compra</h4>
                                </div>
                                <div class="card-body">
                                    <span id="total_compra_estadisticas"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-success bg-success">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total abonado</h4>
                                </div>
                                <div class="card-body">
                                    <span id="total_abonado_estadisticas"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-warning bg-warning">
                                <i class="fas fa-money-bill-alt"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Restante</h4>
                                </div>
                                <div class="card-body">
                                    <span id="total_restante_estadisticas"></span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-light bg-light">
                                <i class="fas fa-question-circle  text-dark"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Estado</h4>
                                </div>
                                <div class="card-body" id="estado_compra_estadisticas">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Nombre cliente</label>
                                    <input type="text" disabled id="nombre_cliente_estadisticas" class="form-control creditcard">
                                </div>
                            </div>
                            <div class="col col-6 col-sm-4">
                                <div class="form-group">
                                    <label>Cedula cliente</label>
                                    <input type="text" disabled id="cedula_cliente_estadisticas" class="form-control creditcard">
                                </div>
                            </div>
                            <div class="col col-6 col-sm-4">
                                <div class="form-group">
                                    <label>Codigo compra</label>
                                    <input type="text" disabled id="codigo_compra_estadisticas" class="form-control creditcard">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="row">
                                    <div class="col col-12 col-sm-4 mb-1">
                                        <a href="#" class="btn btn-icon icon-left btn-block btn-light" id="seleccionar_registro_rubro_compra">
                                            <i class="fas fa-seedling"></i> Agregar Rubro
                                        </a>
                                    </div>
                                    <div class="col col-12 col-sm-4 mb-1">
                                        <a href="#" class="btn btn-icon icon-left btn-block btn-light" id="nuevo_abono_compra">
                                            <i class="fas fa-money-bill-wave"></i> Agregar Abono
                                        </a>
                                    </div>
                                    <div class="col col-12 col-sm-4 mb-1">
                                        <a href="#" class="btn btn-block btn-primary" id="regresar_a_compras">Regresar a compras</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-12">

                                <table class="table text-center table-striped table-sm">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th>Rubro</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th><i class="fas fa-bars"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody id="rubros_registrados_compra">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">

                    <div class="card-body">

                        <div class="section-title">Pagos realizados</div>
                        <div class="small my-2">Todos los abonos que se han realizado al cliente </div>

                        <table class="table table-striped table-sm">
                            <thead>
                                <tr class="text-center bg-primary text-white">
                                    <th>Fecha</th>
                                    <th>Metodo</th>
                                    <th>Referencia</th>
                                    <th>Monto</th>
                                    <th><i class="fas fa-bars"></i></th>
                                </tr>
                            </thead>
                            <tbody id="tabla_abonos_compra" class="text-center">

                            </tbody>


                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!--Area de MODALS-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalFechaRegistroCompra">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo registro de compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Para poder llevar un mejor control, por favor introduce la fecha de inicio del registro de control de compras<br>
                    <small>NOTA: Al momento de finalizarla se te solicitara otra fecha que es la final para obtener los rangos</small>
                </p>

                <div class="form-group">
                    <label for="fecha_registro_compra">Fecha de inicio de registro</label>
                    <input id="fecha_registro_compra" type="date" class="form-control" value="<?= date("Y-m-d") ?>" autocomplete="off" required autofocus>
                    <div class="invalid-feedback">
                        Por favor introduce una fecha
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btn_registrar_nueva_compra" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_seleccionar_cliente_compra">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group text-center">
                            <label>Puedes buscar por cedula o nombre</label>
                            <input type="text" placeholder="Buscar" id="inp_busqueda_clientes" autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table text-center table-striped table-sm">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>Nombre</th>
                                    <th>Cedula</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody id="tbl_resultados_clientes">

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

<div class="modal fade" tabindex="-1" role="dialog" id="modal_seleccionar_rubro_compra">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar rubro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="area_seleccion_rubro">
                    <div class="col-12">
                        <div class="form-group text-center">
                            <label>Buscar por nombre</label>
                            <input type="text" placeholder="Buscar" id="inp_busqueda_rubro_compra" autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table text-center table-striped table-sm">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>Rubro</th>
                                    <th><i class="fas fa-bars"></i></th>
                                </tr>
                            </thead>
                            <tbody id="tbl_resultados_busqueda_rubro">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" id="area_registro_rubro" style="display: none;">
                    <div class="col col-12 col-sm-6">
                        <div class="form-group">
                            <label>Rubro</label>
                            <input type="text" disabled id="nombre_rubro_agregar" class="form-control">
                        </div>
                    </div>
                    <div class="col col-12 col-sm-6">
                        <div class="form-group">
                            <label>Total dolares</label>
                            <input type="text" disabled id="total_dolares_rubro_agregar" class="form-control">
                        </div>
                    </div>

                    <div class="col col-12 col-sm-8">
                        <label>Cantidad y medida de rubro</label>
                        <div class="input-group">
                            <input type="text" id="cantidad_agregar_rubro" placeholder="Cantidad" class="form-control">
                            <select class="form-control" id="medida_agregar_rubro">
                                <option selected value="none" disabled>Medida</option>
                                <option value="cestas">Cestas</option>
                                <option value="sacos">Sacos</option>
                                <option value="kilos">Kilos</option>
                                <option value="unidades">Unidades</option>
                            </select>
                        </div>
                    </div>

                    <div class="col col-12 col-sm-4">
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" placeholder="Precio" id="precio_rubro_agregar" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="button" id="btn_regresar_a_rubro" class="btn btn-info">Regresar a rubros</button> &nbsp;
                        <button type="button" id="registro_rubro_compra" class="btn btn-success">Registrar</button>
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
                                    <input type="text" id="referencia_transferencia" autocomplete="off" class="form-control">
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
                                    <input type="text" id="bolivares_transferencia" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="form-group text-center">
                                    <label>Tasa dolar</label>
                                    <input type="text" id="tasa_transferencia" autocomplete="off" class="form-control">
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
                                <button type="button" class="btn btn-primary" onclick="obtener_valor_dolar_bcv_actual('tasa_transferencia')"><i class="fas fa-sync-alt"></i> Obtener dolar</button>
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
                                <button type="button" class="btn btn-primary" onclick="obtener_valor_dolar_bcv_actual('tasa_pagomovil')"><i class="fas fa-sync-alt"></i> Obtener dolar</button>
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
                                <button type="button" class="btn btn-primary" onclick="obtener_valor_dolar_bcv_actual('tasa_bolivares')"><i class="fas fa-sync-alt"></i> Obtener dolar</button>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modalEditarFechaRegistroCompra">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar fecha compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Estas modificando la fecha de inicio de la compra, recuerda que las fechas iniciales no se pueden repetir<br>
                </p>
                <h6>Fecha actual: <span id="lbl_fecha_inicio"></span></h6>
                <div class="form-group">
                    <label for="fecha_editar_registro_compra">Nueva fecha de inicio de registro</label>
                    <input id="fecha_editar_registro_compra" type="date" class="form-control" value="<?= date("Y-m-d") ?>" autocomplete="off" required autofocus>
                    <div class="invalid-feedback">
                        Por favor introduce una fecha
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btn_guardar_nueva_fecha" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </div>
</div>



<!--
    Area de rutas
-->
<input type="hidden" value="<?= $ruta_registro_compra ?>" id="ruta_registro_compra">
<input type="hidden" value="<?= $ruta_obtener_compras ?>" id="ruta_obtener_compras">
<input type="hidden" value="<?= $ruta_detalle_compra ?>" id="ruta_detalle_compra">
<input type="hidden" value="<?= $ruta_agregar_cliente_compra ?>" id="ruta_agregar_cliente_compra">
<input type="hidden" value="<?= $ruta_buscar_cliente ?>" id="ruta_buscar_cliente">
<input type="hidden" value="<?= $ruta_obtener_clientes_compra ?>" id="ruta_obtener_clientes_compra">
<input type="hidden" value="<?= $ruta_agregar_rubros_compra ?>" id="ruta_agregar_rubros_compra">
<input type="hidden" value="<?= $ruta_buscar_rubro ?>" id="ruta_buscar_rubro">
<input type="hidden" value="<?= $ruta_obtener_clientes_rubros_compra ?>" id="ruta_obtener_clientes_rubros_compra">
<input type="hidden" value="<?= $ruta_eliminar_rubro_compra ?>" id="ruta_eliminar_rubro_compra">
<input type="hidden" value="<?= $ruta_registrar_abono_compra ?>" id="ruta_registrar_abono_compra">
<input type="hidden" value="<?= $ruta_obtener_abonos_cliente_compra ?>" id="ruta_obtener_abonos_cliente_compra">
<input type="hidden" value="<?= $ruta_eliminar_abono_compra ?>" id="ruta_eliminar_abono_compra">
<input type="hidden" value="<?= $ruta_obtener_estadisticas_compra ?>" id="ruta_obtener_estadisticas_compra">
<input type="hidden" value="<?= $ruta_pasar_compra_pendiente ?>" id="ruta_pasar_compra_pendiente">
<input type="hidden" value="<?= $ruta_eliminar_cliente_compra ?>" id="ruta_eliminar_cliente_compra">
<input type="hidden" value="<?= $ruta_pasar_compra_pago ?>" id="ruta_pasar_compra_pago">
<input type="hidden" value="<?= $ruta_editar_fecha_compra ?>" id="ruta_editar_fecha_compra">
<input type="hidden" value="<?= $ruta_estadisticas_compras ?>" id="ruta_estadisticas_compras">


<!--
    Area de datos de sistema
-->
<input type="hidden" id="codigo_compra_seleccionada">
<input type="hidden" id="codigo_cliente_seleccionado">
<input type="hidden" id="codigo_rubro_seleccionado">
<input type="hidden" id="pagina_actual">