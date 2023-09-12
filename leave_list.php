<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR Velocity | Leave List</title>
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
          <h2 class="card-title">Employee Leaves</h2>
        </div>
        <?php

        ?>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>

              <tr>
                <th>Sr No.</th>
                <th>Employee Id.</th>
                <th>Employee Name</th>
                <th>Applied Date</th>
                <th>Leave Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
require_once 'connections.php';
$sql = "SELECT
  leave_application.leave_type,
  leave_application.from_date,
  leave_application.to_date,
  leave_application.description,
  leave_application.app_date,
  emp_info.emp_id,
  emp_info.emp_name
FROM
  leave_application,
  emp_info;";
$result = mysqli_query($con, $sql);
if ($result) {
  $counter = 1;
  while ($row = mysqli_fetch_assoc($result)) {
    $employee_ID = $row['emp_id'];
    $employee_name = $row['emp_name'];
    $applied_date = $row['app_date'];
    $leave_type = $row['leave_type'];
    $from_date = $row['from_date'];
    $to_date = $row['to_date'];
    $description = $row['description'];
    
    // Inside the loop, create a new table row for each record
    echo "<tr>";
    echo "<td>" . $counter++ . "</td>";
    echo "<td>" . $employee_ID . "</td>";
    echo "<td>" . $employee_name . "</td>";
    echo "<td>" . $applied_date . "</td>";
    echo "<td>" . $leave_type . "</td>";
    echo "<td>" . $from_date . "</td>";
    echo "<td>" . $to_date . "</td>";
    echo "<td>" . $description . "</td>";
    echo "<td>";
    echo "<button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#modal-lg1'>View</button>";
    echo "<button type='button' class='btn btn-primary btn-sm mr-1'>Approve</button>";
    echo "<button type='button' class='btn btn-danger btn-sm mr-1'>Reject</button>";
    echo "</td>";
    echo "</tr>";
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
  <!-- ./wrapper -->
  <!-- jQuery -->
  <?php include './js/js.php'; ?>
  <!-- Page specific script -->
  <script>
    $(function () {
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
  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Large Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Name: Manish Kapoor&hellip;</p>
          <p>One fine body&hellip;</p>
          <p>One fine body&hellip;</p>
          <p>One fine body&hellip;</p>
          <p>One fine body&hellip;</p>
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>