<?php
require('CookieCheck.php');

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
<!--<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>-->
<script src="js/jquery-1.12.0.min.js"></script>

<!--web-fonts-->
</head>
<body>
		<?php
		require('db_connect.php');
			$head_id=$_GET["id"];
			$event_id=$_GET["eid"];
			$sql_get="select member_id from team where head_id='".$head_id."' and event_id='".$event_id."'";
			$result=$con->query($sql_get);
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					$sql_sel="select * from participants where id='".$row["member_id"]."'";
					$result1=$con->query($sql_sel);
					if($result1->num_rows>0)
					{
						while($row1=$result1->fetch_assoc())
						{
							echo "</br> ".$row1["name"]."   ".$row1["phone"];
						}
					}
				}
			}
			?>
			<h6 id="eid">
			<?php
				echo $event_id;
			?>
			</h6>
		<!---header--->
		<div class="header w3ls">

			<h2>Conjura'17</h2>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
								<div class="main-section agile">
					<div class="login-form">
							<h1 style="color: black;">Add/View Member</h1>
						<form action="#" method="post">
						

												<ul>
								<li class="text-info">Phone Number *</li>
								<li><input type="text" placeholder="" required></li>
								<div class="clear"></div>
							</ul>
							<input type="edit" value="SUBMIT" onclick="Add_Member();">
							<div class="clear"></div>
						</form>
					</div>
				</div>
			</div>
			<!---main--->
			<!--table-->


			<!--//table-->

</body>
</html>
