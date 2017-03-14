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
				<title>Conjura'17 | Search</title>
				<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="../js/jquery-1.12.0.min.js"></script>
				<link rel="stylesheet" href="../css/bootstrap.min.css">
			</head>
			<body>
<?php
  		        include('../header.php');
?>			
				<div class="header w3ls">
					<h2>Conjura'17</h2>
				</div>
				<div class="main">
					<div class="main-section agile">
						<div class="login-form">
							<h1 style="color: black;">SEARCH PARTICIPANT</h1>
							<h4 style="color: black;">
<?php
								if(isset($_SESSION['SEARCH_MSG']))
				                {
				                  echo  $_SESSION['SEARCH_MSG'];
				                  unset($_SESSION['SEARCH_MSG']);
				                }
?>								
							</h4>
							<form action="registration.php" method="GET">
								<ul>
									<li class="text-info">NAME </li>
									<li><input type="text" name="input" placeholder="" required id="input"></li>
								</ul>
								<ul>
									<li class="text-info"></li>
									<li class="se">
										<select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="option" id="option">
											<option>--select--</option>
											<option value="0">Conjura_ID</option>
											<option value="1">Phone_No</option>
											<option value="2">Email</option>
											<option value="3">Transaction_ID</option>
										 </select>
									</li>
								</ul>
								<input type="submit" value="SEARCH"/>
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