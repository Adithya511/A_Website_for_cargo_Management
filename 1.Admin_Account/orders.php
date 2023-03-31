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

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = "DELETE FROM orders WHERE id = '$delete_id'";
    mysqli_query($conn, $delete_query);
    header('location:admin_orders.php');
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

<section>
    <h1 class="title">Orders</h1>
    <div class="container">
        <div class="row text-center">
		<div class="col-md">
			<div class="box shadow">
				<div class="table table-hover table-responsive">
					<table class="table">
						<thead>
							<tr>
							<th scope="col">order_id</th>
							<th scope="col">user_id</th>
							<th scope="col">box_TypeNo</th>
							<th scope="col">collectLoc</th>
							<th scope="col">deliveryLoc</th>
							<th scope="col">deliveryMethod</th>
							<th scope="col">message_on_container</th>
							<th scope="col"></th>
							</tr>
						</thead>
						<?php
							$query = "SELECT * FROM order_details";
							$query_run = mysqli_query($con, $query);
							if(mysqli_num_rows($query_run) > 0){
								foreach($query_run as $detail){
									?>
										<tbody>
											<tr>
											<td><?= $detail['order_id']; ?></td>
											<td><?= $detail['user_id']; ?></td>
											<td><?= $detail['box_TypeNo']; ?></td>
											<td><?= $detail['collectLoc']; ?></td>
											<td><?= $detail['deliveryLoc']; ?></td>
											<td><?= $detail['delivery_Method']; ?></td>
											<td><?= $detail['message_on_container']; ?></td>
											</td>
											</tr>							
										</tbody> 
									<?php
								}
							}
							else{
								echo '<p class="empty">no record found!</p>';
							}
						?>						   
					</table>
				</div>				
			</div>
		</div>		
	</div>
    </div>
</section>

<script src="source/js/admin.js"></script> 
<script src="source/js/popper.min.js"></script>
<script src="source/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>