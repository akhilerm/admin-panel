<?php
	  	if(session_get_reg()==1)
	  	{
?>
			<table class="table-eve table table-striped table-bordered">
				<tr class="colblue">
					<th>Transaction ID</th>
				    <th>Transaction Amount</th>
				    <th>Difference In Amount</th>
				    <th>Status</th>
				</tr>
<?php
				$event_list="select * from transactions where part_id='".$row['id']."'";
				$result=$con->query($event_list) or die(mysqli_error($con));
				if($result)
				{    
				  	if($result->num_rows>0)
				  	{
				  		while($row_event=$result->fetch_assoc())
						{
				  			echo "<tr>";
				  		    echo "<td style='color: black;'>".$row_event["trans_id"]."</td><td style='color: black;'>".$row_event["amt"]."</td>";
				        	echo "<td style= 'color: black;'>".$row_event["amt_diff"]."</td>";	
						  	if($row_event["status"]==-1)
							{
								echo "<td style= 'color: black;'>Amount Not Paid</td>";							
							}
						  	else if($row_event["status"]==0)
						  	{
						        echo "<td style= 'color: black;'>Amount Received But<br>Not Complete</td>";
						    }
						    else if($row_event["status"]==1)
						  	{
						        echo "<td style= 'color: black;'>Transaction Confirmed</td>";
						    }     
						    echo "</tr>";
					  	}
				  	} 
				}
			echo "</table>";
			echo "* Click The 'Confirm All transactions' only once all the difference in amount is collected<br>";
		  	echo"<td><input type= 'button' class= 'btn-eventdet btn btn-default' value= 'Confirm All transactions' onclick='newMembers()'></td>";	

		}			
?>
  