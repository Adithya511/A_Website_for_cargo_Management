<?php

session_start();  

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecargoms';
$con = mysqli_connect('localhost', 'root', '', 'ecargoms') or die('connection failed');

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

        
         $sqluser= "Select * from user where user_id = '$user_id'";
         $execuser = mysqli_query($con, $sqluser);

         while ($rowuser = mysqli_fetch_array($execuser)){

            $uname = $rowuser['name'];
            $uemail = $rowuser['email'];
            $unumber = $rowuser['contact_number'];
            $uaddress = $rowuser['address'];

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
<link href="source/css/user.css" rel="stylesheet">

<!-- Link for fontawesome -->
<script src="https://kit.fontawesome.com/affc06d9e8.js" crossorigin="anonymous"></script>
	
<title>User Account</title>
</head>
<body>

<!-- Navigation bar -->
<?php
    include 'nav_footer/navigationBar.php';
?>

<!-- Profile start -->
<div class="container-fluid bg-1">
    <div class="container">
        <div class="row">
            <div class="col-4 margin-2">
                <img class="rounded-circle" width="200" height="200" src="images/myprofile/profile.png" alt="profil picture">  <!--Profile-->
            </div>
        </div>
    </div>
</div>
<!-- Profile end -->
	  
<div class="container margin-1">
    <div class="row">
        <!-- Side bar start -->
        <div class="col-md-4">
            <div>
                <div class="mt-3">
                    <ul>
                        <li class="sidebar-link-active">                        
                            <a class="text-primary active" href="myDetail.php"><i class="fas fa-user"></i> My Detail</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="myOrder.php"><i class="fas fa-clipboard"></i> My Order</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="editProfile.php?eid=<?php echo $user_id?>"><i class="fas fa-edit"></i> Edit Profile</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="changePassword.php"><i class="fa fa-key" aria-hidden="true"></i> Change Password</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
        <!-- Side bar end -->

        <!-- My details start -->
        
        <div class="col-md-8">
            <div class="shadow bg-white rounded detail-1">    
                <div>
                    <h1>My Details</h1>
                </div>
                <div class="detail-2">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Name</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                            <?php echo $uname?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>E-mail</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                            <?php echo $uemail?>
                        </div>                            
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Phone Number</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                            <?php echo $unumber?>
                        </div>
                    </div>
                    
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Adress</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                            <?php echo $uaddress?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My details end -->
    </div>
</div>

<div class="bg-2"></div>
    
<!-- footer ---->
<?php
    include 'nav_footer/footer.php';
?>

<!-- Bootstrap JS -->
<script src="source/js/popper.min.js"></script>
<script src="source/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>