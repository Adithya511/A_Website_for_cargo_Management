<?php 
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecargoms';
$con = mysqli_connect('localhost', 'root', '', 'ecargoms') or die('connection failed');

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
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
<link href="source/css/admin.css" rel="stylesheet">

<!-- Link for fontawesome -->
<script src="https://kit.fontawesome.com/affc06d9e8.js" crossorigin="anonymous"></script>
	
<title>Dashboard</title>
</head>
<body>
<?php
include 'nav.php';
?>

<!-- dashboard starts -->
<section>
    <h1 class="title">dashboard</h1>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="box shadow">
                <?php
                    $query = "SELECT * FROM user WHERE user_type = 'user'";
                    $select_users = mysqli_query($con, $query);
                    $number_of_users = mysqli_num_rows($select_users);
                ?>
                <h3><?php echo $number_of_users; ?></h3>
                <p>customers</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box shadow">
                <?php
                    $query = "SELECT * FROM order_details";
                    $select_orders = mysqli_query($con, $query);
                    $number_of_orders = mysqli_num_rows($select_orders);
                ?>
                <h3><?php echo $number_of_orders; ?></h3>
                <p>orders</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box shadow">
                <?php
                    $query = "SELECT * FROM feedback";
                    $select_feedbacks = mysqli_query($con, $query);
                    $number_of_feedbacks = mysqli_num_rows($select_feedbacks);
                ?>
                <h3><?php echo $number_of_feedbacks; ?></h3>
                <p>feedbacks</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box shadow">
                <?php
                    $query = "SELECT * FROM vacancies";
                    $select_vacancies = mysqli_query($con, $query);
                    $number_of_vacancies = mysqli_num_rows($select_vacancies);
                ?>
                <h3><?php echo $number_of_vacancies; ?></h3>
                <p>vacancies</p>
                </div>
            </div>             
        </div>  
    </div>
</section>
<!-- dashboard ends -->



<script src="source/js/admin.js"></script>
<script src="source/js/popper.min.js"></script>
<script src="source/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>