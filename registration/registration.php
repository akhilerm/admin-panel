<!DOCTYPE HTML>
<html>
  <head>
    <title>Conjura'17|Registration</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/registration.js"></script>
    <script src="../js/jquery-1.12.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  
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
					<body>
                    <center>
	    			
<?php
						include('profile.php');
            echo "<h4>* Collect an amount of Rs.".$_SESSION['SUM_ACC']." when accommodation is edited.";
            include('transaction_table.php');
?>	 
						<div class="container" style="padding-top: 30px">
                            <h4 class="colblue">EVENTS</h4>
	        			<input type="button" class="btn-regdet btn btn-default" value="+Add Event" style="position:relative;" onclick="popupGeneratorForAddEvents();"></input>
	      			
	   				</div>   
<?php
						include('eventTable.php');
            $query_amt="select sum(amount) as sum from event_participants as ep,events as e where ep.event_id=e.event_id and lock_event=0 and  ep.trans_id not in (select trans_id from transactions where  status=1) and ep.part_id=".$row['id'];
            $result_amt=$con->query($query_amt);
            if($result_amt->num_rows>0)
            {
              $row_amt=$result_amt->fetch_assoc();
              $_SESSION['SUM_SPOT']=$row_amt['sum'];
            } 
            else
              $_SESSION['SUM_SPOT']=0;
            echo "<h4 class='colblue' style='text-align:center'>Spot Registration Amount :".$_SESSION['SUM_SPOT']."</h4>";
            
            $query_amt_diff="select sum(amt_diff) as sum from transactions where status!=1 and part_id=".$row['id'];
            $result_amt_diff=$con->query($query_amt_diff) or die(mysqli_error($con));
            if($result_amt_diff->num_rows>0)
            {
              $row_amt_diff=$result_amt_diff->fetch_assoc();
              $_SESSION['SUM_DIFF']=$row_amt_diff['sum'];
            } 
            else
              $_SESSION['SUM_DIFF']=0;
            echo "<h4 class='colblue' style='text-align:center'>Difference In Transaction Amount :".$_SESSION['SUM_DIFF']."</h4>";
            $_SESSION['SUM']=$_SESSION['SUM_SPOT']+$_SESSION['SUM_DIFF'];
            echo "<h3 class='colblue' style='text-align:center'>Total Amount To Be Collected (Excluding Accommodation):".$_SESSION['SUM']."</h3>";
            unset($_SESSION['SUM_ACC']);
?>
						<div class="submitform">
	      			<input type="submit" class="btn-eventdet btn btn-default" value="submit" onclick="Submit();">
	    			</div>
                    <br>
                 <footer class="footer-relative">
                  <div class="container">
                    <p class="text-muted text-center">Conjura'17</p>
                  </div>
                </footer>
                </center>
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
