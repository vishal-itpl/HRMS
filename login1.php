<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HR Velocity | Log in</title>
    <?php require_once './css/style.php'; ?>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card">
      <div class="card-body login-card-body">
        <div class="login-logo">
        <img src="dist/img/comp_logo.png" alt="HRVelocity Logo" class="brand-image" style=" width: 250px;">
        <br>
          <b>HR Velocity</b></a>
        </div>
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" required>


            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary" >Login</button>
            </div>
          </div>

        </form>


        <div>
          <p class="mt-3 text-center">
            <a href="forgot-password.php">I forgot my password</a>
          </p>
        </div>

      </div>

    </div>
  </div>


</body>

<?php
session_start(); // Initialize the session
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hrms";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $emp_email = $_POST["email"];
    $password = md5($_POST["password"]);

    // Validate credentials against the database
    $query = "SELECT emp_role, emp_email, emp_id from emp_info WHERE emp_email='$emp_email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION["emp_email"] = $user["emp_email"];
        $_SESSION["emp_role"] = $user["emp_role"];
        $_SESSION['is_login'] = "Yes";
        $_SESSION['eid'] = $user["emp_id"];

           // Store user's role in session
        // Redirect to the dashboard
        header("Location: home.php");
        exit();
    } else {
        // Invalid credentials, show an error message
        echo "<p class='login-box-msg' style='color: red;'>Login failed. Please check your credentials.</p>";
    }

    mysqli_close($conn);
}
?>
<?php require_once './js/js.php'; ?>