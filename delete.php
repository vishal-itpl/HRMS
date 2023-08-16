<?php
include 'connections.php';
if (isset($_POST['deleteid'])) {
    $employee_ID = $_POST['deleteid'];

    $sql = "Delete From emp_info where id= $employee_ID";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Deleted Successfully!!";
    } else {
        die(mysqli_error($con));
    }
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Step 1: Get the ID of the record to be deleted.
    $sql = "SELECT * FROM emp_info WHERE ID = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Step 2: Delete the record from the database.
    $sql = "DELETE FROM emp-info WHERE ID = $id";
    mysqli_query($conn, $sql);

    // Step 3: Select all records from the table with IDs greater than the deleted record's ID.
    $sql = "SELECT * FROM emp-info WHERE ID > $id";
    $result = mysqli_query($conn, $sql);

    // Step 4: Decrement the IDs of each selected record by 1.
    while ($row = mysqli_fetch_assoc($result)) {
        $new_id = $row['ID'] - 1;

        // Step 5: Update the IDs of the selected records in the database.
        $sql = "UPDATE emp-info SET ID = $new_id WHERE ID = " . $row['ID'];
        mysqli_query($conn, $sql);
    }
}

header("location:employee_info.php");

mysqli_close($conn);
?>