<!DOCTYPE html>
<?php session_start();
      include_once("../controller/routing.php"); ?>
	 
<html>
<head>
	<title>Atomic Games - Settings</title>
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
	
	<h1 style="text-align:center;">Settings</h1>
		<div class="clear"></div>
	
	<div class="row">
		<div class="col-sm-1"></div>			
			<div class="col-sm-10">
				<div class="contactForm">
					<h2 style="padding-left:20px;">Game Controls For The Impossible Game:</h2>
						<h3 style="padding-left:20px;">Movement controls + Shooting</h3>
					
					<div class="clear"></div>
						
					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-2">
							<p class="gameControls"><i class="fas fa-arrow-up"></i> - W</p>
						</div>
						<div class="col-sm-2">
							<p class="gameControls"><i class="fas fa-arrow-down"></i> - S</p>
						</div>
						<div class="col-sm-2">
							<p class="gameControls"><i class="fas fa-arrow-left"></i> - A</p>
						</div>
						<div class="col-sm-2">
							<p class="gameControls"><i class="fas fa-arrow-right"></i> - D</p>
						</div>
						<div class="col-sm-2">
							<p class="gameControls"><i class="fas fa-crosshairs"></i> - Left mouse click</p>
						</div>
						<div class="col-sm-1"></div>
					</div>						
				</div>
			</div>
		<div class="col-sm-1"></div>
	</div>
	
	<div class="clear"></div>
	
	<div class="row">
		<div class="col-sm-1"></div>			
			<div class="col-sm-10">
				<div class="contactForm">
					<h2 style="padding-left:20px;">General Settings:</h2>
						<div class="clear"></div>
						
					<h3 style="padding-left:20px;">Request a new password</h3>	
					<div class="row">
						<div class="col-sm-12">
							<p class="contentText">Use the link <a href="mailto:atomicgamesuos@gmail.com?Subject=Atomic%20Games%20Change%20Password" target="_top">here</a> to email us for a new password.</p>
							<p class="contentText">Alternatively our email is atomicgamesuos@gmail.com. Make sure the subject of your email is password change and you tell us your username!</p>
						</div>	
					</div>	
					
					<div class="clear"></div>
					
					<h3 style="padding-left:20px;">Game Window Settings</h3>
						<p class="contentText">Change the size of the game window here.</p>
					<div class="row">
						<div class="col-sm-3">
							<label style="margin-left:10px;"><input type="radio" name="optradio"> Small Window</label>
						</div>
						<div class="col-sm-3">
							<label><input type="radio" name="optradio"> Medium Window</label>
						</div>
						<div class="col-sm-3">
							<label><input type="radio" name="optradio"> Large Window</label>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-default buttonsAG" onclick="alert('Settings Updated!')">Submit Changes</button>
						</div>
					</div>
					<div class="clear"></div>
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