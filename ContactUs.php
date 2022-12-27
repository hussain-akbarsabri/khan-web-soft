<!DOCTYPE html>
<html>
	<head>
		<title>Khan Websoft</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
	    <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</head>
	<body>

		<!-- Menu Bar -->
		<?php include('includes/header.php'); ?>
		
		<!-- Input Form -->
		<div class="container">

			<!-- 1st column -->
			<div class="col-md-8">
				<div class="panel" style="color:white; background:linear-gradient(45deg,#002E5B 0%,#1c1c1c 100%);">

					<!-- Panel Head -->
					<div class="panel-heading">
						<center>
							<b style="font-size: 20px;">Give Us Feedback</b>
						</center>
					</div>

					<!-- Panel Body -->
					<div class="panel-body pan" style="color:black; background-color:#f9f9f9;">					
						<form action="" method="" >
		 					<label> Name: </label>
		 					<input type="text" class="form-control" placeholder="please enter your name" required>
		 					<br>
							<label> Email: </label>
	 						<input type="email" class="form-control">
							<br>
							<label> Number: </label>
		 					<input type="number" class="form-control">
							<br>
							<textarea class="form-control">Enter your message...</textarea>
							<br>
		 					<input type="submit" class="btn btn-md btn-primary" name="">
		 				</form>
					</div>
				</div>
			</div>

			<!-- 2nd column -->
			<div class="col-md-4">
				<div class="panel" style="color:white; background:linear-gradient(45deg,#002E5B 0%,#1c1c1c 100%);">

					<!-- Panel Head -->
					<div class="panel-heading">
						<center>
							<b style="font-size: 20px;">Contact Details</b>
						</center>
					</div>

					<!-- Panel Body -->
					<div class="panel-body" style="color:black; background-color:#f9f9f9;">					
						<span class="glyphicon glyphicon-message"> Shehryarkhan1997@gmail.com</span>
						<br>
						<span class="glyphicon glyphicon-phone"> 0301-4055158</span>	
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php include('includes/footer.php'); ?>
		
	</body>	
</html>