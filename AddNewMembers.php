<?php
require('db_connect.php');
$head_id=$_GET["id"];
$event_id=$_GET["eid"];
$phone=$_GET["phno"];
$sql_get="select memberid from participants where phone='".$phone."'";
$result=$con->query($sql_get);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc)
	{
		$sql_ins="insert into team values('".$event_id."','".$row["memberid"]."','".$phone."')";
	}
}

?>