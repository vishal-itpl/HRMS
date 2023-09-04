<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Velocity | Leave Application</title>
    <?php include './css/style.php'; ?>
    <style>
        .custom-card-header {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include 'nav-bar.php';?>
    <?php include 'side-bar.php';?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Leave Application</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Leave Application</li>
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
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header custom-card-header">
                                <h3 class="card-title">Leave Application Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" method="POST" action="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Type of Leave</label>
                                        <select name="leave" class="form-control">
                                            <option value="Sick Leave">Sick Leave</option>
                                            <option value="Annual Leave">Annual Leave</option>
                                            <option value="Personal Leave">Personal Leave</option>
                                            <option value="Work from Home Leave">Work from Home Leave</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Date range:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <!-- <input type="text" class="form-control float-right" id="reservation"
                                                name="reservation"> -->
                                            <input type="text" class="form-control float-right" id="reservation"
                                                name="reservation">

                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>&nbsp;<i class="fa-solid fa-asterisk fa-2xs"
                                            style="color: #ff0000;"></i>
                                        <textarea name="desc" class="form-control" rows="2"
                                            placeholder="Enter Description here..." minlength="25" required></textarea>
                                    </div>
                                </div>

                                <!-- <div class=" text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div> -->
                                <div class=" text-center">
                                    <button type="submit" class="btn btn-primary" id="submitButton">
                                        Submit
                                    </button>
                                    
                                </div>

                                <br>
                        </div>
                        <?php
                        include 'connections.php';
                        if ($_SERVER["REQUEST_METHOD"] === "POST") {
                            $selectedDates = explode(" - ", $_POST["reservation"]);
                            // print_r($selectedDates);
                            $fromDate = date("Y-m-d", strtotime($selectedDates[0]));
                            $toDate = date("Y-m-d", strtotime($selectedDates[1]));

                            // Extract other form data
                            $leaveType = $_POST["leave"];
                            // $desc = mysqli_escape_string($_POST["desc"]);
                            $description = mysqli_real_escape_string($con, $_POST["desc"]);

                            // Get emp_id from emp_info table
                            $sql = "SELECT emp_id FROM emp_info";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);

                                $empId = $row['emp_id'];
                            } else {
                                echo "No record found";
                            }
                            // Insert data into the leave_application table
                            $query = "INSERT INTO leave_application (emp_id, leave_type, from_date, to_date, description, app_date) 
          VALUES ('$empId', '$leaveType', '$fromDate', '$toDate', '$description', NOW())"; 
                            if (mysqli_query($con, $query)) {
                                echo "Form data inserted successfully!";
                            } else {
                                echo "Error inserting form data: " . mysqli_error($con);
                            }
                            // Close the database connection
                            mysqli_close($con);
                        }
                        ?>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
    </div>
    </section>
    </div>
    <?php include './js/js.php'; ?>
</body>
<script>
        $(document).ready(function () {
    // Initialize the date range picker
    $('#reservation').daterangepicker({
        locale: {
            format: 'MM/DD/YYYY'
        }
    });

    // Bind a function to the form's submit event
    $('#quickForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Perform form validation
        var leaveType = $('select[name="leave"]').val();
        var dateRange = $('input[name="reservation"]').val();
        var description = $('textarea[name="desc"]').val();

        if (leaveType === "" || dateRange === "" || description === "") {
            // Display an error message using SweetAlert
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Please fill out all fields.',
            });
        } else {
            $.ajax({
                type: 'POST',
                url: 'leave_application.php', 
                data: $('#quickForm').serialize(),
                success: function (response) {
                    console.log('Form submission successful:', response);

                    // Display success message using SweetAlert
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your form has been submitted',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    // Clear form fields after successful submission
                    $('#quickForm')[0].reset();

                    // date range picker
                    $('#reservation').daterangepicker({
                        locale: {
                            format: 'MM/DD/YYYY'
                        }
                    });
                },
                error: function (error) {
                    console.error('Form submission error:', error);

                    //  error message using SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Form submission failed. Please try again later.',
                    });
                }
            });
        }
    });
});

    </script>
</html>