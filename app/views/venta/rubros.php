<section class="section">
    <div class="section-header">
        <h1>Rubros</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-sm-2 col-6 text-center justify-content-center">
                        <div class="text-center">Total rubros</div>
                        <h5 id="total_lbl"></h5>
                        
                    </div>
                    <div class="col-sm-2 col-6 text-center justify-content-center ">
                        <div class="text-center">Cestas vendidas</div>
                        <h5 id="cestas_lbl"></h5>
                    </div>
                    <div class="col-sm-2 col-6 text-center justify-content-center ">
                        <div class="text-center">Kilos vendidos</div>
                        <h5 id="kilos_lbl"></h5>
                    </div>
                    <div class="col-sm-2 col-6 text-center justify-content-center ">
                        <div class="text-center">Sacos vendidos</div>
                        <h5 id="sacos_lbl"></h5>
                    </div>
                    <div class="col-sm-2 col-6 text-center justify-content-center ">
                        <div class="text-center">Unidades vendidas</div>
                        <h5 id="unidades_lbl"></h5>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <p>Registrar rubro</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="nombre_rubro_registrar" placeholder="Nombre rubro" autocomplete="off" aria-label="">
                                <div class="input-group-append">
                                    <button class="btn btn-success" id="btn_registrar_rubro" type="button">Registrar</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Buscar rubro</label>
                            <input type="text" autocomplete="off" id="buscar_rubro" class="form-control">
                        </div>
                        <table class="table text-center table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Rubro</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody id="listado_rubros">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalle rubro</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="nombre_rubro_actualizar" placeholder="Actualizar nombre rubro" autocomplete="off" aria-label="">
                                <div class="input-group-append">
                                    <button class="btn btn-success" id="btn_actualizar_nombre" type="button">Actualizar nombre</button>
                                </div>
                            </div>
                        </div>
                        <div style="height: 50%; width: 100%;">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<input type="hidden" id="ruta_registrar_rubro" value="<?= $data['ruta_registro'] ?>">
<input type="hidden" id="ruta_estadisticas_rubros" value="<?= $data['ruta_estadisticas'] ?>">
<input type="hidden" id="ruta_buscar_rubro" value="<?= $data['ruta_buscar_rubro'] ?>">
<input type="hidden" id="ruta_detalle_rubro" value="<?= $data['ruta_detalle_rubro'] ?>">
<input type="hidden" id="ruta_actualizar_rubro" value="<?= $data['ruta_actualizar_rubro'] ?>">
<input type="hidden" id="id_rubro_seleccionado">