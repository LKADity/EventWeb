<head>
	<title>LOGIN</title>
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
		<h1>LOGIN</h1>
	</div>

	<div class="container" style="margin-bottom: 20px; background-color: #efefef; padding: 15px; border-radius: 10px">
		<form class="col-md-3" action="<?php echo base_url().'index.php/event/login_process'; ?>" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<input type="button" class="btn btn-primary" value="LOGIN">
			<br><br>
			<p>Dont have any account? <?php echo anchor('event/form_registration','Register'); ?></p>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>