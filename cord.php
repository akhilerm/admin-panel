<?php 
 require_once("db_connect.php");
 $event_id=1001;
 		
	session_start();
	

?>
<html>
<head>
<title>Conjura'17</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nirav'16,registration" />
<script src="js/Registration.js"></script>
<!--web-fonts-->
<!--<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>-->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>





<!--web-fonts-->
</head>
<body style="padding-bottom:3%;">
		<!---header--->
		<div class="header w3ls">

			<h2 style="color: black;"><img src="images/LOGO.png" height="90px" width="90px">CONJURA'17</h2>
		</div>
	
           
		<div class="main-section agile">         
		<nav>            
           
            
            <ul>
        		
        		
        		<li><a href="lock.php" >LOCK</a></li>
        		<li><a href="unlock.php" >UNLOCK</a></li>
        		
            </ul>
            
		</nav>
   

		<br/><br/><br/>
		<form action="cord.php" >
		<input type ="submit" value ="view"/>
		</form>
		<br/>
		<?php 
		$query="SELECT id,name,college,email,phone from participants as p,event_participants_spot as t where p.id = t.part_id and event_id='".$event_id."';";
		$result = $con->query($query);
		$count=0;
		if($result->num_rows>0)
		{
			echo "<table class='table table-striped'>";
			echo "<tr>";
			echo "<th>S.NO</th><th>CONJURA ID</th><th>NAME</th><th>COLLEGE</th><th>EMAIL</th><th>PHONE</th><th>attendance</th><th>prizes</th>";
			echo "</tr>";
		
			while($row=$result->fetch_assoc())
			{
				
				$_SESSION['rowid']=$row['id'];
				echo "<tr>";
				echo "<td>".++$count."</td><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['college']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td><a href='present.php'>present</a> &nbsp; <a href='absent.php'>absent</a></td><td><a href='first.php'>first</a> &nbsp; <a href='second.php'>second</a> &nbsp; <a href='third.php'>third</a> </td>";
				echo "</tr>";
			}		
			echo "</table>";
		}
		else
			echo "NONE HAS REGISTERED";
		?>
		
		<?php include 'footer.php';  ?>
		</div> 
		</body>
</html>
