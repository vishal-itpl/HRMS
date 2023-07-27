<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include'./css/style.php'; ?>
    <style>
         .custom-card-header {
    text-align: center;
  }
    </style>
</head>
<body>
<?php include'nav-bar.php'; ?>
<?php include'side-bar.php'; ?>

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
                <h3 class="card-title">Add New Employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter  name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Date Of Birth</label>
                    <input type="date" name="dob" class="form-control" id="exampleInputEmail1" placeholder="Enter DOB">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Gender</label> <br>
                  <div class="row">
                  <div class="custom-control custom-radio col-md-1">
                    
                  </div>
                  <div class="custom-control custom-radio col-md-2">
                    <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" checked>
                    <label for="customRadio1" class="custom-control-label">Male</label>
                  </div>
                  
                  <div class="custom-control custom-radio col-md-2">
                    <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio">
                    <label for="customRadio2" class="custom-control-label">Female</label>
                  </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputMobile">Mobile No.</label>
                    <input type="text" name="number" class="form-control" id="exampleInputMobile" placeholder="Enter Mobile No." maxlength="10">
                </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputAddress1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputsalary1" placeholder="Enter Address">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputJoining1">Date Of Joining</label>
                    <input type="date" name="doj" class="form-control" id="exampleInputjoining1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Salary</label>
                    <input type="text" name="salary" class="form-control" id="exampleInputsalary1" placeholder="Salary">
                  </div>



                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
  
  <?php include './js/js.php'; ?>
  <script>
    $(function () {
      $.validator.setDefaults({
        submitHandler: function () {
          alert( "Form successful submitted!" );
        }
      });
      $('#quickForm').validate({
        rules: {
          name: {
            required: true,
            name: true,
          },
          email: {
            required: true,
            email: true,
          },
          number: {
            required: true,
            minlength: 5
          },
          dob: {
            required: true,
            date: true,
          },
          doj: {
            required: true,
            date: true,
          },
          address: {
            required: true,
            address: true,
          },
          salary: {
            required: true,
            salary: true,
          },
          terms: {
            required: true
          },
        },
        messages: {
          name: {
            required: "Please enter Name",
            name: "Please enter a valid Name"
          },
          email: {
            required: "Please enter a email address",
            email: "Please enter a valid email address"
          },
          number: {
            required: "Please provide a Mobile No.",
            minlength: "Your number must contain 10 digits"
          },
          dob: {
            required: "Please provide a valid date of birth",
            date: true,
          },
          doj: {
            required: "Please provide a valid date of joining",
            date: true,
          },
          address: {
            required: "Please provide a address",
            address: "Please enter a valid  address"
          },
          salary: {
            required: "Please enter salary",
            salary: "Please enter a valid  salary"
          },
          terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>
</html>

