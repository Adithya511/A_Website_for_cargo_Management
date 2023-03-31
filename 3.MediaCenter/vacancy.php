<?php
    $role = $_GET['eid'];
?>

<!DOCTYPE html>
<html>

<head>
<title>Apply</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- RWD -->

<!--linking of bootstrap and css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/style.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</head>

<body>

<?php
  include 'nav_footer/navigationBar.php';
?>
<br>

<div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="mb-0 text-primary">Apply for vacancies</h2>
      </div>
    </div>
  </div>
<div class="content-wrapper font-v">
    <div class="container-fluid">
    <div class="row mt-3 pad-right pad-left">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Applicant Information</div>
           <hr>

            <form method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-6">
                  <label for="input-1">Name</label>
                  <input type="text" class="form-control" onkeypress="return /[a-z]/i.test(event.key)" id="input-1" placeholder="Enter Your Name" name="Name" required="required">
                </div>
                <div class="form-group col-6">
                  <label for="input-2">NIC</label>
                  <input type="text" class="form-control" id="input-2" placeholder="Enter Your NIC Number" name="NIC" required="required">
                </div>
                <div class="form-group col-6">
                  <label for="input-3">Mobile</label>
                  <input type="tel" class="form-control" id="input-3" placeholder="Enter Your Mobile Number" name="Mobile" required="required">
                </div>
                <div class="form-group col-6">
                  <label for="input-4">Email Address</label>
                  <input type="email" class="form-control" id="input-4" placeholder="Enter your Email Address" name="Email" required="required">
                </div>
              </div>
                         
                <div class="form-group col-6">
                  <label for="input-5">Gender</label> <br>
                    <input type="radio"  id="" name="Gender" value="Male">
                  <label for="">Male</label> &emsp; &emsp;
                    <input type="radio" id="" name="Gender" value="Female">
                  <label for="css">Female</label><br>
                </div>

                  <div class="form-group col-6">
                    <label for="input-3">Languages</label> <br>
                      <input type="checkbox"  id="input-3" name="Languages[]" value="English"> 
                      <label for="English"> English</label> &emsp; &emsp;
                      <input type="checkbox" id="input-4" name="Languages[]" value="Sinhala"> 
                      <label for="Sinhala"> Sinhala </label> &emsp; &emsp;
                      <input type="checkbox"  id="input-5" name="Languages[]" value="Chinese">
                      <label for="Chinese"> Chinese </label> 
                  </div>
                  
                  <div class="form-group col-12">
                    <label for="input-5">Upload your Resume</label>
                    <input type="file" class="form-control" id="fileToUpload"  placeholder="No file choosen" name="fileToUpload">
                  </div>
                  <br><br>

                  <div class="form-group col-12">
                    <div class="icheck-material-white">
                    <input type="checkbox" id="user-checkbox2" checked=""/> 
                    <label for="user-checkbox2">I hereby declare that the information given above is true and accurate to the best of my knowledge <tr><tr></tr></tr></label>
                    </div>
                  </div>

           <div class="form-group col-6">
           <button type="submit" value="submit" name="submit" class="btn btn-v btn-round px-5 font-v"><i class="icon-lock"></i> Apply</button>
          </div>
          </div>
          </form>
         </div>
         </div>
      </div>

  <!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div>




<!-- footer begins ---->
<br/><br/><br/><br/><br/><br/>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>


<?php 
  
  if(isset($_POST['submit']))
  {
    $Name = $_POST['Name'];
    $NIC = $_POST['NIC'];
    $Mobile = $_POST['Mobile'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $Languages = implode(',', $_POST['Languages']);
    $Role = $role;
    $targetDir = "resumes/";

$target_file = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType !="pdf") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  ?>
      <script>
          Swal.fire(
            {
              icon: 'info',
              title:'Error',
              text:'Sorry your file was not uploaded'
            }
          )
        </script>
      <?php
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $con = mysqli_connect('localhost','root' ,'','ecargoms');

        if(!$con){
          echo "Oops!!! Something went wrong"; 
        }
        
        $fileName = basename($_FILES["fileToUpload"]["name"]);

        $sql = "INSERT INTO vacancies (role,name,NIC,contact_number,email,Gender,Languages,resumes)
        VALUES ('$Role','$Name','$NIC','$Mobile','$Email','$Gender','$Languages',' $fileName')";

        $exec = mysqli_query($con,$sql);

        if($exec){
          ?>
          <script>
            swal.fire(
              {icon: 'success',
              title: 'saved',
              text: 'Your application has been submitted. Good Luck!'
              }
            )
          </script>
          <?php
        }
    } 
  else {
    ?>
      <script>
          Swal.fire(
            {
              icon: 'info',
              title:'Error',
              text:'Sorry your file was not uploaded'
            }
          )
        </script>
      <?php
  }
}
  }
?>