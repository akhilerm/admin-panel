<?php
include 'query.php';
include 'connection.php';
$conn = OpenCon();
?>
<html>
 <head>
 <script>
 var myVar = setInterval(showCount, 1000);
 var myVar2 = setInterval(showTable, 1000);
 function showCount() {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("total").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getCount.php",true);
        xmlhttp.send();        
}
function showTable() {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("table").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getTable.php",true);
        xmlhttp.send();
}
</script>
 </head>
 	<body>
	<?php
	CloseCon($conn);
	?>
	<div>
	<p id="total"></p>
	</div>
	<div id="table"></div>
	</body>
</html>
