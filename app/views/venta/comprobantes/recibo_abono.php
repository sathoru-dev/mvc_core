<div class="container">
    <section class="section mt-5">
        <div class="section-header ">
            <h1>Comprobante abono</h1>
            <div class="section-header-breadcrumb">
                <a href="<?= $datos_cliente['telefono'] ?>" class="btn btn-icon icon-left btn-success"><i class="fab fa-whatsapp"></i> Abrir WhatsApp</a>
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
                                <h4 class="font-weight-bold" style="color: black;"><?= $datos_empresa['nombre'] ?></h4>
                                <div class="text-grey-m2 pb-3">
                                    <div class="my-1">
                                        Rif: <b class="text-dark"><?= $datos_empresa['rif'] ?></b>
                                    </div>
                                    <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-primary"></i> <b class="text-dark"><?= $datos_empresa['telefono'] ?></b></div>
                                </div>
                                <div>
                                    <span class="text-sm text-grey-m2 align-middle">Cliente:</span>
                                    <span class="text-600 text-110 text-blue align-middle"><b class="text-dark"><?= $datos_cliente['nombre'] ?></b></span>
                                </div>
                                <div class="text-grey-m2">
                                    <div class="my-1">
                                        Cedula: <b class="text-dark"><?= $datos_cliente['cedula'] ?></b>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="nombre_archivo" value="<?= $nombre_archivo ?>">

                            <div class="text-95 col-sm-6 col-lg-6 col-md-6 align-self-start d-sm-flex justify-content-end">
                                <hr class="d-sm-none" />
                                <div class="text-grey-m2">
                                    <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                        Factura
                                    </div>
                                    <div class="my-2">
                                        <i class="fa fa-circle text-primary text-xs mr-1"></i>
                                        <span class="text-600 text-90">ID:</span>
                                        <b class="text-dark"><?= $datos_factura['codigo'] ?></b>
                                    </div>
                                    <div class="my-2">
                                        <i class="fa fa-circle text-primary text-xs mr-1"></i>
                                        <span class="text-600 text-90">Fecha:</span>
                                        <b class="text-dark"><?= $datos_factura['fecha'] ?></b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 pt-3 text-center">
                                <div class="row">
                                    <div class="form-group col-3 ">
                                        <label>Metodo de pago</label>
                                        <h6><b class="text-dark"><?= $datos_abono['metodo'] ?></b></h6>
                                    </div>
                                    <div class="form-group col-3 ">
                                        <label>Banco origen</label>
                                        <h6><b class="text-dark"><?= $datos_abono['banco_origen'] ?></b></h6>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Banco destino</label>
                                        <h6><b class="text-dark"><?= $datos_abono['banco_destino'] ?></b></h6>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Referencia</label>
                                        <h6><b class="text-dark"><?= $datos_abono['referencia'] ?></b></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-3 ">
                                        <label>Monto Bs</label>
                                        <h6><b class="text-dark"><?= $datos_abono['bolivares'] ?></b></h6>
                                    </div>
                                    <div class="form-group col-3 ">
                                        <label>Tasa dolar</label>
                                        <h6><b class="text-dark"><?= $datos_abono['tasa'] ?></b></h6>
                                    </div>
                                    <div class="form-group col-3 ">
                                        <label>Dolares</label>
                                        <h6><b class="text-dark"><?= $datos_abono['dolares'] ?></b></h6>
                                    </div>
                                    <div class="form-group col-3 ">
                                        <label>Fecha</label>
                                        <h6><b class="text-dark"><?= $datos_abono['fecha'] ?></b></h6>
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