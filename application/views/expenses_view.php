<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" type="text/css" />
		<!-- DataTable -->
		<link href="<?php echo base_url('assets/DataTables/datatables.min.css'); ?>" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="col-md-12">
			<h3 style="text-align: center;color: #000000; margin-bottom: 30px;">Relación de gastos</h3>
			<!--<button id="sign" class="sign">Firmar</button>
			<div id="contentSign">
				<input type="password" name="password" id="inputSign" style="display: none;">
			</div>-->
		</div>
		<div class="col-md-4 box-relation">
			<h5 style="text-align: center;color: #000000;">Quincena $4,394.00</h5>
		</div>
		<?php foreach ($suma as $total => $valor) : ?>
			<?php $total = number_format( $valor['total'], 2, '.', '' ); ?>
			<?php $base = number_format( 4394, 2, '.', ''); ?>
		<div class="col-md-4 box-relation">
			<h5 style="text-align: center">Gastado: $<?= $total; ?></h5>
		</div>
		<div class="col-md-4 box-relation">
			<h5 style="text-align: center">Quedan: $<?= number_format( $base - $total, 2, '.', '' ); ?></h5>
		</div>
		<?php endforeach; ?>

	<div class ="container">
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="table table-hover dataTable no-footer dtr-inline" role="grid" aria-describedby="example_info" style="width: 100%;" width="100%" cellspacing="0">
			        <thead>
			        <tr role="row">
			        	<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 169.5px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Fecha</th>
			        	<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 266.5px;" aria-label="Position: activate to sort column ascending">Concepto</th>
			        	<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 127.5px;" aria-label="Office: activate to sort column ascending">Precio</th>
			        	<th class="actions sorting_disabled" rowspan="1" colspan="1" style="width: 117px;" aria-label="Actions"></th>
			        </tr>
			        </thead>
			        <tbody>
			        <?php foreach ($data as $gastos => $gasto) : ?>
				        <tr role="row" class="odd">
				        	<?php if ( $gasto['precio'] >= '100' ) : ?>
				                <td class="expense-danger" tabindex="0" class="sorting_1"><?=$gasto['fecha'];?></td>
				                <td class="expense-danger"><?=$gasto['concepto'];?></td>
				                <td class="expense-danger"><?=number_format($gasto['precio'], 2, '.', '');?></td>
				                <td class=" actions">
				                    <!--<a href="#" class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
				                    <a href="#" class="btn btn-icon btn-pill btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-trash"></i></a>-->
				                    <button data-id="<?=$gasto['idGasto'];?>" name="update" type="button" class="btn btn-icon btn-pill btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-fw fa-edit"></i></button>
				                </td>
				            <?php else : ?>
				                <td class="expense-text" tabindex="0" class="sorting_1"><?=$gasto['fecha'];?></td>
				                <td class="expense-text"><?=$gasto['concepto'];?></td>
				                <td class="expense-text"><?=number_format($gasto['precio'], 2, '.', '');?></td>
				                <td class=" actions">
				                    <!--<a href="#"  id="" name='update' class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip" title="Edit" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw fa-edit"></i></a> -->
				                    <button data-id="<?=$gasto['idGasto'];?>" data-name="<?=$gasto['concepto'];?>" name="update" type="button" class="btn btn-icon btn-pill btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-fw fa-edit"></i></button>
				                    <!--<a href="#" id="" name='delete' class="btn btn-icon btn-pill btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-trash"></i></a>-->
				                </td>
				        	<?php endif; ?>
				        </tr>
			        <?php endforeach; ?>
			    </tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
	          <input type="text" name="bookId" id="bookId" value="" class="" />
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Recipient:</label>
	            <input type="text" class="form-control" id="recipient-name">
	          </div>
	          
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button id="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button id="update" type="button" class="btn btn-primary">Update</button>
	      </div>
	    </div>
	  </div>
	</div>
	<script  src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script  src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script  src="<?php echo base_url(); ?>assets/js/table.js"></script>
	<script  src="<?php echo base_url(); ?>assets/js/expenses.js"></script>
	<!-- DataTables -->
	<script  src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js" type="text/javascript" ></script>
	</body>
</html>