<div class="container">
    <section class="section mt-5">
        <div class="section-header">
            <h1>Estadisticas compra</h1>
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

                            <input type="hidden" id="nombre_archivo" value="<?= $nombre_archivo ?>">

                            <div class="col-sm-12">
                                <div class="mt-3">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-sm">
                                            <thead class="elegant-color-dark text-center">
                                                <tr class="text-white">
                                                    <th class="colorT" scope="col">Rubro</th>
                                                    <th class="colorT" colspan="2" scope="col">Detalle</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-95 text-dark">
                                                <?= $tabla ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6 text-grey-d2 text-95 mt-2 mt-lg-0">
                                        Gracias por su compra.....
                                    </div>
                                    <div class="col-12 col-sm-6 order-first align-self-start order-sm-last">
                                        <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                            <div class="col-6 text-right">
                                            </div>
                                            <div class="col-6">
                                                <div> Inversion: <b class="text-dark font-weight-bold opacity-2"><?= $inversion ?></b> </div>
                                                <div> Ventas: <b class="text-dark font-weight-bold opacity-2"><?= $recaudado ?></b> </div>
                                                <div> Resultados: <b class="text-dark font-weight-bold opacity-2"><?= $resultado ?></b> </div>
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
</div>