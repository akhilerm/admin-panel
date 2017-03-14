<?php
	require('../db_connect.php');
  session_create();
  if(session_check()==true)
  {
  	if(session_get_reg()==1)
  	{
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <title>Conjura'17</title>
          <link rel="stylesheet" href="../css/bootstrap.min.css">
          <script src="../js/jquery-1.12.0.min.js"></script>
          <script src="../js/bootstrap.min.js"></script>
        </head>
        <body>
<?php
        include('../header.php');
?>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
              <a type="button" href="search.php" class="btn btn-success"><span class="glyphicon glyphicon-user"></span> Search</a>
            </div>
        </div>
            <br/>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
              <a type="button" href="spotReg.php" class="btn btn-success"><span class="glyphicon glyphicon-user"></span> Register</a>
            </div>
        </div>
<?php
        include('../footer.php');
?>        
        </body>
        </html>
<?php
  	}
  	else
  	{
  		header("location:Logout.php");
  	}
  }
  else
  {
  	header("location:Logout.php");
  }
?>
