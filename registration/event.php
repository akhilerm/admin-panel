<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
?>
		<!DOCTYPE HTML>
		<html>
			<head>
				<title>Add Event|Conjura'17 </title>
				<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="../js/jquery-1.12.0.min.js"></script>
				<script src="../js/event.js"></script>
			</head>
			<body>
				<div class="header w3ls">
					<h2>Add Event</h2>
				</div>
				<div class="main">
					<div class="main-section agile">
						<div class="login-form">
							<h1>EVENT </h1>
							<ul>
								<li class="text-info">Event Name</li>
								<li>
									<select class="form-control"  name="eid" style="border-radius:0px" id="eid">
<?php	
										$sqlget="select * from events where lock_event=0";
										$result=$con->query($sqlget);
										if($result->num_rows>0)
										{
											while($row=$result->fetch_assoc())
											{
												echo "<option value='".$row["event_id"]."'>".$row["event_display"]."</option>";
											}
										}
?>						
									</select>
			                    </li>
							</ul>
							<input type="submit" value="SAVE" onclick="AddEvent();">				
						</div>
					</div>
				</div>
			</body>
		</html>

<?php
    }
}
?>
