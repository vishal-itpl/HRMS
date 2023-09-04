<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Velocity | User Login</title>
    <?php include 'css/style.php';?>
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>
<?php include 'sidebar.php';?>
<form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name/ Email Address</label>
     	<input type="text" name="uname" placeholder="User Name/ Email Address"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
         <a href="signup.php" class="ca">Create an account</a>
        </form>
    </div>
     <!-- Login.php -->
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname_email = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname_email)) {
		header("Location: user_login.php?error=User Name/Email is required");
	    exit();
	} else if (empty($pass)) {
        header("Location: user_login.php?error=Password is required");
	    exit();
	} else {
		// Check if the input is an email or username
		if (filter_var($uname_email, FILTER_VALIDATE_EMAIL)) {
			// Input is an email
			$sql = "SELECT * FROM users WHERE email='$uname_email' AND password='$pass'";
		} else {
			// Input is a username
			$sql = "SELECT * FROM users WHERE user_name='$uname_email' AND password='$pass'";
		}

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();
		} else {
			header("Location: user_login.php?error=Incorrect User name or password");
	        exit();
		}
	}
	
} else {
	header("Location: user_login.php");
	exit();
}
?>

<?php include 'js/js.php';?>
</body>
</html>