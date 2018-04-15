<!DOCTYPE html>
<?php session_start();
      include_once("../controller/routing.php"); ?>
	 
<html>
<head>
	<title>Atomic Games - Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
	
	<?php
	include_once("../content/header.php");
	?>
</head>

<body class="contactBg">

	<h1 style="text-align:center;">Contact Us</h1>
		<div class="clear"></div>

		<div class="row" style="margin-top:15px;">
		  <div class="col-sm-2"></div>
		  <div class="col-sm-8 contactForm">
			<p class="textAG">Feel free to contact us to leave any feedback or to report any issues.</p>
			
			<h3>Submit some feedback :</h3>
			  <form>
				<div class="form-group">
				  <label class="textAG" for="email">Username:</label>
				  <input class="form-control" id="email" placeholder="Enter username" required>
				</div>
				<div class="form-group">
				  <label class="textAG" for="sub">Subject:</label>
				  <input class="form-control" id="sub" placeholder="Enter Subject" required>
				</div>
				<div class="form-group">
				  <label class="textAG" for="fb">Feedback:</label>
				  <textarea rows="4" class="form-control" id="fb" placeholder="Leave your feedback here" required></textarea>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			  </form>
			  <div class="clear"></div>
			  <h3>Email us :</h3>
			  <p class="textAG">Click on the link below to send us a feedback email</p>
			  <p class="textAG"><a href="mailto:atomicgamesuos@gmail.com?Subject=Atomic%20Games%20Feedback" target="_top">Send Email</a></p>
			  <p class="textAG">If that doesn't work, our email is atomicgamesuos@gmail.com</p>
		  </div>
		  <div class="col-sm-2"></div>
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