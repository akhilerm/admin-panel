<?php
    require_once("../db_connect.php");
    session_create();
    if(session_check()==true)
    {
        if(session_get_acc()==1)
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
		

<script>
var myVar = setInterval(showAcc, 1000);
function showAcc() {
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("acc").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","getAcc.php",true);
    xmlhttp.send();        
}

</script>
 </head>
 	<body>
    <a href="../logout.php">Logout</a>
	<div>
	<p id="acc"></p>
	</div>
	
	</body>
</html>
<?php
}
        else
            echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
    }
    else
        echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
?>
