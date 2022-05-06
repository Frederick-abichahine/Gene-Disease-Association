<!DOCTYPE html>
<html lang="en">
<head>
  <?php  
  include('connection_case.php');
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Gene-Disease Association</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Cases</span> - Patient Information</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="../login_signup/login_signup.php">Log Out</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(case_image.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cases</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Your Cases</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <?php
  //session_start();
  if(isset($_SESSION["error"])){
    $error = $_SESSION["error"];
    echo "<div style=\"text-align: center;padding: 25px; background-color: hsl(0, 100%, 70%);\"> $error</div>";
  }
  else {
    //while
    if(isset($_SESSION['case'])) {
      $result = $_SESSION['case'];
  ?>

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">

            <?php  
            for($i=0; $i < count($result); $i++) {

            ?>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="patient_profile.jpg" alt="">
                  <div class="meta" style="left:60px!important">
                    <a href="#"><span class="mai-trash"></span></a>
                    <!-- <a href="#"><span class="mai-mail"></span></a> -->
                    <!-- <a href="#"><span class="mai-doccument-text-outline"></span></a> -->
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0"><?php
                                            echo "<span>" . $result[$i][1] . " " . $result[$i][2] . "</span>";
                                        ?></p>
                  <a href = "#"> <span class="text-sm text-grey">More details</span></a>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <?php
    }
  }
  ?>

  <footer class="page-footer">
    <div class="container">
      <hr>
      <p id="copyright">Copyright &copy; 2022 - Frederick Abi Chahine. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>