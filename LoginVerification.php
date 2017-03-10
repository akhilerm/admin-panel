<?php
require('db_connect.php');
$usr=$_POST["username"];
$pass=$_POST["password"];
$cookie_name="user";
$cookie_value=$usr;


$Flag=0;
$sql="select * from login";
$result=$con->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		if($row["username"]==$usr&&$row["password"]==$pass)
		{
			setcookie($cookie_name,$cookie_value,time()+(60*60),"/");
            setcookie("privilege",$row["event_id"],time()+(60*60),"/");
            $Flag=1;
			$url="Redirection.php";//direct superadmin to required page
			header('Location:'.$url);
            
		}
	}
}
if($Flag==0)
header('Location: Login.php');
//$url="";//redirect unauthorized users
//header('Location:'.$url);

?>