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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HR Velocity | Payroll</title>
    <?php include './css/style.php'; ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include 'nav-bar.php'; ?>
        <?php include 'side-bar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1>DataTables</h1> -->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Employee List</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Employee Payroll List</h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>Sr No.</th>
                                    <th>Employee Name</th>
                                    <th>Amount</th>
                                    <th>Present Days</th>
                                    <th>Working Days</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once 'connections.php';
                                $count = 0;
                                $date = date_create();
                                for ($i = date("t"); $i > 0; $i--) {
                                    date_date_set($date, date("Y"), date("m"), $i);
                                    if (date_format($date, "w") != 0 && date_format($date, "w") != 6) {
                                        $count++;
                                    }
                                }
                                // echo 'Total working days : ' . $count;
                                // $pdays= $count - $leave;
                                $sql = "SELECT payroll.actual_salary, payroll.basic_sal, payroll.total_days, payroll.working_days, payroll.hra, payroll.others, payroll.esi, payroll.provident_fund, payroll.ptax, payroll.leave_days, payroll.leave_amount, payroll.net_salary, emp_info.emp_id,emp_info.emp_salary, emp_info.emp_name FROM payroll JOIN emp_info ON payroll.emp_id = emp_info.emp_id
                            WHERE
                              emp_info.emp_id= $eid";

                                $result = mysqli_query($con, $sql);
                                if ($result) {
                                    $counter = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $employee_name = $row['emp_name'];
                                        $employee_salary = $row['emp_salary'];
                                        // Inside the loop, create a new table row for each record
                                        echo "<tr>";
                                        echo "<td>" . $counter++ . "</td>";
                                        echo "<td>" . $employee_name . "</td>";
                                        echo "<td>" . $employee_salary . "</td>";
                                        echo "<td>17</td>";
                                        echo "<td>" . $count . "</td>";
                                ?>
                                        <?php
                                        if ($erole == 'Admin') {
                                        }
                                        ?>
                                        <?php
                                        echo "<td>";
                                        echo "<a href='view.php'> <button type='button' class='btn btn-primary btn-md mr-2'>View Details<i class='fa-solid'></i></button></a>";
                                        echo "</td>";
                                        ?>

                                <?php
                                        // Inside your PHP loop where you generate the table rows
                                        // Replace these values with your actual data
                                        $td = 20; // Example: Number of total days
                                        // $wd = $count;
                                        $lv = 5;  // Example: Number of leaves
                                        $sal = $employee_salary; // Example: Salary

                                        // Calculate the necessary values
                                        $basic = $sal * 0.5;
                                        $hra = $basic * 0.4;
                                        $others = $basic * 0.6;
                                        $pf = $basic * 0.12;
                                        $pt = 200;
                                        $esi = $sal * 0.015;
                                        $allowances = $hra + $others;
                                        $deductions = $pf + $pt + $esi;
                                        $ts = $basic + $allowances - $deductions;
                                        $lamt = round($ts / $td * $lv);
                                        $ns = $ts - $lamt;

                                        // Add data attributes to the "Pay" button
                                        echo "<td>";
                                        echo "<button type='button' class='btn btn-primary btn-md pay-btn' 
      data-amount='$ns' data-description='Payment for Employee ID: $eid'>Pay <i class='fa-solid'></i></button>";
                                        echo "</td>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
        </div>
    </div>
    </div>
    </section>
    </div>
    </div>

    <?php include './js/js.php'; ?>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        // Add this script at the end of your HTML body
        document.addEventListener("DOMContentLoaded", function() {
            const payButtons = document.querySelectorAll('.pay-btn');

            payButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Calculate the amount (you can replace this with your calculation logic)
                    $td = 20; // Example: Number of total days
                                        // $wd = $count;
                                        $lv = 5;  // Example: Number of leaves
                                        // $sal = $employee_salary; // Example: Salary

                                        // // Calculate the necessary values
                                        // $basic = $sal * 0.5;
                                        // $hra = $basic * 0.4;
                                        // $others = $basic * 0.6;
                                        // $pf = $basic * 0.12;
                                        // $pt = 200;
                                        // $esi = $sal * 0.015;
                                        // $allowances = $hra + $others;
                                        // $deductions = $pf + $pt + $esi;
                                        // $ts = $basic + $allowances - $deductions;
                                        // $lamt = round($ts / $td * $lv);
                                        $ns = 1000;
                    const amount = $ns; // Example: Replace with your calculation logic

                    // Show the amount in an alert
                    alert("Amount to be paid: Rs" + amount);

                    // Display a SweetAlert to confirm payment
                    Swal.fire({
                        title: 'Confirm Payment',
                        text: 'Are you sure you want to make the payment?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, pay now!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Payment is confirmed, show success message
                            Swal.fire('Payment Successful!', 'Your payment has been processed.', 'success');
                        }
                    });
                });
            });
        });
    </script>
    </div>
</body>
</html>