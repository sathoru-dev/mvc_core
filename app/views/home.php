<section class="section">

	<div class="section-body">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card card-statistic-2">
					<div class="card-stats">
						<div class="card-stats-title">Facturas</div>
						<div class="card-stats-items">
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset($facturas['pendiente']) ? $facturas['pendiente'] : '0' ?></div>
								<div class="card-stats-item-label">Pendientes</div>
							</div>
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset ($facturas['borrador'] ) ? $facturas['borrador'] : '0' ?></div>
								<div class="card-stats-item-label">Borradores</div>
							</div>
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset ($facturas['pago']) ? $facturas['pago'] : '0' ?></div>
								<div class="card-stats-item-label">Completadas</div>
							</div>
						</div>
					</div>
					<div class="card-icon shadow-success bg-success">
						<i class="fas fa-clipboard-list"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total Facturas</h4>
						</div>
						<div class="card-body">
							<?= $facturas['total'] ?>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="card card-statistic-2">
					<div class="card-stats">
						<div class="card-stats-title">Cargas</div>
						<div class="card-stats-items">
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset($carga['inventario']) ? $carga['inventario'] : 0 ?></div>
								<div class="card-stats-item-label">inventario</div>
							</div>
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset($carga['borrador']) ? $carga['borrador'] : 0 ?></div>
								<div class="card-stats-item-label">Borradores</div>
							</div>
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset($carga['completada']) ? $carga['completada'] : 0 ?></div>
								<div class="card-stats-item-label">Completadas</div>
							</div>
						</div>
					</div>
					<div class="card-icon shadow-success bg-success">
						<i class="fas fa-truck-moving"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total Cargas</h4>
						</div>
						<div class="card-body">
							<?= $carga['total'] ?>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12">
				<div class="card card-statistic-2">
					<div class="card-stats">
						<div class="card-stats-title">Rubros venta</div>
						<div class="card-stats-items">
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset($rubros['kilos_vendidos']) ? $rubros['kilos_vendidos'] : 0 ?></div>
								<div class="card-stats-item-label">Kilos</div>
							</div>
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset($rubros['sacos_vendidos']) ? $rubros['sacos_vendidos'] : 0 ?></div>
								<div class="card-stats-item-label">Sacos</div>
							</div>
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset($rubros['cestas_vendidas']) ? $rubros['cestas_vendidas'] : 0 ?></div>
								<div class="card-stats-item-label">Cestas</div>
							</div>
							<div class="card-stats-item">
								<div class="card-stats-item-count"><?= isset($rubros['unidades_vendidas']) ? $rubros['unidades_vendidas'] : 0 ?></div>
								<div class="card-stats-item-label">Unidades</div>
							</div>
						</div>
					</div>
					<div class="card-icon shadow-success bg-success">
						<i class="fas fa-carrot"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Rubros registrados</h4>
						</div>
						<div class="card-body">
							<?= $rubros['total_rubros'] ?>
						</div>
					</div>
				</div>
			</div>

			<!--
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card card-statistic-2">
					<div class="card-chart">
						<canvas id="abonos-chart" height="80"></canvas>
					</div>
					<div class="card-icon shadow-primary bg-primary">
						<i class="fas fa-dollar-sign"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>abonos en el ultimo mes</h4>
						</div>
						<div class="card-body">
							<?="a" #$total_abonos; ?>$
						</div>
					</div>
				</div>
			</div>-->


		</div>
</section>

<input type="hidden" id="data_chart_fechas" value="<?= $data_dias ?>">
<input type="hidden" id="data_chart_abonos" value="<?= $data_abonos ?>">

