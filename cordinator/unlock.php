<?php
	require_once("db_connect.php");
	$event_id=1001;
	//event id has to be get
		$query = "UPDATE events SET lock_event =0 WHERE event_id='".$event_id."';";
		$result = $con->query($query);
		
	
	header("location:cord.php");
	
	?>