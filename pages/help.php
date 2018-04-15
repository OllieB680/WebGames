<!DOCTYPE html>
<?php session_start();
      include_once("../controller/routing.php"); ?>
	 
<html>
<head>
	<title>Atomic Games - Help</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<?php
	include_once("../content/header.php");
	?>
</head>

<body>

<h1 class="title" style="text-align:center;">Help</h1>
		<div class="clear"></div>

<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
	
	
	
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 contactForm">
			<p class="textAG">Below are different questions and their answers. Simply click on a question to reveal the answer.</p>
			
			<div class="clear"></div>
			
			<div class="row">
				<div class="col-sm-6">
					<div class="panel-group">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" href="#question1Col1">Why isn't a game loading?</a>
							</h4>
						  </div>
						  <div id="question1Col1" class="panel-collapse collapse">
							<div class="panel-body">If the game does not initialise* then either refresh the page or navigate away from the game page and navigate back to it.</div>
							<div class="panel-footer">*It should be noted when first navigating to a page with a game the game takes a moment to initalise. After that the game should start.</div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel-group">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" href="#question1Col2">Why can't find myself in the leaderboards?</a>
							</h4>
						  </div>
						  <div id="question1Col2" class="panel-collapse collapse">
							<div class="panel-body">Refreshing the page should update the table, if you still can't find yourself then contact us. </div>
							<div class="panel-footer">We will be adding a search feature to the leaderboards as part of a new update.</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="clear"></div>
			
			<div class="row">
				<div class="col-sm-6">
					<div class="panel-group">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" href="#question2Col1">How do I contact you?</a>
							</h4>
						  </div>
						  <div id="question2Col1" class="panel-collapse collapse">
							<div class="panel-body">Our contact details are on the contact us page along with how to get in touch with us.</div>
							<div class="panel-footer">We will try to respond to and help solve all quieries as quick as possible.</div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel-group">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" href="#question2Col2">How can i change my password?</a>
							</h4>
						  </div>
						  <div id="question2Col2" class="panel-collapse collapse">
							<div class="panel-body">Send us an email with your username and we will change the password and send you an email containing the new password. At this time we will generate the password for you so keep it somewhere safe!</div>
							<div class="panel-footer">We will be adding a change password feature as part of a future update.</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-sm-2"></div>
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