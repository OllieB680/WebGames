<!DOCTYPE html>
<?php session_start();
      include_once("../controller/routing.php"); ?>
	 
<html>
<head>
	<title>Contact - Atomic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
	
	<?php
	include_once("../content/header.php");
	?>
</head>

<body class="contactBg">
		<div class="row" style="margin-top:15px;">
		  <div class="col-sm-3"></div>
		  <div class="col-sm-6 contactForm">
			<h2>Contact Us</h2>
			<p>Feel free to contact us to leave any feedback or to report any issues.</p>
			
			<h3>Submit some feedback :</h3>
			  <form>
				<div class="form-group">
				  <label for="email">Username:</label>
				  <input type="email" class="form-control" id="email" placeholder="Enter username">
				</div>
				<div class="form-group">
				  <label for="sub">Subject:</label>
				  <input class="form-control" id="sub" placeholder="Enter Subject">
				</div>
				<div class="form-group">
				  <label for="fb">Feedback:</label>
				  <textarea rows="4" class="form-control" id="fb" placeholder="Leave your feedback here"></textarea>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			  </form>
			  <div class="clear"></div>
			  <h3>Email us :</h3>
			  <p>Click on the link here to send us an email</p>
			  <p><a href="mailto:atomicgamesuos@gmail.com?Subject=Atomic%20Games%20Feedback" target="_top">Send Email</a></p>
		  </div>
		  <div class="col-sm-3"></div>
		</div>
		<div class="clear"></div>
		
<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
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