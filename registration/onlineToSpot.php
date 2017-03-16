<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
		$part_id=cleanup($_GET["id"],$con);
		$sql_sel="select * from event_participants as ep,events as e where e.event_id=ep.event_id and lock_event!=1 and part_id='".$part_id."'";
		$result=$con->query($sql_sel);
		if($result->num_rows>0)
		{	
			while($row=$result->fetch_assoc())
			{
				if(empty($row['trans_id']))
				{
					$query_num="SELECT `AUTO_INCREMENT` as a FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'conjura_spot' AND TABLE_NAME = 'transactions';";
					$next_num=$con->query($query_num);
					$row_num=$next_num->fetch_assoc();
					$t_id=15000+$row_num['a'];              // not considering stored transaction
					$query_trans="insert into transactions(part_id,amt,trans_id,status) values (".$part_id.",".$_SESSION['SUM'].",".$t_id.",1)";
					$result_trans=$con->query($query_trans) or die(mysqli_error($con));
				}
				else
				{
					$query_trans="select * from transactions where trans_id=".$row['trans_id']." and part_id=".$part_id;
					$result_trans=$con->query($query_trans) or die(mysqli_error($con));
					if($result_trans->num_rows>0)
					{
						$row_trans=$result_trans->fetch_assoc();
						if(!empty($row_trans['trans_id']) && $row_trans['status']==1)
						{
							$t_id=$row['trans_id'];
						}
						else if(!empty($row_trans['trans_id']) && $row_trans['status']!=1)
						{
							header("location:registration.php?input=".$part_id."&option=0&info=status_not_one");
							return;
						}
					}
					else
					{
						header("location:registration.php?input=".$part_id."&option=0&info=no_transactions");
						return;
					}
				}
				$p_id=$row["part_id"];
				$e_id=$row["event_id"];
				$sql_ins="insert into event_participants_spot(`part_id`, `event_id`, `trans_id`) values('".$p_id."','".$e_id."','".$t_id."')";
				$con->query($sql_ins) or die(mysqli_error($con));
			}
		}
		$sql_del="delete from event_participants where event_id not in (select event_id from events where lock_event=1) and  part_id='".$part_id."'";
		$con->query($sql_del) or die(mysqli_error($con));                                       
		header('Location:registration.php?input='.$part_id.'&option=0');	
    }
    else
    	header("location:../logout.php");
}
else
	header("location:../logout.php");
?>