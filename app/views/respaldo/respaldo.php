<section class="section">
    <div class="section-header">
        <h1>Respaldo de base de datos :0</h1>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fas fa-cloud-download-alt text-info" style="font-size: 80px;"></i>
                        </div>
                        <h4 class="text-center">Descargar base de datos</h4>
                        <div class="text-center">
                            <small>
                                Tenga cuidado con su copia de seguridad, ya que contiene toda la información.
                            </small>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="section-title">Carpeta de descarga</div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" value="<?= $ruta ?>" class="form-control" disabled aria-label="">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" id="btn_descargar" type="button">Descargar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <small>
                                        Para cambiar la ruta de descarga entre a configuracion
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_passwd">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¿Eres tu?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <p>Por seguridad introduce tu contraseña</p>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="passw_client">
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="btn_verificar">Verificar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<input type="hidden" value="<?= $this->get_link('validarRespaldo')?>" id="ruta_validar">
