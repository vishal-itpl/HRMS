<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HR Velocity | Payroll</title>
    <?php include './css/style.php'; ?>
</head>

<body class="hold-transition sidebar-mini">
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            require_once 'connections.php';
                            $sql = "SELECT
            --   leave_application.leave_type,
            --   leave_application.from_date,
            --   leave_application.to_date,
            --   leave_application.description,
            --   leave_application.app_date,
              emp_info.emp_id,
              emp_info.emp_name,
              emp_info.emp_salary
          FROM
            --   leave_application,
              emp_info;";
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
                                    echo "<td>";
                                    echo "<button type='button' class='btn btn-primary btn-md'>Pay <i class='fa-solid'></i></button>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            }
                                
                        

                            ?>
                            <tr>
                                <td><?php echo $counter++; ?></td>
                                <td><?php echo $employee_name; ?></td>
                                <!-- <td>1001</td> -->
                                <td><?php echo $employee_salary; ?></td>
                                <td>17</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-md">Pay
                                        <i class="fa-solid"></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
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
</body>

</html>