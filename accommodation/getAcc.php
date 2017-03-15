
<?php
	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_set_acc()==1)
    	{
			$query="SELECT id,name,gender,accommodation FROM participants Where accommodation>-1 order by gender,accommodation";
			$result = $con->query($query);
			echo "<table class='super-admin-table acc-table'>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Number of days</th>
			</tr>";
			while($row = mysqli_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>" . $row[0] . "  </td>";
			    echo "<td>" . $row[1] . "</td>";
			    echo "<td>" . $row[2] . "</td>";
			    echo "<td>" . $row[3] . "</td>";
			    echo "</tr>";
			}
			echo "</table>";
		}
		else
			header("location:../index.php");
	}
	else
		header("location:../index.php");	
?>
