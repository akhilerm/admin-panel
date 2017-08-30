	<?php
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', ''); 
	define('DB_USER',''); 
	define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
	
	function cleanup ($str1,$con)
	{
		$str1=mysqli_real_escape_string($con,$str1);
		$str1=strip_tags($str1);
		$str1=addslashes($str1);
		return $str1;
	}
	function session_create()
	{
		session_start();
	}
	function session_set_reg()
	{
		$_SESSION['LoggedINReg']=1;
	}
	function session_set_acc()
	{
		$_SESSION['LoggedINAcc']=1;
	}
	function session_set_doc()
	{
		$_SESSION['LoggedINDoc']=1;
	}
	function session_set_coord()
	{
		$_SESSION['LoggedINCoord']=1;
	}
	function session_set_admin()
	{
		$_SESSION['LoggedINAdmin']=1;
	}

	//get functions
	function session_get_reg()
	{
		return $_SESSION['LoggedINReg'];
	}
	function session_get_acc()
	{
		return $_SESSION['LoggedINAcc'];
	}
	function session_get_doc()
	{
		return $_SESSION['LoggedINDoc'];
	}
	function session_get_coord()
	{
		return $_SESSION['LoggedINCoord'];
	}
	function session_get_admin()
	{
		return $_SESSION['LoggedINAdmin'];
	}

	function session_check()
	{
		if(isset($_SESSION['LoggedINAdmin']))
		{
			
			if ($_SESSION['LoggedINAdmin']==1)
			{
				session_regenerate_id();
				return true;
			}	
			return false;
		}
		else if(isset($_SESSION['LoggedINCoord']))
		{
			if($_SESSION['LoggedINCoord']==1)
			{
				session_regenerate_id();
				return true;
			}
			return false;
		}	
		else if(isset($_SESSION['LoggedINAcc']))
		{
			if($_SESSION['LoggedINAcc']==1)
			{
				session_regenerate_id();
				return true;
			}
			return false;
		}	
		else if(isset($_SESSION['LoggedINDoc']))
		{
			if($_SESSION['LoggedINDoc']==1)
			{
				session_regenerate_id();
				return true;
			}
			return false;
		}
		else if(isset($_SESSION['LoggedINReg']))
		{
			if($_SESSION['LoggedINReg']==1)
			{
				session_regenerate_id();
				return true;
			}
			return false;
		}	
		return true;	
	}
	function sess_destroy()
	{
 		if (isset($_SESSION['LoggedINAdmin']))
 		{
 			unset($_SESSION['LoggedINAdmin']);
 		}
 		if (isset($_SESSION['LoggedINReg']))
 		{
 			unset($_SESSION['LoggedINReg']);
 		}
 		if (isset($_SESSION['LoggedINCoord']))
 		{
 			unset($_SESSION['LoggedINCoord']);
 		}
 		if (isset($_SESSION['LoggedINDoc']))
 		{
 			unset($_SESSION['LoggedINDoc']);
 		}
 		if (isset($_SESSION['LoggedINAcc']))
 		{
 			unset($_SESSION['LoggedINAcc']);
 		}	
 		session_destroy();
	}

	function redirect()
	{
		if(session_check()==true)
	    {
	    	if(isset($_SESSION['LoggedINAdmin']))
			{
				if ($_SESSION['LoggedINAdmin']==1)
				{
					echo '<meta http-equiv="refresh" content="0;url=super_admin/"/>';
				}	
			}
			else if(isset($_SESSION['LoggedINCoord']))
			{
				if($_SESSION['LoggedINCoord']==1)
				{
					echo '<meta http-equiv="refresh" content="0;url=coordinator/"/>';
				}
			}	
			else if(isset($_SESSION['LoggedINAcc']))
			{
				if($_SESSION['LoggedINAcc']==1)
				{
					echo '<meta http-equiv="refresh" content="0;url=accommodation/"/>';
				}
			}	
			else if(isset($_SESSION['LoggedINDoc']))
			{
				if($_SESSION['LoggedINDoc']==1)
				{
					echo '<meta http-equiv="refresh" content="0;url=documentation/"/>';
				}
			}
			else if(isset($_SESSION['LoggedINReg']))
			{
				if($_SESSION['LoggedINReg']==1)
				{
					echo '<meta http-equiv="refresh" content="0;url=registration/"/>';
				}
			}
			else
				echo '<meta http-equiv="refresh" content="0;url=logout.php"/>';		
	    }
	}
	?>
