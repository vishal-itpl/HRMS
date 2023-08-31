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
                    <h2 class="card-title">Employee List</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Employee Name</th>
                                <th>Employee No.</th>
                                <th>Amount</th>
                                <th>Present Days</th>
                                <!-- <th>Mobile No.</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ravi Gupta</td>
                                <td>1001</td>
                                <td>12000</td>
                                <td>17</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-md">Pay
                                        <i class="fa-solid"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Vijay Shah</td>
                                <td>1002</td>
                                <td>18000</td>
                                <td>20</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-md">Pay
                                        <i class="fa-solid fa-indian-rupee-sign"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Shailesh Rungta</td>
                                <td>1003</td>
                                <td>20000</td>
                                <td>18</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-md">Pay
                                        <i class="fa-solid fa-indian-rupee-sign"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Kaveri Singh</td>
                                <td>1004</td>
                                <td>15000</td>
                                <td>19</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-md">Pay
                                        <i class="fa-solid fa-indian-rupee-sign"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Anjali Desai</td>
                                <td>1005</td>
                                <td>22000</td>
                                <td>22</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-md">Pay
                                        <i class="fa-solid fa-indian-rupee-sign"></i>
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
</body>

</html>