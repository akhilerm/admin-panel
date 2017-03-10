<?php
require('CookieCheck.php');
require('db_connect.php');
$part_id=$_POST["pid"];
$name=$_POST["name"];
$email=$_POST["email"];
$phno=$_POST["phno"];
$gender=$_POST["gender"];
$acc=$_POST["acc"];
$sql_update="update participants set name='".$name."','".$email."','".$phno."','".$gender."','".$acc."' where id='".$part_id."'";
$con->query($sql_update);





?>