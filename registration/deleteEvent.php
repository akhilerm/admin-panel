<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
		$part_id=cleanup($_GET["id"],$con);
		$event_id=cleanup($_GET["eid"],$con);
		$sql_del="delete from event_participants where part_id='".$part_id."' and event_id='".$event_id."'";
		$con->query($sql_del);
		$sql_del1="delete from team where head_id='".$part_id."' and event_id='".$event_id."'";
		$con->query($sql_del1);
    }
}
?>