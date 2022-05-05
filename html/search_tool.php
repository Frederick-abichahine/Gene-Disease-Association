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

        <!-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> -->

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
        <h1 class="font-weight-normal"><div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3> <!-- justify-content-center -->
              <form action="connection_gene.php" class="search-form">
                <div class="form-group">
                  <input type="text" name = "disease" class="form-control" placeholder="Enter disease name...">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div></h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="body">
                      <h3 class="sidebar-title">Gene</h3>
                      <div class="blog-item">
                        <div class="content">
                          <h5 class="post-title"> <?php
                                                  session_start();
                                                  if(isset($_SESSION['gene'])) {
                                                    $gene = $_SESSION['gene'];
                                                    echo "<span> sequence: $gene[1] </span>";
                                                  }
                                                ?> </h5>
                        </div>
                      </div>
                      <div class="blog-item">
                        <div class="content">
                          <h5 class="post-title"> <?php
                                                  if(isset($_SESSION['gene'])) {
                                                    $gene = $_SESSION['gene'];
                                                    echo "<span> code: $gene[2] </span>";
                                                  }
                                                ?> </h5>
                        </div>
                      </div>
                      <div class="blog-item">
                        <div class="content">
                          <h5 class="post-title"> <?php
                                                  if(isset($_SESSION['gene'])) {
                                                    $gene = $_SESSION['gene'];
                                                    echo "<span> location: $gene[3] </span>";
                                                  }
                                                ?> </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="body">
                      <h3 class="sidebar-title">Gene</h3>
                      <div class="blog-item">
                        <div class="content">
                          <h5 class="post-title">TESTING THIS LALALALALALALA </h5>
                        </div>
                      </div>
                      <div class="blog-item">
                        <div class="content">
                          <h5 class="post-title">MY BABIESSSSS WORKKKKKVVVV </h5>
                        </div>
                      </div>
                      <div class="blog-item">
                        <div class="content">
                          <h5 class="post-title">HELLOOOOOO PEOPLEEEEEE</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

            <!-- <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div> -->
          </div> <!-- .row -->
        </div>
        <!-- <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>
          </div>
        </div> 
 -->
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  

  <footer class="page-footer">
    <div class="container">
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