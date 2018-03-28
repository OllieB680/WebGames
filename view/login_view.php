<!-- The login form -->
<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
		<p>
			<form  method="POST" action="">			     
				<button class="w3-btn btn-block w3-pink" type="submit" name="signout" value="signout">Logout</button>		  
		    </form>
		</p>	
		

		
<?php
}
else if (!isset($_SESSION['loggedOn']) || $_SESSION['loggedOn'] == 0) {
	?>
			
	  <p><h1 class="text-center">Login</h1></p>
	  <form  method="POST" action="">
		<p>      
		<label><b>Username:</b></label>
		<input class="w3-input w3-border w3-white" name="username" type="text"></p>
		<p>      
		<label ><b>Password:</b></label>
		<input class="w3-input w3-border w3-white" name="password" type="password"></p>
		<p>
		<button class="w3-btn btn-block w3-blue">Login</button></p>
	  </form>

	<?php
}
?>
<?php if (!empty($loginMsg)) echo "<div class=\"w3-red text-center\">$loginMsg</div>"; ?>