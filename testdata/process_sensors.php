<?php
    $xml = simplexml_load_file("newMon.xml");
	if ($xml) {
		include_once ("../dblib/db_lib.inc");
		foreach($xml->Monitor->sensorList->sensor as $sensor)
		{
			echo "<p>Adding $sensor->name,$sensor->value,$sensor->status to database</p>";
			
			$sensordb = new sensor_db();
			
			$sensordb->record_sensor($sensor->name,$sensor->status, $sensor->value);
		}		
	
	}	
?>