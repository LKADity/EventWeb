<head>
	<title>REGISTER STAND</title>
	<style>
		.img-header {
			background: url("<?php echo base_url().'assets/img/bg.jpg'; ?>");
			background-size: 100%;
			color: white;
			height: 150px;
			margin-bottom: 20px;
		}
		.img-header>h1 {
			line-height: 100px;
			font-weight: bolder;
			font-size: 5em;
			margin-left: 5%;
		}
	</style>
</head>
<body>
	<div class="img-header container-fluid">
		<h1>TICKET</h1>
	</div>

	<div class="container" style="margin-bottom: 20px; background-color: #efefef; padding: 30px; border-radius: 10px">
		<form class="form-horizontal" action="<?php echo base_url().'index.php/user/ticket_ordering'; ?>" method="post">
			<table class="table">
				<thead>
					<tr style="font-size: 1.5em; font-style: bolder">
						<th>ADMISSION</th>
						<th>PRICE</th>
						<th>QTY</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>One Day Ticket</td>
						<td>Rp 120.000</td>
						<td><input type="number" name="amount" class="form-control input-sm" min="1" max="10" style="max-width: 50px"></td>
					</tr>
				</tbody>
			</table>

			<?php echo validation_errors(); ?>

			<input type="submit" class="btn btn-primary" value="ORDER" style="font-size: 1.2em; font-weight: bolder;">
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>