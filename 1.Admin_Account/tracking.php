<?php 
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecargoms';
$conn = mysqli_connect('localhost', 'root', '', 'ecargoms') or die('connection failed');

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:login.php');
}

if(isset($_POST['update_tracking'])){
    $tracking_update_id = $_POST['tracking_id'];
    $update_tracking = $_POST['update_tracking'];
    $update_tracking = "UPDATE tracking SET delivery_status = '$update_tracking' WHERE tracking_id = '$tracking_update_id'";
    mysqli_query($conn, $update_tracking);
    $message[] = 'delivery status has been updated!';
}

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = "DELETE FROM tracking WHERE tracking_id = '$delete_id'";
    mysqli_query($conn, $delete_query);
    header('location:tracking.php');
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
	
<title>tracking</title>
</head>
<body>
	
<?php
include 'nav.php';
?>

<section>
    <h1 class="title">taracking</h1>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="box-1 shadow">
                <?php
            $tracking_query = "SELECT * FROM tracking";
            $select_trackings = mysqli_query($conn, $tracking_query);
            if(mysqli_num_rows($select_trackings) > 0){
                while($fetch_trackings = mysqli_fetch_assoc($select_trackings)){               
        ?>
        <div>
            <p>tracking id : <span><?php echo $fetch_trackings['tracking_id']; ?></span></p>
            <p>order id : <span><?php echo $fetch_trackings['order_id']; ?></span></p>
            <p>delivery status : <span><?php echo $fetch_trackings['delivery_status']; ?></span></p>
            <p>current coordinates : <span><?php echo $fetch_trackings['current_coordinates']; ?></span></p>
            

            <form action="" method="POST">
                <input type="hidden" name="tracking_id" value="<?php echo $fetch_trackings['tracking_id']; ?>">
                <select name="update_tracking">
                    <option value="" selected disabled><?php echo $fetch_trackings['delivery_status']; ?></option>
                    <option value="Dispatched">Dispatched</option>
                    <option value="Awaiting Payment">Awaiting payment</option>
                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                    <option value="Refund Requested">Refund Requested</option>
                    <option value="Shipment in Progress">Shipment in Progress</option>
                </select>
                <input type="submit" value="update" name="update_tracking" class="option-btn">
                <a href="tracking.php?delete=<?php echo $fetch_trackings['tracking_id']; ?>" onclick="return confirm('delete this tracking?');" class="delete-btn">delete</a>
            </form>
        </div>
        <?php
        }
            }else{
                echo '<p class="empty">no taracking placed yet!</p>';
            }
        ?>
                </div>
            </div>
                         
        </div>  
    </div>
</section>

<!-- custom admin js file link -->
<script src="source/js/admin_script.js"></script>

<script src="source/js/popper.min.js"></script>
<script src="source/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>