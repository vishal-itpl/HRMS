<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR Velocity | Recover Password</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="text-center card">
    <div class=" card-body login-card-body">
      <div class="login-logo">
      <img src="dist/img/comp_logo.png" alt="HRVelocity Logo" class="brand-image" style=" width: 250px;">
      <br>
        <a href="../../index2.html"><b>HR</b>Velocity</a>
      </div>
      <p class="login-box-msg">You are only one step away from your new password. Recover your password now.</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="password" name="old_pass" class="form-control" placeholder="Old Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="newpassword"  class="form-control" placeholder="New Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" name="change_password" class="btn btn-primary btn-block">Change password</button>
          </div>
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="login1.php">Back To Login</a>
      </p>
    </div>
  </div>
</div>

<?php

if(isset($_POST['change_password'])){
  $oldpassword=$_POST['old_pass'];
  $newpassword=$_POST['newpassword'];
  $confirmpassword=$_POST['confirmpassword'];
  $sql="";
}
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "hrms";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    // Assuming you have a database connection established here using mysqli
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $oldPasswordFromUser = $_POST["old_pass"];
        $newPassword = $_POST["pass"];
        $confirmPassword = $_POST["cpass"];
    
        // Query your database to get the user's actual password (you might need to retrieve the user's ID or username)
        // You'll need to adjust the query based on how you identify the user in your database
        $query = "SELECT password FROM credentials WHERE user_id = ?"; // Change 'user_id' to your actual identifier
    
        // Prepare the query
        $stmt = $mysqli->prepare($query);
    
        if ($stmt) {
            // Bind parameters and execute the query
            $userId = 1; // Replace with the actual user's ID
            $stmt->bind_param("i", $userId);
            $stmt->execute();
    
            // Bind the result
            $stmt->bind_result($actualPassword);
    
            // Fetch the result
            $stmt->fetch();
    
            // Compare old passwords
            if (password_verify($oldPasswordFromUser, $actualPassword)) {
                // Old password matches, proceed to update the password
                if ($newPassword === $confirmPassword) {
                    // Hash the new password and update it in the database
                    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    
                    // Update the password in the database using UPDATE query
                    
                    echo "Password changed successfully!";
                } else {
                    echo "New passwords do not match!";
                }
            } else {
                echo "Old password is incorrect!";
            }
    
            // Close the statement
            $stmt->close();
        } else {
            echo "Error with the database query.";
        }
        
        // Close the database connection
        $mysqli->close();
    }
    ?>
    

<script>
document.querySelector('form').addEventListener('submit', function(event) {
  var pass = document.querySelector('input[name="pass"]').value;
  var cpass = document.querySelector('input[name="cpass"]').value;
  
  if (pass !== cpass) {
    alert('Passwords do not match!');
    event.preventDefault(); // Prevent the form from submitting
  }
});
</script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
