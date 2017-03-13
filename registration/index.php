<?php
	require('../db_connect.php');
  session_create();
  if(session_check()==true)
  {
  	if(session_get_reg()==1)
  	{
?>
			<html>
				<body>
					<a  type="button" href="search.php" >Search</a>
					<a  type="button" href="registerFresh.php" >Register</a>
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