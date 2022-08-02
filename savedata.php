<?php
include'connect.php';
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sphone = $_POST['sphone'];

$query = "INSERT INTO `student`(`Name`, `Address`, `Phone`) VALUES ('$sname','$saddress','$sphone')";
$sql = mysqli_query($con,$query)or die('Your Data Not Inseert Check the DATABASE FILED..!');

?>