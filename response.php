<!DOCTYPE HTML>
<html>
	<head>
		<title>Response for Form</title>
	</head>
	<body onload="timer=setTimeout(function(){ window.location='index.php';}, 10000)"
		style="background-color:#6ED26E;color:#033a74;text-align:center;margin-top:25%">

<?php
		if($_GET["status"] == "thanks"){
?>		
		<h2>Thank You for getting in touch. Your response has been recorded and will be replied to shortly.</h2>

<?php
		} else {
?>			
		<h3>There was problem with the information you filled out. We request you to kindly refill the form with valid details</h3>

<?php
		}		
?>

		<h4>You will be automatically redirected to the Home Page in 10 seconds, if not, please click <a href="index.php">here</a></h4> 

	</body>
</html>