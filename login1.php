<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR Management System | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
    #Twitterbg{
        background-color: #1DA1F2;
        color: white;
    }
  </style>
</head>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hrms";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];


  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      echo "OOPS Connecion failed!!!";
  }
}

?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="home.php"><b>HR Management System</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="home.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" onclick="window.location.href = 'home.php';">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftwitter.com%2Fi%2Fflow%2Flogin%3Fredirect_after_login%3D%252F" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Ftwitter.com%2Fi%2Fflow%2Flogin%3Fredirect_after_login%3D%252F&text=" class="btn btn-block" id="Twitterbg" style="background-color:'#1DA1F2'">
          <i class="fab fa-twitter mr-2"></i> Sign in using Twitter
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
