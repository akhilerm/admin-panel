
<?php
include 'query.php';
include 'connection.php';
$conn = OpenCon();
$query="SELECT events.event_name,count(event_participants_spot.part_id) FROM events,event_participants_spot where events.event_id=event_participants_spot.event_id";
$result = exquery($conn,$query);

echo "<table>
<tr>
<th>Event</th>
<th>Participant Count</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "  </td>";
    echo "<td>" . $row[1] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
