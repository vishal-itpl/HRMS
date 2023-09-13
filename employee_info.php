<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Velocity | Employee Information</title>


    <?php include './css/style.php'; ?>
</head>

<body>
    <?php
    include 'connections.php';
    $row = [];
    if (isset($_GET['id'])) {
        $emp_id = $_GET['id'];

        $sql = "SELECT * FROM emp_info WHERE emp_id = $emp_id";

        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $dob = $row['emp_dob'];
            $name = $row['emp_name'];
            $gender = $row['emp_gender'];
            $email = $row['emp_email'];
            $mobile = $row['emp_mob'];
            $address = $row['emp_address'];
            $role = $row['emp_role'];
            $position = $row['emp_position'];
            $doj = $row['emp_doj'];
            $salary = $row['emp_salary'];
            $emg_name = $row['emg_name'];
            $emg_rltn = $row['emg_rltn'];
            $emg_contact = $row['emg_contact'];
            $bank_name = $row['bank_name'];
            $bank_acc = $row['bank_accno'];
            $acc_type = $row['bank_acctype'];
        } else {
            echo "Error: " . mysqli_error($con);
        }

        mysqli_close($con);
    } else {
        echo "Employee ID not provided.";
    }
    ?>



    <div class="wrapper">
        <?php include 'nav-bar.php'; ?>
        <?php include 'side-bar.php'; ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Employee Details</h1>
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
                    <div>
                        <a class="btn btn-primary float-right" href="employee_list.php" role="button"><i class="fa-solid fa-backward"></i></a>
                    </div>
                    <br>
                    <br>
                    <div class="card">
                        <div class="card-header text-center">
                            <h3 class="card-title">Employee Information</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <?php
                                    // echo "<pre>";
                                    // print_r($row);
                                    // echo "</pre>";
                                    ?>
                                    <tr>
                                        <th style="width: 100px;">Name</th>
                                        <td>
                                            <?php echo $name; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Date of Birth</th>
                                        <td>
                                            <?php echo $dob; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>
                                            <?php echo $gender; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email Address</th>
                                        <td>
                                            <?php echo $email; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Mobile No.</th>
                                        <td>
                                            <?php echo $mobile; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>
                                            <?php echo $address; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <td>
                                            <?php echo $role; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Position</th>
                                        <td>
                                            <?php echo $position; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Date Of Joining</th>
                                        <td>
                                            <?php echo $doj; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Salary</th>
                                        <td>
                                            <?php echo $salary; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Emergency Contact Name</th>
                                        <td>
                                            <?php echo $emg_name; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Emergency Contact Relation</th>
                                        <td>
                                            <?php echo $emg_rltn; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Emergency Contact Contact No.</th>
                                        <td>
                                            <?php echo $emg_contact; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Bank Name</th>
                                        <td>
                                            <?php echo $bank_name; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Account Number</th>
                                        <td>
                                            <?php echo $bank_acc; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Account Type</th>
                                        <td>
                                            <?php echo $acc_type; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</body>
<?php include './js/js.php'; ?>