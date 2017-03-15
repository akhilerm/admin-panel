
<?php
include 'query.php';
include 'connection.php';
$conn = OpenCon();
$query="SELECT id,name FROM participants Where accommodation='1'";
$result = exquery($conn,$query);

echo "<table>
<tr>
<th>ID</th>
<th>Name</th>
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
