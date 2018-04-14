<?php
?>

<link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
	
<div id = "topbit">

<img src="../images/logoMain.png" id="logo" align="left" width="170px"/>

<h10>Atomic Games<span><p1> .com</p1></span></h10>

<div id = "menu">

<ul class="linkbar" id="myLinkbar">
  <li><a HREF= "../index.php"> Home </a></li>
  <li><a HREF= "../GameUniGL\index.php"> Games </a></li>
  <li><a HREF= "../pages\leaderboards.php"> Leaderboards </a></li>
  <li><a HREF= "../pages\contactUs.php"> Contact Us </a></li>
  <li><a HREF= "../pages\help.php"> Help </a></li>
  <li><a HREF= "../pages\settings.php"> Settings </a></li>
  
</ul> 
</div>

</div>	
	
<?php
}
else if (!isset($_SESSION['loggedOn']) || $_SESSION['loggedOn'] == 0) {
	?>
	
<div id = "topbit">

<img src="../images/logoMain.png" id="logo" align="left" width="160px"/>

<h10>Atomic Games<span><p1> .com</p1></span></h10>

</div>

<?php
}
	?>
	
<?php
?>