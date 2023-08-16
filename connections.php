<?php 
$con=new mysqli('localhost','root','','hrms');

if($con){
    echo"";
}else{
    die(mysqli_error($con));
}
?>