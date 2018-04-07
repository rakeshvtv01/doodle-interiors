<?php


$username="root";
$password="";
$database="doodle";
$hostname="localhost";



$dbhandle=mysql_connect($hostname,$username,$password) or die("unable to connect");


$selected=mysql_select_db($database,$dbhandle) or die("could not select database");

?>


