<?php
  require('db_connect.php');
  session_create();
  redirect();
  if(!empty($_POST["username"]) && !empty($_POST["password"]))
  {
  	$usr=cleanup($_POST["username"],$con);
	  $pass=cleanup($_POST["password"],$con);
	  $sql="select * from login where username='$usr' and password='$pass'";
	  $result=$con->query($sql);
	  if($result && $result->num_rows>0)
	  {
	  	$row=$result->fetch_assoc();
  		if($row["username"]==$usr && $row["password"]==$pass)
  		{
  			if($row['event_id']==0)
  			{
  				session_set_admin();
  			}
  			else if($row['event_id']==1)
  			{
  				session_set_reg();
  			}
  			else if($row['event_id']==2)
  			{
  				session_set_doc();
  			}
  			else if($row['event_id']==3)
  			{
  				session_set_acc();
  			}
  			else if((int)$row['event_id']>=1001 && (int)$row['event_id']<=1201)
  			{
  				session_set_coord();
  			}
  			redirect();
  		}
  		else
  		{
  			$_SESSION['MESSAGE']="Login Failed";
  			header('Location: Login.php');	
  		}
	  }
	  else
	  {
	  	$_SESSION['MESSAGE']="Login Failed";
	  	header('Location: Login.php');	
	  }
  }
  else
  {
  	$_SESSION['MESSAGE']="Login Failed";
  	header('Location: Login.php');
  }
?>