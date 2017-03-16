<?php
require('../db_connect.php');
session_create();
if(session_check()==true)
{
	if(session_get_reg()==1)
	{
?>


<?php
        
    $pid=cleanup($_GET["pid"],$con);    
    $otid=cleanup($_GET["otid"],$con);
    $ntid=cleanup($_GET["ntid"],$con);
     
        
        $sql_get="select * from transactions where trans_id='".$otid."' and part_id='".$pid."'";
        echo $sql_get."<br>";
        $result=$con->query($sql_get) or die(mysqli_error());
        if($result->num_rows>0)
        {
            echo "here";
//        	$row=$result->fetch_assoc();
    		//$sql_update1="update transactions set trans_id='".$ntid."' where trans_id='".$otid."'";
            //$result1=$con->query($sql_update1) or die(mysqli_error());
            
            
            $sql_update2="update event_participants set trans_id='".$ntid."' where trans_id='".$otid."'";
            $result2=$con->query($sql_update2) or die(mysqli_error());
            
            $sql_update3="update event_participants_spot set trans_id='".$ntid."' where trans_id='".$otid."'";
            $result3=$con->query($sql_update3) or die(mysqli_error());
        }
        else 
            echo "failed";
   
        
        
        
?>



<?php
    }
}
?>