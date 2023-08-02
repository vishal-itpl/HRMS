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

                        <div class="col-md-12">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Employee Info</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6">
                                            <label for="Name">Employee Name</label>
                                            <input type="text" class="form-control" placeholder=".col-3">
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Employee Id</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6">
                                            <div class="form-group">
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
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Gender</label>
                                            <select class="form-control">
                                                <option>Select Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6">
                                            <label for="Name">Email Address</label>
                                            <input type="email" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Mobile No.</label>
                                            <input type="text" class="form-control" placeholder="" minlength="10">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6 form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Position</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>

                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="doj">Date Of Joining</label>
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
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Basic Salary</label>
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6">
                                            <label for="Name">Employee Name</label>
                                            <input type="text" class="form-control" placeholder=".col-3">
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Employee Id</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6">
                                            <label for="Name">Employee Name</label>
                                            <input type="text" class="form-control" placeholder=".col-3">
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Employee Id</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6">
                                            <label for="Name">Employee Name</label>
                                            <input type="text" class="form-control" placeholder=".col-3">
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Employee Id</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                </div>

                                <label for="emergency"> Emergency Contact</label>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6">
                                            <label for="Name">Name</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Relation with employee</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Contact No.</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>

                                    </div>
                                </div>

                                <label for="emergency"> Bank Details</label>
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-6">
                                            <label for="Name">Bank Name</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Account Number</label>
                                            <input type="password" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-6">
                                            <label for="Name">Account Type</label>
                                            <select class="form-control">
                                                <option>Select Type</option>
                                                <option>Savings account</option>
                                                <option>Current account</option>
                                                <option>Personal account</option>
                                                <option>Fixed deposit account</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

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
<script>
    $('#reservationdate').datetimepicker({
        format: 'DD/MM/YYYY'
    });
</script>




<!-- <div class="col-4">
    <label for="Name">Documents</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
</div> -->