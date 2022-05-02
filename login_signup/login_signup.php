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
      <form class="form form-login" action="connection1.php" method="POST"> <!-- Action specifies the location to transfer the submitted user information; Connection 1 is for login-->
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
      <form class="form form-signup" action="connection2.php" method="POST"> <!-- Connection 2 is to register-->
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" name="email" required placeholder="hello@world.com">
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" name="password" required placeholder="Password">
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input id="signup-password-confirm" type="password" required placeholder="Password">
          </div>
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
