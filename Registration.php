
<!DOCTYPE HTML>
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
<style>
.submitform input[type="submit"] {
   font-size: 1em;
    padding: .8em 1em;
    text-transform: capitalize;
    border: none;
    outline: none;
    background:#121838;
    color: #fff;
    cursor: pointer;
	width: 18%;
    font-family: 'Ubuntu', sans-serif;
    margin: 0 0 0 3em;
	align-self: center;
position:relative;
left: 40%;
	text-align: center;
}

.button{
	background-color: #9494b8;
	border: none;
	color:white;
	padding: 10px 10px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 13px;
	margin: 1px 1px;
	cursor: pointer;
	align-self: center;
	position: relative;
	left: 30%;
	width: 100px;
}
.button1{
	background-color: #121838;
	border: none;
	color:white;
	padding: 10px 10px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 11px;
	margin: 1px 1px;
	cursor: pointer;
	align-self: center;
	position: relative;
	left: 30%;
}


.event{
	display: inline-block;
}

.container{
	color: black;
}
td{
	color: white;
}
</style>

<!--web-fonts-->
</head>
<body style="padding-bottom:3%;">
		<!---header--->
		<div class="header w3ls">

			<h2 style="color: black;"><img src="images/LOGO.png" height="90px" width="90px">CONJURA'17</h2>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
								<div class="main-section agile">
					<div class="login-form">
							<h1>REGISTRATION</h1>
						<form action="#" method="post">
																				<ul>
								 <li class="text-info">Full Name *</li>
								 <li id="name"><?php 
                                     require('CookieCheck.php');
								 require('db_connect.php');
								 $a=$_GET["name"];
								 $b=$_GET["option"];
                                //echo $b."     :  ";
								 $id=0;
								 if($b=='0')
								 {
									$sql="select * from participants where phone='".$a."'";
								}
								else if($b=='1')
								{
									$sql="select * from participants where email='".$a."'";
								}
								else
								{
									$sql1="select part_id from transactions where trans_id='".$a."'";
									$result1=$con->query($sql1);
									if($result1->num_rows>0)
									{
										while($row1=$result1->fetch_assoc())
										{
											$id=$row1["part_id"];
										}
									}
									else
									{
	                                   echo "empty";
									}


									$sql="select * from participants where id='".$id."'";
								}
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
											echo $row["name"];
											$id=$row["id"];
									
								 ?>
								 </li>
								 <div class="clear"></div>
							 </ul>
                            
                            
                            <ul>
								 <li class="text-info">Part ID *</li>
								 <li id="piid"><?php
                                  echo $id;          
                                ?></li>
								 <div class="clear"></div>
							 </ul>
                            
							 <ul>
								 <li class="text-info">Email ID *</li>
								 <li id="mail"><?php
											echo $row["email"];
											?>
								 </li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Phone Number *</li>
								 <li id="phno"><?php
											echo $row["phone"];
											?></li>
								 <div class="clear"></div>
							 </ul>






							 <ul>
								<li class="text-info">Gender *</li>
								<li id="gender"><?php
											echo $row["gender"];
											?></li>
								<div class="clear"></div>
							</ul>
							<ul>
 							 <li class="text-info">Accommodation *</li>
 							 <li id="accomodation"> <?php
											echo $row["accommodation"];
											}
											}
											?></li>
 							
 							 <div class="clear"></div>
 						 </ul>

							<input type="button" class="button1" value="Edit" onclick="popupGeneratorForEditProfile();">
							<div class="clear"></div>
						</form>
					</div>
				</div>
			</div>
			<!---main--->
			<!--table-->

				<div class="container" style="padding-top: 30px">

<p style="font-size:20px;">EVENTS
<input type="addevent" class="button1" value="+Add Event" style="position:relative; left: 85%;" onclick="popupGeneratorForAddEvents();"></p>
</div>
<table class="table table-bordered">
<!--	<thead>-->
		<tr>
			<th>Event name</th>
			<th>Event amount</th>
			<th>Trans ID</th>
			<th>Trans amount</th>
			<th>Members</th>
			<th>Status</th>
		</tr>
		

<!--
	</thead>
 <tbody>
-->
   
	 <?php
	 
	 
	 
	 $geteventid="select * from event_participants where part_id='".$id."'";
	 $resulteid=$con->query($geteventid);
	 if($resulteid->num_rows>0)
	{
         
	while($row=$resulteid->fetch_assoc())
	{
			$geteventdetails="select * from events where event_id='".$row["event_id"]."'";
        
			$resultevent=$con->query($geteventdetails);
			 if($resultevent->num_rows>0)
			{
				while($rowevent=$resultevent->fetch_assoc())
				{
					echo "<tr >";
				    echo " <td style=\"color: black;\">".$rowevent["event_name"]."</td><td style=\"color: black;\">".$rowevent["amount"]."</td>";
					$checkteam=$rowevent["team"];
                    echo "<td style=\"color: black;\">".$row["paid"]."</td><td style=\"color: black;\">".$row["trans_id"]."</td>";
				}

			}
			/*$geteventpartdetails="select * from event_participants where event_id='".$row["event_id"]."'";
			$resulteventpartdetails=$con->query($geteventpartdetails);
			if($resulteventpartdetails->num_rows>0)
			{
				while($roweventpartdetails=$resulteventpartdetails->fetch_assoc())
				{*/
					
				/*}
			}*/
			if($checkteam=='y')
					{
						echo"<td><input type=\"button\" class=\"button1\" value=\"Add/View\" onclick=\"popupGeneratorForAddMembers('".$row["event_id"]."','".$id."');\"></td>";
					}
			else{
                echo "<td>   </td>";
            }
                    	
					echo"<td><input type=\"button\" class=\"button1\" value=\"Delete\" onclick=\"deleteFromEvent('".$row["event_id"]."','".$id."');\" id=\"".$row["event_id"]."\"></td>";
                    
        echo '</tr>';
				}
		}

	 ?>
<!-- </tbody>-->
</table>
</div>
<div class="submitform">
	<input type="submit" value="submit" onclick="Submit();">
</div>

			<!--//table-->
</body>
</html>
