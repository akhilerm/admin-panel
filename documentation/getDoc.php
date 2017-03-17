<?php
	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_doc()==1)
    	{
			$q=$_GET["q"];
			$query="select distinct participants.id,name,college_name,event_participants_spot.attendance FROM participants,event_participants_spot,events,team,college WHERE (events.event_id=event_participants_spot.event_id AND events.event_id='".$q."' AND event_participants_spot.part_id=participants.id AND participants.college=college.college_id AND attendance>-1) OR (team.event_id='".$q."' AND head_id=event_participants_spot.part_id AND attendance>-1 AND member_id=participants.id AND participants.college=college.college_id)";
			$result = $con->query($query);
			
			echo "
			<table class='super-admin-table documentation-table'>
			<tr>
			<th>Participant ID</th>
			<th>Name</th>
			<th>College</th>
			<th>Status</th>
			</tr>";
			while($row = mysqli_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>" . $row[0] . "</td>";
			    echo "<td>" . $row[1] . "</td>";
			    echo "<td>" . $row[2] . "</td>";
			    echo "<td>" . $row[3] . "</td>";
			    echo "</tr>";
			}
			echo "</table>";
		}
		else
			echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
	}
	else
		echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';	
?>
