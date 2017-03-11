<?php
require('CookieCheck.php');
require('db_connect.php');
$part_id=$_GET["pid"];
$name=$_GET["name"];
$email=$_GET["email"];
$phno=$_GET["phno"];
$gender=$_GET["gender"];
$acc=$_GET["acc"];
$sql_update="update participants set name='".$name."','".$email."','".$phno."','".$gender."','".$acc."' where id='".$part_id."'";
$con->query($sql_update);





?>