<section class="section">
    <div class="section-header">
        <h1>Registro de factura</h1>
        <div class="section-header-breadcrumb">
            <a href="<?= $this->get_link('facturas') ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-chevron-left"></i> Regresar</a>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">

                <?php
                if ($estado == 'borrador') :
                ?>
                    <div class="alert alert-light alert-has-icon" id="alerta_borrador">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                            <div class="alert-title">Alerta</div>
                            Esta factura esta en borradores, por lo tanto no esta reflejada en el sistema
                        </div>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nombre cliente</label>
                                    <input type="hidden" id="id_cliente" value="<?= $id_cliente ?>">
                                    <input type="hidden" id="id_factura" value="<?= $id_factura ?>">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" disabled value="<?= $nombre ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Cedula cliente</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="far fa-id-card"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" disabled value="<?= $cedula ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <label>Carga</label>
                            <div class="input-group mb-3">
                                <input type="hidden" id="id_carga">
                                <input type="text" id="fecha_carga" class="form-control" disabled>
                                <div class="input-group-append">
                                    <button class="btn btn-success" id="btn_buscar_carga" type="button">Buscar carga</button>
                                </div>
                            </div>
                        </div>
                        <div id="controles_rubros" style="display: none;">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Buscar rubro</label>
                                        <input type="text" autocomplete="off" id="buscar_rubro_carga" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Cantidad de resultados</label>
                                        <input type="text" autocomplete="off" value="10" id="cantidad_resultados" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-light alert-has-icon" id="alerta_carga_conpletada" style="display: none;">
                                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                <div class="alert-body">
                                    <div class="alert-title">Atencion</div>
                                    Esta carga no dispone de inventario. ¿Deseas confirmar esta carga?
                                    <button class="btn btn-dark btn-sm mt-1" id="btn-confirmar-carga">Confirmar</button>
                                </div>
                            </div>
                            <table class="table text-center table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>rubro</th>
                                        <th>disponible</th>
                                        <th>opc</th>
                                    </tr>
                                </thead>
                                <tbody id="listado_rubros">

                                </tbody>
                            </table>
                        </div>

                        <div id="sin_carga_seleccionada">
                            <div class="text-center">
                                <i class="fas fa-exclamation-triangle text-danger" style="font-size: 60px;"></i>
                            </div>
                            <p class="text-center">
                                No se ha seleccionado una carga
                            </p>
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
                                    <label>fecha factura</label>
                                    <div class="input-group mb-3">
                                        <input type="date" id="fecha_factura" value="<?= $fecha ?>" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" id="btn_guardar_factura" type="button">Guardar factura</button>
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
                                    <div class="col-sm-3 col-6 text-center justify-content-center" id="total_dolares_lbl" style="display: none;">
                                        <div class="text-center">Total dolares</div>
                                        <h6 id="total_dolares"></h6>
                                    </div>
                                </div>
                                <table class="table text-center table-striped table-sm mt-2">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th>rubro</th>
                                            <th>cantidad</th>
                                            <th>precios</th>
                                            <th>opc</th>
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

<div class="modal fade" tabindex="-1" role="dialog" id="modal_seleccionar_carga">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar carga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center"><b>Filtrar carga por fecha</b></div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Desde</label>
                            <input type="date" id="fecha_desde" value="<?= date("Y-m-d", strtotime(date("Y-m-d") . "-20 days")) ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Hasta</label>
                            <input type="date" value="<?= date("Y-m-d") ?>" id="fecha_hasta" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table text-center table-striped table-sm">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody id="resultados_carga">

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

<div class="modal fade" tabindex="-1" role="dialog" id="modal_seleccionar_rubro">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cantidad rubro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id_rubro_carga">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>rubro</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-seedling"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" disabled id="nombre_rubro_carga">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>existencia</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-server"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" disabled id="existencia_rubro_carga">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alertas" style="display: none;">
                    <div class="alert alert-danger alert-has-icon">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                            <div class="alert-title">Atencion</div>
                            La cantidad a registrar supera la existencia en el inventario
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>cantidad</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="cantidad_rubro_carga">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>precio</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="precio_rubro_carga">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>total valor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" disabled id="precio_total">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="btn-registrar">registrar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="ruta_buscar_carga" value="<?= $ruta_buscar_carga ?>">
<input type="hidden" id="ruta_buscar_rubro_carga" value="<?= $ruta_buscar_rubro_carga ?>">
<input type="hidden" id="ruta_registrar_rubro_carga" value="<?= $ruta_registrar_rubro_carga ?>">
<input type="hidden" id="ruta_rubros_factura" value="<?= $ruta_rubros_factura ?>">
<input type="hidden" id="eliminarRubroFactura" value="<?= $eliminarRubroFactura ?>">
<input type="hidden" id="ruta_guardarFactura" value="<?= $ruta_guardarFactura ?>">
<input type="hidden" id="ruta_confirmar_carga" value="<?= $ruta_confirmar_carga ?>">