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
      <img class="animation__shake" src="dist/img/HR.png" alt="AdminLTELogo" height="260" width="260">
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