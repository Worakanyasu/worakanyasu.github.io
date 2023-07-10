# worakanyasu.github.io
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Elite Hotel Booking Widget Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Elite Hotel Booking Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //font files -->
<!-- css files -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' media="all">
<link href="css/wickedpicker.css" rel="stylesheet" type="text/css" media="all">        
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- /css files -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- /js files -->		
</head>
<body>
<div class="header">
	<h1>Elite Hotel Booking</h1>
</div>

        <div class="banner-top">
				<h2>Book Your Room Today</h2>
				<div class="banner-bottom">
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check In Date</p>
						</div>
						<div class="bnr-right">
							<input class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check Out Date</p>
						</div>
						<div class="bnr-right">
							<input class="date" id="datepicker1" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check In Time</p>
						</div>
						<div class="bnr-right time-pic">
							<input type="text" id="timepicker" name="timepicker" class="timepicker form-control"><br>
						</div>
						
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check Out Time</p>
						</div>
						<div class="bnr-right time-pic">
							<input type="text" id="timepicker" name="timepicker" class="timepicker form-control"><br>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Adults</p>
						</div>
						<div class="bnr-right">
							<select>
								<option  class="rm" value="volvo">0</option>
								<option  class="rm" value="saab">1</option>
								<option  class="rm" value="opel">2</option>
								<option  class="rm" value="audi">3 or 3+</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Children</p>
						</div>
						<div class="bnr-right">
							<select>
								<option  class="rm" value="volvo">0</option>
								<option  class="rm" value="saab">1</option>
								<option  class="rm" value="opel">2</option>
								<option  class="rm" value="audi">3 or 3+</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Room</p>
						</div>
						<div class="bnr-right">
							<select>
								<option value="volvo">Select a type</option>
								<option value="saab">Single</option>
								<option value="opel">Double</option>
								<option value="audi">Suite</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-btn">
						<form>
							<input type="submit" value="Book Now">
						</form>
					</div>
				</div>
				<!---start-date-piker---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
	<!---/End-date-piker---->
</div>
<div class="footer">
	<p>© 2016 Elite Hotel Booking. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
</div>
<!-- js for time-picker -->
<script type="text/javascript" src="js/wickedpicker.js"></script>
<script type="text/javascript">
	$('.timepicker').wickedpicker({twentyFour: false});
	$('.timepicker-two').wickedpicker({twentyFour: true});
</script>
<!-- /js for time-picker -->
</body>
</html>