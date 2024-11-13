<?php
//error_reporting(E_ALL ^ E_WARNING); 
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
$username="root"; //MySQL User Name
$password="";     //MySQL User Password
$database="hr"; //MySQL Database Name

mysql_connect("localhost",$username,$password);

mysql_select_db($database) or die( "Unable to select database");

?>