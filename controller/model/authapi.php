<?php
   header("Content-Type:application/json");
   $uname = filter_input(INPUT_POST, 'uname');
   $pw = filter_input(INPUT_POST, 'pw');
   
   //$uname = "test";
  // $pw = "test";
   
  // $uname = '" or ""="';
  // $pw = '" or ""="';
   if (!empty($uname) && !empty($pw))
   {
		include_once("../dblib/db_lib_auth.inc");
		$up = new auth_db();
		//echo $up->db_msg;
		$data = $up->authenticate($uname, $pw);
		if (empty($data))
			deliver_response(200, "data not found", NULL);
		else
		   deliver_response(200, "data found", $data);
   }
   else
   {
	   // send error message to client
	   deliver_response(400, "Invalid request", NULL);
   }

   function deliver_response($status, $status_message, $data)
   {
	  header("HTTP/1.1 $status $status_message");
	  $response['status'] = $status;
	  $response['status_message'] = $status_message;
	  $response['data'] = $data;
	  
	  $json_response = json_encode( $response );
	  echo $json_response;  
   }
?>
