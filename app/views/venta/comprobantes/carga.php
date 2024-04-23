    <div class="container">
        <section class="section mt-5">
            <div class="section-header">
                <h1>Conprobante carga</h1>
                <div class="section-header-breadcrumb">
                    <button type="button" class="btn btn-icon icon-left btn-success" id="imprimir_pdf"><i class="fas fa-file-alt"></i> Descargar PDF</button>
                    <div>&nbsp;|&nbsp;</div> 
                    <button type="button" class="btn btn-icon icon-left btn-success" id="imprimir_imagen"><i class="fas fa-download"></i> Descargar imagen</button>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Nota</h2>
                <p class="section-lead">Si estas en un dispositivo movil te recomendamos activar el sitio de escritorio para obtener
                    mejores resultados al descargar.</p>

                <div id="factura">
                    <div class="row justify-content-center my-4">
                        <div class="col-11 col-lg-11 ">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <h4 class="font-weight-bold" style="color: black;"><?= $datos_empresa['nombre'] ?></h4>
                                    <div class="text-grey-m2 pb-3">
                                        <div class="my-1">
                                            Rif: <b class="text-dark"><?= $datos_empresa['rif'] ?></b>
                                        </div>
                                        <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-primary"></i> <b class="text-dark"><?= $datos_empresa['telefono'] ?></b></div>
                                    </div>
                                </div>

                                <input type="hidden" id="nombre_archivo" value="<?= $nombre_archivo ?>">

                                <div class="text-95 col-sm-6 col-lg-6 col-md-6 align-self-start d-sm-flex justify-content-end">
                                    <hr class="d-sm-none" />
                                    <div class="text-grey-m2">
                                        <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                            Carga
                                        </div>
                                        <div class="my-2">
                                            <i class="fa fa-circle text-primary text-xs mr-1"></i>
                                            <span class="text-600 text-90">ID:</span>
                                            <b class="text-dark"><?= $datos_carga['codigo'] ?></b>
                                        </div>
                                        <div class="my-2">
                                            <i class="fa fa-circle text-primary text-xs mr-1"></i>
                                            <span class="text-600 text-90">Dia:</span>
                                            <b class="text-dark"><?= $datos_carga['dia'] ?></b>
                                        </div>
                                        <div class="my-2">
                                            <i class="fa fa-circle text-primary text-xs mr-1"></i>
                                            <span class="text-600 text-90">Fecha:</span>
                                            <b class="text-dark"><?= $datos_carga['fecha'] ?></b>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="mt-3">
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-sm">
                                                <thead class="elegant-color-dark">
                                                    <tr class="text-white text-center">
                                                        <th class="colorT">Placa</th>
                                                        <th class="colorT">Modelo</th>
                                                        <th class="colorT">Conductor</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="text-95 text-dark text-center">
                                                    <?= $vehiculos ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-sm">
                                                <thead class="elegant-color-dark">
                                                    <tr class="text-white text-center">
                                                        <th class="colorT">Rubro</th>
                                                        <th class="colorT">Cantidad</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="text-95 text-dark text-center">
                                                    <?= $carga ?>
                                                </tbody>
                                                
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-sm">
                                                <thead class="elegant-color-dark">
                                                    <tr class="text-white text-center">
                                                        <th class="colorT">Cestas: <?= $cestas_restantes?> de <?= $cestas?></th>
                                                        <th class="colorT">Kilos: <?= $kilos_restantes?> de <?= $kilos?></th>
                                                        <th class="colorT">Sacos: <?= $sacos_restantes?> de <?= $sacos?></th>
                                                        <th class="colorT">Unidades: <?= $unidades_restantes?> de <?= $unidades?></th>

                                                    </tr>
                                                </thead>                                               
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
    </div>