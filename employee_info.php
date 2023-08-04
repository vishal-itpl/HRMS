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
        <!-- <div class="row col-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Employee Details</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <input type="text" class="form-control" placeholder=".col-3">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder=".col-4">
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder=".col-5">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>General Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Employee Info</li>
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
                        <form id="quickForm">
                            <div class="col-md-12">
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">Employee Info</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row col-md-12">
                                            <div class="form-group col-12">
                                                <label for="Name">Employee Name</label>
                                                <input type="text" name="empname" class="form-control"
                                                    placeholder="Enter Employee Name">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="Name">Employee Id</label>
                                                <input type="text" name="empid" class="form-control"
                                                    placeholder="Enter Employee Id">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="row col-md-12">
                                            <div class="form-group col-12">
                                                <!-- <div class="form-group">
                                                <label>D.O.B</label>
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input"
                                                        data-target="#reservationdate">
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Date Of Birth</label>
                                                    <input type="date" name="dob" class="form-control"
                                                        id="exampleInputEmail1" placeholder="Enter DOB">
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="Name">Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option>Select Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="row col-md-12">
                                            <div class="form-group col-12">
                                                <label for="Name">Email Address</label>
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter Email Address">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="Name">Mobile No.</label>
                                                <input name="mob" name="mob" type="text" class="form-control"
                                                    maxlength="10" placeholder="Enter Mobile No.">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="row col-md-12">
                                            <div class="form-group col-12">
                                                <label>Address</label>
                                                <textarea class="form-control" name="address" rows="1"
                                                    placeholder="Enter ..."></textarea>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="Name">Position</label>
                                                <select class="form-control">
                                                    <option>Select Position</option>
                                                    <option>Intern</option>
                                                    <option>Jr. Developer</option>
                                                    <option>Sr. Developer</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="row col-md-12">
                                            <div class="form-group col-12 form-group">
                                                <label for="doj">Date of Joining</label>
                                                <input type="date" name="doj" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="Name">Basic Salary</label>
                                                <input type="number" name="salary" class="form-control"
                                                    placeholder="Enter Salary of Employee">
                                            </div>

                                        </div>

                                    </div>

                                    <label for="emergency" style="margin-left: 15px;">Emergency Contact</label>
                                    <div class="card-body">
                                        <div class="row col-md-12">
                                            <div class="form-group col-12">
                                                <label for="emgname">Name</label>
                                                <input type="text" name="emgname" class="form-control"
                                                    placeholder="Enter Name">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="relation">Relation with employee</label>
                                                <input type="text" name="emgrltn" class="form-control"
                                                    placeholder="Enter relation with employee">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="contact">Contact No.</label>
                                                <input type="text" name="emgno" class="form-control" maxlength="10"
                                                    placeholder="Enter Mobile No.">
                                            </div>

                                        </div>
                                    </div>

                                    <label for="emergency" style="margin-left: 15px;"> Bank Details</label>
                                    <div class="card-body">
                                        <div class="row col-md-12">
                                            <div class="form-group col-12">
                                                <label for="Name">Bank Name</label>
                                                <select name="bankname" class="form-control">
                                                    <option>Select Bank</option>
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
                                                <input type="password" name="bankacc" maxlength="15" minlength="11"
                                                    class="form-control" placeholder="Enter Account No.">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="Name">Account Type</label>
                                                <select name="bankacctype" class="form-control">
                                                    <option>Select Type</option>
                                                    <option>Savings account</option>
                                                    <option>Current account</option>
                                                    <option>Personal account</option>
                                                    <option>Fixed deposit account</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="text-center mb-2">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                        </form>

                    </div>
                </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    </div>
</body>
<?php include './js/js.php'; ?>
<!-- <script>
    $('#reservationdate').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('button').click(function () {
        Swal.fire({
            title: 'Your form has been submitted',
            icon: 'success',
        })
    }) -->
<script>
    $(function () {
        $.validator.setDefaults({
            submitHandler: function () {
                alert("Form successful submitted!");
            }
        });
        $('#quickForm').validate({
            rules: {
                empname: {
                    required: true,
                    name: true,
                },
                empid: {
                    required: true,
                    empid: true,
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
                empname: {
                    required: "Please enter Name",
                    empname: "Please enter a valid Name"
                },
                empid: {
                    required: "Please enter valid Id",
                    empid: "Please enter a valid Employee Id"
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





<!-- <div class="col-4">
    <label for="Name">Documents</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
</div> -->