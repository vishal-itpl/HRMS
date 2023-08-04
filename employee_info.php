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
                            <!-- <h1>Employee Registration</h1> -->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Employee Information</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3 class="card-title">Employee Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                        <tr>
                                        <th>Name</th>
                                        </tr>
                                        <tr>
                                        <th>Id</th>
                                        </tr>
                                        <tr>
                                        <th>Date of Birth</th>
                                        </tr>
                                        <tr>
                                        <th>Gender</th> 
                                        </tr>
                                        <tr>
                                        <th>Email Address</th>
                                        </tr>
                                        <tr>
                                        <th>Mobile No.</th>
                                        </tr>
                                        <tr>
                                        <th>Address</th>
                                        </tr>
                                        <tr>
                                        <th>Position</th>
                                        </tr>
                                        <tr>
                                        <th>Date Of Joining</th>
                                        </tr>
                                        <tr>
                                        <th>Salary</th>
                                        </tr>
                                        <tr>
                                        <th>Emergency Contact Name</th>
                                        </tr>
                                        <tr>
                                        <th>Emergency Contact Relation</th>
                                        </tr>
                                        <tr>
                                        <th>Emergency Contact Contact No.</th>
                                        </tr>
                                        <tr>
                                        <th>Bank Name</th>
                                        </tr>
                                        <tr>
                                        <th>Account Number</th>
                                        </tr>
                                        <tr>
                                        <th>Account Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            

                        </div> -->
                        <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tbody>
            <tr>
                <th style="width: 100px;">Name</th>
                <td>John Doe</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>123456</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>1990-05-15</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>Male</td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td>john@example.com</td>
            </tr>
            <tr>
                <th>Mobile No.</th>
                <td>9876543210</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>123 Main St, City, Country</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>Manager</td>
            </tr>
            <tr>
                <th>Date Of Joining</th>
                <td>2023-01-15</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>$5000</td>
            </tr>
            <tr>
                <th>Emergency Contact Name</th>
                <td>Jane Doe</td>
            </tr>
            <tr>
                <th>Emergency Contact Relation</th>
                <td>Sister</td>
            </tr>
            <tr>
                <th>Emergency Contact Contact No.</th>
                <td>9876543200</td>
            </tr>
            <tr>
                <th>Bank Name</th>
                <td>State Bank of India</td>
            </tr>
            <tr>
                <th>Account Number</th>
                <td>1234567890</td>
            </tr>
            <tr>
                <th>Account Type</th>
                <td>Savings</td>
            </tr>
        </tbody>
    </table>
</div>


                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </section>
        </div>
    </div>

</body>
<?php include './js/js.php'; ?>