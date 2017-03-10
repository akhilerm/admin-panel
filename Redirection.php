<?php
//THIS PAGE IS USED TO REDIRECT USERS TO REQUIRED MAIN PAGES

require('CookieCheck.php');

if($_COOKIE["privilege"]=='1')
{
    $page='search.php';
}
else
{
    $page='ERROR.php';
}

echo $_COOKIE["privilege"];

 header('Location: '.$page);
?>