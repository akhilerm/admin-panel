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
				<title>|Conjura'17 </title>
                <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
				<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="../js/jquery-1.12.0.min.js"></script>
				<script src="../js/ChangeTransactionId.js"></script>
			</head>
			<body>
              <center>
				
					<h3 class="colblue">change tid</h3>
				
				<div class="main">
					<div class="main-section agile">
						<div>
						
							<form>
                                <div class="form-group">
                                    <label for="name" align="left" class="control-label"> old tid</label>
									<input class="form-control" type="text" id="otid" placeholder="" ></input>
								</div>
                            
                            <div class="form-group">
                                    <label for="name" align="left" class="control-label"> new tid</label>
									<input class="form-control" type="text" id="ntid" placeholder="" ></input>
								</div>
									
			                    </div>
                                </div>
							</form>
							<input type="submit" class="btn-eventdet btn btn-default" value="SAVE" onclick="Change();">				
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
