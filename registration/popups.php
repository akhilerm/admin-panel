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
<!--<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>-->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/popups.js"></script>
<!--web-fonts-->
</head>
<body>
		<!---header--->
<!--
		<div class="header w3ls">

			<h2>Conjura'17</h2>
		</div>
-->
		<!---header--->
		<!---main--->
			<div class="main">
								<div class="main-section agile">
					<div class="login-form" st>
							<h1 style="color: black;">Edit-Profile</h1>
						<form action="#" method="post">
																				<ul>
								 <li class="text-info">NAME *</li>
								 <li><input type="text" id="name" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Email ID *</li>
								 <li><input type="text" id="email" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Phone Number *</li>
								 <li><input type="text" id="phno" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>






							 <ul>
								<li class="text-info">Gender *</li>
								<li class="se" ><select id="gender" class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]" >
								 <option>--select--</option>
								 <option value="00">Female</option>
								 <option value="10">Male</option>
								 </select></li>
								<div class="clear"></div>
							</ul>
                            
                            <ul>
 							 <li class="text-info">Accommodation *</li>
 							 <li class="se" ><select id="accomodation" class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]">
 								<option>--select--</option>
 								<option value="-1">-1</option>
 								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
 								</select></li>
 							 <div class="clear"></div>
 						 </ul>



							<input type="edit" value="SUBMIT" onclick="ChangeParent();">
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
<?php
                                        
                                    }
                                }
?>