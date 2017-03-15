<?php
	  	if(session_get_reg()==1)
	  	{
?>
			<table class="table-eve table table-striped table-bordered">
				<tr class="colblue">
					<th>Event name</th>
				    <th>Event amount</th>
				    <th>Trans amount</th>
				    <th>Trans ID</th>
				    <th>Delete</th>
				    <th>Members</th>
				    <th>New Member</th>
				    <th>Status</th>
				</tr>
<?php
				$event_list="select * from event_participants_spot left outer join events on event_participants_spot.event_id=events.event_id left outer join transactions on event_participants_spot.trans_id=transactions.trans_id where event_participants_spot.part_id='".$row['id']."'";
				$result=$con->query($event_list);
				if($result)
				{    
				  	if($result->num_rows>0)
				  	{
				  		while($row_event=$result->fetch_assoc())
						{
				  			echo "<tr>";
				  		    echo "<td style='color: black;'>".$row_event["event_display"]."</td><td style= 'color: black;'>".$row_event["amount"]."</td>";
				        	echo "<td style= 'color: black;'>".$row_event["amt"]."</td><td style= 'color: black;'>".$row_event["trans_id"]."</td>";	
				  			echo "<td style= 'color: black;'>Cannot Be Deleted</td>";
						  	if($row_event["team"]=='y')
							{
								echo"<td><input type= 'button' class= 'btn-eventdet btn-eventdet btn btn-default' value= 'Add/View' onclick= \"popupGeneratorForAddMembers('".$row_event["event_id"]."','".$row['id']."');\"></td>";
								echo"<td><input type= 'button' class= 'btn-eventdet btn btn-default' value= 'New Member' onclick='newMembers()'></td>";								
							}
						  	else
						  	{
						        echo "<td style= 'color: black;'>Not Team Event</td>";
						        echo "<td style= 'color: black;'>Not Team Event</td>";
						    }     
						    echo "<td style= 'color: black;'>Confirmed</td>";     	
						    echo "</tr>";
					  	}
				  	} 
				}
				$event_list="select * from event_participants left outer join events on event_participants.event_id=events.event_id left outer join transactions on event_participants.trans_id=transactions.trans_id where event_participants.part_id='".$row['id']."'"; 
				$result=$con->query($event_list);
				if($result)
				{    
				 	if($result->num_rows>0)
				  	{
				  		while($row_event=$result->fetch_assoc())
						{
				  			echo "<tr>";
				  		  	echo "<td style='color: black;'>".$row_event["event_display"]."</td><td style= 'color: black;'>".$row_event["amount"]."</td>";
				        	echo "<td style= 'color: black;'>".$row_event["amt"]."</td><td style= 'color: black;'>".$row_event["trans_id"]."</td>";	
				  			echo"<td><input type= 'button' class= 'btn-eventdet btn btn-default'  value= 'Delete' onclick=\"deleteFromEvent('".$row_event["event_id"]."','".$row['id']."');\" id=".$row_event['event_id']."></td>";              	  	
						  	if($row_event["team"]=='y')
							{
								echo"<td><input type= 'button' class= 'btn-eventdet btn btn-default' value= 'Add/View ' onclick= \"popupGeneratorForAddMembers('".$row_event["event_id"]."','".$row['id']."');\"></td>";
								echo"<td><a type= 'button' class= 'btn-eventdet btn btn-default' href='../registration/spotReg.php' target='_blank' value= 'New Member' >New Member</a></td>";								
							}
						  	else
						  	{
						    	echo "<td style= 'color: black;'>Not Team Event</td>";
						    	echo "<td style= 'color: black;'>Not Team Event</td>";
						    }  
						    //to be changed   for payment confirmation
						    if(1)
						    {
						    	echo "<td style= 'color: black;'>Amount Paid</td>";     	
						    }
						    else
						    	echo "<td style= 'color: black;'>Amount Not Confirmed</td>";     	
						    //------------
						    echo "</tr>";
					  	}
				  	} 
				}
			echo "</table>";
		}			
?>
  