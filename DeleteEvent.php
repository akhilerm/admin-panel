<?php
require('db_connect.php');
$part_id=$_POST["id"];
$event_id=$_POST["eid"];
$sql_del="delete from event_participants where part_id='".$part_id."' and event_id='".$event_id."'";
$con->query($sql_del);
?>