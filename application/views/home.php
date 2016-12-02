<head>
	<title>HOME</title>
	<style>
		.countdown {
			display: inline-block;
			background: url("<?php echo base_url().'assets/img/bg.jpg'; ?>") center;
			color: white;
			font-weight: bolder;
			font-size: 3em;
			width: 70px;
			height: 65px;
			margin: 5px;
		}

		.countdown>p {
			color: black;
			font-weight: lighter;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
 	   <!-- Indicators -->
 	   <ol class="carousel-indicators">
 	       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 	       <li data-target="#myCarousel" data-slide-to="1"></li>
 	       <li data-target="#myCarousel" data-slide-to="2"></li>
 	   </ol>
	
	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">
	        <div class="item active">
	            <img src="<?php echo base_url().'assets/img/facebook.png'; ?>" alt="Pic1">
	        </div>
	
	        <div class="item">
	            <img src="<?php echo base_url().'assets/img/twitter.png'; ?>" alt="Pic2">
	        </div>
	
	        <div class="item">
	            <img src="<?php echo base_url().'assets/img/instagram.png'; ?>" alt="Pic3">
	        </div>
	    </div>
	
	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	    </a>
	</div>

	<br><br>
	<div class="container" style="max-width: 840px; max-height: auto">
		<div class="embed-responsive embed-responsive-16by9">
			<center><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NIGuqK1j8T8" frameborder="0"></iframe></center>
		</div>
	</div>

	<div class="container-fluid">
		<center><h1>COUNTDOWN TO THE EVENT</h1></center>

		<center>
			<div class="countdown" id="days_count"></div>
			<div class="countdown" id="hours_count"></div>
			<div class="countdown" id="minutes_count"></div>
			<div class="countdown" id="seconds_count"></div>
		</center>
	</div>

	<div class="container-fluid" style="background: url('<?php echo base_url().'assets/img/bg.jpg'; ?>'); background-size: 100% ;color: white; margin-top: 10px">
		<center><h1>PRESENTED BY</h1></center>
		<center><h1>OFFICIAL LIFESTYLE PARTNER</h1></center>
		<center><h1>SUPPORTED BY</h1></center>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
		var target_date = new Date('December 31 2016 16:00:00 GMT+0700').getTime();
		var days, hours, minutes, seconds;
		var days_count = document.getElementById('days_count');
		var hours_count = document.getElementById('hours_count');
		var minutes_count = document.getElementById('minutes_count');
		var seconds_count = document.getElementById('seconds_count');
		setInterval(function () {
		    var current_date = new Date().getTime();
		    var seconds_left = (target_date - current_date) / 1000;
 
		    days = parseInt(seconds_left / 86400);
    		seconds_left = seconds_left % 86400;
    	 
    		hours = parseInt(seconds_left / 3600);
    		seconds_left = seconds_left % 3600;
     
    		minutes = parseInt(seconds_left / 60);
    		seconds = parseInt(seconds_left % 60);

    		days_count.innerHTML = days+"<p>Days</p>";
    		hours_count.innerHTML = hours+"<p>Hours</p>";
    		minutes_count.innerHTML = minutes+"<p>Minutes</p>";
    		seconds_count.innerHTML = seconds+"<p>Seconds</p>";
		}, 1000);
	</script>
</body>