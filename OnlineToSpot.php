<?php
require('db_connect.php');
$part_id=$_POST["id"];
$sql_sel="select * from event_participants where part_id='".$part_id."'";
$result=$con->query($sql_sel);
if($reult->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$sno=$row["sno"];
		$p_id=$row["part_id"];
		$e_id=$row["event_id"];
		$paid=$row["paid"];
		$t_id=$row["trans_id"];
		$status=$row["status"];
		$sql_ins="insert into event_participants_spot values('".$sno."','".$p_id."','".$e_id."','".$paid."','".$t_id."','".$status."')";
		$con->query($sql_ins);
	}
}

?>