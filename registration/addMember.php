<?php
require('db_connect.php');
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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nirav'16,registration" />
<!--web-fonts-->
<!--<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>-->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style src="css/style.css"></style>
<script src="js/add_member.js"></script>

<!--web-fonts-->
</head>
<body>

			<h6 id="eid" style="visibility: hidden;"><?php
//            require('db_connect.php');
                                        $head_id=cleanup($_GET["id"],$con);
                                        $event_id=cleanup($_GET["eid"],$con);
                                        echo $event_id;
			?></h6>
		<!---header--->
		<div class="header w3ls">

			<h2>Conjura'17</h2>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
								<div class="main-section agile">
					<div class="login-form">
							<h1 style="color: black;">Add/View Member</h1>
                        
                        <table  class="table table-bordered">
                            <tbody >
                            
                            	<tr>
			<th>Member&nbsp;&nbsp;&nbsp;</th>
			<th>Phone&nbsp;&nbsp;&nbsp;</th>

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
							echo "<tr> <th>".$row1["name"]."</th> <th>  ".$row1["phone"]."<th></tr>";
						}
					}
				}
			}
			?>
                  </tbody>   
               </table>         
                        
						<form action="#" method="post">
						

												<ul>
								<li class="text-info">Phone Number of PRE registered member*</li>
								<li><input type="text" placeholder="" required id="phno"></li>
								<div class="clear"></div>
							</ul>
							<input type="edit" value="SUBMIT" onclick="Add_Member();">
							<div class="clear"></div>
						</form>
					</div>
				</div>
			</div>
			<!---main--->
			<!--table-->


			<!--//table-->

</body>
</html>
<?php
                                        
                                    }
                                }
?>