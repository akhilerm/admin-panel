<?php
require('CookieCheck.php');
require('db_connect.php');
$part_id=$_GET["pid"];
$name=$_GET["name"];
$email=$_GET["email"];
$phno=$_GET["phno"];
$gender=$_GET["gender"];
$acc=$_GET["acc"];
$sql_update="update participants set name='".$name."', email='".$email."',phone='".$phno."',gender='".$gender."',accommodation='".$acc."' where id=".$part_id."";
echo $sql_update;
$con->query($sql_update)or die('Error #10');;





?>