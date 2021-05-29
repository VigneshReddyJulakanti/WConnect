<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('sql310.epizy.com', 'epiz_28667295', '8WHB0w5OG5','epiz_28667295_workersinfo');

// get the post records
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];




// database insert SQL code
$sql = "INSERT INTO `usersinfo` ( `username`, `password`, `name`) VALUES ( '$username', '$password','$name')";

// insert in database 
$rs = mysqli_query($con, $sql);

// if($rs)
// {
// 	echo "Contact Records Inserted";
// }

?>