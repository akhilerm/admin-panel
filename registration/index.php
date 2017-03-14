<?php
	require('../db_connect.php');
  session_create();
  if(session_check()==true)
  {
  	if(session_get_reg()==1)
  	{
?>
<<<<<<< HEAD


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Conjura'17<</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery-1.12.0.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Conjura'17</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
<!--
      <li><a type="button" href="search.php"><span class="glyphicon glyphicon-user"></span> Search</a></li>
      <li><a type="button" href="register_fresh.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
-->
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
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
<!--      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>-->
    </div>
</div>
</body>
</html>




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
