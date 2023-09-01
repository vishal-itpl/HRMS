<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Velocity | Leave Application</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php include './css/style.php'; ?>



</head>

<body>
    <div class="content-wrapper">
        <?php include 'nav-bar.php'; ?>
        <?php include 'side-bar.php'; ?>
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
                            <!-- form start -->
                            <form id="quickForm" method="POST">
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
                                            <input type="text" class="form-control float-right" id="reservation"
                                                name="reservation">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>&nbsp;<i class="fa-solid fa-asterisk fa-2xs"
                                            style="color: #ff0000;"></i>
                                        <textarea name="desc" class="form-control" rows="2"
                                            placeholder="Enter Description here..." minlength="25" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success" id="submitButton">
                                        Submit
                                    </button>
                                </div>
                                <?php
                                include 'connections.php';

                                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                    $selectedDates = explode(" - ", $_POST["reservation"]);
                                    $fromDate = date("Y-m-d", strtotime($selectedDates[0]));
                                    $toDate = date("Y-m-d", strtotime($selectedDates[1]));
                                    $leaveType = $_POST["leave"];
                                    $description = mysqli_real_escape_string($con, $_POST["desc"]);

                                    $sql = "SELECT emp_id FROM emp_info";
                                    $result = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        $empId = $row['emp_id'];

                                        $query = "INSERT INTO leave_application (emp_id, leave_type, from_date, to_date, description) 
                  VALUES ('$empId', '$leaveType', '$fromDate', '$toDate', '$description')";

                                        if (mysqli_query($con, $query)) {
                                            // Form data inserted successfully, you can redirect or show a message here.
                                            // Example: header("Location: success.php"); // Redirect to a success page
                                            echo "Form data inserted successfully!";
                                        } else {
                                            echo "Error inserting form data: " . mysqli_error($con);
                                        }
                                    } else {
                                        echo "No record found";
                                    }

                                    // Close the database connection
                                    mysqli_close($con);
                                }
                                ?>

                                <!-- Your HTML code continues here... -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include './js/js.php'; ?>
    </div>

    <script>
        $(document).ready(function () {
            // Date range picker
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
                    // Form is valid, submit it
                    $.ajax({
                        type: 'POST',
                        url: 'try.php', // Replace with your form submission URL
                        data: $('#quickForm').serialize(),
                        success: function (response) {
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
                        },
                        error: function (error) {
                            // Display an error message using SweetAlert
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
</body>

</html>