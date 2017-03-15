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
                <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
				<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="../js/jquery-1.12.0.min.js"></script>
				<script src="../js/event.js"></script>
			</head>
			<body>
              <center>
				
					<h3 class="colblue">Add Event</h3>
				
				<div class="main">
					<div class="main-section agile">
						<div>
						
							<form>
                                <div class="form-group">
                                    <label for="username" align="left" class="control-label">Eventname</label>
                                    
                                 
								
								<div>
									<select class="form-control"  name="eid"  id="eid">
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
			                    </div>
                                </div>
							</form>
							<input type="submit" class="btn-eventdet btn btn-default" value="SAVE" onclick="AddEvent();">				
						</div>
					</div>
				</div>
              </center>
			</body>
		</html>

<?php
    }
}
?>
