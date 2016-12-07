<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
		.nav.navbar-nav.navbar-right li a {
			color: #337ab7;
		}
		.nav.navbar-nav.navbar-right li a:hover {
			color: #2d6a9f;
			background-color: #e6e6e6;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default" style="margin-bottom: 0px">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      			</button>
    			<div class="square">
				<img src="<?php echo base_url().'assets/img/bg.jpg'; ?>" class="img-thumbnail">
			</div>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url().'index.php/event/index'; ?>">HOME</a></li>
					<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INFORMATION</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url().'index.php/event/view_about_us'; ?>">ABOUT US</a></li>
							<li><a href="<?php echo base_url().'index.php/event/view_venue'; ?>">VENUE</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url().'index.php/event/view_lineup'; ?>">LINEUP</a></li>
					<li><a href="<?php echo base_url().'index.php/user/form_ticket_ordering'; ?>">TICKET</a></li>
					<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REGISTRATION</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url().'index.php/user/form_registration_performer'; ?>">PERFORMER</a></li>
							<li><a href="<?php echo base_url().'index.php/user/form_registration_stand'; ?>">STAND</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url().'index.php/event/view_contact'; ?>">CONTACT</a></li>
					<li>
						<?php if (isset($_SESSION['logged_in'])) { ?>
							<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="color: green">
							<?php 
								if ($_SESSION['role']['role'] == 'admin') {
									echo "ADMIN";
								}else {
									echo $this->session->userdata['logged_in']['username'];
								}
							 ?></span></a>
								<ul class="dropdown-menu">
									<li>
										<?php 
											if ($_SESSION['role']['role'] == 'admin') { ?>
												<a href="<?php echo base_url().'index.php/admin/admin_page'; ?>">ADMIN</a>	
										<?php
											}else { ?>
												<a href="<?php echo base_url().'index.php/user/profile'; ?>">PROFILE</a>
										<?php
											}
										 ?>
									</li>
									<li><a href="<?php echo base_url().'index.php/event/logout'; ?>" style='background-color: #ff3333; color: white'>LOGOUT</a></li>
								</ul>
							</li>

						<?php } else { ?>
							<a href="<?php echo base_url().'index.php/event/form_login'; ?>" style='background-color: #337ab7; color: white'>LOGIN</a>
						<?php } ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
		$('.dropdown-toggle').dropdown();
	</script>
</body>
