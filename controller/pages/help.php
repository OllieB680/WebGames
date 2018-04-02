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

<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
	
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 contactForm">
			<h2>Help / FAQ's</h2>
			<p class="textAG">Below are different questions and their answers. Simply click on a question to reveal the answer.</p>
			
			<div class="row">
				<div class="col-sm-6">
					<div class="panel-group">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" href="#question1Col1">Collapsible panel</a>
							</h4>
						  </div>
						  <div id="question1Col1" class="panel-collapse collapse">
							<div class="panel-body">Panel Body</div>
							<div class="panel-footer">Panel Footer</div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel-group">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" href="#question1Col2">Collapsible panel</a>
							</h4>
						  </div>
						  <div id="question1Col2" class="panel-collapse collapse">
							<div class="panel-body">Panel Body</div>
							<div class="panel-footer">Panel Footer</div>
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