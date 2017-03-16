<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
		$part_id=cleanup($_GET["pid"],$con);
		$name=cleanup($_GET["name"],$con);
		$email=cleanup($_GET["email"],$con);
		$phno=cleanup($_GET["phno"],$con);
		$gender=cleanup($_GET["gender"],$con);
		$acc=cleanup($_GET["acc"],$con);
		$college=cleanup($_GET["college"],$con);
		$sql_update="update participants set college='".$college."',name='".$name."', email='".$email."',phone='".$phno."',gender='".$gender."',accommodation='".$acc."' where id=".$part_id."";
		$con->query($sql_update);                        
    }
    else
	{
		echo '<meta http-equiv="refresh" content="0;url=registration.php"/>';
	}
}
else
{
	echo '<meta http-equiv="refresh" content="0;url=registration.php"/>';
}
