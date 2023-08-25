<?php
include 'connections.php';

// echo "<pre>";
// print_r($GLOBALS);
// echo "</pre>";


$emp_name = $_POST['name'];
$emp_id = $_POST['empid'];
$emp_dob = $_POST['dob'];
$emp_gender = $_POST['customRadio'];
$employee_email = $_POST['email'];
$employee_mob = $_POST['number'];
$employee_address = $_POST['address'];
$employee_position = $_POST['position'];
$employee_doj = $_POST['doj'];
$employee_salary = $_POST['salary'];
$emergency_name = $_POST['emgname'];
$emergency_rltn = $_POST['emgrltn'];
$emergency_contact = $_POST['emgno'];
$bankname = $_POST['bankname'];
$bankaccno = $_POST['bankacc'];
$bankacctype = $_POST['bankacctype'];

   echo $sql = "update emp_info set   
    emp_name= '$emp_name',
    emp_dob= '$emp_dob', 
    emp_gender= '$emp_gender',
    emp_email= '$employee_email',
    emp_mob= '$employee_mob',
    emp_address= '$employee_address',
    emp_position= '$employee_position',
    emp_doj= '$employee_doj',
    emp_salary= '$employee_salary',
    emg_name= '$emergency_name',
    emg_rltn= '$emergency_rltn',
    emg_contact= '$emergency_contact',
    bank_name= '$bankname',
    bank_accno= '$bankaccno',
    bank_acctype= '$bankacctype' WHERE emp_id = $emp_id" ;

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script> alert('Data Updated successfully') </script>";
        header('location:employee_list.php');
    } else {
        die(mysqli_error($con));
    }
?>

