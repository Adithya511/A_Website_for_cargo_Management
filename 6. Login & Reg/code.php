<?php

use LDAP\Result;

session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecargoms';

$con = mysqli_connect($host, $user, $pass, $db);

if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "insert into user (username, password, name, email, address, contact_number) values ('$username', '$password', '$name', '$email', '$address', '$phone')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "registration created successfully";
        header("Location: registration.php");
        exit(0);
    }
    else
    {       
        $_SESSION['message'] = "Registation not created";
        header("Location: registration.php");
        exit(0);
    }   
}

if(isset($_POST['login'])){
$username = $_POST['username'];  
$password = $_POST['password'];  

    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "select * from user where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        header("Location: myDetail.php");  
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }  
} 





        
        