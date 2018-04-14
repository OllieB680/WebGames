<?php

if ( isset($_SESSION['loggedOn']) && $_SESSION['loggedOn']  == 1 )
	{	
		$sid = 'ALL';

		if (!empty($sid))
		{
			$url = "http://localhost:8090/model/webapi.php";
			//echo "<p>".$url."</p>";
			$get_data = array("qry" => $sid);
			$data = route($url, "GET", $get_data);
			//$data = route($url);
			
			include_once("../view/leaderboard_view.php");
			
			//include_once("view/form_view.php");
		}
		else
			//include_once("view/form_view.php");
		
		
		// show chart data
			$cdata = '{
							  "cols": [
									{"id":"","label":"sensors","pattern":"","type":"string"},
									{"id":"","label":"Proportions","pattern":"","type":"number"}
								  ],
							  "rows": [
									{"c":[{"v":"OK","f":null},{"v":7,"f":null}]},
									{"c":[{"v":"NOK","f":null},{"v":7,"f":null}]}
								  ]
							}';
			//include_once("view/chart_view.php");
	}
?>