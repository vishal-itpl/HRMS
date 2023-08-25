<?php include 'connections.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR Velocity | Employee List</title>
  <?php include './css/style.php'; ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include 'nav-bar.php'; ?>
    <?php include 'side-bar.php'; ?>

    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Employee List</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">


        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Employee List</h2>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <div>
                  <button type="button" class="btn btn-primary btn-sm text-right"
                    onclick="window.location.href='add_new-employee.php';">ADD New Employee</button>
                </div>
                <br>
                <tr>
                  <th>Sr No.</th>
                  <th>Employee Id.</th>
                  <th>Employee Name</th>
                  <th>Employee Address</th>
                  <th>Email</th>
                  <th>Mobile No.</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "Select * from emp_info ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                  $counter = 1; // Add a counter for the serial number
                  while ($row = mysqli_fetch_assoc($result)) {
                    $employee_ID = $row['emp_id'];
                    $employee_name = $row['emp_name'];
                    $employee_address = $row['emp_address'];
                    $employee_email = $row['emp_email'];
                    $employee_mob = $row['emp_mob'];
                    ?>
                    <tr>
                      <td>
                        <?php echo $counter++; ?>
                      </td>
                      <td>
                        <?php echo $employee_ID; ?>
                      </td>
                      <td>
                        <?php echo $employee_name; ?>
                      </td>
                      <td>
                        <?php echo $employee_address; ?>
                      </td>
                      <td>
                        <?php echo $employee_email; ?>
                      </td>
                      <td>
                        <?php echo $employee_mob; ?>
                      </td>
                      <td>
                        <a href="employee_info.php?id=<?php echo $employee_ID; ?>" class="btn btn-primary btn-md">View</a>
                        <a href="edit.php?id=<?php echo $employee_ID; ?>" class="btn btn-primary btn-md">Edit</a>
                        <a href="delete.php?deleteid=<?php echo $employee_ID; ?>" class="btn btn-danger btn-md">Delete</a>
                      </td>
                    </tr>
                    <?php
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
  </div>

  <!-- jQuery -->
  <?php include 'js/js.php'; ?>
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

      // Add event listener only to the "Delete" buttons
      $('.btn-danger').click(function () {
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
          <?php
          include 'connections.php';

          echo "<pre>";
          print_r($GLOBALS);
          echo "</pre>";
          // die();
          
          if (isset($_REQUEST['deleteid'])) {
            $employee_ID = $_REQUEST['deleteid'];

            $employee_ID = mysqli_real_escape_string($con, $employee_ID);

            $sql = "DELETE FROM emp_info WHERE emp_id = $employee_ID";

            $result = mysqli_query($con, $sql);
            if ($result) {
              echo "Deleted Successfully!!";
            } else {
              die(mysqli_error($con));
            }
          }
          ?>
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Your record has been deleted.',
              'success'
            )
          }
        });
      });
    });
  </script>
</body>

</html>