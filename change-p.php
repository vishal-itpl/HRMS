<?php
session_start();
$eid = $_SESSION['eid'];
$erole = $_SESSION['emp_role'];
if (!isset($_SESSION['is_login'])) {
    header('Location:login1.php');
    die();
} {

	include "connections.php";

	if (
		isset($_POST['op']) && isset($_POST['np'])
		&& isset($_POST['c_np'])
	) {

		function validate($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$op = validate($_POST['op']);
		$np = validate($_POST['np']);
		$c_np = validate($_POST['c_np']);

		if (empty($op)) {
			header("Location: changepw.php?error=Old Password is required");
			exit();
		} else if (empty($np)) {
			header("Location: changepw.php?error=New Password is required");
			exit();
		} else if ($np !== $c_np) {
			header("Location: changepw.php?error=The confirmation password  does not match");
			exit();
		} else {
			// hashing the password
			$op = md5($op);
			$np = md5($np);
			$id = $_SESSION['id'];

			$sql = "SELECT password
                FROM emp_info WHERE 
                id='$id' AND password='$op'";
			$result = mysqli_query($con, $sql);
			if (mysqli_num_rows($result) === 1) {

				$sql_2 = "UPDATE emp_info
        	          SET password='$np'
        	          WHERE id='$id'";
				mysqli_query($con, $sql_2);
				header("Location: changepw.php?success=Your password has been changed successfully");
				exit();

			} else {
				header("Location: changepw.php?error=Incorrect password");
				exit();
			}

		}


	} else {
		header("Location: changepw.php");
		exit();
	}
	} 
	// else {
// 	header("Location: index.php");
// 	exit();
// }