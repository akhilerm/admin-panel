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

<?php 
        $query="SELECT trans_id,amt from paytm where part_id=NULL";
        $result = $con->query($query);
        echo "<div class='content'>";
        echo "<table class='super-admin-table'>
				  <tr>
				    <th>Transaction ID</th>
				    <th>Amount</th>
				  </tr>";
        if($result){
            
			while($row = mysqli_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>" . $row[0] . "  </td>";
			    echo "<td>" . $row[1] . "</td>";
			    echo "</tr>";
			}
			
       }
       echo "</table>";
       echo "</div>";
?>
   
        
       
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


