<?php
?>

<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
	
<div id = "topbit">

<!--<img src="LOGOIMAGEHERE.png" id="logo" align="left" width="180px"/>-->

<h10>Atomic Games<span><p1> .com</p1></span></h10>

<div id = "menu">

<ul class="linkbar" id="myLinkbar">
  <li><a HREF= "index.php"> Home </a></li>
  <li><a HREF= "pages\mainGame.php"> Games </a></li>
  <li><a HREF= "pages\leaderboards.php"> Leaderboards </a></li>
  <li><a HREF= "pages\contactUs.php"> Contact Us </a></li>
  <li><a HREF= "pages\help.php"> Help </a></li>
  
</ul> 
</div>

</div>	
	
<?php
}
else if (!isset($_SESSION['loggedOn']) || $_SESSION['loggedOn'] == 0) {
	?>
	
<div id = "topbit">

<img src="../images/logo1.png" id="logo" align="left" width="200px"/>

<h10>Atomic Games<span><p1> .com</p1></span></h10>

</div>

<?php
}
	?>
	
<?php
?>