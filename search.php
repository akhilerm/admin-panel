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
<!--web-fonts-->
</head>
<body>
<!--echo  $_SESSION['SEARCH_MSG'] -->
		<!---header   ->
		<div class="header w3ls">
			<h2>Conjura'17</h2>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
								<div class="main-section agile">
					<div class="login-form">
							<h1 style="color: black;">SEARCH PARTICIPANT</h1>
						<form action="Registration.php" method="GET">
							<ul>
								 <li class="text-info">NAME </li>
								 <li><input type="text" name="input" placeholder="" required id="input"></li>
								 <div class="clear"></div>
							 </ul>
						<ul>
								<li class="text-info"><!--------------></li>
								<li class="se"><select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="option" id="option">
								 <option>--select--</option>
								 <option value="0">Conjura_ID</option>
								 <option value="1">Phone_No</option>
								 <option value="2">Email</option>
								 <option value="3">Transaction_ID</option>

								 </select></li>
								<div class="clear"></div>
							</ul>
								<input type="submit" value="SEARCH">
							<div class="clear"></div>
						</form>
					</div>
				</div>
			</div>
</body>
</html>
<?php
                                        
                                    }
                                }
                                        ?>