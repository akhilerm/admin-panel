<?php
	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_coord()==1)
    	{
			$event_id=$_SESSION['event_id'];
			$part_id=$_GET['id'];
			$query = "UPDATE event_participants_spot set attendance = 1 where event_id = '".$event_id."' and part_id = '".$part_id."';";
			echo $query;	
			$result = $con-> query($query);
			header("location:../index.php");
		}
		else
	}		header("location:../index.php");
	else
		header("location:../index.php");
?>