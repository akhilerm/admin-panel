
<?php
 	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_doc()==1)
    	{
			$q=$_GET["q"];
			
			$query="select participants.id,name,college,events.event_name,event_participants_spot.attendance FROM participants,event_participants_spot,team,events WHERE  name like '".$q."%' AND (event_participants_spot.part_id=participants.id OR (event_participants_spot.part_id=team.head_id AND team.member_id=participants.id))";
			$result = $con->query($query);
			echo "<table class='super-admin-table live-table'>
			<tr>
			<th>Participant_ID</th>
			<th>Name</th>
			<th>College</th>
			<th>Event Name</th>
			<th>Status</th>
			</tr>";
			while($row = mysqli_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>" . $row[0] . "  </td>";
			    echo "<td>" . $row[1] . "  </td>";
			    echo "<td>" . $row[2] . "  </td>";
			    echo "<td>" . $row[3] . "</td>";
			    echo "<td>" . $row[4] . "</td>";
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
