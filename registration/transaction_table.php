<?php
	  	if(session_get_reg()==1)
	  	{
?>
			<table class="table-eve table table-striped table-bordered">
				<tr class="colblue">
					<th>Transaction ID</th>
				    <th>Transaction Amount</th>
				    <th>Amount To Be Paid</th>
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
				  		    echo "<td style='color: black;'>".$row_event[""]."</td><td style= 'color: black;'>".$row_event["amount"]."</td>";
				  		    if($row_event['lock_event']==0)
				  		    	echo "<td>Registration Open</td>";
				  		    else if($row_event['lock_event']==1)
				  		    	echo "<td>Registration Closed</td>";
				  		    echo "</td>";
				        	echo "<td style= 'color: black;'>".$row_event["amt"]."</td><td style= 'color: black;'>".$row_event["trans_id"]."</td>";	
				  			echo "<td style= 'color: black;'>Cannot Be Deleted</td>";
						  	if($row_event["team"]=='y')
							{
								echo"<td><input type= 'button' class= ' btn-eventdet btn btn-default' value= 'Add/View' onclick= \"popupGeneratorForAddMembers('".$row_event["event_id"]."','".$row['id']."');\"></td>";
								echo"<td><input type= 'button' class= 'btn-eventdet btn btn-default' value= 'New Member' onclick='newMembers()'></td>";								
							}
						  	else
						  	{
						        echo "<td style= 'color: black;'>Not Team Event</td>";
						        echo "<td style= 'color: black;'>Not Team Event</td>";
						    }     
						    echo "<td style= 'color: black;'>Participation <br>Confirmed</td>";     	
						    echo "</tr>";
					  	}
				  	} 
				}
			echo "</table>";
		}			
?>
  