<?php 
require '../db_connect.php';
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
		while(1)
		{
			$num=rand(1000,9999);
		    $email="invalid";
		    $x="1234567890qwertyuiopasdfghjklzxcvbnm";
		    for($i=0;$i<6;$i++)
		    {
		        $email.=$x[rand(0,strlen($x))];
		    }	
			$sqlget="select phone from participants where phone='".$num."' or email='".$email."'";
			$result=$con->query($sqlget);
			if($result->num_rows==0)
				break;	
		}
	    $sqlins="INSERT INTO `participants` (`id`, `name`, `college`, `phone`, `gender`, `accommodation`, `email`) VALUES (NULL, 'invalid user', '100', '".$num."', 'm_checkstatus(conn, identifier)', '-1', '".$email."');";
		$result=$con->query($sqlins)or die($sqlins);
		if($result)
			header('Location:registration.php?input='.$num.'&option=0');
	}
	else
		header("location:../logout.php");
}
else
	header("location:../logout.php");
?>