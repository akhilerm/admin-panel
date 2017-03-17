<?php
require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_admin()==1)
    	{
			$query="SELECT events.event_name,count(event_participants_spot.part_id) as count FROM events left join event_participants_spot on events.event_id=event_participants_spot.event_id group by events.event_id order by count desc " ;
			$result = $con->query($query);
			echo "<table class='super-admin-table'>
				  <tr>
				    <th>Event</th>
				    <th>Team Count</th>
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
			echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
	}
	else
		echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
?>
