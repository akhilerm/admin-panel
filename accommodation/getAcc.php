
<?php
	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_acc()==1)
    	{
			$query="SELECT id,name FROM participants Where accommodation='1'";
			$result = $con->query($query);
			echo "<table>
			<tr>
			<th>ID</th>
			<th>Name</th>
			</tr>";
			while($row = mysqli_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>" . $row[0] . "  </td>";
			    echo "<td>" . $row[1] . "</td>";
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
