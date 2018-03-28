<!DOCTYPE html>

<html>
<head>
	<title>Atomic Games - Leaderboards</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
	
	<?php
	session_start();
	?>
	
	<?php
	include_once("../content/header.php");
	?>
	

</head>
<body>

<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
		<p>
			<form  method="POST" action="signout">			     
				<button class="w3-btn btn-block w3-pink" type="submit" name="signout" value="signout">Logout</button>		  
		    </form>
		</p>	
		
		
		<div class="container">
			<div class="row">
				<div class="col-sm-2"></div>
				
				<div class="col-sm-8">
				<?php include_once("../controller/read_scores.php");?>
				</div>
				
				<div class="col-sm-2"></div>
			</div>
		</div>

<?php
}

else if (!isset($_SESSION['loggedOn']) || $_SESSION['loggedOn'] == 0) {
	?>
	
	
		
	<?php
}
?>

</body>
</html> 

