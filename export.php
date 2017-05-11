<?php
	require_once("db_connect.php");
	/*session_create();
	if (session_check()==true)
  { 
    if (isset($_SESSION['LoggedINAdmin']))
    {*/
		
		$select = "SELECT events.event_display,count(distinct event_participants_spot.part_id) as count,count(distinct event_participants_spot.part_id)*events.amount as cash FROM events left join event_participants_spot on events.event_id=event_participants_spot.event_id group by events.event_id order by count desc";
    		header("Content-type: application/xls");
			header("Content-Disposition: attachment; filename=file.xls");
			header("Pragma: no-cache");
			header("Expires: 0");
			$result = $con->query($select);
			echo "Event,";
			echo "Count,";
			echo "Amount\n";
			while ($row = $result->fetch_assoc()) {
				echo $row['event_display'].",";
				echo $row['count'].",";
				echo $row['cash']."\n";
			}
		/*}
    else
      header("location:index.php");
}
else
  header("location:index.php");*/
?>