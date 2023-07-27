<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './css/style.php'; ?>
    <style>
        .custom-card-header {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include 'nav-bar.php'; ?>
    <?php include 'side-bar.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Leave Application</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Leave Application</li>
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
                                <h3 class="card-title">Leave Application Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Type of Leave</label>
                                        <select class="form-control">
                                            <option>Sick Leave</option>
                                            <option>Annual Leave</option>
                                            <option>Personal Leave</option>
                                            <option>Work from Home Leave</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Start Date</label>
                                        <input type="date" name="start-date" class="form-control"
                                            id="exampleInputStartdate1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">End Date</label>
                                        <input type="date" name="end-date" class="form-control"
                                            id="exampleInputEnddate1">
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="desc" class="form-control" rows="3" placeholder="Enter Description here..."></textarea>
                                    </div>

                                </div>
                                
                                <div class=" text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <br>
                </div>
                <!-- /.card-body -->
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
                    alert("Form successful submitted!");
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