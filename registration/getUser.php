
<?php
include 'query.php';
include 'connection.php';
$conn = OpenCon();
$q=$_GET["q"];
$query="select name,participants.id,college,event_participants_spot.attendance FROM participants,event_participants_spot,team WHERE events.id = '".$q."' AND (event_participants_spot.part_id=participants.id OR (event_participants_spot.part_id=team.head_id AND team.member_id=participants.id))";
$result = exquery($conn,$query);
echo "<table>
<tr>
<th>Participant ID</th>
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
