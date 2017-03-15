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
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<script src="../js/jquery-1.12.0.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<style src="../css/style.css"></style>
		<script src="../js/add_member.js"></script>
	</head>
	<body>
		<h6 id="eid" style="visibility: hidden;">
<?php
	        $head_id=cleanup($_GET["id"],$con);
            $event_id=cleanup($_GET["eid"],$con);
            echo $event_id;
?>
		</h6>
		<div class="header w3ls">
			<h2>Conjura'17</h2>
		</div>
		<div class="main">
			<div class="main-section agile">
				<div class="login-form">
					<h1 style="color: black;">Add/View Member</h1>            
                    <table  class="table table-bordered">
                        <tbody >
                        	<tr>
								<th>-----Member------&nbsp;&nbsp;&nbsp;</th>
								<th>-----Phone-------&nbsp;&nbsp;&nbsp;</th>
                        	</tr>          
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
											echo "<tr> <td>".$row1["name"]."</td> <td>  ".$row1["phone"]."<td></tr>";
										}
									}
								}
							}
?>
              			</tbody>   
           			</table>              
					<form action="#" method="post">
						<ul>
							<li class="text-info">Phone Number of Pre-registered member*</li>
							<li><input type="text" placeholder="" required id="phno"></li>
						</ul>
						<input type="edit" value="SUBMIT" onclick="Add_Member();">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php                                     
    }
}
?>
