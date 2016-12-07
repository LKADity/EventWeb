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
					<tr>
						<td>blablo</td>
						<td>1</td>
						<td>120000</td>
						<td>Approved</td>
						<td><a href="#">Accept</a> <a href="#">Decline</a></td>
					</tr>
					<!--iteration end-->
				</tbody>
			</table>

			<h3>STAND</h3>
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
					<tr>
						<td>blabla</td>
						<td>2</td>
						<td>240000</td>
						<td>Not Approved</td>
						<td><a href="#">Change status</a></td>
					</tr>
					<tr>
						<td>blablo</td>
						<td>1</td>
						<td>120000</td>
						<td>Approved</td>
						<td><a href="#">Change status</a></td>
					</tr>
					<!--iteration ends-->
				</tbody>
			</table>

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
					<tr>
						<td>blabla</td>
						<td>2</td>
						<td>240000</td>
						<td>Not Approved</td>
						<td><a href="#">Change status</a></td>
					</tr>
					<tr>
						<td>blablo</td>
						<td>1</td>
						<td>120000</td>
						<td>Approved</td>
						<td><a href="#">Change status</a></td>
					</tr>
					<!--iteration ends-->
				</tbody>
			</table>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>