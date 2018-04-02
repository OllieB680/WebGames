<?php
function route($url, $method, $data)
{
	$wclient = curl_init();
	curl_setopt($wclient, CURLOPT_RETURNTRANSFER, 1);
	if ($method == "POST")
	{
		 curl_setopt($wclient, CURLOPT_POST, true);
		 curl_setopt($wclient, CURLOPT_POSTFIELDS, http_build_query($data));
	}
	else if ($method == "GET")
	{
		$url .= '?' . http_build_query($data);
	}
	//echo $url;
	curl_setopt($wclient, CURLOPT_HTTPHEADER, array('Accept: application/json'));
	curl_setopt($wclient, CURLOPT_URL, $url);
	
	$response2 = curl_exec($wclient);
	$result = json_decode($response2);
	$scores_data = $result->data;	
	//print_r($scores_data);
	curl_close($wclient);
	return $scores_data;
}
?>