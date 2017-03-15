<?php
	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_admin()==1)
    	{
			$query = "SELECT * FROM participants";
			$result = $con->query($query);
			$no=mysqli_num_rows($result);
			echo "<h3>Total Number of Participants : ".$no."<h3>";
		}
		else
			header("location:../index.php");
	}
	else
		header("location:../index.php");
?>

