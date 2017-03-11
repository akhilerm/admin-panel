<?php
require('CookieCheck.php');
require('db_connect.php');
$head_id=$_GET["id"];
$event_id=$_GET["eid"];
$phone=$_GET["phno"];
$sql_get="select id from participants where phone='".$phone."'";
echo $sql_get."<br>";
$result=$con->query($sql_get);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$sql_ins="insert into team(event_id,head_id,member_id) values('".$event_id."','".$head_id."','".$row["id"]."')";
        echo $sql_ins;
        $result1=$con->query($sql_ins);
	}
}

?>