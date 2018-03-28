<?php
?>

<?php if (isset($_SESSION['loggedOn']) && $_SESSION['loggedOn'] == 1) {
	?>
	
<div id="websiteFooter">
	







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