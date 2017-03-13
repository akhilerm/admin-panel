
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
								 <li id="name"></li>
								 <div class="clear"></div>
							 </ul>
                             <ul>
								 <li class="text-info">Part ID *</li>
								 <li id="pid"></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Email ID *</li>
								 <li id="mail"></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Phone Number *</li>
								 <li id="phno"></li>
								 <div class="clear"></div>
							 </ul>






							 <ul>
								<li class="text-info">Gender *</li>
								<li id="gender"></li>
								<div class="clear"></div>
							</ul>
							<ul>
 							 <li class="text-info">Accommodation *</li>
 							 <li id="accomodation"></li>
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
	<thead>
		<tr>
			<th>Event name</th>
			<th>Event amount</th>
			<th>Trans ID</th>
			<th>Trans amount</th>
			<th>Members</th>
			<th>Status</th>
		</tr>

	</thead>
 <tbody>
	 <tr>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td><input type="button" class="button1" value="Add/View" onclick="popupGeneratorForAddMembers('1002','13021');"></td>
	 <td><input type="button" class="button1" value="Delete" onclick="deleteFromEvent('1002','13021');" id="1002"></td>
	 </tr>
 </tbody>
</table>
</div>
<div class="submitform"><a href="OnlineToSpot.php?id=">
<!--    provide id =partid-->
	<input type="submit" value="submit">
    </a>
</div>

			<!--//table-->
</body>
</html>
