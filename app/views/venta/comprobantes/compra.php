<div class="container">
        <section class="section mt-5">
            <div class="section-header">
                <h1>Conprobante pedido / compra</h1>
                <div class="section-header-breadcrumb">
                    <a href="<?=  $telefono_cliente?>" class="btn btn-icon icon-left btn-success"><i class="fab fa-whatsapp"></i> Abrir WhatsApp</a>
                    <div>&nbsp;|&nbsp;</div>
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
                                    <h4 class="font-weight-bold" style="color: black;"><?= $nombre_empresa ?></h4>
                                    <div class="text-grey-m2 pb-3">
                                        <div class="my-1">
                                            Rif: <b class="text-dark"><?= $telefono_empresa ?></b>
                                        </div>
                                        <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-primary"></i> <b class="text-dark"><?= $rif_empresa ?></b></div>
                                    </div>
                                </div>

                                <input type="hidden" id="nombre_archivo" value="<?= $nombre_archivo ?>">

                                <div class="text-95 col-sm-6 col-lg-6 col-md-6 align-self-start d-sm-flex justify-content-end">
                                    <hr class="d-sm-none" />
                                    <div class="text-grey-m2">
                                        <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                            Compra
                                        </div>
                                        <div class="my-2">
                                            <i class="fa fa-circle text-primary text-xs mr-1"></i>
                                            <span class="text-600 text-90">Codigo:</span>
                                            <b class="text-dark"><?= $id_compra?></b>
                                        </div>
                                        <div class="my-2">
                                            <i class="fa fa-circle text-primary text-xs mr-1"></i>
                                            <span class="text-600 text-90">Cliente:</span>
                                            <b class="text-dark"><?= $nombre_cliente ?></b>
                                        </div>
                                        <div class="my-2">
                                            <i class="fa fa-circle text-primary text-xs mr-1"></i>
                                            <span class="text-600 text-90">Cedula:</span>
                                            <b class="text-dark"><?= $cedula_cliente ?></b>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="mt-3">
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-sm">
                                                <thead class="elegant-color-dark">
                                                    <tr class="text-white">
                                                        <?= $encabezado_productos?>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-95 text-dark">
                                                    <?= $contenido_productos ?>
                                                </tbody>
                                            </table>

                                            <table class="table table-borderless table-sm">
                                                <thead class="elegant-color-dark">
                                                    <tr class="text-white">
                                                        <?= $encabezado_pagos?>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-95 text-dark">
                                                    <?= $contenido_pagos?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                            Gracias por su compra.....
                                        </div>
                                        <div class="col-12 col-sm-5 order-first align-self-start order-sm-last">
                                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                                <div class="col-6 text-right">
                                                </div>
                                                <div class="col-6">
                                                    <span> Valor compra: <b class="text-dark font-weight-bold opacity-2"><?= $valor_total ?></b> </span>
                                                    <span> Valor abonado: <b class="text-dark font-weight-bold opacity-2"><?= $valor_abonado ?></b> </span>
                                                    <span> Resta: <b class="text-dark font-weight-bold opacity-2"><?= $restante ?></b> </span>
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