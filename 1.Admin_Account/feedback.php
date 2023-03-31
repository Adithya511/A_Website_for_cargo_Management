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
    $delete_query = "DELETE FROM feedback";
    mysqli_query($con, $delete_query);
    header('location:feedback.php');
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
    <h1 class="title">Feedback</h1>
    <div class="container">
        <div class="row text-center">
		<div class="col-md">
			<div class="box shadow">
				<div class="table table-hover table-responsive">
					<table class="table">
						<thead>
							<tr>
							<th scope="col">feedbackID</th>
							<th scope="col">Name</th>
							<th scope="col">Mobile</th>
							<th scope="col">Email</th>
							<th scope="col">Message</th>
							<th scope="col"></th>
							</tr>
						</thead>
						<?php
							$query = "SELECT * FROM feedback";
							$query_run = mysqli_query($con, $query);
							if(mysqli_num_rows($query_run) > 0){
								foreach($query_run as $detail){
									?>
										<tbody>
											<tr>
											<td><?= $detail['feedbackID']; ?></td>
											<td><?= $detail['Name']; ?></td>
											<td><?= $detail['Mobile']; ?></td>
											<td><?= $detail['Email']; ?></td>
											<td><?= $detail['Message']; ?></td>
											<td>
											<a href="feedback.php?delete=<?php echo $detail['feedbackID']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete</a>
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