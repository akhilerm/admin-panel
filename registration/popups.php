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
                <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
				<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="../js/jquery-1.12.0.min.js"></script>
				<script src="../js/popups.js"></script>
			</head>
			<body>   
                <center>
				
					<h3 class="colblue">Edit Details</h3>
				
				<div class="main">
					<div class="main-section agile">
						<div>
							<form action="#" method="post">
								<div class="form-group">
                                    <label for="name" align="left" class="control-label"> Name*</label>
									<input class="form-control" type="text" id="name" placeholder="" value="<?php echo $profile['name'] ?>"></input>
								</div>
				
								<div class="form-group">
									<label for="email" align="left" class="control-label">Email*</label>
									<input class="form-control" type="text" id="email" placeholder="" value="<?php echo $profile['email'] ?>" >
								</div>
								<div class="form-group">
									<label for="phno" align="left" class="control-label">Phone No</label>
									<input class="form-control" type="text" id="phno" placeholder="" value="<?php echo $profile['phone'] ?>" >
								</div>
								<div class="form-group">
									<label for="college" align="left" class="control-label">College</label>
									<select class="form-control" id="college" class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]" >
<?php
										$query_college="select * from college";
										$result_college=$con->query($query_college);
										while($row_college=$result_college->fetch_assoc())
										{
											if($row_college['college_id']==$profile['college'])
												echo "<option value='".$row_college["college_id"]."' selected>".$row_college["college_name"]."</option>";
											else
												echo "<option value='".$row_college["college_id"]."'>".$row_college["college_name"]."</option>";

										}
?>
									</select>
								</div>
								<div class="form-group">
									<label for="gender" align="left" class="control-label">Gender</label>
									
										<select class="form-control" id="gender" class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]" >
											<option>--select--</option>
											<option  value="f" <?php if($profile['gender']=='f'){echo "selected";} ?>>Female</option>
											<option  value="m" <?php if($profile['gender']=='m'){echo "selected";} ?>>Male</option>
										</select>
									
								</div>
			                    <div class="form-group">
									<label for="accommodation" align="left" class="control-label">Accommodation</label>
									
										<select class="form-control" id="accommodation" class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]">
											<option>--select--</option>
											<option value="-1" <?php if($profile['accommodation']=='-1'){echo "selected";} ?>>Not Needed</option>
											<option value="0" <?php if($profile['accommodation']=='0'){echo "selected";} ?>>Needed But Not Paid</option>
											<option value="1" <?php if($profile['accommodation']=='1'){echo "selected";} ?>>Paid For 1 Day</option>
											<option value="2" <?php if($profile['accommodation']=='2'){echo "selected";} ?>>Paid For 2 Days</option>
											<option value="3" <?php if($profile['accommodation']=='3'){echo "selected";} ?>>Paid For 3 Days</option>
											<option value="4" <?php if($profile['accommodation']=='4'){echo "selected";} ?>>Paid For 4 Days</option>
										</select>
									
								 </div>
								<input type="edit" class="btn-eventdet btn btn-default" value="SUBMIT" onclick="ChangeParent();">
							</form>
						</div>
					</div>
				</div>
                </center>
			</body>
		</html>
<?php
                                        
    }
    else
	{
		echo '<meta http-equiv="refresh" content="0;url=../logout.php"/>';
	}
}
else
{
	echo '<meta http-equiv="refresh" content="0;url=../logout.php"/>';
}
?>