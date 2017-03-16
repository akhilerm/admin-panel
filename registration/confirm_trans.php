<?php
	include("../db_connect.php");
	session_create();
	if(session_get_reg()==1)
	{
		$event_list="update transactions set status=1 where part_id='".$_SESSION['ID']."'";
		$result=$con->query($event_list) or die(mysqli_error($con));
		echo '<meta http-equiv="refresh" content="0;url=registration.php?input='.$_SESSION['ID'].'&option=0"/>';
		unset($_SESSION['ID']);
	}
	else
	{
		echo '<meta http-equiv="refresh" content="0;url=search.php"/>';
	}
?>