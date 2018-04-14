<!-- The login form -->
<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
			
	<?php include_once("content/footer.php"); ?>

		
<?php
}
else if (!isset($_SESSION['loggedOn']) || $_SESSION['loggedOn'] == 0) {
	?>
<h1 style="text-align:center;">Welcome to Atomic Games</h1>
<div class="clear"></div>
	<div class="row">
	  <div class="col-sm-1"></div>
	  <div class="col-sm-4">
		<p><h1 class="text-center">Create An Account</h1></p>
			<form  method="POST" action="">
				<p>      
					<label class="loginlabel"><b>Account Username:</b></label>
					<input class="w3-input w3-border w3-white w3-round-large" name="username" type="text" required>
				</p>
				<p>      
					<label class="loginlabel"><b> Create Password:</b></label>
					<input class="w3-input w3-border w3-white w3-round-large" name="password" type="password" required>
				</p>
				<p>
					<button class="w3-btn btn-block w3-blue w3-round-large">Create Account</button>
				</p>
			</form>
	  </div>
	  <div class="col-sm-1"></div>
	  <div class="col-sm-1"></div>
	  <div class="col-sm-4">
			<p><h1 class="text-center">Existing User Login</h1></p>
			  <form  method="POST" action="">
				<p>      
				<label class="loginlabel"><b>Username:</b></label>
				<input class="w3-input w3-border w3-white w3-round-large" name="username" type="text" required></p>
				<p>      
				<label class="loginlabel"><b>Password:</b></label>
				<input class="w3-input w3-border w3-white w3-round-large" name="password" type="password" required></p>
				<p>
				<button class="w3-btn btn-block w3-blue w3-round-large">Login</button></p>
			  </form>
	  </div>
	  <div class="col-sm-1"></div>
	</div>


	<?php
}
?>
<?php if (!empty($loginMsg)) echo "<div class=\"w3-red text-center\">$loginMsg</div>"; ?>