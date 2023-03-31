
<?php
session_start();
$user_id = $_SESSION['user_id'];

$con = mysqli_connect('localhost','root','','ecargoms') or die('Unable To connect');

if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT *from user WHERE user_id='" . $user_id . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $_POST["confirmPassword"] ) {
mysqli_query($con,"UPDATE user set password='" . $_POST["newPassword"] . "' WHERE user_id='" . $user_id . "'");

$message[] = "Password Changed Sucessfully";

} else{
 $message[] = "Password is not correct";
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
<link href="source/css/user.css" rel="stylesheet">

<!-- Link for fontawesome -->
<script src="https://kit.fontawesome.com/affc06d9e8.js" crossorigin="anonymous"></script>

<script src="source/js/jss.js"></script>
	
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
                <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
                
                <h2 class="text-center">Change Password</h2>
                    <div class="form-group">
                        <label for="currentPassword">Old Password</label>
                        <input type="password" class="form-control" id="currentPassword" name="currentPassword" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
                    </div> 
                    <div class="form-group">
                        <label for="confirmPassword">Confirm New Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm New Password">
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
