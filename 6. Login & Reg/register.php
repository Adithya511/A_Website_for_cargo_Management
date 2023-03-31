<?php 
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecargoms';
$con = mysqli_connect('localhost', 'root', '', 'ecargoms') or die('connection failed');

if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $user_type = mysqli_real_escape_string($con, $_POST['user_type']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
    $select_users = mysqli_query($con, $query);


    if(mysqli_num_rows($select_users) > 0){
        $message[] = 'user already exist!';
    }else{
        
            $qu = "INSERT INTO user(username, password, name, email, address, contact_number) VALUES('$username', '$password', '$name', '$email', '$address', '$phone')";
            mysqli_query($con, $qu); 
            $message[] = 'registerd successfully!';
            header('location:login.php');
        }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >

<!--	Style CSS	-->
<link href="login-reg.css" rel="stylesheet">

<!-- Link for fontawesome -->
<script src="https://kit.fontawesome.com/affc06d9e8.js" crossorigin="anonymous"></script>
	
<title>Registation</title>
</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>


<div class="reg">
  <h1>Register</h1> 
    <form method="post">
      <input type="text" name="name" placeholder="Name" required="required" />
      <input type="email" name="email" placeholder="E-mali" required="required" />
      <input type="tel" name="phone" placeholder="Contact Number" required="required" />
      <input type="text" name="address" placeholder="Address" required="required" />

      <input type="text" name="username" placeholder="User Name" required="required" />
      <input type="password" name="password" placeholder="Password" required="required" />
    
      
      <button type="submit" class="btn btn-primary btn-block btn-large" name="register">Submit</button>
      <h5>Already a registered user? <a href="login.php"><label style="color:white;">click here to Login</label></a></h5>
    </form>
</div>




<script src="source/js/popper.min.js"></script>
<script src="source/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html> 