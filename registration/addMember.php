<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Conjura'17</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<script src="../js/jquery-1.12.0.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		
		<script src="../js/add_member.js"></script>
	</head>
	<body>
        <center>
		<h6 class="colblue" id="eid" style="visibility: hidden;">
<?php
	        $head_id=cleanup($_GET["id"],$con);
            $event_id=cleanup($_GET["eid"],$con);
            echo $event_id;
?>
		</h6>
		
        <h4 class="colblue">Add/View Member</h4>
		
		<div class="main">
			<div class="main-section agile">
				<div>
                    <form action="#" method="post">
						<div class="form-group">
                             <label for="phno" align="left" class="control-label">Phone Number of Pre-registered member*</label>
							
							<input class="form-control" type="text" placeholder="" required id="phno">
						</div>
						<input style="margin-bottom:20px;" type="edit" class="btn-eventdet btn btn-default" value="SUBMIT" onclick="Add_Member();">
					</form>
					           
                    <table  class="table table-bordered table-striped">
                        <thead>
                            <tr class="colblue">
								<th>Member</th>
								<th>Phone</th>
                        	</tr>   
                        
                        </thead>
                        <tbody >
                        	       
<?php
							$sql_get="select member_id from team where head_id='".$head_id."' and event_id='".$event_id."'";
							$result=$con->query($sql_get);
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{
									$sql_sel="select * from participants where id='".$row["member_id"]."'";
									$result1=$con->query($sql_sel);
									if($result1->num_rows>0)
									{
										while($row1=$result1->fetch_assoc())
										{
											echo "<tr> <td>".$row1["name"]."</td> <td>  ".$row1["phone"]."</td></tr>";
										}
									}
								}
							}
?>
              			</tbody>   
           			</table>              
					
				</div>
			</div>
		</div>
    </center>
	</body>
</html>
<?php                                     
    }
}
?>
