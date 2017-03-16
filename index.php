<?php
    require_once("db_connect.php");
    session_create();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Conjura'17</title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      
          <script src="js/jquery-1.12.0.min.js"></script>
          <script src="js/bootstrap.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Conjura'17,Registration"/>
  </head>
  <body>
  
    <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img class="brand" src="images/title.png">
              </a>
            </div>
          </div>
        </nav>
       <center> 
    <div class="main">
      <div class="main-section agile">
       
        <div class="login-form">
          <h3 class="colblue">Login</h3>
          <h5 class="colblue">
          	<?php  
                if(isset($_SESSION['MESSAGE']))
                {
                  echo  $_SESSION['MESSAGE'];
                  unset($_SESSION['MESSAGE']);
                }
            ?>
          </h5>
          <form action="loginVerification.php" method="post" style="padding:28px;">
             <div class="form-group">
                <label for="username" align="left" class="control-label">Username</label>
                <div class="">
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Username" required>
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <div class="">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
              </div>
            <input type="submit" class="login-submit btn btn-default" value="SUBMIT">
            
          </form>
        </div>
        </div>
    </div>
     <footer class="footer">
      <div class="container">
        <p class="text-muted">© Conjura'17</p>
      </div>
    </footer>

    </center>
    
   
  </body>
</html>