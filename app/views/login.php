<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Iniciar sesion</title>
	<link rel="stylesheet" href="<?= $this->base_url('public/css/bootstrap.min.css') ?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $this->base_url('public/css/all.css') ?>">
	<link rel="stylesheet" href="<?= $this->base_url('public/css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->base_url('public/css/components.css') ?>">
</head>

<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<div class="login-brand">
							Bienvenid@
						</div>
						<?php if ($this->comprobar_sesion('error_login')) : ?>
							<div class="alert alert-danger alert-dismissible alert-has-icon">
								<div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
								<div class="alert-body">
									<button class="close" data-dismiss="alert">
										<span>×</span>
									</button>
									<div class="alert-title">Atencion</div>
									<?= $this->obtener_sesion('error_login') ?>
								</div>
							</div>
							<?php $this->destruir_sesion('error_login'); ?>
						<?php endif ?>



						<div class="card card-primary">
							<div class="card-header">
								<h4>Iniciar sesion</h4>
							</div>

							<div class="card-body">
								<form method="POST" action="<?= $this->get_link('validar_login') ?>" class="needs-validation" novalidate="">
									<div class="form-group">
										<label for="user">Usuario</label>
										<input id="user" type="text" class="form-control" name="nombreUsuario" tabindex="1" autocomplete="off" required autofocus>
										<div class="invalid-feedback">
											Por favor introduce tu usuario
										</div>
									</div>

									<div class="form-group">
										<div class="d-block">
											<label for="password" class="control-label">Contraseña</label>
										</div>
										<input id="password" type="password" class="form-control" name="claveUsuario" tabindex="2" required>
										<div class="invalid-feedback">
											Por favor introduce tu contraseña
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="3">
											Iniciar
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="simple-footer">
							Copyright &copy; Joyner-Dev 'ジョイナーニャ'
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script src="<?= $this->base_url('public/js/jquery-3.3.1.min.js') ?>"></script>
	<script src="<?= $this->base_url('public/js/popper.min.js') ?>"></script>
	<script src="<?= $this->base_url('public/js/bootstrap.min.js') ?>"></script>
	<script src="<?= $this->base_url('public/js/jquery.nicescroll.min.js') ?>"></script>
	<script src="<?= $this->base_url('public/js/moment.min.js') ?>"></script>
	<script src="<?= $this->base_url('public/js/stisla.js') ?>"></script>
	<script src="<?= $this->base_url('public/js/scripts.js') ?>"></script>

</body>

</html>