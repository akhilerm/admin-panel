<?php
require('db_connect.php');
session_create();
  								if(session_check()==true)
  								{
   									if(session_get_reg()==1)
   									{

?>

<?php
//require('CookieCheck.php');
//require('db_connect.php');
$part_id=cleanup($_GET["pid"],$con);
$name=cleanup($_GET["name"],$con);
$email=cleanup($_GET["email"],$con);
$phno=cleanup($_GET["phno"],$con);
$gender=cleanup($_GET["gender"],$con);
$acc=cleanup($_GET["acc"],$con);
$sql_update="update participants set name='".$name."', email='".$email."',phone='".$phno."',gender='".$gender."',accommodation='".$acc."' where id=".$part_id."";
echo $sql_update;
$con->query($sql_update)or die('Error #10');;





?>

<?php
                                        
                                    }
                                }
?>