
<?php
include 'connection.php';
$conn = OpenCon();
$q=$_GET["q"];
$i=1001;
$query="select participants.id,name,college,event_participants_spot.attendance FROM participants,event_participants_spot,team,events WHERE events.event_id =".$i." AND name like '".$q."%' AND (event_participants_spot.part_id=participants.id OR (event_participants_spot.part_id=team.head_id AND team.member_id=participants.id))";
$result = exquery($conn,$query);
echo "<table>
<tr>
<th>Participant_ID</th>
<th>Name</th>
<th>College</th>
<th>Status</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "  </td>";
    echo "<td>" . $row[1] . "  </td>";
    echo "<td>" . $row[2] . "  </td>";
    echo "<td>" . $row[3] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
