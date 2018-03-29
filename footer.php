<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
?>

<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
	
<div>
	<div class="row">
	  <div class="col-md-3">
	  <p class="footerText">Developed by Atomic Games</p>
	  <P class="footerText">Version 1.00</P>
	  </div>
	  <div class="col-md-6">
		<p>
			<form  method="POST" action="">			     
				<button class="w3-btn btn-block w3-pink" type="submit" name="signout" value="signout">Logout</button>		  
			</form>
		</p>
	  </div>
	  <div class="col-md-1">
		<a href="#" class="fa fa-facebook" style="font-size: 25px;"></a>
	  </div>
	  <div class="col-md-1">
		<a href="#" class="fa fa-twitter" style="font-size: 25px;"></a>
	  </div>
	  <div class="col-md-1">
		<a href="#" class="fa fa-youtube" style="font-size: 25px;"></a>
	  </div>
		
		
		
	  
	</div>
	
</div>
	
<?php
}
else if (!isset($_SESSION['loggedOn']) || $_SESSION['loggedOn'] == 0) {
	?>
	
<?php
}
	?>
	
<?php
?>