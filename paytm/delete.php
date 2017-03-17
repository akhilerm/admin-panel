<?php
	require('../db_connect.php');
	session_create();
	if(session_check()==true)
	{
		if(session_get_reg()==1)
		{
			$trans_id=$_GET['id'];
			$query="update paytm set status =1 where trans_id='".$trans_id."'";
			$con->query($query);
			echo '<meta http-equiv="refresh" content="0;url=index.php"/>';
		}
    	else
      		echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
  	}
  	else
    	echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';

?>