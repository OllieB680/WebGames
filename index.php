<!DOCTYPE html>
<?php session_start();
      include_once("controller/routing.php"); ?>
<html>
<head>
	<title>Atomic Games - Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
	
</head>
<body>

<?php
	include_once("content/header.php");
?>
<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
	<div class="row">
		<div class="col-sm-1"></div>			
		<div class="col-sm-5">
			<div class="contactForm">
				<h2 class="sectionTitle">We're Live!</h2>
				<p></p>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="contactForm">
				<h2 class="sectionTitle">Upcoming Event</h2>
				<p></p>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
	
	<div class="clear"></div>
	
	
<?php
	include_once("content/footer.php");
?>
		

<?php
}
else if (!isset($_SESSION['loggedOn']) || $_SESSION['loggedOn'] == 0) {
	?>

<?php 
}
?>

<?php include_once("controller/login_controller.php");?>
</body>
</html> 


