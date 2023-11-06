<?php
session_start();
$eid = $_SESSION['eid'];
$erole = $_SESSION['emp_role'];
if (!isset($_SESSION['is_login'])) {
    header('Location:login1.php');
    die();
}


  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>HR Velocity | Change Password</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
      <?php include './css/style.php'; ?>
    <style>
      .error {
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 100%;
		text-align: center;
        border-radius: 5px;
        margin: 20px auto;
      }

      .success {
        background: #D4EDDA;
        color: #40754C;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        margin: 20px auto;
      }
    </style>
  </head>

  <body>
    <div class="wrapper">
      <?php include 'nav-bar.php'; ?>
      <?php include 'side-bar.php'; ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Change Password</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Change Password</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                  <div class="card-header custom-card-header">
                    <h3 class="card-title"><b>Recover Password</b></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="change-p.php" method="post" id="quickForm">
                    <div class="card-body">
                      <?php if (isset($_GET['error'])) { ?>
                        <p class="error">
                          <?php echo $_GET['error']; ?>
                        </p>
                      <?php } ?>

                      <?php if (isset($_GET['success'])) { ?>
                        <p class="success">
                          <?php echo $_GET['success']; ?>
                        </p>
                      <?php } ?>

                      <div class="form-group col-12">
                        <label for="Name">Old Password</label>
                        <input type="password" name="op" class="form-control" placeholder="Enter Old Password"
                          maxlength="10">
                      </div>
                      <div class="form-group col-12">
                        <label for="Name">New Password</label>
                        <input type="password" name="np" class="form-control" placeholder="Enter New Password"
                          maxlength="10">
                      </div>
                      <div class="form-group col-12">
                        <label for="Name">Confirm Password</label>
                        <input type="password" name="c_np" class="form-control" placeholder="Confirm Password"
                          maxlength="10">
                      </div>




                    </div>
                    <!-- /.card-body -->
                    <div class="row">
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Change password</button>
                      </div>
                  </form>
                </div>
                <!-- /.card -->
              </div>
              <!--/.col (left) -->
              <!-- right column -->
              <div class="col-md-6">

              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- <form action="change-p.php" method="post">
      <h2>Change Password</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error">
          <?php echo $_GET['error']; ?>
        </p>
      <?php } ?>

      <?php if (isset($_GET['success'])) { ?>
        <p class="success">
          <?php echo $_GET['success']; ?>
        </p>
      <?php } ?>

      <label>Old Password</label>
      <input type="password" name="op" placeholder="Old Password">
      <br>

      <label>New Password</label>
      <input type="password" name="np" placeholder="New Password">
      <br>

      <label>Confirm New Password</label>
      <input type="password" name="c_np" placeholder="Confirm New Password">
      <br>

      <button type="submit">CHANGE</button>
      <a href="home.php" class="ca">HOME</a>
    </form> -->
  </body>
  <?php include './js/js.php'; ?>

  </html>

  <?php
// } else {
//   header("Location: index.php");
//   exit();
// }
?>