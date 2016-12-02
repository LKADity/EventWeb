<head>
	<title>REGISTER USER</title>
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
		<h1>REGISTER</h1>
	</div>

	<div class="container" style="margin-bottom: 20px; background-color: #efefef; padding: 30px; padding-left: 70px; border-radius: 10px">
		<form class="form-horizontal" action="<?php echo base_url().'index.php/event/registration_process'; ?>" method="post">
			<div class="form-group">
				<label for="username" class="control-label col-sm-1">Username</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="control-label col-sm-1">Password</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
			</div>

			<div class="form-group">
				<label for="passconf" class="control-label col-sm-1">Confirm Password</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" name="passconf" placeholder="Confirm Password">
				</div>
			</div>
			
			<div class="form-group">
				<label for="name" class="control-label col-sm-1">Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
			</div>

			<div class="form-group">
				<label for="gender" class="control-label col-sm-1">Gender</label>
				<div class="col-sm-6">
					<select name="gender" class="form-control">
						<option value="1">Male</option>
						<option value="2">Female</option>
						<option value="3">Other</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="date" class="control-label col-sm-1">Birth Date</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" name="date">
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="control-label col-sm-1">Email</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="email" placeholder="Email">
				</div>
			</div>

			<div class="form-group">
				<label for="ktp" class="control-label col-sm-1">No. KTP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="ktp" placeholder="No. KTP">
				</div>
			</div>

			<div class="form-group">
				<label for="contact" class="control-label col-sm-1">Contact</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="contact" placeholder="Contact">
				</div>
			</div>

			<div class="form-group">
				<label for="address" class="control-label col-sm-1">Address</label>
				<div class="col-sm-6">
					<textarea name="address" rows="3" class="form-control" placeholder="Address" style="resize: none"></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="poss" class="control-label col-sm-1">Poss</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="poss" placeholder="Poss">
				</div>
			</div>

			<?php echo validation_errors(); ?>

			<br><input type="button" class="btn btn-primary" value="REGISTER" style="font-size: 1.2em; font-weight: bolder;">
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>