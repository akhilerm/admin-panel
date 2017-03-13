<?php
	require('db_connect.php');
  session_create();
  if(session_check()==true)
  {
  	if(session_get_reg()==1)
  	{
?>
			<html>
				<body>
					<a  type="button" href="search.php" >Search</a>
<<<<<<< HEAD
					<a  type="button" href="SpotReg.php" >Register</a>
=======
					<a  type="button" href="register_fresh.php" >Register</a>
>>>>>>> 0702ff9e08242c6f2f39dd26c1ac886d765f2a2a
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