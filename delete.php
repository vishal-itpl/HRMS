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