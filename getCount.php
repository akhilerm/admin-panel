
<?php
include 'query.php';
include 'connection.php';
$conn = OpenCon();
$query = "SELECT * FROM events";
$result = exquery($conn,$query);
$no=mysqli_num_rows($result);
echo "Total Number of Events ".$no;
?>

