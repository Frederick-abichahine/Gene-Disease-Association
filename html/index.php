<!-- Gene - Disease Association -->


<!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              
              <a><span class="mai-call text-primary"></span> <?php
                                                              session_start();
                                                              if(isset($_SESSION["details"])){
                                                                $details = $_SESSION["details"];
                                                                echo "<span> $details[3]</span>";
                                                              }
                                                            ?> </a> <!-- +00 123 4455 6666 -->
              <span class="divider">|</span>
              <a><span class="mai-mail text-primary"></span> <?php
                                                              if(isset($_SESSION['email'])) {
                                                                $email = $_SESSION['email'];
                                                                echo "<span> $email </span>";
                                                              }
                                                            ?> </a> <!-- mail@example.com -->
            </div>
          </div>

        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand"><span class="text-primary"> Dr.</span> <?php
                                                                        if(isset($_SESSION['details'])) {
                                                                          $details = $_SESSION['details'];
                                                                          echo "<span> $details[1] $details[2] - $details[5]</span>";
                                                                        }
                                                                      ?> </a>


        <!-- <form action="#"> 
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." name="first_name" aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../edit_profile/edit_profile.php">Edit Profile</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Doctors</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li> -->
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="../login_signup/login_signup.php">Log Out</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(gene_edit.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make a difference</span>
        <h1 class="display-4">Gene-Disease Association</h1>
        <a href="search_tool.php" class="btn btn-primary">Start Search</a>
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-document-text-outline"></span>
              </div>
              <a class="nav-link" href="cases.php"><span>Cases</span></a>
              <!--<p><span>Cases</span> hi </p> --><!-- <p><span>Cases</span> with a doctors</p> -->
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-person-outline"></span>
              </div>
              <a class="nav-link" href="doctors.php"><span>Doctors</span></a>
              <!--<p><span>One</span>-Health Protection</p>-->
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-home-outline"></span>
              </div>
              <a class="nav-link" href="hospitals.php"><span>Hospitals</span></a>
              <!--<p><span>One</span>-Health Pharmacy</p>-->
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->
  </div>
  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">

        </div>
      </div>
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

<!-- <?php
  //unset($_SESSION['email']);
  //unset($_SESSION["row"]);
?>  -->