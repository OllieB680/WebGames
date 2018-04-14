<!DOCTYPE html>
<?php session_start();
      include_once("../controller/routing.php"); ?>
	 
<html>
<head>
	<title>Atomic Games - Main Game</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	
	<?php
	include_once("../content/header.php");
	?>
</head>

<body>


<div class="clear"></div>
		
<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
	
	<div class="row">
		<div class="col-sm-1"></div>			
		<div class="col-sm-10">
			<div class="contactForm">
				<div class="clear"></div>
					<div style="text-align:center;"><iframe class="gameWindow" src="..\GameUniGL\index.php" name="MainGame" style="border:2px solid black;text-align:center;"></iframe></div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
		<div class="clear"></div>
	<div class="row">
		<div class="col-sm-1"></div>			
			<div class="col-sm-10">
				<div class="contactForm">
					<h2 style="padding-left:20px;">Game Controls:</h2>
						<div class="clear"></div>
					<p class="gameControls"><i class="fas fa-arrow-up"></i> - W</p>
					<p class="gameControls"><i class="fas fa-arrow-down"></i> - S</p>
					<p class="gameControls"><i class="fas fa-arrow-left"></i> - A</p>
					<p class="gameControls"><i class="fas fa-arrow-right"></i> - D</p>
				</div>
			</div>
		<div class="col-sm-1"></div>
	</div>
	
	<div class="clear"></div>
	
<?php
	include_once("../content/footer.php");
?>
		

<?php
}
else if (!isset($_SESSION['loggedOn']) || $_SESSION['loggedOn'] == 0) {
	?>

<?php 
}
?>
</body>
</html>