<!DOCTYPE HTML>
<html>
  <head>
    <title>Conjura'17|Registration</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/registration.js"></script>
    <script src="../js/jquery-1.12.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style>
      .submitform input[type="submit"] {
      font-size: 1em;
      padding: .8em 1em;
      text-transform: capitalize;
      border: none;
      outline: none;
      background:#121838;
      color: #fff;
      cursor: pointer;
      width: 18%;
      font-family: 'Ubuntu', sans-serif;
      margin: 0 0 0 3em;
      position:relative;
      left: 40%;
      text-align: center;
      }
      .button{
      background-color: #9494b8;
      border: none;
      color:white;
      padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 13px;
      margin: 1px 1px;
      cursor: pointer;
      align-self: center;
      position: relative;
      left: 30%;
      width: 100px;
      }
      .button1{
      background-color: #121838;
      border: none;
      color:white;
      padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 11px;
      margin: 1px 1px;
      cursor: pointer;
      align-self: center;
      position: relative;
      left: 30%;
      }
      .event{
      display: inline-block;
      }
      .container{
      color: black;
      }
      td{
      color: white;
      }
    </style>
  </head>
<?php
  require('../db_connect.php');
  session_create();
  if(session_check()==true)
  {
   	if(session_get_reg()==1)
   	{
   		$tag=cleanup($_GET['input'],$con);
   		$option=cleanup($_GET['option'],$con);	
   		if($option=='3')
   		{
   			$query ="select * from participants as p,college as c where id in (select part_id from transactions where trans_id='$tag') and c.college_id=p.college";
   		}
   		else if($option=='0'  || $option=='1' || $option=='2')
   		{
   			$query="select * from participants as p,college as c where c.college_id=p.college and  (email='$tag' or phone='$tag' or id='$tag') ";
   		}
   		$result=$con->query($query);
   		if($result)
   		{
   			if($result->num_rows>0)
	      {
	      	$row=$result->fetch_assoc();

          include('../header.php');
?>
					<body style="padding-bottom:3%;">
	    			<div class="header w3ls">
	      			<h2 style="color: black;"><img src="../images/logo.png" height="90px" width="90px">Conjura'17</h2>
	    			</div>
<?php
						include('profile.php');
?>	 
						<div class="container" style="padding-top: 30px">
	      			<p style="font-size:20px;">EVENTS
	        			<input type="button	" class="button1" value="+Add Event" style="position:relative; left: 85%;" onclick="popupGeneratorForAddEvents();">
	      			</p>
	   				</div>   
<?php
						include('eventTable.php');
            $query_amt="select sum(amount) as sum from event_participants as ep,events as e where ep.event_id=e.event_id and  ep.trans_id not in (select trans_id from transactions where  status=1) and ep.part_id=".$row['id'];
            $result_amt=$con->query($query_amt);
            if($result_amt->num_rows>0)
            {
              $row_amt=$result_amt->fetch_assoc();
              echo "<h3 style='text-align:center'>Amount To Be Collected :".$row_amt['sum']."</h3>";
            } 
            else
              echo "<h3 style='text-align:center'>Amount To Be Collected :0</h3>";
?>
						<div class="submitform">
	      			<input type="submit" value="submit" onclick="Submit();">
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
	      	$_SESSION['SEARCH_MSG']="No records Found.";
   				header("location:search.php");
	      }
   		}
   		else
   		{
   			$_SESSION['SEARCH_MSG']="Please Try Again.";
   			header("location:search.php");
   		} 		
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
