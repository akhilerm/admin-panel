<?php
require('db_connect.php');
$usr=$_POST["username"];
$pass=$_POST["password"];
$cookie_name="user";
$cookie_value=$usr;

$sql="select * from login";
$result=$con->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		if($row["event_id"]==0&&$row["username"]==$usr&&$row["password"]==$pass)
		{
			setcookie($cookie_name,$cookie_value,time()+(60*60),"/");
			$url="search.html";//direct superadmin to required page
			header('Location:'.$url);
		}
		if($row["event_id"]==1&&$row["username"]==$usr&&$row["password"]==$pass)
		{
			setcookie($cookie_name,$cookie_value,time()+(60*60),"/");
			//$url="/search.html";//redirect common users
			//header(location,$url);
		}
	}
}
//$url="";//redirect unauthorized users
//header('Location:'.$url);

?>