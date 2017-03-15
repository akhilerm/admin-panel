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
	<div>
	<p id="acc"></p>
	</div>
	
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
