<?php
require('db_connect.php');
$event_name=$_POST["ename"];
$part_id=$_POST["id"];
$sql_get="select event_id from events where event_name='".$event_name."'";
$result=$con->query($sql_get);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$event_id=$row["event_name"];
		$sql_ins="insert into event_participants values('".$part_id."','".$event_id."')";
		$con->query($sql_ins);
	}
}
?>