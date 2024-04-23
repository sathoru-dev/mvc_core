<section class="section">
    <div class="section-header">
        <h1>Carga</h1>
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
                            <h4>Cargas registradas</h4>
                        </div>
                        <div class="card-body" id="total_cargas"></div>
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
                            <h4>Cargas en borrador</h4>
                        </div>
                        <div class="card-body" id="cargas_en_borrador">N/D</div>
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
                            <h4>Cargas en inventario</h4>
                        </div>
                        <div class="card-body" id="cargas_en_inventario">N/D</div>
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
                            <h4>Cargas competadas</h4>
                        </div>
                        <div class="card-body" id="cargas_completadas">N/D</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="alert alert-danger text-center" id="alerta_borrador" style="display: none;">
                    Tienes algunas cargas en borrador
                </div>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs justify-content-center" id="myTab6" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-center active" id="busqueda_cargatab" data-toggle="tab" href="#busqueda_carga" role="tab" aria-controls="home" aria-selected="true">
                                    <span><i class="fas fa-search"></i></span> Busqueda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" id="profile-tab6" data-toggle="tab" href="#profile6" role="tab" aria-controls="profile" aria-selected="false">
                                    <span><i class="far fa-clock"></i></span> Borradores </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="<?= $data['ruta_registrar_borrador_carga']; ?>" role="tab">
                                    <span><i class="fas fa-plus"></i></span> Registrar </a>
                            </li>

                        </ul>
                        <div class="tab-content tab-bordered" id="myTabContent6">
                            <div class="tab-pane fade active show" id="busqueda_carga" role="tabpanel" aria-labelledby="busqueda_cargatab">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label>Desde</label>
                                            <input type="date" id="fecha_desde" value="<?= date("Y-m-d",strtotime(date("Y-m-d")."-30 days")) ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label>Hasta</label>
                                            <input type="date" value="<?= date("Y-m-d")?>" id="fecha_hasta" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label>Tipo</label>
                                        <div class="form-group">
                                            <select class="form-control" id="tipo_busqueda">
                                                <option selected="" value="">Todas</option>
                                                <option value="inventario">Inventario</option>
                                                <option value="completada">Completadas</option>
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
                                                        <th class="text-white">Fecha</th>
                                                        <th class="text-white">Estado</th>
                                                        <th class="text-white">Completada</th>
                                                        <th class="text-white">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="buscar_cargas_resultados">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile-tab6">
                                <div class="table-responsive table-invoice">
                                    <table class="table table-striped  text-center">
                                        <thead>
                                            <tr class="bg-primary">
                                                <th class="text-white">Fecha</th>
                                                <th class="text-white">Estado</th>
                                                <th class="text-white">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tabla_borradores">
                                            
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
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_eliminar">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <h5 class="modal-title">Eliminar carga?</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body"> Estas apunto de eliminar una carga y todos los productos relacionados a ella.<br>¿Deseas continuar?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-shadow" id="btn_eliminar_carga">Eliminar!</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_confirmar">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <h5 class="modal-title">Confirmar carga?</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body"> Estas apunto de confimar una carga y todos los productos relacionados a ella.<br>¿Deseas continuar?<p>Nota:
                <small>Por razones de seguridad la fecha de confirmacion de carga es la actual en el S.O</small>
            </p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-shadow" id="btn_confirmar_carga">Confirmar!</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<input type="hidden" id="ruta_buscar_carga" value="<?= $data['ruta_buscar_carga'] ?>">
<input type="hidden" id="ruta_obtener_borradores" value="<?= $data['ruta_borradores'] ?>">
<input type="hidden" id="ruta_estadisticas_carga" value="<?= $data['ruta_estatisticas'] ?>">
<input type="hidden" id="ruta_eliminar_carga" value="<?= $data['ruta_eliminar_carga'] ?>">
<input type="hidden" id="ruta_confirmar_carga" value="<?= $data['ruta_confirmar_carga'] ?>">

<input type="hidden" id="id_carga_eliminar">
<input type="hidden" id="id_carga_confirmar">