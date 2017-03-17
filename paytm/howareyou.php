<?php
    require('../db_connect.php');
	session_create();
	if(session_check()==true)
	{
		if(session_get_reg()==1)
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
		<script src="../js/jquery-1.12.0.min.js"></script>
</head>
<body>

<?php 
        $query="SELECT * from paytm";
        $result = $con->query($query);
        echo "<div class='content'>";
        echo "<table class='super-admin-table'>
				  <tr>
				  	<th>Transaction ID</th>
				    <th>Amount</th>
				    <th>Conjura_id</th>
				    <th>Amount Difference</th>
				    <th>Status</th>
				  </tr>";
        if($result){
            
			while($row = mysqli_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>".$row['trans_id']."  </td>";
			    echo "<td>".$row['amt']."</td>";
			    echo "<td>".$row['part_id'] . "</td>";
   			    echo "<td>".$row['amt_diff']."</td>";
			    echo "<td>".$row['status']."</td>";
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


