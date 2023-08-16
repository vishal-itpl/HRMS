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
              <div>
                <button type="button" class="btn btn-primary btn-sm text-right"
                  onclick="window.location.href='add_new-employee.php';">ADD New Employee</button>
              </div>
              <br>
              <tr>
                <th>Sr No.</th>
                <th>Employee No.</th>
                <th>Employee Name</th>
                <th>Employee Address</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>1001</td>
                <td>Ravi Gupta
                </td>
                <td>Vikas Marg, Block G, Laxmi Nagar, New Delhi, 110092</td>
                <td> ravigupta@mymail.com</td>
                <td>+91 9874563210</td>
                <td>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href = 'employee_info.php';">View
                    <i class="fa-solid fa-eye"></i>

                  </button>
                  <button type="button" class="btn btn-primary btn-sm">Edit
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button>
                  <!-- Delete button -->
                  <button type="button" class="btn btn-danger btn-sm">Delete
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>1002</td>
                <td>Vijay Shah
                </td>
                <td>Navnil Marg, Block A, Chandni Nagar, New Delhi, 110094</td>
                <td> vijayshah@mymail.com</td>
                <td>+91 9874563897</td>
                <td>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm">View
                    <i class="fa-solid fa-eye"></i>

                  </button>
                  <button type="button" class="btn btn-primary btn-sm">Edit
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button>
                  <!-- Delete button -->
                  <button type="button" class="btn btn-danger btn-sm">Delete
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>1003</td>
                <td>Shailesh Rungta
                </td>
                <td>C-41, Vidya Marg, Janakpuri, New Delhi, 110092</td>
                <td> ravigupta@mymail.com</td>
                <td>+91 9874563210</td>
                <td>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm">View
                    <i class="fa-solid fa-eye"></i>

                  </button>
                  <button type="button" class="btn btn-primary btn-sm">Edit
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button>
                  <!-- Delete button -->
                  <button type="button" class="btn btn-danger btn-sm">Delete
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>1004</td>
                <td>Kaveri Singh
                </td>
                <td>104/90A (20) Sanjay Nagar,50 Ft.Road Jajmau, Kanpur, 208010</td>
                <td> kaverisingh@mymail.com</td>
                <td>+91 8874663210</td>
                <td>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm">View
                    <i class="fa-solid fa-eye"></i>

                  </button>
                  <button type="button" class="btn btn-primary btn-sm">Edit
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button>
                  <!-- Delete button -->
                  <button type="button" class="btn btn-danger btn-sm">Delete
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>1005</td>
                <td>Anjali Desai</td>
                <td>21, Gandhi Road, Hyderabad, Telangana, 500001</td>
                <td>anjali.desai@example.com</td>
                <td>+91 76543 21090</td>
                <td>
                  <!-- Edit button -->
                  <button type="button" class="btn btn-primary btn-sm">View
                    <i class="fa-solid fa-eye"></i>

                  </button>
                  <button type="button" class="btn btn-primary btn-sm">Edit
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button>
                  <!-- Delete button -->
                  <button type="button" class="btn btn-danger btn-sm">Delete
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </td>
              </tr>
              <!-- <tr>
                    <td>6</td>
                    <td>1006</td>
                    <td>Rahul Sharma</td>
                    <td>12A, Rajiv Nagar, Mumbai, Maharashtra, 400001</td>
                    <td>rahul.sharma@example.com</td>
                    <td>+91 98765 43210</td>
                </tr>
                <tr>
                <td>7</td>
                <td>1007</td>
                <td>Pooja Patel</td>
                <td>56B, Nehru Road, Ahmedabad, Gujarat, 380001</td>
                <td>pooja.patel@example.com</td>
                <td>+91 87654 32109</td>
            </tr>
            <tr>
                <td>8</td>
                <td>1008</td>
                <td>Aditya Singh</td>
                <td>34C, Vivek Vihar, Delhi, Delhi, 110001</td>
                <td>aditya.singh@example.com</td>
                <td>+91 76543 21098</td>
            </tr>
            <tr>
                <td>9</td>
                <td>1009</td>
                <td>Deepika Gupta</td>
                <td>78D, Shanti Nagar, Bengaluru, Karnataka, 560001</td>
                <td>deepika.gupta@example.com</td>
                <td>+91 87654 32107</td>
            </tr>
            <tr>
                <td>10</td>
                <td>1010</td>
                <td>Vivek Rajan</td>
                <td>23/4, Lake View Colony, Chennai, Tamil Nadu, 600001</td>
                <td>vivek.rajan@example.com</td>
                <td>+91 76543 21098</td>
            </tr>
            <tr>
                <td>11</td>
                <td>1011</td>
                <td>Sneha Sharma</td>
                <td>45A, Gandhi Nagar, Kolkata, West Bengal, 700001</td>
                <td>sneha.sharma@example.com</td>
                <td>+91 87654 32106</td>
            </tr>
            <tr>
                <td>12</td>
                <td>1012</td>
                <td>Manish Kapoor</td>
                <td>67B, Civil Lines, Jaipur, Rajasthan, 302001</td>
                <td>manish.kapoor@example.com</td>
                <td>+91 76543 21095</td>
            </tr> -->

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
  </div>

  <!-- jQuery -->
  <?php include 'js/js.php'; ?>
  <!-- Page specific script -->
  <!-- <script>
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

    $('button').click(function () {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your record has been deleted.',
                    'success'
                )
            }
        })
    })
  </script> -->
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