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
                    <center>
                     <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img class="brand" src="../images/title.png">
              </a>

              <ul class="nav navbar-nav navbar-right  ">
                  <li class=""><a class="colblue" href="index.php">Home</a></li>

                  <li><a class="colblue" href="../logout.php"> Logout</a></li>
                  <li><a class="colblue">
				  <?php
                  					
							$query="SELECT event_name from events where event_id='".$event_id."';";
							$result = $con->query($query);
							$row=$result->fetch_assoc();
							echo $row['event_name'];
                    		?></a></li>
                </ul>
            </div>
          </div>
        </nav>


                    
					<!---header-->
				
					<div class="main-section agile">         
						   <div class="row"> 
                               <div style="margin-bottom:20px;">
		          			<button class="btn-eventdet btn btn-default" style="margin-top:100px;">
		        			<?php 
								$sql = "SELECT lock_event FROM events WHERE event_id='".$event_id."';";
								$result = $con->query($sql);
								if($result->num_rows>0)
									while($row=$result->fetch_assoc())
										$status=$row['lock_event'];
								if($status == 0)
									echo "<a href='lock.php' >LOCK</a>";
								else
									echo "<a href='unlock.php' >UNLOCK</a>";
							?>
		        			</button>
                            </div>
		            	<div>
						<form action="index.php" >
							<input  class="btn-eventdet btn btn-default" type ="submit" value ="VIEW"/>
						</form>
                        </div>
                        </div>
						<br/>
						<?php 
							$query="SELECT id,name,college,email,phone,attendance from participants as p,event_participants_spot as t where p.id = t.part_id and event_id='".$event_id."';";
							$result = $con->query($query);
							$count=0;
							if($result->num_rows>0)
							{
								echo "<table class='table-reg table table-bordered table-striped'>";
								echo "<tr class='colblue'>";
								echo "<th >S.NO</th><th>CONJURA ID</th><th>NAME</th><th>COLLEGE</th><th>EMAIL</th><th>PHONE</th><th>attendance</th><th>prizes</th>";
								echo "</tr>";
								while($row=$result->fetch_assoc())
								{
									$newstatus=$row['attendance'];
									$priz=$row['attendance'];
									$_SESSION['rowid']=$row['id'];
									echo "<tr>";
									echo "<td>".++$count."</td><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['college']."</td><td>".$row['email']."</td><td>".$row['phone']."</td>";
									if($newstatus==-1)
									{
										echo "<td><a href='present.php/?id=".$row['id']."'>present</a></td>";
									}
									if($newstatus!=-1)
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
                        <footer class="footer-relative">
                          <div class="container">
                            <p class="text-muted text-center">Conjura'17</p>
                          </div>
                        </footer>
                        </center>
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
