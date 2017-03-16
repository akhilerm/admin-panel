<?php
require_once('db_connect.php');
session_create();
if (session_check()==true)
{
  sess_destroy();
  echo '<meta http-equiv="refresh" content="0;url=index.php"/>';
}  
else
{
  echo '<meta http-equiv="refresh" content="0;url=index.php"/>';
}
?>