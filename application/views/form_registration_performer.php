<head>
	<title>REGISTER PERFORMER</title>
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
		<h1>PERFORMER</h1>
	</div>

	<div class="container" style="margin-bottom: 20px; background-color: #efefef; padding: 30px; padding-left: 70px; border-radius: 10px">
		<form class="form-horizontal" action="<?php echo base_url().'index.php/user/registration_performer'; ?>" method="post">
			<div class="form-group">
				<label for="name" class="control-label col-sm-1">Performer Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
			</div>

			<div class="form-group">
				<label for="description" class="control-label col-sm-1">Description</label>
				<div class="col-sm-6">
					<textarea name="address" rows="3" class="form-control" placeholder="Description" style="resize: none"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="pic1" class="control-label col-sm-1">Pictures</label>
				<div class="col-sm-3">
					<input type="file" name="pic1"><br>
					<input type="file" name="pic2">
				</div>
				<div class="col-sm-3">
					<input type="file" name="pic3"><br>
					<input type="file" name="pic4">
				</div>
			</div>

			<?php echo validation_errors(); ?>

			<br><input type="submit" class="btn btn-primary" value="REGISTER" style="font-size: 1.2em; font-weight: bolder;">
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>