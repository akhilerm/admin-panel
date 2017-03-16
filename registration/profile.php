<?php
  	if(session_get_reg()==1)
   	{
?>
   		<div class="main">
                        
            <center>
	      	<div class="main-section agile">
	        	<div class="login-form1">
	          	<h4 class="colblue">REGISTRATION</h1>
	          	<form action="#" method="post">
                    <table class="table-reg table table-striped">
                    <tbody>
	            	<tr>
	              		<td class="text-info">Conjura ID :</td>
	              		<td id="id"><?php echo $row['id']; ?></td>
					</tr>
		            <tr>
		              	<td class="text-info">Name :</td>
		              	<td id="name"><?php echo strtoupper($row['name']); ?></td>              
		            </tr>
		            <tr>
		             	<td class="text-info">Email :</td>
		              	<td id="email"><?php echo $row["email"]; ?></td>
		            </tr>
		            <tr>
		              	<td class="text-info">Phone Number :</td>
		              	<td id="phone"><?php echo $row["phone"]; ?></td>
		            </tr>
		            <tr>
		              	<td class="text-info">College :</td>
		              	<td id="college">
<?php 
		              		echo strtoupper($row["college_name"]) 
?>
		              	</td>
		            </tr>
		            <tr>
		            	<td class="text-info">Gender :</td>
		            	<td id="gender"><?php echo strtoupper($row['gender']); ?></td>
		            </tr>
		            <tr>
		            	<td class="text-info">Accommodation :</td>
		              	<td id="accomodation">
<?php 
		              		if($row["accommodation"]==-1)
		              		{
		              			$_SESSION['SUM_ACC']=0;
		              			echo "Not Needed";
		              		}
		              		else if($row["accommodation"]==0)
		              		{
		              			$_SESSION['SUM_ACC']=0;
		              			echo "Needed, But Not Paid";
		              		}
		              		else if($row["accommodation"]==1)
		              		{
		              			$_SESSION['SUM_ACC']=100;
		              			echo "Paid For 1 Day";
		              		}
		              		else if($row["accommodation"]==2)
		              		{
		              			$_SESSION['SUM_ACC']=200;
		              			echo "Paid For 2 Days";
		              		}
		              		else if($row["accommodation"]==3)
		              		{
		              			$_SESSION['SUM_ACC']=250;
		              			echo "Paid For 3 Days";
		              		}
		              		else if($row["accommodation"]==4)
		              		{
		              			$_SESSION['SUM_ACC']=300;
		              			echo "Paid For 4 Days";
		              		}
?>
		           		</td>                
		            </tr>
                    </tbody>
                    </table>
		            <input type="button" class="btn-regdet btn btn-default" value="Edit" onclick="popupGeneratorForEditProfile();">
	          </form>
	        </div>
	      </div>
        </center>
	    </div>
<?php	    		
		}
		else
		{
			echo '<meta http-equiv="refresh" content="0;url=../search.php"/>';
		}

?>