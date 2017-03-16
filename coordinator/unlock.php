<?php
	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_coord()==1)
    	{
			$event_id=$_SESSION['event_id'];
			$query = "UPDATE events SET lock_event =0 WHERE event_id='".$event_id."';";
			$result = $con->query($query);
			echo '<meta http-equiv="refresh" content="0;url=index.php"/>';
		}
		else
			echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
	}
	else
		echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
?>