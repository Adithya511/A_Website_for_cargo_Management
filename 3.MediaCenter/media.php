<!DOCTYPE html>
<html>

<head>
<title>Media Center</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- RWD -->

<!--linking of bootstrap and css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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


</head>


<!--Navigation bar starts here-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://www.logotypes101.com/logos/660/4E5FCAC963A972ABFE3FE981905656AF/cargo.png" length="100" height="50" alt="logo"></a>
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <!--first tab-->
            <li class="nav-item">
              <a class="nav-link" href="../new devop.html">Home <span class="sr-only">(current)</span></a>
            </li>

             <!--second tab tab-->
            <li class="nav-item">
              <a class="nav-link" href="">About-Us</a>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../User_Account/myDetail.php">My Account</a>
                <a class="dropdown-item" href="../Create-Order-Request_Page.php">FEE Calculator</a>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="#">Media Center</a>
            </li>
             <!--last contactus tab-->
             <li class="nav-item">
                <a class="nav-link" href="../contactus.php">Contact-Us</a>
              </li>

          </ul>
          <!--sign-in/log-in function from here-->
          <form class="form-inline my-2 my-lg-0">           
            <a href="login.php"><!--add login page url-->
            <input type="button" class="btn btn-outline-success my-2 my-sm-0"  value="Login"></a>

            <a href="register.php"><!--add sign-in page url-->
            <input type="button" class="btn btn-outline-success my-2 my-sm-0"  value="Register"></a>           
          </form>
        </div>
      </nav>
<!--navigation bar ends from here-->


<!-- ****************************************-->
 
<div class="site-section block-13" id="section-industries">

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="mb-0 text-primary">Industries</h2>
        <p class="color-black-opacity-5">We offer Services in...</p>
      </div>
    </div>
  </div>

  <div class="owl-carousel nonloop-block-13">
    
    <div>
      <a href="#" class="unit-1 text-center">
        <img src="img/img_2.jpg" alt="Image" class="img-fluid">
        <div class="unit-1-text">
          <h3 class="unit-1-heading">Air Transports</h3>
        </div>
      </a>
    </div>

    <div>
      <a href="#" class="unit-1 text-center">
        <img src="img/img_3.jpg" alt="Image" class="img-fluid">
        <div class="unit-1-text">
          <h3 class="unit-1-heading">Cargo Transports</h3>
        </div>
      </a>
    </div>

    <div>
      <a href="#" class="unit-1 text-center">
        <img src="img/img_4.jpg" alt="Image" class="img-fluid">
        <div class="unit-1-text">
          <h3 class="unit-1-heading">Cargo Ship</h3>
        </div>
      </a>
    </div>

    <div>
      <a href="#" class="unit-1 text-center">
        <img src="img/img_1.jpg" alt="Image" class="img-fluid">
        <div class="unit-1-text">
          <h3 class="unit-1-heading">Storage</h3>
        </div>
      </a>
    </div>

    <div>
      <a href="#" class="unit-1 text-center">
        <img src="img/img_5.jpg" alt="Image" class="img-fluid">
        <div class="unit-1-text">
          <h3 class="unit-1-heading">Ware Housing</h3>
        </div>
      </a>
    </div>
  </div>
</div>

 
<div class="site-section border-bottom">
  <div class="container">

    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">vacancies</h2>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

    <?php 
        
        $con=mysqli_connect("localhost","root","","ecargoms");

          if (!$con) {
	          echo "Not Connected";
          }
          
          $sql="SELECT * FROM jobs";

          $exec=mysqli_query($con,$sql);

          while ($row=mysqli_fetch_array($exec)) {   
						?>
              <div>
                <div class="vacancies">
                  <blockquote>
                    <h3><?php echo $row['job']; ?></h3>
                      <p>&ldquo; <?php echo $row['jobDesc']; ?> &rdquo;</p>
                      <a href="vacancy.php?eid=<?php echo $row['jobID']; ?>"> <input type="button" class="btn btn-outline-success my-2 my-sm-0"  value="Apply"></a>
                  </blockquote>
                </div>
              </div>
            <?php
          }
    ?>
  
    </div>
  </div>
</div>
<!-- ****************************************-->


<div class="site-section" id="section-news">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Our news</h2>
        <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
      </div>
    </div>
    <div class="row mb-5 align-items-stretch">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
        <div class="h-entry">
          <a href="single.html"><img src="img/news_1.jpg" alt="Image" class="img-fluid"></a>
          <h2 class="font-size-regular"><a href="single.html">Cargo Handling By Essar Vizag Port Up By 10% YoY To 1.3 Mn Tonnes In Apr</a></h2>
          <div class="meta mb-4">by  Mark Ruffelo <span class="mx-2">&bullet;</span> May 31, 2022, Tuesday <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
          <p>Surge In Traffic Marks The Uptick In Indian Steel Sector, A Major Contributor To India's Manufacturing Output.....</p>
        </div> 
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="h-entry">
          <a href="single.html"><img src="img/news_2.jpg" alt="Image" class="img-fluid"></a>
          <h2 class="font-size-regular"><a href="single.html">Average Time Taken For Customs Clearance Of Imports Comes Down: CBIC</a></h2>
          <div class="meta mb-4">by Mark Ruffelo <span class="mx-2">&bullet;</span> April 11, 2022, Monday <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
          <p>The National Time Release Study 2022 Presents Annual Report Of Cargo Clearance Process Through 4 Categories Of Ports -- Seaport, ...</p>
        </div> 
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="h-entry">
          <a href="single.html"><img src="img/news_3.jpg" alt="Image" class="img-fluid"></a>
          <h2 class="font-size-regular"><a href="single.html">Cargo Insurance Premiums Up 33%; Second Fastest After Personal Accident Biz</a></h2>
          <div class="meta mb-4">by  Mark Ruffelo <span class="mx-2">&bullet;</span> Jan 18, 2022 <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
          <p>This Is Significant As The Cargo Insurance Market Had Declined By Close To 8 Per Cent In FY21..</p>
        </div>
      </div>
    </div>

  </div>
</div>

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

<script src="js/main.js"></script>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>