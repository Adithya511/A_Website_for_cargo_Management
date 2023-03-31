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
    $vac_id = $_GET['delete'];
    $delete_query = "DELETE FROM vacancies WHERE vac_id = '$vac_id'";
    mysqli_query($con, $delete_query);
    header('location:vacancies.php');
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
	
<title>vacancies</title>
</head>
<body>
	
<?php
include 'nav.php';
?>

<section>
    <h1 class="title">vacancies</h1>
    <div class="container">
        <div class="row text-center">
		<div class="col-md">
			<div class="box shadow">
				<div class="table table-hover table-responsive">
					<table class="table">
						<thead>
							<tr>
							<th scope="col">vac_id</th>
							<th scope="col">Role</th>
							<th scope="col">Name</th>
							<th scope="col">NIC</th>
							<th scope="col">Email</th>
                            <th scope="col">contact_number</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Languages</th>
                            <th scope="col">Resumes</th>
							<th scope="col"></th>
							</tr>
						</thead>
						<?php
							$query = "SELECT * FROM vacancies";
							$query_run = mysqli_query($con, $query);
							if(mysqli_num_rows($query_run) > 0){
								foreach($query_run as $detail){
									?>
										<tbody>
											<tr>
											<td><?= $detail['vac_id']; ?></td>
											<td><?= $detail['role']; ?></td>
											<td><?= $detail['name']; ?></td>
											<td><?= $detail['NIC']; ?></td>
                                            <td><?= $detail['email']; ?></td>
											<td><?= $detail['contact_number']; ?></td>
                                            <td><?= $detail['Gender']; ?></td>
                                            <td><?= $detail['Languages']; ?></td>
                                            <td><?= $detail['resumes']; ?></td>
											<td><a href="vacancies.php?delete=<?php echo $detail['vac_id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete</a></td>
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