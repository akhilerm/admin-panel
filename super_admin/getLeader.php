<?php
require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_admin()==1)
    	{
		/*	$query="SELECT college_name,count(event_participants_spot.part_id),((7*(select count(participants.id) from participants,events,college,event_participants_spot,team where event_participants_spot.event_id=events.event_id and events.team='y' and event_participants_spot.part_id=participants.id and participants.college=college_name and event_participants_spot.attendance=1))+(5*(select count(participants.id) from participants,events,college,event_participants_spot,team where event_participants_spot.event_id=events.event_id and events.team='y' and event_participants_spot.part_id=participants.id and participants.college=college_name and event_participants_spot.attendance=2))+(3*(select count(participants.id) from participants,events,college,event_participants_spot,team where event_participants_spot.event_id=events.event_id and events.team='y' and event_participants_spot.part_id=participants.id and participants.college=college_name and event_participants_spot.attendance=3))+(5*(select count(participants.id) from participants,events,college,event_participants_spot,team where event_participants_spot.event_id=events.event_id and events.team='n' and event_participants_spot.part_id=participants.id and participants.college=college_name and event_participants_spot.attendance=1))+(3*(select count(participants.id) from participants,events,college,event_participants_spot,team where event_participants_spot.event_id=events.event_id and events.team='n' and event_participants_spot.part_id=participants.id and participants.college=college_name and event_participants_spot.attendance=2))+(2*(select count(participants.id) from participants,events,college,event_participants_spot,team where event_participants_spot.event_id=events.event_id and events.team='n' and event_participants_spot.part_id=participants.id and participants.college=college_name and event_participants_spot.attendance=3))) as score FROM  college,event_participants_spot,participants WHERE college.college_name=participants.college and participants.id=event_participants_spot.part_id group by college_id order by sum(score)" ;*/
			$query="SELECT college_name,count(event_participants_spot.part_id) as c from college,event_participants_spot,participants WHERE college.college_id=participants.college AND event_participants_spot.part_id=participants.id group by college order by c desc";
			$result = $con->query($query);
			echo "<table class='super-admin-table super-admin-table'>
				  <tr>
				    <th>College Name</th>
				    <th>Team Count</th>
				
				  </tr>";
			while($row = mysqli_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>" .$row[0]."</td>";
			    echo "<td>" .$row[1]."</td>"; 
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
