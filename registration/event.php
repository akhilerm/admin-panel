<?php
require('db_connect.php');
session_create();
  								if(session_check()==true)
  								{
   									if(session_get_reg()==1)
   									{

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Conjura'17</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nirav'16,registration" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/event.js"></script>

<!--web-fonts-->
</head>
<body>
		<!---header--->
		<div class="header w3ls">

			<h2>Conjura'17</h2>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
								<div class="main-section agile">
					<div class="login-form">
							<h1>EVENT </h1>
						
							<ul>
			<li class="text-info">Event Name</li>
			<li><select class="form-control"  name="eid" style="border-radius:0px" id="eid">
			<?php
			
			$sqlget="select event_name,event_display from events";
			$result=$con->query($sqlget);
			if($result->num_rows>0)
			{
					while($row=$result->fetch_assoc())
					{
						echo "<option value='".$row["event_name"]."'>".$row["event_display"]."</option>";
					}
			}

			?>						
									</select>
                                </li>
			
                                
                         
		</ul>


							<input type="submit" value="SAVE" onclick="AddEvent();">
							<div class="clear"></div>
						
					</div>
				</div>
			</div>
			<!---main--->
			<!--table-->


			<!--//table-->
</body>
</html>

<?php
                                    }
                                }
?>
