<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
		$part_id=cleanup($_GET["id"],$con);
		$sql_sel="select * from event_participants where part_id='".$part_id."'";
		$result=$con->query($sql_sel);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				$sno=$row["sno"];
				$p_id=$row["part_id"];
				$e_id=$row["event_id"];
				$paid=$row["paid"];
				$t_id=$row["trans_id"];
				$status=$row["status"];
				$sql_ins="insert into event_participants_spot(`part_id`, `event_id`, `trans_id`) values('".$p_id."','".$e_id."','".$t_id."')";
				$con->query($sql_ins);
		        
			}
		}
		$sql_del="delete from event_participants where part_id='".$part_id."'";
		$con->query($sql_del);                                       
		header('Location:registration.php?input='.$part_id.'&option=0');	
    }
}
?>