<?php 
 	require_once("../db_connect.php");
	session_create();
	if(session_check()==true)
  	{
    	if(session_get_coord()==1)
    	{
			$event_id=$_SESSION['event_id'];
?>			
			<html>
				<head>
					<title>Conjura'17</title>
					<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
					<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<meta name="keywords" content="Nirav'16,registration" />
					<script src="../js/Registration.js"></script>
					<!--web-fonts-->
					<!--<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>-->
					<script src="../js/jquery-1.12.0.min.js"></script>
					<script src="../js/bootstrap.min.js"></script>
					<!--web-fonts-->
				</head>
				<body style="padding-bottom:3%;">
					<!---header-->
					<div class="header w3ls">
						<h2 style="color: black;"><img src="../images/LOGO.png" height="90px" width="90px">CONJURA'17</h2>
					</div>
					<div class="main-section agile">         
						<nav>            
		          			<ul>
		        			<?php 
								$sql = "SELECT lock_event FROM events WHERE event_id='".$event_id."';";
								$result = $con->query($sql);
								if($result->num_rows>0)
									while($row=$result->fetch_assoc())
										$status=$row['lock_event'];
								if($status == 0)
									echo "<li><a href='lock.php' >LOCK</a></li>";
								else
									echo "<li><a href='unlock.php' >UNLOCK</a></li>";
							?>
		        			</ul>
		            	</nav>
		   				<br/><br/><br/>
						<form action="index.php" >
							<input type ="submit" value ="view"/>
						</form>
						<br/>
						<?php 
							$query="SELECT id,name,college,email,phone,attendance from participants as p,event_participants_spot as t where p.id = t.part_id and event_id='".$event_id."';";
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
									$newstatus=$row['attendance'];
									$priz=$row['attendance'];
									$_SESSION['rowid']=$row['id'];
									echo "<tr>";
									echo "<td>".++$count."</td><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['college']."</td><td>".$row['email']."</td><td>".$row['phone']."</td>";
									if($newstatus!=0)
									{
										echo "<td><a href='present.php/?id=".$row['id']."'>present</a></td>";
									}
									if($newstatus==0)
									{
										echo "<td><a href='absent.php/?id=".$row['id']."'>absent</a></td>";
									}
									if($priz ==-1 OR $priz==0)
									{
										echo "<td><a href='first.php/?id=".$row['id']."'>first</a> &nbsp; <a href='second.php/?id=".$row['id']."'>second</a> &nbsp; <a href='third.php/?id=".$row['id']."'>third</a> </td>";
									}
									echo "</tr>";
								}		
								echo "</table>";
							}
							else
								echo "NONE HAS REGISTERED";
						?>
						<?php include '../footer.php';  ?>
					</div> 
				</body>
			</html>
		<?php 
		}
		else
	}		header("location:../index.php");
	else
		header("location:../index.php");	
		?>