

<head>
	<title>TICKET</title>
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
		<h1>ADMIN</h1>
	</div>

	<div class="container" style="margin-bottom: 20px; background-color: #efefef; padding: 30px; border-radius: 10px">
		<h3>TICKETING</h3>
			<table class="table">
				<thead>
					<tr style="font-size: 1.5em; font-style: bolder">
						<th>USERNAME</th>
						<th>QTY</th>
						<th>PRICE</th>
						<th>STATUS</th>
						<th>ACTION</th>
					</tr>
				</thead>

				<tbody>
					<!--iteration starts-->
					<?php 
						foreach ($ticket as $key) {
					?>
						<tr>
							<td><?php echo $key->username ?></td>
							<td><?php echo $key->amount ?></td>
							<td><?php echo $key->amount * 120000 ?></td>
							<td>
								<?php 
									if ($key->status == '0') {
										echo "waiting";
									}else {
										echo "aproved";
									}
								 ?>
							</td>
							<td><a href="<?php echo site_url() ?>/Admin/acc_ticket/<?php echo $key->id; ?>">Accept</a> <a href="<?php echo site_url() ?>/Admin/dec_ticket/<?php echo $key->id; ?>">Decline</a></td>
						</tr>
					<?php		
						}
					 ?>
					<!--iteration end-->
				</tbody>
			</table>

			<h3>STAND</h3>
			<table class="table">
				<thead>
					<tr style="font-size: 1.5em; font-style: bolder">
						<th>NAME</th>
						<th>DESCRIPTION</th>
						<th>PIC1</th>
						<th>PIC2</th>
						<th>OWNER</th>
						<th>STATUS</th>
						<th>ACTION</th>
					</tr>
				</thead>

				<tbody>
					<!--iteration starts-->
					<?php 
						foreach ($stand as $key) {
					?>
						<tr>
							<td><?php echo $key->name ?></td>
							<td><?php echo $key->description ?></td>
							<td><?php echo $key->pic1 ?></td>
							<td><?php echo $key->pic2 ?></td>
							<td><?php echo $key->owner ?></td>
							<td>
								<?php 
									if ($key->status == '0') {
										echo "waiting";
									}else {
										echo "aproved";
									}
								 ?>
							</td>
							<td><a href="<?php echo site_url() ?>/Admin/acc_stand/<?php echo $key->id; ?>">Accept</a> <a href="<?php echo site_url() ?>/Admin/dec_stand/<?php echo $key->id; ?>">Decline</a></td>
						</tr>
					<?php
						}
					 ?>
					
					<!--iteration ends-->
				</tbody>
			</table>

			<h3>PERFORMER</h3>
			<table class="table">
				<thead>
					<tr style="font-size: 1.5em; font-style: bolder">
						<th>NAME</th>
						<th>DESCRIPTION</th>
						<th>PIC1</th>
						<th>PIC2</th>
						<th>PIC3</th>
						<th>PIC4</th>
						<th>TITLE</th>
						<th>OWNER</th>
						<th>STATUS</th>
						<th>ACTION</th>
					</tr>
				</thead>

				<tbody>
					<!--iteration starts-->
					<?php 
						foreach ($performer as $key) {
					?>
						<tr>
							<td><?php echo $key->name ?></td>
							<td><?php echo $key->description ?></td>
							<td><?php echo $key->pic1 ?></td>
							<td><?php echo $key->pic2 ?></td>
							<td><?php echo $key->pic3 ?></td>
							<td><?php echo $key->pic4 ?></td>
							<td><?php echo $key->title ?></td>
							<td><?php echo $key->owner ?></td>
							<td>
								<?php 
									if ($key->status == '0') {
										echo "waiting";
									}else {
										echo "aproved";
									}
								 ?>
							</td>
							<td><a href="<?php echo site_url() ?>/Admin/acc_performer/<?php echo $key->id; ?>">Accept</a> <a href="<?php echo site_url() ?>/Admin/dec_performer/<?php echo $key->id; ?>">Decline</a></td>
						</tr>
					<?php
						}
					 ?>
					
					<!--iteration ends-->
				</tbody>
			</table>

			<h3>USER</h3>
			<table class="table">
				<thead>
					<tr style="font-size: 1.5em; font-style: bolder">
						<th>USERNAME</th>
						<th>NAME</th>
						<th>GENDER</th>
						<th>DATE</th>
						<th>EMAIL</th>
						<th>KTP</th>
						<th>CONTACT</th>
						<th>ADDRESS</th>
						<th>POSS</th>
						<th>ACTION</th>
					</tr>
				</thead>

				<tbody>
					<!--iteration starts-->
					<?php 
						foreach ($user as $key) {
					?>
						<tr>
							<td><?php echo $key->username ?></td>
							<td><?php echo $key->name ?></td>
							<td><?php echo $key->gender ?></td>
							<td><?php echo $key->date ?></td>
							<td><?php echo $key->email ?></td>
							<td><?php echo $key->ktp ?></td>
							<td><?php echo $key->contact ?></td>
							<td><?php echo $key->address ?></td>
							<td><?php echo $key->poss ?></td>
							<td><a href="<?php echo site_url() ?>/Admin/del_user/<?php echo $key->id; ?>">delete</a></td>
						</tr>
					<?php
						}
					 ?>
					
					<!--iteration ends-->
				</tbody>
			</table>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>