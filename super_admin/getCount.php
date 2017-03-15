<?php
	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_admin()==1)
    	{
			$query = "SELECT * FROM events";
			$result = $con->query($query);
			$no=mysqli_num_rows($result);
			echo "Total Number of Events ".$no;
		}
		else
			header("location:../index.php");
	}
	else
		header("location:../index.php");
?>

