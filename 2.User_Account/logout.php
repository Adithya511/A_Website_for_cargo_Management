<?php 
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecargoms';
$con = mysqli_connect('localhost', 'root', '', 'ecargoms') or die('connection failed');

session_unset();
session_destroy();
header('location:../login.php');

?>