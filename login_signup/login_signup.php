<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login | Register</title>
  <head>
  <meta charset="UTF-8">
  <title>Gene-Disease Association</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="forms-section">
  <h1 class="section-title">Gene-Disease Association</h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>
      <form class="form form-login" action="connection_login.php" method="POST"> <!-- Action specifies the location to transfer the submitted user information -->
            <?php
              session_start();
              if(isset($_SESSION["error"])){
                $error = $_SESSION["error"];
                echo "<span style=\"color:red\"> $error</span>";
              }
            ?>
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="login-email" type="email" name="email" required placeholder="hello@world.com">
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input id="login-password" type="password" name="password" required placeholder="Password">
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Register Doctor
        <span class="underline"></span>
      </button>
      <form class="form form-signup" action="connection_register.php" method="POST">

            <?php
              if(isset($_SESSION["error"])){
                $error = $_SESSION["error"];
                echo "<span style=\"color:red\"> $error</span>";
              }
            ?>
        <fieldset>
          <legend>Please enter the first name, last name, mobile number, email, password and password confirmation for the doctor.</legend>
          <div class="input-block">
            <label for="signup-password">Admin Access Code</label> <!-- Simply to ensure that no one can register a doctor unless they are an admin -->
            <input id="signup-password" type="password" name="admin_code" required placeholder="Code">
          </div>
          <div class="input-block">
            <label for="signup-email">First Name</label>
            <input id="signup-email" type="text" name="first_name" required placeholder="Hello">
          </div>
          <div class="input-block">
            <label for="signup-email">Last Name</label>
            <input id="signup-email" type="text" name="last_name" required placeholder="World">
          </div>
          <div class="input-block">
            <label for="signup-email">Mobile Number</label>
            <input id="signup-email" type="text" name="mobile_number" required placeholder="+123-45-678-901">
          </div>
          <div class="input-block">
            <label for="signup-email">Specialty</label>
            <input id="signup-email" type="text" name="specialty" required placeholder="Dermatologist">
          </div>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" name="email" required placeholder="hello@world.com">
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" name="password" required placeholder="Password">
          </div>
<!--           <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input id="signup-password-confirm" type="password" required placeholder="Password">
          </div> -->
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
    </div>
  </div>
</section>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>

<?php
  unset($_SESSION["error"]);
?> 