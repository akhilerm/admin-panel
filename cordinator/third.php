<?php
//session_start();
require_once("../db_connect.php");
$event_id=1001;
	//event id has to be get
	$part_id=$_GET['id'];
	
$query = "UPDATE event_participants_spot set attendance = 3 where event_id = '".$event_id."' and part_id = '".$part_id."';";
echo $query;	
	$result = $con-> query($query);
		
			header("location:../cord.php");
			?>