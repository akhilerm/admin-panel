<?php
require('db_connect.php');
$event_name=$_GET["ename"];
$part_id=$_GET["id"];
$sql_get="select event_id from events where event_name='".$event_name."'";
$result=$con->query($sql_get);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$event_id=$row["event_id"];
		$sql_ins="insert into event_participants(part_id,event_id,paid,trans_id,status) values('".$part_id."','".$event_id."','Y','',0)";
        echo $sql_ins;
		$con->query($sql_ins);
	}
}
?>