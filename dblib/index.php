<!DOCTYPE html>
<?php session_start();
      include_once("controller/routing.php"); ?>
<html>
<head>
	<title>Atomic Games - Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
	
</head>
<body>

<?php
	include_once("content/header.php");
?>



<div class="container">
	<div class="row">
			<div class="col-sm-3"></div>			
			<div class="col-sm-6">	
			</div>			
			<div class="col-sm-3"></div>
	</div>
</div>



<?php include_once("controller/login_controller.php");?>
</body>
<?php
	include_once("content/footer.php");
?>
</html> 
