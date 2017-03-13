<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "conjura";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }
function CloseCon($conn)
 {
 $conn -> close();
 }
 function exquery($conn,$query)
 {
 	mysqli_query($conn, $query) or die('Error querying database.');
 	$result = mysqli_query($conn, $query);
 	return $result;
 }
?>
