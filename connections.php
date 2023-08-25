<?php 
$con=new mysqli('localhost','root','','hrms');

if($con){
    echo"Connection Successfull";
}else{
    die(mysqli_error($con));
}
?>