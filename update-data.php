<?php
include 'connections.php';

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";


    echo $employee_name = $_POST['name'];
    echo $employee_ID = $_POST['empid'];
    echo $employee_dob = $_POST['dob'];
    echo $employee_gender = $_POST['customRadio'];
    echo $employee_email = $_POST['email'];
    echo $employee_mob = $_POST['number'];
    echo $employee_password = md5($_POST['password']);
    echo $employee_cpassword = md5($_POST['confirm_password']);
    // echo $employee_password = $_POST['password'];
    // echo $employee_cpassword = $_POST['confirm_password'];
    echo $employee_address = $_POST['address'];
    echo $employee_position = $_POST['position'];
    echo $employee_doj = $_POST['doj'];
    echo $employee_salary = $_POST['salary'];
    echo $emergency_name = $_POST['emgname'];
    echo $emergency_rltn = $_POST['emgrltn'];
    echo $emergency_contact = $_POST['emgno'];
    echo $bankname = $_POST['bankname'];
    echo $bankaccno = $_POST['bankacc'];
    echo $bankacctype = $_POST['bankacctype'];

    $sql = "update emp_info set name= '$employee_name', 
    empid= '$employee_ID', 
    dob= '$employee_dob', 
    customRadio= '$employee_gender',
    email= '$employee_email',
    number= '$employee_mob',
    password= '$employee_password',
    confirm_password= '$employee_cpassword',
    address= '$employee_address',
    position= '$employee_position',
    doj= '$employee_doj',
    salary= '$employee_salary',
    emgname= '$emergency_name',
    emgrltn= '$emergency_rltn',
    emgno= '$emergency_contact',
    bankname= '$bankname',
    bankacc= '$bankaccno',
    bankacctype= '$bankacctype'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script> alert('Data Updated successfully') </script>";
        // header('location:employee_list.php');
    } else {
        die(mysqli_error($con));
    }



?>