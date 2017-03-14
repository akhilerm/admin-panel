<?php
  if(session_check()==true)
  {
  	if(session_get_reg()==1)
   	{
?>
   		<div class="main">
	      	<div class="main-section agile">
	        	<div class="login-form">
	          	<h1>REGISTRATION</h1>
	          	<form action="#" method="post">
	            	<ul>
	              		<li class="text-info">Conjura ID :</li>
	              		<li id="id"><?php echo $row['id']; ?></li>
					</ul>
		            <ul>
		              	<li class="text-info">Name :</li>
		              	<li id="name"><?php echo strtoupper($row['name']); ?></li>              
		            </ul>
		            <ul>
		             	<li class="text-info">Email :</li>
		              	<li id="email"><?php echo $row["email"]; ?></li>
		            </ul>
		            <ul>
		              	<li class="text-info">Phone Number :</li>
		              	<li id="phone"><?php echo $row["phone"]; ?></li>
		            </ul>
		            <ul>
		              	<li class="text-info">College :</li>
		              	<li id="college"><?php echo strtoupper($row["college"]) ?></li>
		            </ul>
		            <ul>
		            	<li class="text-info">Gender :</li>
		            	<li id="gender"><?php echo strtoupper($row['gender']); ?></li>
		            </ul>
		            <ul>
		            	<li class="text-info">Accommodation :</li>
		              	<li id="accomodation">
<?php 
		              		if($row["accommodation"]==-1)
		              			echo "Not Needed";
		              		else if($row["accommodation"]==0)
		              			echo "Needed, But Not Paid";
		              		else if($row["accommodation"]==1)
		              			echo "Paid For 1 Day";
		              		else if($row["accommodation"]==2)
		              			echo "Paid For 2 Days";
		              		else if($row["accommodation"]==3)
		              			echo "Paid For 3 Days";
		              		else if($row["accommodation"]==4)
		              			echo "Paid For 4 Days";
?>
		           		</li>                
		            </ul>
		            <input type="button" class="button1" value="Edit" onclick="popupGeneratorForEditProfile();">
	          </form>
	        </div>
	      </div>
	    </div>
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