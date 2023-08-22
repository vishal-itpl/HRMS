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
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
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
                    ?>
                    <div class="form-group col-12">
                      <label for="Name">Employee Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Employee Name"
                        value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Employee Id</label>
                      <input type="text" name="empid" class="form-control" placeholder="Enter Employee Id"
                        value="<?php echo $row['empid']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date Of Birth</label>
                      <input type="date" name="dob" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter DOB">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Gender</label> <br>
                      <div class="row">
                        <div class="custom-control custom-radio col-md-1">

                        </div>
                        <div class="custom-control custom-radio col-md-2">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio"
                            value="Male" checked>
                          <label for="customRadio1" class="custom-control-label">Male</label>
                        </div>

                        <div class="custom-control custom-radio col-md-2">
                          <input class="custom-control-input" type="radio" value="Female" id="customRadio2"
                            name="customRadio">
                          <label for="customRadio2" class="custom-control-label">Female</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Email Address</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Mobile No.</label>
                      <input name="number" type="text" class="form-control" maxlength="10"
                        placeholder="Enter Mobile No.">
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Password</label>
                      <input type="password" name="password" id="password" class="form-control"
                        placeholder="Enter Password" maxlength="10">
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Confirm Password</label>
                      <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                        placeholder="Confirm Password" maxlength="10">
                    </div>
                    <div class="form-group col-12">
                      <label>Address</label>
                      <textarea class="form-control" name="address" rows="1" placeholder="Enter Address..."></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Position</label>
                      <select name="position" class="form-control">
                        <option>Intern</option>
                        <option>Jr. Developer</option>
                        <option>Sr. Developer</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputJoining1">Date Of Joining</label>
                      <input type="date" name="doj" class="form-control" id="exampleInputjoining1">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Salary</label>
                      <input type="text" name="salary" class="form-control" id="exampleInputsalary1"
                        placeholder="Salary">
                    </div>
                    <label for="emergency" style="margin-left: 0px;">Emergency Contact</label>
                    <div class="form-group col-12">
                      <label for="emgname">Name</label>
                      <input type="text" name="emgname" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-12">
                      <label for="relation">Relation with employee</label>
                      <input type="text" name="emgrltn" class="form-control" placeholder="Enter relation with employee">
                    </div>
                    <div class="form-group col-12">
                      <label for="contact">Contact No.</label>
                      <input type="text" name="emgno" class="form-control" maxlength="10"
                        placeholder="Enter Mobile No.">

                    </div>

                    <label for="emergency" style="margin-left: 0px;"> Bank Details</label>
                    <div class="form-group col-12">
                      <label for="Name">Bank Name</label>
                      <select name="bankname" class="form-control">
                        <option>State Bank Of India</option>
                        <option>Axis Bank</option>
                        <option>Indusland Bank</option>
                        <option>HDFC Bank</option>
                        <option>ICICI Bank</option>
                        <option>Bank of Baroda</option>
                      </select>
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Account Number</label>
                      <input type="password" name="bankacc" maxlength="15" minlength="11" class="form-control"
                        placeholder="Enter Account No.">
                    </div>
                    <div class="form-group col-12">
                      <label for="Name">Account Type</label>
                      <select name="bankacctype" class="form-control">
                        <!-- <option></option> -->
                        <option>Savings account</option>
                        <option>Current account</option>
                        <option>Personal account</option>
                        <option>Fixed deposit account</option>
                      </select>
                    </div>


                    <div class="form-group mb-0">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a
                            href="terms&service.php">terms of
                            service</a>.</label>
                      </div>
                    </div>
                  </div>
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