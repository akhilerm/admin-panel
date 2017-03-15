<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
		$part_id=cleanup($_GET["id"],$con);
		$sql_sel="select * from event_participants as ep,events as e where  e.event_id=ep.event_id and lock_event=0 and part_id='".$part_id."'";
		$result=$con->query($sql_sel);
		if($result->num_rows>0)
		{
			$query_num="SELECT `AUTO_INCREMENT` as a FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'conjura_spot' AND TABLE_NAME = 'transactions';";
			$next_num=$con->query($query_num);
			if(!$next_num)
				echo "unsuccessful";
			$row_num=$next_num->fetch_assoc();
			$t_id=15000+$row_num['a'];
			$query_trans="insert into transactions(part_id,amt,trans_id,status) values (".$part_id.",".$_SESSION['SUM'].",".$t_id.",1)";
			$result_trans=$con->query($query_trans) or die(mysqli_error($con));

			while($row=$result->fetch_assoc())
			{

				$sno=$row["sno"];
				$p_id=$row["part_id"];
				$e_id=$row["event_id"];
				$paid=$row["paid"];
				$sql_ins="insert into event_participants_spot(`part_id`, `event_id`, `trans_id`) values('".$p_id."','".$e_id."','".$t_id."')";
				$con->query($sql_ins);
			}
		}
		$sql_del="delete from event_participants where event_id not in (select event_id from events where lock_event=1) and  part_id='".$part_id."'";
		$con->query($sql_del);                                       
		header('Location:registration.php?input='.$part_id.'&option=0');	
    }
    else
    	header("location:../logout.php");
}
else
	header("location:../logout.php");
?>