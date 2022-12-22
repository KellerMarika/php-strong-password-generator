<?php
require_once "functions.php";
 session_start();

if($randomPassword){
  $_SESSION[ "userPassword"]= $randomPassword;
} 


?>

