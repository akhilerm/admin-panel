<?php
    require_once("db_connect.php");
    session_create();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Conjura'17</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Conjura'17,Registration"/>
  </head>
  <body>
    <div class="header w3ls">
      <h2 style="color:#00d494">Conjura'17</h2>
    </div>
    <div class="main">
      <div class="main-section agile">
        <div class="login-form">
          <h1 style="color: black;">LOGIN</h1>
          <h1>
          	<?php  
                if(isset($_SESSION['MESSAGE']))
                {
                  echo  $_SESSION['MESSAGE'];
                  unset($_SESSION['MESSAGE']);
                }
            ?>
          </h1>
          <form action="loginVerification.php" method="post">
            <ul>
              <li class="text-info">User Name</li>
              <li><input type="text" placeholder="enter username" name="username" id="username" required></li>
              <div class="clear"></div>
            </ul>
            <ul>
              <li class="text-info">Password</li>
              <li><input style="width:300px" type="password" placeholder="Enter Password" name="password" id="password" required></li>
              <div class="clear"></div>
            </ul>
            <input type="submit" class="btn btn-default" value="SUBMIT">
            <div class="clear"></div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>