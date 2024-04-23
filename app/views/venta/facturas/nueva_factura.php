<section class="section">
    <div class="section-header">
        <h1>Facturas</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-carrot"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Facturas registradas</h4>
                        </div>
                        <div class="card-body"><span id="est_factura_registradas"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Facturas en borrador</h4>
                        </div>
                        <div class="card-body"><span id="est_factura_borrador"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Facturas pendientes</h4>
                        </div>
                        <div class="card-body"><span id="est_factura_pendientes"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Facturas completadas</h4>
                        </div>
                        <div class="card-body"><span id="est_factura_completadas"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="alert alert-danger text-center" id="alerta_borrador" style="display: none;">
                    Tienes algunas facturas en borrador
                </div>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs justify-content-center" id="myTab6" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-center active" id="busqueda_cargatab" data-toggle="tab" href="#busqueda_factura_cliente" role="tab" aria-controls="home" aria-selected="true">
                                    <span>
                                        <i class="fa fa-user"></i>
                                    </span> Busqueda cliente
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" id="busqueda_cargatab" data-toggle="tab" href="#busqueda_carga" role="tab" aria-controls="home" aria-selected="false">
                                    <span>
                                        <i class="fas fa-calendar"></i>
                                    </span> Busqueda fecha</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" data-toggle="modal" data-target="#modal_seleccionar_cliente" href="#" role="tab">
                                    <span><i class="fas fa-plus"></i></span> Registrar </a>
                            </li>

                        </ul>
                        <div class="tab-content tab-bordered" id="myTabContent6">
                            <div class="tab-pane fade active show" id="busqueda_factura_cliente" role="tabpanel" aria-labelledby="busqueda_cargatab">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label>Cedula o Nombre</label>
                                            <input type="text" id="buscar_cedula_cliente" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label>Cantidad de resultados</label>
                                            <input type="text" autocomplete="off" value="10" id="cantidad_resultados_clientes" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="table-responsive table-invoice">
                                            <table class="table table-striped  text-center">
                                                <thead>
                                                    <tr class="bg-primary">
                                                        <th class="text-white">Cliente</th>
                                                        <th class="text-white">Cedula</th>
                                                        <th class="text-white">Pendientes</th>
                                                        <th class="text-white">Borrador</th>
                                                        <th class="text-white">Completada</th>
                                                        <th class="text-white"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="buscar_cargas_resultados_clientes">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="busqueda_carga" role="tabpanel" aria-labelledby="busqueda_cargatab">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label>Desde</label>
                                            <input type="date" id="fecha_desde" value="<?= date("Y-m-d", strtotime(date("Y-m-d") . "-20 days")) ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label>Hasta</label>
                                            <input type="date" value="<?= date("Y-m-d") ?>" id="fecha_hasta" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label>Tipo</label>
                                        <div class="form-group">
                                            <select class="form-control" id="tipo_busqueda_factura">
                                                <option selected="" value="">Todas</option>
                                                <option value="borrador">Borradores</option>
                                                <option value="pago">Pagas</option>
                                                <option value="pendiente">Pendientes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="table-responsive table-invoice">
                                            <table class="table table-striped  text-center">
                                                <thead>
                                                    <tr class="bg-primary">
                                                        <th class="text-white">Nombre</th>
                                                        <th class="text-white">Fecha</th>
                                                        <th class="text-white">Estado</th>
                                                        <th class="text-white">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="buscar_cargas_resultados_fecha">

                                                </tbody>
                                            </table>
                                        </div>
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


<div class="modal fade" tabindex="-1" role="dialog" id="modal_seleccionar_cliente">
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
                            <input type="text" placeholder="Buscar" id="busqueda_clientes" autocomplete="off" class="form-control">
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
                            <tbody id="resultados_clientes">

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

<div class="modal fade" tabindex="-1" role="dialog" id="modal_detalle_cliente">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Facturas cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group text-center">
                            <label>Nombre</label>
                            
                            <input type="text" disabled id="nombre_cliente_detalle" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group text-center">
                            <label>Cedula</label>
                            <input type="text" disabled id="cedula_cliente_detalle" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Tipo facturas</label>
                            <select class="custom-select" id="tipo_facturas_clientes">
                                <option value="P">Pendientes</option>
                                <option value="C">Confirmadas</option>
                                <option value="B">Borradores</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table text-center table-striped table-sm">
                            <thead id="thead_clientes">
                                <tr >
                                    <th>Nombre</th>
                                    <th>Cedula</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody id="tabla_facturas_cliente">

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

<div class="modal fade" tabindex="-1" role="dialog" id="modal_eliminar_factura">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <h5 class="modal-title">Eliminar factura?</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body" id="contenido_alerta_eliminar"> </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-shadow" id="btn_eliminar_factura">Eliminar!</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="ruta_buscar_factura_cliente" value="<?= $ruta_buscar_facturas_por_cliente ?>">
<input type="hidden" id="ruta_obtener_factura_cliente" value="<?= $ruta_obtener_factura_cliente ?>">
<input type="hidden" id="ruta_obtener_factura_fecha" value="<?= $ruta_obtener_factura_fecha ?>">
<input type="hidden" id="ruta_estadisticas" value="<?= $ruta_estadisticas  ?>">
<input type="hidden" id="ruta_buscar_cliente" value="<?= $ruta_buscar_cliente ?>">
<input type="hidden" id="ruta_nueva_factura" value="<?= $ruta_nueva_factura ?>">
<input type="hidden" id="ruta_eliminar_factura" value="<?= $ruta_eliminar_factura ?>">
<input type="hidden" id="id_factura_eliminar">
<input type="hidden" id="id_cliente_seleccionado">