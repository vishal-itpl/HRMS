<?php session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

$error = '';
 if (isset($_POST['emp_email']) && isset($_POST['password'])){
 $emp_email = $_POST['emp_email'];
$password = $_POST['password'];
 $sql = "SELECT*FROM emp_info where emp_email ='$emp_email' and password = '$password'";
 $result = mysqli_query($conn,$sql);
 $count = mysqli_num_rows($result);
 if($count>0){
 $row = mysqli_fetch_assoc($result);
$_SESSION['emp_role'] =$row['emp_role'];
$_SESSION['is_login'] = "yes";
if($row['emp_role'] == 'Admin'){
 header('Location:home.php');
}
if($row['emp_role'] == 'Employee'){
 header('Location:home.php');
}
 }
else{
$error = "please enter details";
}
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR Velocity | Dashboard</title>
  <?php include './css/style.php'; ?>
  <!-- Google Font: Source Sans Pro -->

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/comp_logo.png" alt="AdminLTELogo" height="260" width="260">
    </div>

    <!-- Navbar -->
    <?php include 'nav-bar.php'; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'side-bar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <?php include 'wrapper(main)-content.php' ?>
    <!-- /.content-wrapper -->
    <?php include 'footer.php'; ?>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <?php include 'js/js.php'; ?>
  <script>
    $('#calendar').datetimepicker({
      format: 'L',
      inline: true
    })
  </script>
</body>
</html>