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
        <div class="col-4">
            <div>
                <div class="mt-3">
                    <ul>
                        <li class="sidebar-link">                        
                            <a href="myDetail.php"><i class="fas fa-user"></i> My Detail</a>
                        </li>
                        <li class="sidebar-link-active">
                            <a class="text-primary active" href="myOrder.php"><i class="fas fa-clipboard"></i> My Order</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="editProfile.php?"><i class="fas fa-edit"></i> Edit Profile</a>
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

        <!-- My orders start -->
                
        <div class="col-md-8">
            <div class="shadow bg-white rounded detail-1">    
                <div>
                    <h1> My Order Details</h1>
                </div>
                <?php
            $query = "SELECT * FROM order_details WHERE user_id = '$user_id'";
            $select_order = mysqli_query($con, $query);

            if(mysqli_num_rows($select_order) > 0){
                while($fetch_order = mysqli_fetch_assoc($select_order)){                
        ?>
                <div class="detail-2">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Order Id</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                        <?php echo $fetch_order['order_id']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Container type</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                        <?php echo $fetch_order['container_type']; ?>
                        </div>                            
                    </div>                    
                </div>
                <?php
                }
            }else{
                echo '<p class="empty">No order placed</p>';
            }
        ?>	

        <?php
            $query = "SELECT p.payment_method, p.payment_status FROM payment as p inner join order_details as o on p.order_id = o.order_id";
            $select_payment = mysqli_query($con, $query);

            if(mysqli_num_rows($select_payment) > 0){
                while($fetch_payment = mysqli_fetch_assoc($select_payment)){                
        ?>
                <div class="detail-2">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Payment method</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                        <?php echo $fetch_payment['payment_method']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Payment status</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                        <?php echo $fetch_payment['payment_status']; ?>
                        </div>                            
                    </div>                    
                </div>
                <?php
                }
            }else{
                echo '<p class="empty">payment details not added</p>';
            }
        ?>	

    <?php
            $query = "SELECT d.delivery_status FROM tracking as d inner join order_details as o on d.order_id = o.order_id";
            $select_delivery = mysqli_query($con, $query);

            if(mysqli_num_rows($select_delivery) > 0){
                while($fetch_delivery = mysqli_fetch_assoc($select_delivery)){                
        ?>
                <div class="detail-2">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>delivery status</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                        <?php echo $fetch_delivery['delivery_status']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>delivery status</h5>
                        </div>
                        <div class="col-md-8 text-secondary">
                        <?php echo $fetch_delivery['delivery_status']; ?>
                        </div>                            
                    </div>                    
                </div>
                <?php
                }
            }else{
                echo '<p class="empty">Tracking details not added</p>';
            }
        ?>	
            </div>
        </div>
        
        <!-- My Orders end -->
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