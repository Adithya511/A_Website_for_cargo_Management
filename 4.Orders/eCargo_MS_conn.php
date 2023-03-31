<?php

$dbserver="localhost";
$dbuser = "root";
$dbpass="";
$dbname = "ecargoms"; //database


 $connection = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

 if (mysqli_connect_errno()) 
{
   die('Failed');
}
  else 
  
{
}