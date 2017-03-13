<?php
	if(session_check()==true)
    {
	  	if(session_get_reg()==1)
	  	{
?>
			<table class="table table-bordered">
				<tr>
					<th>Event name</th>
				    <th>Event amount</th>
				    <th>Trans amount</th>
				    <th>Trans ID</th>
				    <th>Delete</th>
				    <th>Members</th>
				    <th>Status</th>
				</tr>
<?php
				$event_list="select * from event_participants_spot as eps,events as e,transactions as t where eps.trans_id=t.trans_id and e.event_id=eps.event_id and eps.part_id='".$row['id']."'";
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
								echo"<td><input type= 'button' class= 'button1' value= 'Add/View ' onclick= 'popupGeneratorForAddMembers('".$row_event["event_id"]."','".$row['id']."');'></td>";
							}
						  	else
						  	{
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
				  			echo"<td><input type= 'button' class= 'button1'  value= 'Delete' onclick= 'deleteFromEvent('".$row_event["event_id"]."','".$row['id']."');' id=".$row_event['event_id']."></td>";              	  	
						  	if($row_event["team"]=='y')
							{
								echo"<td><input type= 'button' class= 'button1' value= 'Add/View ' onclick= 'popupGeneratorForAddMembers('".$row_event["event_id"]."','".$row['id']."');'></td>";
							}
						  	else
						  	{
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
	}			
?>
  