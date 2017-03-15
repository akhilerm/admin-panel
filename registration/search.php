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
                
                 <center>
				<div class="main">
					<div class="main-section agile">
						<div class="login-form">
							<h4 class="colblue">Search Participant</h4><br>
							<h5 class="colblue">
<?php
								if(isset($_SESSION['SEARCH_MSG']))
				                {
				                  echo  $_SESSION['SEARCH_MSG'];
				                  unset($_SESSION['SEARCH_MSG']);
				                }
?>								
							</h5>
							<form action="registration.php" method="GET">
								<div class="form-group">
                                    <label for="input" align="left" class="control-label">Username</label>
                                    <div class="">
                                      <input type="text" class="form-control" name="input" id="input"  placeholder="" required>
                                    </div>
                                  </div>
								    <div class="form-group">
                                    <label for="input" align="left" class="control-label">Username</label>
									
									
										<select class=" form-control time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="option" id="option">
											<option>--select--</option>
											<option value="0">Conjura ID</option>
											<option value="1">Phone No</option>
											<option value="2">Email ID</option>
											<option value="3">Transaction ID</option>
										 </select>
									
                                </div>
								 <input type="submit" class="search-submit login-submit btn btn-default" value="SUBMIT">
							</form>			
						</div>
					</div>
				</div>
               </center>
                
<?php
        include('../footer.php');
?>  
			</body>
		</html>
<?php                                       
    }
}
        ?>