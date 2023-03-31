<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecargoms';
$conn = mysqli_connect('localhost', 'root', '', 'ecargoms') or die('connection failed');

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];

        $pw = "SELECT password FROM user WHERE user_id='$user_id'";
        $result = mysqli_query($conn,$pw);

        if(($oldpassword != mysqli_fetch_assoc($result)) && (($newpassword==$confirmnewpassword))){
            $sql=mysqli_query($conn,"UPDATE user SET password='$newpassword' where user_id='$user_id'");
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
	
<title>My Details</title>
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
        <div class="col-4">
            <div>
                <div class="mt-3">
                    <ul>
                        <li class="sidebar-link">                        
                            <a href="myDetail.php"><i class="fas fa-user"></i> My Detail</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="myOrder.php"><i class="fas fa-clipboard"></i> My Order</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="editProfile.php"><i class="fas fa-edit"></i> Edit Profile</a>
                        </li>
                        <li class="sidebar-link-active">
                            <a class="text-primary active" href="changePassword.php"><i class="fa fa-key" aria-hidden="true"></i> Change Password</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
        <!-- Side bar end -->

        <!-- Change password start -->                
        <div class="col-8">
            <div class="shadow bg-white rounded detail-1">    
                <form method="POST">
                    <div class="form-group">
                        <label for="oldPassword">Old Password</label>
                        <input type="password" class="form-control" name="oldpassword" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <input type="password" class="form-control" name="newpassword" placeholder="New Password">
                    </div> 
                    <div class="form-group">
                        <label for="confirmPassword">Confirm New Password</label>
                        <input type="password" class="form-control" name="confirmnewpassword" placeholder="Confirm New Password">
                    </div>   
                    <button type="submit" class="btn btn-primary" name="submit">Change Password</button>
                </form>
            </div>
        </div>
        <!-- Change password end -->
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
</body>
</html>