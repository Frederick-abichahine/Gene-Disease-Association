<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Edit Profile</title>
  </head>
  <body>  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('DNA_image3.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <!-- <h4>Edit <strong>Profile Information</strong></h4> -->
            <form action="connection_edit.php" method="post">
              <?php
              session_start();
              if(isset($_SESSION["error"])){
                $error = $_SESSION["error"];
                echo "<span style=\"color:red\"> $error</span>";
              }
            ?>
              <div class="form-group first">
                <label for="username">First Name</label>
                <input type="text" name = "first_name" class="form-control" required placeholder="Hello" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="username">Last Name</label>
                <input type="text" name = "last_name" class="form-control" required placeholder="World" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="username">Mobile Number</label>
                <input type="text" name = "mobile_number" class="form-control" required placeholder="+123-45-678-901" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="username">Specialty</label>
                <input type="text" name = "specialty" class="form-control" required placeholder="Dermatologist" id="password">
              </div>
              <div class="form-group last mb-3">
                <label for="username">Email</label>
                <input type="email" name = "email" class="form-control" required placeholder="hello@world.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name = "password" class="form-control" required placeholder="Password" id="password">
              </div>
              
              <!-- <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div> -->

              <input type="submit" value="Update Profile" class="btn btn-block btn-secondary">
              <!-- <input type="submit" value="Back" class="btn btn-block btn-secondary"> -->

            </form>
            <br/>
            <a class="btn btn-block btn" href= "../html/index.php">Back</a>
            <!--<input href = '../html/index.php' type="submit" value="Back" class="btn btn-block btn-secondary"> -->
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

<?php
  unset($_SESSION["error"]);
?> 