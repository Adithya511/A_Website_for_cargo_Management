<!DOCTYPE html>
<html>

<head>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- RWD -->

<!--linking of bootstrap and css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">

<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/contactus.css">
<link rel="stylesheet" href="sweetalert2.min.css">


 
</head>

<body>

<?php
  include 'nav_footer/navigationBar.php';
  ?>

  <div class="container top-s">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <h2 class="mb-0 h2c">We love to hear from you</h2>
        <p class="color-black-opacity-5">Stay with us...</p>
      </div>
    </div>
  </div>



<div class="content-wrapper">
  <div class="container-fluid left-s">
    <div class="row">
      <div class="col-lg-7">
        <div class="card">
          <div class="card-body ">
           
            <div class="card-title font-s">Feedback 
            <hr>
              <form method="POST" enctype="multipart/form-data">
            
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" onkeypress="return /[a-z]/i.test(event.key)" id="input-1" placeholder="Enter Your Name" name="Name" required="required">
                  </div>
                
                  <div class="form-group">
                    <label for="">Mobile</label>
                    <input type="tel" class="form-control" id="input-2" placeholder="Enter Your Mobile Number" name="Mobile" required="required">
                  </div>
                              
                  <div class="form-group">
                    <label for="input-4">Email Address</label>
                    <input type="email" class="form-control" id="input-3" placeholder="Enter your Email Address" name="Email" required="required">
                  </div>
                  
                  <div class="form-group">
                    <label for="message">Your Feedback</label>
                    <textarea name="message" id="input-4" class="form-control" cols="82" rows="10" placeholder="Write Something...."></textarea>
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" value="submit" name="submit" class="btn btn-v btn-round px-5 font-v"><i class="icon-lock"></i> Apply</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div id="map">
          <script>
            function initMap() {
            const colombo = { lat: 6.973767848920243, lng: 79.88195537318646 };
            const map = new google.maps.Map(document.getElementById("map"),{zoom: 4,center: colombo,});
            const marker = new google.maps.Marker({position: colombo,map: map,});
            }
          </script>
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8UutLjQodoJfzxXAE7BtlAeWEi5p4YM4&callback=initMap"></script>
            <br>
        </div>

        <div class=container>
          <div class="content">
            <div class="center">
              <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">29, Main Street, Colombo-3</div>
              </div>
              <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one">+0098 9893 1920</div>
                <div class="text-two">+0096 3434 5678</div>
              </div>
              <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">cargoserves@gmail.com</div>
              </div>
            </div>
          </div>
        </div>
		  </div>	
    </div>
      
		  <div class="overlay toggle-menu"></div>		

    </div>
    <!-- End container-fluid-->
</div>

<br><br>
<!-- footer begins ---->

<div class="card text-center">
    <div class="card-footer text-muted">
        <p>© 2022 Copyright:<a href="new devop.html">E-Cargo Service&nbsp;</a><img src="https://www.logotypes101.com/logos/660/4E5FCAC963A972ABFE3FE981905656AF/cargo.png" length="100" height="50" alt="logo"></p>
    </div>
  </div>

<!-- footer ends ---->
      
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/main.js"></script>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php

if(isset($_POST['submit'])){

  $name = $_POST['Name'];
  $mobile = $_POST['Mobile'];
  $email = $_POST['Email'];
  $feedback = $_POST['message'];

  $con = mysqli_connect('localhost','root' ,'','ecargoms');

  if(!$con){
    echo "Oops!!! Something went wrong"; 
  }
  
  $sql = "INSERT INTO feedback (Name,Mobile,Email,Message)
        VALUES ('$name','$mobile','$email','$feedback')";

  $exec = mysqli_query($con,$sql);

  if($exec){
          ?>
          <script>
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Thank you for sharing your thoughts!',
              showConfirmButton: false,
              timer: 1500
            })
          </script>
          <?php
        }
}
?>