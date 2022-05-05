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
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand"><span class="text-primary">Gene</span>-Disease Association</a>

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

  <div class="page-banner overlay-dark bg-image" style="background-image: url(DNA_image2.jpg);">
    <div class="banner-section"> 
      <div class="container text-center wow fadeInUp">
        <!-- <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav> -->
        <h1 class="font-weight-normal"> <div class="row"> <div class="col-lg-4"></div> <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3> <!-- justify-content-center -->
              <form action="connection_gene.php" class="search-form" method="POST">
                <div class="form-group">
                  <input type="text" name = "disease" class="form-control" placeholder="Enter disease name...">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div> <div class="col-lg-4"></div> <div class="col-lg-4"> </div> </h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <?php
  session_start();
  if(isset($_SESSION["error"])){
    $error = $_SESSION["error"];
    echo "<span style=\"color:red\"> $error</span>";
  }
  else {
    //while

    if(isset($_SESSION['gene'])) {
      $result = $_SESSION['gene'];
  ?>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <?php  
            for($i=0; $i < count($result); $i++) {

            ?>
            <div class="col-sm-4 py-3" style="overflow-wrap: anywhere;">
                  <div class="card-blog">
                    <div class="body">
                      <h3 class="sidebar-title">Gene</h3>
                      <div class="blog-item">
                        <div class="content">
                          <h5 class="post-title"> <?php
                                                    echo "<span> Code: " . $result[$i][2] . "</span>";
                                                ?> </h5>
                        </div>
                      </div>
                      <div class="blog-item">
                        <div class="content">
                          <h5 class="post-title"> <?php
                                                    echo "<span> Location: " . $result[$i][3] . "</span>";
                                                ?> </h5>
                        </div>
                      </div>
                      <div class="blog-item">
                        <div class="content">
                          <h5 class="post-title"> <?php
                                                    echo "<span> Sequence: " . $result[$i][1] . "</span>";
                                                ?> </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }
                ?>
          </div> <!-- .row -->
        </div>
      </div> <!-- .row -->
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

      
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>

<?php
  unset($_SESSION["error"]);
  unset($_SESSION["gene"]);
?> 