<?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<!--Navigation bar starts here-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://www.logotypes101.com/logos/660/4E5FCAC963A972ABFE3FE981905656AF/cargo.png" length="100" height="50" alt="logo"></a>
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <!--first tab-->
            <li class="nav-item">
              <a class="nav-link" href="new devop.html">Home <span class="sr-only">(current)</span></a>
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
                <a class="dropdown-item" href="User_Account/myDetail.php">My Account</a>
                <a class="dropdown-item" href="Create-Order-Request_Page.php">FEE Calculator</a>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="MediaCenter/media.php">Media Center</a>
            </li>
             <!--last contactus tab-->
             <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact-Us</a>
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
