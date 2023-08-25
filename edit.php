<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include './css/style.php'; ?>
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
              <h1>Employee Registration</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Employee Registration</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div>
            <a class="btn btn-primary float-right" href="employee_list.php" role="button"><i
                class="fa-solid fa-backward fa-bounce"></i></a>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
            <br>
              <div class="card card-primary">
                <div class="card-header custom-card-header">
                  <h3 class="card-title">Edit Employee Information</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form action="update-data.php" id="quickForm" method="Post">
                  <div class="card-body">
                    <?php
                    // echo "<pre>";
                    // print_r($_POST);
                    // echo "</pre>";
                    $emp_id = $_GET['id'];
                    // Assuming emp_id is passed via query parameter
                    
                    // Connect to the database and retrieve existing data
                    $con = new mysqli('localhost', 'root', '', 'hrms');
                    if (!$con) {
                      die(mysqli_error($con));
                    }

                    $sql = "SELECT * FROM emp_info WHERE emp_id = '$emp_id'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    // echo "<pre>";
                    // print_r($row);
                    // echo "</pre>";
                    // echo""
                    ?>
                    <div class="form-group col-12">
                      <label for="Name">Employee Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Employee Name"
                        value="<?php echo $row['emp_name']; ?>">
                    </div>
                    <div class="form-group col-12">
                      <label for="Name" hidden>Employee Id</label>
                      <input type="text" name="empid" class="form-control" placeholder="Enter Employee Id"
                        value="<?php echo $row['emp_id']; ?>" hidden>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date Of Birth</label>
                      <input type="date" name="dob" class="form-control" id="exampleInputEmail1"
                        value="<?php echo $row['emp_dob']; ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Gender</label> <br>
                      <div class="row">
                        <div class="custom-control custom-radio col-md-1">

                        </div>
                        <div class="custom-control custom-radio col-md-2">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio"
                            value="Male" <?php if ($row['emp_gender'] == 'Male')
                              echo 'checked'; ?>>
                          <label for="customRadio1" class="custom-control-label">Male</label>
                        </div>

                        <div class="custom-control custom-radio col-md-2">
                          <input class="custom-control-input" type="radio" value="Female" <?php if ($row['emp_gender'] == 'Female')
                            echo 'checked'; ?> id="customRadio2" name="customRadio">
                          <label for="customRadio2" class="custom-control-label">Female</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Email Address</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter Email Address"
                        value="<?php echo $row['emp_email']; ?>">
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Mobile No.</label>
                      <input name="number" type="text" class="form-control" maxlength="10"
                        placeholder="Enter Mobile No." value="<?php echo $row['emp_mob']; ?>">
                    </div>

                    <div class="form-group col-12">
                      <label>Address</label>
                      <textarea class="form-control" name="address" rows="1"
                        placeholder="Enter Address..."><?php echo $row['emp_address']; ?></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Position</label>
                      <select name="position" class="form-control" value="<?php echo $row['emp_email']; ?>">
                        <option value="Intern" <?php if ($row['emp_position'] == 'Intern')
                          echo 'selected'; ?>>Intern
                        </option>
                        <option value="Jr. Developer" <?php if ($row['emp_position'] == 'Jr. Developer')
                          echo 'selected'; ?>>Jr. Developer</option>
                        <option value="Sr. Developer" <?php if ($row['emp_position'] == 'Sr. Developer')
                          echo 'selected'; ?>>Sr. Developer</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputJoining1">Date Of Joining</label>
                      <input type="date" name="doj" class="form-control" id="exampleInputjoining1"
                        value="<?php echo $row['emp_doj']; ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Salary</label>
                      <input type="text" name="salary" class="form-control" id="exampleInputsalary1"
                        placeholder="Salary" value="<?php echo $row['emp_salary']; ?>">
                    </div>
                    <label for="emergency" style="margin-left: 0px;">Emergency Contact</label>
                    <div class="form-group col-12">
                      <label for="emgname">Name</label>
                      <input type="text" name="emgname" class="form-control" placeholder="Enter Name"
                        value="<?php echo $row['emg_name']; ?>">
                    </div>
                    <div class="form-group col-12">
                      <label for="relation">Relation with employee</label>
                      <input type="text" name="emgrltn" class="form-control" placeholder="Enter relation with employee"
                        value="<?php echo $row['emg_rltn']; ?>">
                    </div>
                    <div class="form-group col-12">
                      <label for="contact">Contact No.</label>
                      <input type="text" name="emgno" class="form-control" maxlength="10" placeholder="Enter Mobile No."
                        value="<?php echo $row['emg_contact']; ?>">

                    </div>

                    <label for="emergency" style="margin-left: 0px;"> Bank Details</label>
                    <div class="form-group col-12">
                      <label for="Name">Bank Name</label>
                      <select name="bankname" class="form-control" value="<?php echo $row['bank_name']; ?>">
                        <option value="1" <?php if ($row['bank_name'] == '1')
                          echo 'selected'; ?>>State Bank Of India
                        </option>
                        <option value="2" <?php if ($row['bank_name'] == '2')
                          echo 'selected'; ?>>Axis Bank</option>
                        <option value="3" <?php if ($row['bank_name'] == '3')
                          echo 'selected'; ?>>IndusInd Bank</option>
                        <option value="4" <?php if ($row['bank_name'] == '4')
                          echo 'selected'; ?>>HDFC Bank</option>
                        <option value="5" <?php if ($row['bank_name'] == '5')
                          echo 'selected'; ?>>ICICI Bank</option>
                        <option value="6" <?php if ($row['bank_name'] == '6')
                          echo 'selected'; ?>>Bank of Baroda</option>
                      </select>
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Account Number</label>
                      <input type="password" name="bankacc" maxlength="15" minlength="11" class="form-control"
                        placeholder="Enter Account No." value="<?php echo $row['bank_accno']; ?>">
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Account Type</label>
                      <select name="bankacctype" class="form-control">
                        <!-- <option></option> -->
                        <option value="1" <?php if ($row['bank_acctype'] == '1')
                          echo 'selected'; ?>>Savings account
                        </option>
                        <option value="2" <?php if ($row['bank_acctype'] == '2')
                          echo 'selected'; ?>>Current account
                        </option>
                        <option value="3" <?php if ($row['bank_acctype'] == '3')
                          echo 'selected'; ?>>Personal account
                        </option>
                        <option value="4" <?php if ($row['bank_acctype'] == '4')
                          echo 'selected'; ?>>Fixed deposit account
                        </option>
                      </select>
                    </div>


                    <!-- <div class="form-group mb-0">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a
                            href="terms&service.php">terms of
                            service</a>.</label>
                      </div>
                    </div>
                  </div> -->
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name='save' class="btn btn-primary">Save</button>
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
    <?php
    if (isset($_POST['emp_id'])) {
      $emp_id = $_POST['emp_id'];
      $employee_name = $_POST['name'];
      $employee_dob = $_POST['dob'];
      $employee_gender = $_POST['customRadio'];
      $employee_email = $_POST['email'];
      $employee_mob = $_POST['number'];
      $employee_password = md5($_POST['password']);
      $employee_cpassword = md5($_POST['confirm_password']);
      $employee_address = $_POST['address'];
      $employee_position = $_POST['position'];
      $employee_doj = $_POST['doj'];
      $employee_salary = $_POST['salary'];
      $emergency_name = $_POST['emgname'];
      $emergency_rltn = $_POST['emgrltn'];
      $emergency_contact = $_POST['emgno'];
      $bankname = $_POST['bankname'];
      $bankaccno = $_POST['bankacc'];
      $bankacctype = $_POST['bankacctype'];

      $con = new mysqli('localhost', 'root', '', 'hrms');

      if ($con) {
        echo "";
      } else {
        die(mysqli_error($con));
      }

      $sql = "UPDATE emp_info SET 
        name = '$employee_name', 
        dob = '$employee_dob', 
        customRadio = '$employee_gender',
        email = '$employee_email',
        number = '$employee_mob',
        password = '$employee_password',
        confirm_password = '$employee_cpassword',
        address = '$employee_address',
        position = '$employee_position',
        doj = '$employee_doj',
        salary = '$employee_salary',
        emgname = '$emergency_name',
        emgrltn = '$emergency_rltn',
        emgno = '$emergency_contact',
        bankname = '$bankname',
        bankacc = '$bankaccno',
        bankacctype = '$bankacctype'
        WHERE emp_id = '$emp_id'";

      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script> alert('Data Updated successfully') </script>";
        // Redirect to employee list or other page
      } else {
        die(mysqli_error($conn));
      }
    } else {
      echo "HELLO ERROR!";
    }
    ?>
  </div>
  <?php include './js/js.php'; ?>
</body>

</html>