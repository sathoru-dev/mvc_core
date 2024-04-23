
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Error &mdash; Stisla</title>
	<link rel="stylesheet" href="<?= $this->base_url('public/css/bootstrap.min.css') ?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $this->base_url('public/css/all.css') ?>">
	<link rel="stylesheet" href="<?= $this->base_url('public/css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->base_url('public/css/components.css') ?>">
</head>

<body>
	<div id="app">
    <section class="section">
    <div class="container">
        <div class="page-error">
            <div class="page-inner">
                <i class="fas fa-exclamation-triangle text-danger" style="font-size: 200px;"></i>

                <h2 class="mt-4">Error</h2>

                <div class="page-description  ">
                    Debido al tipo de usuario se ha bloqueado el acceso a esta pagina.
                    <br>
                    Pedimos disculpas por las molestias ocasionadas :3
                </div>
                <div class="page-search">
                    <div class="mt-3">
                        <a href="<?= $this->get_link('inicio')?>">Regresar a Inicio</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="simple-footer mt-5">
            Copyright &copy; Joyner-Dev 'ジョイナーニャ'
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
	<script src="<?= $this->base_url('public/js/custom.js') ?>"></script>

</body>

</html>