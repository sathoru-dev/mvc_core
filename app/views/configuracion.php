<section class="section">
    <div class="section-header">
        <h1>Configuracion</h1>
    </div>

    <div class="section-body">
        <div class="row mt-sm-4 justify-content-center">
            <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar configuracion</h4>
                    </div>
                    <div class="card-body">
                        <div class="section-title mt-0">Facturas</div>
                        <div class="row">
                            <div class="form-group col-md-4 col-12">
                                <label>Nombre empresa</label>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="nombre_empresa" disabled value="<?= $configuracion['nombre_empresa'] ?>" required="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" onclick="editar_nombre()" type="button"><i class="fas fa-pen"></i></button>
                                    </div>
                                </div>

                            </div>


                            <div class="form-group col-md-4 col-12">
                                <label>Rif</label>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="rif_empresa" disabled value="<?= $configuracion['rif'] ?>" required="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" onclick="editar_rif()" type="button"><i class="fas fa-pen"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-md-4 col-12">
                                <label>Telefono</label>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="telefono_empresa" disabled value="<?= $configuracion['telefono'] ?>" required="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" onclick="editar_telefono()" type="button"><i class="fas fa-pen"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-md-4 col-12">
                                <div class="section-title mt-0">Vehiculos</div>
                                <label>Limite de viajes</label>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" disabled id="cambios_aceite_empresa" value="<?= $configuracion['limite_cambios'] ?>" required="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" onclick="editar_viajes()" type="button"><i class="fas fa-pen"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-md-8 col-12">
                                <div class="section-title mt-0">Directorio de respaldos</div>
                                <label>Ubicacion del directorio de respaldos</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" disabled id="respaldo_base" value="<?= $configuracion['carpeta_respaldos'] ?>" required="">

                                    <div class="input-group-append">
                                        <button class="btn btn-primary" onclick="editar_respaldo()" type="button"><i class="fas fa-pen"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_editar_configuracion">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar configuracion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="tab_editar_nombre" style="display: none;">
                    <h4 class="text-center">Cambiar nombre de empresa</h4>
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nuevo nombre empresa</label>
                                <input type="text" class="form-control" id="nombre_editar_empresa">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_editar_rif" style="display: none;">
                    <h4 class="text-center">Cambiar R.I.F</h4>
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nuevo rif</label>
                                <input type="text" class="form-control" id="rif_editar_empresa">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_editar_telefono" style="display: none;">
                    <h4 class="text-center">Cambiar numero de telefono</h4>
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nuevo numero</label>
                                <input type="text" class="form-control" id="numero_editar_empresa">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_editar_viajes" style="display: none;">
                    <h4 class="text-center">Cambiar cantidad de viajes</h4>
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nueva cantidad</label>
                                <input type="text" class="form-control" id="viajes_editar_empresa">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_editar_respaldo" style="display: none;">
                    <h4 class="text-center">Cambiar directorio de respaldo</h4>
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nuevo directorio</label>
                                <input type="text" class="form-control" id="respaldo_editar_empresa">
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-center text-danger">
                    <i class="fas fa-exclamation-triangle"></i> Introduce tu contraseña para continuar! <i class="fas fa-exclamation-triangle"></i>
                </p>

                <div class=" row">
                    <div class="form-group col-md-12 col-12">
                        <label>Contraseña</label>
                        <form action="#">
                            <input type="password" autocomplete="off" id="validar_actualizar_configuracion" class="form-control" required="">
                            <div class="invalid-feedback"> Por favor introduce tu contraseña </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-success" id="btn_actualizar_configuracion">Actualizar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="tipo_actualizar">
<input type="hidden" id="ruta_actualizar" value="<?= $configuracion['ruta_guardar'] ?>">
