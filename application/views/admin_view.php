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
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="border: 1px solid red;height: 100px;">
					<div class="col-md-4" style="border: 1px solid #000;height: 90px;">
						<div class="expense">
							<div class="expense-icon"><i class="fas fa-money-bill-wave"></i></div>
							<div class="expense-text">$1,000.00</div>
						</div>
					</div>
					<div class="col-md-4" style="border: 1px solid #000;height: 90px;">
						
					</div>
					<div class="col-md-4" style="border: 1px solid #000;height: 90px;">
						
					</div>
				</div>
			</div>
		</div>
	<!-- DataTables -->
	<script  src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js" type="text/javascript" ></script>
	</body>
</html>