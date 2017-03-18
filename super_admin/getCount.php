<?php
	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_admin()==1)
    	{
    			
			$query = "SELECT DISTINCT event_participants_spot.part_id from event_participants_spot";
			$result = $con->query($query);
			$no=mysqli_num_rows($result);
			echo "<h3>Total Number of Participant Heads : ".$no."<h3>";			
			
			$query = "SELECT DISTINCT event_participants_spot.part_id from event_participants_spot
			UNION SELECT DISTINCT member_id FROM team";
			$result = $con->query($query);
			$no=mysqli_num_rows($result);
			echo "<h3>Total Number of Registered Participants : ".$no."<h3>";
			
			$query="SELECT events.event_display,count(distinct event_participants_spot.part_id) as count,count(distinct event_participants_spot.part_id)*events.min_part as count_member FROM events left join event_participants_spot on events.event_id=event_participants_spot.event_id group by events.event_id order by count desc " ;
			$result = $con->query($query);
			$total_count=0;
			while($row = mysqli_fetch_array($result)) {
				$total_count+=$row['2'];			   
			}
			echo "<h3>Total Number of Participation : ".$total_count."<h3>";
			
		}
		else
			echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
	}
	else
		echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
?>

