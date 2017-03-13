<?php
require('db_connect.php');
session_create();
  								if(session_check()==true)
  								{
   									if(session_get_reg()==1)
   									{

?>

<?php


$head_id=cleanup($_GET["id"],$con);
$event_id=cleanup($_GET["eid"],$con);
$phone=cleanup($_GET["phno"],$con);
$sql_get="select id from participants where phone='".$phone."'";
echo $sql_get."<br>";
$result=$con->query($sql_get);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$sql_ins="insert into team(event_id,head_id,member_id) values('".$event_id."','".$head_id."','".$row["id"]."')";
        echo $sql_ins;
        $result1=$con->query($sql_ins);
	}
}

?>
<?php
                                    }
                                }
?>