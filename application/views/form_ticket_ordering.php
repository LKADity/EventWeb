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
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    /*z-index: 1;  Sit on top */
		    padding-top: 100px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		    background-color: #fefefe;
		    margin: auto;
		    padding: 20px;
		    border: 1px solid #888;
		    width: 80%;
		}

		/* The Close Button */
		.close {
		    color: #aaaaaa;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}

		.close:hover,
		.close:focus {
		    color: #000;
		    text-decoration: none;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="img-header container-fluid">
		<h1>TICKET</h1>
	</div>

	<?php if (isset($message_display) || isset($error_message)) { ?>
		<div id="myModal" class="modal"> 
		  <!-- Modal content -->
			<div class="modal-content">
				<span class="close">×</span>
				<p><?php echo $message_display; ?></p>
			</div> 
		</div>
	<?php } ?>

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

<script type="text/javascript">
    //$(window).load(function(){
        $('#myModal').modal('show');
    //});
</script>

<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	    modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
</script>