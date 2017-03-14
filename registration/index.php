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
          <link rel="stylesheet" href="../css/style.css">
          <script src="../js/jquery-1.12.0.min.js"></script>
          <script src="../js/bootstrap.min.js"></script>
            
        </head>
        <body>
<?php
        include('../header.php');
        
?>
        <center>   
         <div class="register-main container">   
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                  <a type="button" href="search.php" class="btn-reg btn btn-default">Search</a>
                </div>
           
                 
                <div class="col-md-4">
                  <a type="button" href="spotReg.php" class="btn-reg btn btn-default"> Register</a>
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
