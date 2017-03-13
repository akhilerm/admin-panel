<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
        $event_id=cleanup($_GET["eid"],$con);
        $part_id=cleanup($_GET["part_id"],$con);
		$sql_ins="insert into event_participants(part_id,event_id,paid,trans_id,status) values('".$part_id."','".$event_id."','y','1000',0)";
		$result=$con->query($sql_ins);                               
    }
}
?>