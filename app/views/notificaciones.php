<section class="section">
	<div class="section-header">
		<h1>Notificaciones</h1>
	</div>

	<div class="section-body">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>Notificaciones recientes</h4>
						<div class="card-header-action">
							<a href="#" onclick="eliminarTodas()" class="btn btn-danger">Eliminar todas <i class="far fa-trash-alt"></i></a>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive table-invoice">
							<table class="table table-striped  text-center">
								<thead>
									<tr>
										<th>Titulo</th>
										<th>Nivel</th>
										<th>Fecha</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody id="tabla_notificaciones">
									<?= $noti ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_detalle_notificacion">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detalle notificacion</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="lead text-center">
					<strong id="titulo_notificacion"></strong>
				</p>
				<div id="mensaje_notificacion">

				</div>
			</div>
			<div class="modal-footer bg-whitesmoke br">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="ruta_detalle_notificacion_cont" value="<?= $this->get_link('detalleNotificacion') ?>">
<input type="hidden" id="ruta_eliminar_notificacion" value="<?= $this->get_link('eliminarNotificaciones') ?>">
<input type="hidden" id="ruta_eliminar_todas_notificacion" value="<?= $this->get_link('eliminarTodasNotificaciones') ?>">


