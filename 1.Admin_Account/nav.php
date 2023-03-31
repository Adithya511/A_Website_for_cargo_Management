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
<div class="container-fluid bg-secondary">
  <div class="container ">
    <nav class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="index.php">AdminPanel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customers.php">customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">Orders</a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" href="payment.php">payment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tracking.php">tracking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vacancies.php">vacancies</a>
          </li>
        </ul>
      </div>
      
      <div id="user-btn" class="fas fa-user icon"></div>
      
      <div class="account-box shadow">
            <p>username :   <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p>email :   <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>
    </nav>
  </div>
</div>
