<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR Velocity | Leave List</title>
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
                <th>Employee No.</th>
                <th>Employee Name</th>
                <th>Date</th>
                <th>Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>End Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $sql= "Select * from leave_application";
              $result= mysqli_query($con, $sql);
              if($result){
                $counter = 1;
                while($row = mysqli_fetch_assoc($result)){
                }
              }
              ?>
              <tr>
                <td>1</td>
                <td>1001</td>
                <td>Manish Kapoor</td>
                <td>09-07-2023</td>
                <td>Sick Leave</td>
                <td>10-07-2023</td>
                <td>11-07-2023</td>
                <td>
                  <div class="modal fade" id="modal-lg1">
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
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                </td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg1">View
                  </button>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm mr-1">Approve


                  </button>
                  <button type="button" class="btn btn-danger btn-sm mr-1">Reject

                  </button>

                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>1002</td>
                <td>Aditya Singh</td>
                <td>13-07-2023</td>
                <td>Personal Leave</td>
                <td>15-07-2023</td>
                <td>18-07-2023</td>
                <td>
                  <div class="modal fade" id="modal-lg2">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Large Modal</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Name: Aditya Singh&hellip;</p>
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
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                </td>

                <td>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg2">View
                  </button>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm mr-1">Approve


                  </button>
                  <button type="button" class="btn btn-danger btn-sm mr-1">Reject

                  </button>

                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>1003</td>
                <td>Freddie Rahman</td>
                <td>14-07-2023</td>
                <td>Emergency Leave</td>
                <td>14-07-2023</td>
                <td>14-07-2023</td>
                <td>
                  <div class="modal fade" id="modal-lg3">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Large Modal</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Name: Freddie Rahman&hellip;</p>
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
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                </td>

                <td>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg3">View
                  </button>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm mr-1">Approve


                  </button>
                  <button type="button" class="btn btn-danger btn-sm mr-1">Reject

                  </button>

                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>1004</td>
                <td>Deepika Gupta</td>
                <td>22-07-2023</td>
                <td>Personal Leave</td>
                <td>25-07-2023</td>
                <td>26-07-2023</td>
                <td>26-07-2023</td>

                <td>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg">View
                  </button></button>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm mr-1">Approve</button>
                  <button type="button" class="btn btn-danger btn-sm mr-1">Reject</button>

                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>1005</td>
                <td>Pooja Patel</td>
                <td>20-07-2023</td>
                <td>Work From Home Leave</td>
                <td>21-07-2023</td>
                <td>21-07-2023</td>
                <td>21-07-2023</td>

                <td>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg">View
                  </button>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm mr-1">Approve


                  </button>
                  <button type="button" class="btn btn-danger btn-sm mr-1">Reject

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
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</body>

</html>