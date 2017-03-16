<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
        $head_id=cleanup($_GET["id"],$con);
        $event_id=cleanup($_GET["eid"],$con);
        $phone=cleanup($_GET["phno"],$con);
        $sql_get="select id from participants where phone='".$phone."'";
        $result=$con->query($sql_get);
        if($result->num_rows>0)
        {
        	$row=$result->fetch_assoc();
    		$sql_ins="insert into team(event_id,head_id,member_id) values(".$event_id.",".$head_id.",".$row["id"].")";
            $result1=$con->query($sql_ins) or die(mysqli_error());
        }
        else 
            echo "failed";
    }
    else
       echo '<meta http-equiv="refresh" content="0;url=../index.php"/>'; 
}
else
    echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
?>