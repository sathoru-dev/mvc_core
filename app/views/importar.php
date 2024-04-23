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
					<div class="col-12 col-sm-8 offset-sm-2 col-md-8 offset-md-3 col-lg-6 offset-lg-3 col-xl-8 offset-xl-2">
						<div class="login-brand">
							Bienvenid@
						</div>

						<div class="card">
							<div class="card-body">
								<div class="text-center">
									<i class="fas fa-cloud-upload-alt text-info" style="font-size: 80px;"></i>
								</div>
								<h4 class="text-center">Importar base de datos</h4>
								<div class="text-center">
									<small>
										¿De donde la obtuviste? Sospechoso.....
									</small>
								</div>
								<div class="row justify-content-center">
									<div class="col-10">
										<div class="section-title">Buscar archivo</div>
										<div class="form-group">
											<div class="input-group mb-3">
												<input type="text" value="<?= $ruta ?>" class="form-control" disabled aria-label="">
												<div class="input-group-append">
													<button class="btn btn-primary" id="btn_descargar" type="button">Descargar</button>
												</div>
											</div>
										</div>
										
									</div>
								</div>
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