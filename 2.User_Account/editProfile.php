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

    if(isset($_POST['submit']))
    {
        $name = $_POST['Name'];    
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $address = $_POST['address'];
    
        $con = mysqli_connect('localhost','root' ,'','ecargoms');
    
            if(!$con){
                echo "Oops!!! Something went wrong"; 
            }
        $editdata = "UPDATE user set name='$name', email='$email', contact_number='$contact_number', address='$address' where user_id = '$user_id'";
    
        $execd = mysqli_query($con, $editdata);
    
        if($execd){
            ?>
            <script>
              Swal.fire(
                {
                  icon: 'Success',
                  title:'Updated',
                  text:'Succesfully Updated User Info!'
                }
              )
            </script>
      <?php
        }
    }       
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="wuser_th=device-wuser_th, initial-scale=1">


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
<div class="container-fluuser_ bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4 margin-2">
                <img class="rounded-circle" wuser_th="200" height="200" src="images/myprofile/profile.png" alt="profil picture">  <!--Profile-->
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

        <!-- Edit profile start -->
        <div class="col-md-8">
            <div class="shadow bg-white rounded detail-1">    

            <?php
            $query = "SELECT * FROM user WHERE user_id = '$user_id'";
            $select_user = mysqli_query($con, $query);

            if(mysqli_num_rows($select_user) > 0){
                while($fetch_user = mysqli_fetch_assoc($select_user)){                
            ?>
                <form method="POST">
                    <div class="row margin-3">
                        <div class="col-md-3">
                        <label for="name">Name</label>
                        </div> 
                        <div class="col-md-9">
                        <input type="name" class="form-control" user_="name" placeholder="Your name" required value="<?php echo $fetch_user['name'];?>" name="Name" >
                        </div>
                    </div>
                    <div class="row margin-3">
                        <div class="col-md-3">
                        <label for="email">E-mail</label>
                        </div> 
                        <div class="col-md-9">
                        <input type="email" class="form-control" user_="email" placeholder="Your email" required value="<?php echo $fetch_user['email'];?>" name="email" >
                        </div>
                    </div>
                    <div class="row margin-3">
                        <div class="col-md-3">
                        <label for="contact_number">contact_number Number</label>
                        </div> 
                        <div class="col-md-9">
                        <input type="tel" class="form-control" user_="contact_number" placeholder="contact_number number" required value="<?php echo $fetch_user['contact_number'];?>" name="contact_number" >
                        </div>
                    </div>
                    
                    <div class="row margin-3">
                        <div class="col-md-3">
                        <label for="address">Address</label>
                        </div> 
                        <div class="col-md-9">
                        <textarea user_="address" class="form-control" rows="5" placeholder="Address" name="address" ><?php echo $fetch_user['address'];?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-check">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                    </div>
                        
                </form>
                <?php
                }
            }else{
                echo '<p class="empty">your cart is empty</p>';
            }
        ?>
            </div>
        </div>
        <!-- Edit profile end -->
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

