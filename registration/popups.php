<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
		$id=cleanup($_GET['id'],$con);
		$query="select * from participants where id=".$id;
		$result=$con->query($query);
		$profile=$result->fetch_assoc();
?>
		<!DOCTYPE HTML>
		<html>
			<head>
				<title>Conjura'17</title>
				<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="../js/jquery-1.12.0.min.js"></script>
				<script src="../js/popups.js"></script>
			</head>
			<body>
				<div class="header w3ls">
					<h2>Conjura'17</h2>
				</div>
				<div class="main">
					<div class="main-section agile">
						<div class="login-form" st>
							<h1 style="color: black;">Edit-Profile</h1>
							<form action="#" method="post">
								<ul>
									<li class="text-info">NAME *</li>
									<li><input type="text" id="name" placeholder="" value="<?php echo $profile['name'] ?>" required></li>
								</ul>
								<ul>
									<li class="text-info">Email ID *</li>
									<li><input type="text" id="email" placeholder="" value="<?php echo $profile['email'] ?>" required></li>
								</ul>
								<ul>
									<li class="text-info">Phone Number *</li>
									<li><input type="text" id="phno" placeholder="" value="<?php echo $profile['phone'] ?>" required></li>
								</ul>
								<ul>
									<li class="text-info">College *</li>
									<select id="gender" class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]" >
										<option>--select--</option>
<?php
										$query_college="select * from college";
										$result_college=$con->query($query_college);
										while($row_college=$result_college->fetch_assoc())
										{
											echo "<option value='".$row_college["college_id"]."'>".$row_college["college_name"]."</option>";
										}
?>
									</select>
								</ul>
								<ul>
									<li class="text-info">Gender *</li>
									<li class="se" >
										<select id="gender" class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]" >
											<option>--select--</option>
											<option  value="f" <?php if($profile['gender']=='f'){echo "selected";} ?>>Female</option>
											<option  value="m" <?php if($profile['gender']=='m'){echo "selected";} ?>>Male</option>
										</select>
									</li>
								</ul>
			                    <ul>
									<li class="text-info">Accommodation *</li>
									<li class="se" >
										<select id="accommodation" class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]">
											<option>--select--</option>
											<option value="-1" <?php if($profile['accommodation']=='-1'){echo "selected";} ?>>Not Needed</option>
											<option value="0" <?php if($profile['accommodation']=='0'){echo "selected";} ?>>Needed But Not Paid</option>
											<option value="1" <?php if($profile['accommodation']=='1'){echo "selected";} ?>>Paid For 1 Day</option>
											<option value="2" <?php if($profile['accommodation']=='2'){echo "selected";} ?>>Paid For 2</option>
											<option value="3" <?php if($profile['accommodation']=='3'){echo "selected";} ?>>Paid For 3</option>
											<option value="4" <?php if($profile['accommodation']=='4'){echo "selected";} ?>>Paid For 4</option>
										</select>
									</li>
								 </ul>
								<input type="edit" value="SUBMIT" onclick="ChangeParent();">
							</form>
						</div>
					</div>
				</div>
			</body>
		</html>
<?php
                                        
    }
    else
	{
		header("location:../logout.php");
	}
}
else
{
	header("location:../logout.php");
}
?>