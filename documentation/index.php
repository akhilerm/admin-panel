<?php
    require_once("../db_connect.php");
    session_create();
    if(1)
    {
       if(1)
        {
?>
<html>
<head>
            	
		<title>Conjura'17</title>
	
		<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="../js/Registration.js"></script>
		<!--web-fonts-->
		<!--<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>-->
		<script src="../js/jquery-1.12.0.min.js"></script>
		
		<!--web-fonts-->
		
</head>
<body>
<script>
function showResult(str) {
    if (str.length==0) {
        document.getElementById("event_part").innerHTML="";
       
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
            document.getElementById("event_part").innerHTML=this.responseText;
            
        }
    }
    xmlhttp.open("GET","liveSearch.php?q="+str,true);
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
/*$(document).ready(function(){
$('#company3').on('change',function(){
            var cmID = $(this).val();
            if(cmID){
              $.ajax({
                type:'POST',
                url:'drive_course_list.php',
                data:'cmpid='+cmID,
                success:function(html){
                  $('#course3').html(html);
                }
              }); 
            }
          });
});*/
</script>

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
        echo '<input type="text" id="search_area" size="30" onkeyup="showResult(this.value)" placeholder="Search participant name">';
        echo "<div id='event_part'></div>";
       
?>
   
        
       
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


