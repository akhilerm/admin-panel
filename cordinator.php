<?php

	require_once("db_connect.php");
	function lock($event_id,$con)
	{
		$query = "UPDATE events SET lock_event =1 WHERE event_id='".$eventid."';";
		$result = $con->query($query);
		if($result==TRUE)	
			return 1;
		else 
		 	return 0;
	}
	function table($event_id,$con)
	{
		$query="SELECT id,name,college,email,phone from participants as p,event_participants_spot as t where p.id = t.part_id and event_id='".$event_id."';";
		$result = $con->query($query);
		$count=0
		if($result->num_rows>0)
		{
			echo "<table class='table table-striped'>";
			echo "<tr>";
			echo "<th>S.NO</th><th>CONJURA ID</th><th>NAME</th><th>COLLEGE</th><th>EMAIL</th><th>PHONE</th>";
			echo "</tr>";
		
			while($row=$result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".++$count."</td><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['college']."</td><td>".$row['email']."</td><td>".$row['phone']."</td>";
				echo "</tr>";
			}		
			echo "</table>";
		}
		else
			echo "NONE HAS REGISTERED";
	}
	function unlock($event_id,$con)
	{
		$query = "UPDATE events SET lock_event =0 WHERE event_id='".$eventid."';";
		$result = $con->query($query);
		if($result==TRUE)	
			return 1;
		else 
		 	return 0;
	}
	function present($event_id,$part_id,$con)
	{
		$query = "UPDATE event_participants_spot set attendance = 0 where event_id = '".$event_id."' and part_id = '".$part_id."';";
		$result = $con-> query($query);
		if($result==TRUE)
			return 1;
		else
			return 0;
	}
	function first($event_id,$part_id,$con)
	{
		$query = "UPDATE event_participants_spot set attendance = 1 where event_id = '".$event_id."' and part_id = '".$part_id."';";
		$result = $con-> query($query);
		if($result==TRUE)
			return 1;
		else
			return 0;
	}
	function second($event_id,$part_id,$con)
	{
		$query = "UPDATE event_participants_spot set attendance = 2 where event_id = '".$event_id."' and part_id = '".$part_id."';";
		$result = $con-> query($query);
		if($result==TRUE)
			return 1;
		else
			return 0;
	}
	function third($event_id,$part_id,$con)
	{
		$query = "UPDATE event_participants_spot set attendance = 3 where event_id = '".$event_id."' and part_id = '".$part_id."';";
		$result = $con-> query($query);
		if($result==TRUE)
			return 1;
		else
			return 0;
	}
	
?>