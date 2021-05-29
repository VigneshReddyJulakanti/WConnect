<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('sql310.epizy.com', 'epiz_28667295', '8WHB0w5OG5','epiz_28667295_workersinfo');

// get the post records
$fullName = $_POST['fullName'];
$workPlace = $_POST['workPlace'];
$district = $_POST['district'];
$state = $_POST['state'];
$phoneNo1 = $_POST['phoneNo1'];
$phoneNo2 = $_POST['phoneNo2'];
$worksector = $_POST['worksector'];
$costPerHour = $_POST['costPerHour'];


// database insert SQL code
$sql = "INSERT INTO `workersdetails` ( `fullName`, `workPlace`, `district`, `state`, `phoneNo1`, `phoneNo2`, `worksector`, `costPerHour`) VALUES ( '$fullName', '$workPlace', '$district', '$state', '$phoneNo1', '$phoneNo2', '$worksector', '$costPerHour')";

// insert in database 
$rs = mysqli_query($con, $sql);

// if($rs)
// {
// 	echo "Contact Records Inserted";
// }

?>