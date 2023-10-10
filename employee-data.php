<?php
include 'connections.php';

// echo "<pre>";
// print_r($GLOBALS);
// echo "</pre>";

if (isset($_POST['submit'])) {
    echo $employee_name = $_POST['name'];
    // echo $employee_ID = $_POST['empid'];
    echo $employee_dob = $_POST['dob'];
    echo $employee_gender = $_POST['customRadio'];
    echo $employee_email = $_POST['email'];
    echo $employee_mob = $_POST['number'];
    echo $employee_password = md5($_POST['password']);
    echo $employee_cpassword = md5($_POST['confirm_password']);
    // echo $employee_password = $_POST['password'];
    // echo $employee_cpassword = $_POST['confirm_password'];
    echo $employee_address = $_POST['address'];
    echo $employee_role = $_POST['role'];
    echo $employee_position = $_POST['position'];
    echo $employee_doj = $_POST['doj'];
    echo $employee_salary = $_POST['salary'];
    echo $emergency_name = $_POST['emgname'];
    echo $emergency_rltn = $_POST['emgrltn'];
    echo $emergency_contact = $_POST['emgno'];
    echo $bankname = $_POST['bankname'];
    echo $bankaccno = $_POST['bankacc'];
    echo $bankacctype = $_POST['bankacctype'];


    $sql = "insert into emp_info (emp_name,emp_dob,emp_gender,emp_email,emp_mob,password,c_password,emp_address,emp_role,emp_position,emp_doj,emp_salary,emg_name,emg_rltn,emg_contact,bank_name,bank_accno,bank_acctype) values('$employee_name','$employee_dob','$employee_gender','$employee_email','$employee_mob','$employee_password','$employee_cpassword','$employee_address','$employee_role','$employee_position','$employee_doj','$employee_salary','$emergency_name','$emergency_rltn','$emergency_contact','$bankname','$bankaccno','$bankacctype')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script> alert('Data inserted successfully') </script>";
        header('location:employee_list.php');
    } else {
        die(mysqli_error($con));
    }
}
?>