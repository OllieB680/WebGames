<?php
//---------------------------------------------------
// LOGIN
//---------------------------------------------------
	// use for security testing
	$sectest = 0;
	if (isset($_GET['sectest']))       $sectest = (filter_input(INPUT_GET, "sectest"));
	$loginMsg = "";
	if (isset($_POST['username']))     $uname = (filter_input(INPUT_POST, "username"));
	if (isset($_POST['password']))     $pw = (filter_input(INPUT_POST, "password"));
	if (isset($_POST['signout']))      $signout = (filter_input(INPUT_POST, "signout"));
	else if (isset($_GET['signout']))  $signout = (filter_input(INPUT_GET, "signout"));
		
	if (!empty($pw) && !empty($uname))
	{
		//echo "logging in with $uname and $pw";
		$url = "http://localhost:8090/model/authapi.php";
		$post_data = array(
            "uname" => $uname,
            "pw" => $pw,
            );
		// connect to webAPI and retrieve user data
		$uData = route($url, "POST", $post_data);
		if ($sectest)
		{
			echo $url;
			print_r($post_data);
		}
		// if user data returned...
		if ($uData)
		{
			$_SESSION['loggedOn'] = 1;
			$uData = explode(":", $uData);
			$_SESSION['uID'] = $uData[0];
			$_SESSION['uRole'] = $uData[1];
			$_SESSION['udgID'] = $uData[2];
			$_SESSION['uName'] = $post_data['uname'];
		    header("Location: index.php");
			$loginMsg = "Successfully Logged in";
		}
		else
		{
			$_SESSION['loggedOn'] = 0;
			$loginMsg = "Username and/or Password are Incorrect";
		}
	}
	else if (!empty($signout)) 
	{
		session_destroy();
		header("Location: index.php?lo=y");
	}
	
	if (isset($_GET['lo'])) $loginMsg = "Logged Out";
	include_once("view/login_view.php");
//---------------------------------------------------
// END OF LOGIN
//---------------------------------------------------
	?>
