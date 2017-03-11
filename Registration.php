<!DOCTYPE HTML>
<html>
  <head>
    <title>Conjura'17</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Nirav'16,registration" />
    <script src="js/Registration.js"></script>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
      align-self: center;
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
  require('db_connect.php');
  session_create();
  if(session_check()==true)
   {
   	if(session_get_reg()==1)
   	{
   		$tag=cleanup($_GET['input'],$con);
   		$option=cleanup($_GET['option'],$con);	
   		if($option=='3')
   		{
   			$query ="select * from participants where id in (select part_id from transactions where trans_id='$tag')";
   		}
   		else if($option=='0'  || $option=='1' || $option=='2')
   		{
   			$query="select * from participants where email='$tag' or phone='$tag' or id='$tag'";
   		}
   		$result=$con->query($query);
   		if($result)
   		{
   			if($result->num_rows>0)
	      {
	      	$row=$result->fetch_assoc();

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
?>
	  <body style="padding-bottom:3%;">
	    <div class="header w3ls">
	      <h2 style="color: black;"><img src="images/logo.png" height="90px" width="90px">CONJURA'17</h2>
	    </div>
<?php
			include('profile.php');
?>	    

		    <div class="container" style="padding-top: 30px">
		      <p style="font-size:20px;">EVENTS
		        <input type="addevent" class="button1" value="+Add Event" style="position:relative; left: 85%;" onclick="popupGeneratorForAddEvents();">
		      </p>
		    </div>
		    <table class="table table-bordered">
		      <tr>
		        <th>Event name</th>
		        <th>Event amount</th>
		        <th>Trans ID</th>
		        <th>Trans amount</th>
		        <th>Members</th>
		        <th>Status</th>
		      </tr>
<?php
		        $geteventid="select * from event_participants where part_id='".$id."'";
		        $resulteid=$con->query($geteventid);
		        if($resulteid->num_rows>0)
		        {
		               
		        while($row=$resulteid->fetch_assoc())
		        {
		        	$geteventdetails="select * from events where event_id='".$row["event_id"]."'";
		              
		        	$resultevent=$con->query($geteventdetails);
		        	 if($resultevent->num_rows>0)
		        	{
		        		while($rowevent=$resultevent->fetch_assoc())
		        		{
		        			echo "<tr >";
		        		    echo " <td style=\"color: black;\">".$rowevent["event_name"]."</td><td style=\"color: black;\">".$rowevent["amount"]."</td>";
		        			$checkteam=$rowevent["team"];
		                          echo "<td style=\"color: black;\">".$row["paid"]."</td><td style=\"color: black;\">".$row["trans_id"]."</td>";
		        		}
		        
		        	}
		        	if($checkteam=='y')
		        			{
		        				echo"<td><input type=\"button\" class=\"button1\" value=\"Add/View\" onclick=\"popupGeneratorForAddMembers('".$row["event_id"]."','".$id."');\"></td>";
		        			}
		        	else{
		                      echo "<td>   </td>";
		                  }
		                          	
		        			echo"<td><input type=\"button\" class=\"button1\" value=\"Delete\" onclick=\"deleteFromEvent('".$row["event_id"]."','".$id."');\" id=\"".$row["event_id"]."\"></td>";
		                          
		              echo '</tr>';
		        		}
		        }
?>
		    </table>
	    </div>
	    <div class="submitform">
	      <input type="submit" value="submit" onclick="Submit();">
	    </div>
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