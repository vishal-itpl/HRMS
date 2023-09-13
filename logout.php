<?php
session_start();
unset($_SESSION['emp_role']);
unset($_SESSION['emp_email']);
unset($_SESSION['is_login']);
header('Location:login1.php');
?>