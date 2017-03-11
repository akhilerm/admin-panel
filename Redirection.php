<?php
//THIS PAGE IS USED TO REDIRECT USERS TO REQUIRED MAIN PAGES

require('CookieCheck.php');

if($_COOKIE["privilege"]=='1')
{
    $page='reg_home.php';      //main menu
}
else if($_COOKIE["privilege"]>=1001 && $_COOKIE["privilege"]<1200)
{
    $page='cord.php';
}
else if($_COOKIE["privilege"]=='0')
{
	$page='super_admin.php';
}
else if($_COOKIE["privilege"]=='2')
{
	$page='accommodation.php';	
}
else if($_COOKIE["privilege"]=='3')
{
	$page='documentation.php';	
}
 header('Location: '.$page);
?>