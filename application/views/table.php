<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" type="text/css" />
	<!-- DataTable -->
	<link href="<?php echo base_url('assets/DataTables/datatables.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<button type="button" id="getText">cargar gastos</button>
			<button type="button" id="expenses">enviar gastos</button>
			<h3 style="text-align: center; color: #000000">Relación de Gastos</h3>
			<h4 style="text-align: right; color: #111781">Ahorro: $ 4,087.00 </h4>
			<h4 style="text-align: center;">Quincena: $2,000.00 </h4>
			<?php
				foreach ($suma as $total => $valor) {
				$total = number_format( $valor['total'], 2, '.', '' );
				$base = number_format( 2000, 2, '.', '');
			?>

			<h5 style="text-align: center;">Gastado: $<?= $total; ?></h5>
			<h5 style="text-align: center;">Quedan: $<?= number_format( $base - $total, 2, '.', '' ); ?></h5>

			<?php  } ?>

			<div id="mens"></div>

			<div class="table-responsive">
				<table id="mytable" class="table table-bordred table-striped">
					<thead>
						<!--<th><input type="checkbox" id="checkall"></th> -->
						<th>Fecha</th>
						<th>Concepto</th>
						<th>Precio</th>
					</thead>
					<tbody>
						<?php foreach ( $data as $gastos => $gasto ) : ?>

							<tr>
								<?php if ( $gasto['precio'] >= '100' ) : ?>
									<!-- <td style="color: red;"><a class="delete" style="color: red;" id="del_<?=$gasto['idGasto']?>"><i class="fas fa-asterisk"></i></a></td> -->
									<td style="color: red;"><?=$gasto['fecha']?></td>
									<td style="color: red;"><?=$gasto['concepto']?></td>
									<td style="color: red;">$ <?= number_format( $gasto['precio'], 2, '.', '' ); ?> </td>
								<?php else : ?>
									<!-- <td style="color: black;"><a class="delete" style="color: black;" id="del_<?=$gasto['idGasto']?>"><i class="fas fa-asterisk"></i></a></td> -->
									<td style="color: black;"><?=$gasto['fecha']?></td>
									<td style="color: black;"><?=$gasto['concepto']?></td>
									<td style="color: black;">$ <?= number_format( $gasto['precio'], 2, '.', '' ); ?> </td>
								<?php endif; ?>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

	<script  src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script  src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script  src="<?php echo base_url(); ?>assets/js/table.js"></script>
	<script  src="<?php echo base_url(); ?>assets/js/pendientes.js"></script>
	<!-- DataTables -->
	<script  src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js" type="text/javascript" ></script>
</body>
</html>
