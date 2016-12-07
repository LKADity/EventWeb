<?php 
	$performer = [];
	foreach ($lineup as $val) {
		if ($val->title == 'gueststar') {
			$gueststar = $val;
		}else {
			$performer[] = $val;
		}
	}
	
 ?>
<head>
	<title>LINEUP</title>
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
		.square {
			background-color: #3884c7;
			height: 330px;
			width: 95%;
			margin: 10px;
			margin-bottom: 30px;
		}
		.square>.img-thumbnail {
			width: 90%;
			height: 250px;
			margin-left: 5%;
			margin-top: 25px;
		}
	</style>
</head>
<body>
	<div class="img-header container-fluid">
		<h1>LINEUP</h1>
	</div>

	<div class="container">
		<!--start iteration-->
		<div class="col-sm-6">
			<div class="square" style="background-color: red">
				<img src="<?php echo base_url().'assets/uploads/'.$gueststar->pic1; ?>" class="img-thumbnail">
				<center><p style="color: white; font-size: 2.5em"><b><?php echo $gueststar->name ?></b></p></center>
			</div>
		</div>

		<?php 
			foreach ($performer as $val) {
		?>
				<div class="col-sm-6">
					<div class="square" style="background-color: blue">
						<img src="<?php echo base_url().'assets/uploads/'.$val->pic1; ?>" class="img-thumbnail">
						<center><p style="color: white; font-size: 2.5em"><b><?php echo $val->name ?></b></p></center>
					</div>
				</div>
		<?php
			}
		 ?>
		
		<!--end iteration-->
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>