<?php
//database connection code
//$con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost','root','','db_connect');

// get the post records
$txtCustomerID = $_POST['txtCustomerID'];
$txtName = $_POST['txtName'];
$txtEmailID = $_POST['txtEmailID'];
$txtTransfermoney = $_POST['txtTransfermoney'];

// database insert SQL code
$indata = "INSERT INTO `tranfer`(`CustomerID`, `Name`, `EmailID`, `Transfermoney`) VALUES ([$txtCustomerID],[$txtName],[$txtEmailID],[$txtTransfermoney])";

// insert in database 
$rs = mysqli_query($con, $indata);
if($rs)
{
	echo "Transfermoney Details";
}
?>