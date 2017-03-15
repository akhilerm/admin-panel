<?php
    require_once("../db_connect.php");
    session_create();
    if(session_check()==true)
    {
        if(session_get_doc()==1)
        {
?>
<html>
<body>
<script>
function showResult(str) {
    if (str.length==0) {
        document.getElementById("livesearch").innerHTML="";
        document.getElementById("livesearch").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
}
function showUser(str)
{
    if (str=="")
    {
      document.getElementById("event_part").innerHTML="";
      return;
    }
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("event_part").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","getDoc.php?q="+str,true);
    xmlhttp.send();
}
</script>
<style>
	#event_drop{
		width:100%;
		height:40px;
	}
	#event_part{
		width:100%;
		border:1px solid;
		color:green;
		margin:20px;
	}
	#search_area{
		width:100%;
	}
</style>
<?php 
        $query="SELECT event_name,event_id FROM events";
        $result = $con->query($query);
        if($result){
            $select= '<select name="select" id="event_drop" onchange="showUser(this.value)">';
            while($row=mysqli_fetch_array($result)){
            $select.='<option value="'.$row[1].'">'.$row[0].'</option>';
        }
    }
    $select.='</select>';
    echo $select;
    $query="select name,participants.id,college,event_participants_spot.attendance FROM participants,event_participants_spot,events,team WHERE events.event_id=event_participants_spot.event_id AND events.event_name='agnee' AND (event_participants_spot.part_id=participants.id OR (event_participants_spot.part_id=team.head_id AND team.member_id=participants.id))";
    $result = $con->query($query);
    echo "<div id='event_id'><table>
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
    echo "</table></div>";
?>
    <form>
        <input type="text" id="search_area" size="30" onkeyup="showResult(this.value)">
        <div id="livesearch"></div>
    </form>
</body>
</html>
<?php
      }
    else
      header("location:../index.php");
  }
  else
    header("location:../index.php");
?>


