<?php
require_once('db_connect.php');
session_create();
if (session_check()==true)
{
  sess_destroy();
  header("location:Login.php");
}  
else
{
  header("location:Login.php");
}