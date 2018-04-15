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
	
	<h1 style="text-align:center;">Homepage</h1>
		<div class="clear"></div>
	
	<div class="row">
		<div class="col-sm-1"></div>			
		<div class="col-sm-5">
			<div class="contactForm">
				<h2 class="sectionTitle">We're Live!</h2>
					<p class="contentText">Atomic Games is live and our first game is here!</p>
						<p class="contentText">Play our all new Impossible game and see if you can survive....</p>
						<p class="contentText">Game controls can be found in the settings page</p>
					
				<div class="row">
					<div class="col-sm-4"></div>			
						<div class="col-sm-4">
							<form action="../GameUniGL\index.php">
								<input class="btn btn-default buttonsAG" type="submit" value="Play the Impossible Game" />
							</form>
						</div>
					<div class="col-sm-4"></div>
				</div>	
				
				<p class="contentText">Also check out the leaderboards to see how you rank against your friends and other people.</p>
				
				<div class="row">
					<div class="col-sm-4"></div>			
						<div class="col-sm-4">
							<form action="../pages\leaderboards.php">
								<input class="btn btn-default buttonsAG" type="submit" value="View the leaderboards" />
							</form>
						</div>
					<div class="col-sm-4"></div>
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
		
		<div class="col-sm-5">
			<div class="contactForm">
				<h2 class="sectionTitle">Upcoming Developments</h2>
					<p class="contentText">Make sure to follow us on Facebook and Twitter to stay up to date with different developments and updates!</p>
						<p class="contentText">Links can be found at the bottom of the page.</p>
					<div class="clear"></div>
					
				<p class="contentText">The development timeline can also give you an overview about coming changes happening to Atomic Games.</p>
					<p class="contentText">View the timeline below!.</p>
					
				<div class="row">
					<div class="col-sm-2"></div>			
						<div class="col-sm-4">	
							<form action="../pages\leaderboards.php">
								<input class="btn btn-default buttonsAG" type="submit" value="View the development timeline" />
							</form>
						</div>
					<div class="col-sm-6"></div>
				</div>
			  <div class="clear"></div>
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


