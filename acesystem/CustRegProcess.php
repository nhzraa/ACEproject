<?php
session_start();

$custID = $_POST['custID'];
$custName = $_POST['custName'];
$custPhone = $_POST['custPhone'];
$custFax = $_POST['custFax'];
$custMail = $_POST['custMail'];
$custAddress = $_POST['custAddress'];
$custStatus = $_POST['custStatus'];

$dbc=mysqli_connect("localhost","root","","acesystem");
if (mysqli_connect_error())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();

}

$sql="INSERT INTO `customer` (`custID`, `custName`, `custPhone`, `custFax`, `custMail`, `custAddress`,`custStatus`) VALUES ('$custID', '$custName', '$custPhone', '$custFax', '$custMail', '$custAddress', '$custStatus')";

$results= mysqli_query($dbc,$sql); //to keep results query into $result
//$count=mysqli_num_rows($result); //to keep nos of rows in $count
//echo $sql;
if ($results)
{
	
	mysqli_commit($dbc);
	print '<script>alert("One Record Has Been Added");</script>';
	//header("location: home.php");//go to home.page
	print '<script>window.location.assign("custDetails.php");</script>';
	
}
else
 {

 	mysqli_rollback($dbc); // if data is an error in data entered
	print '<script>alert("Invalid Data! No Record Been Added.");</script>'; //display message box
	print '<script>window.location.assign("custDetails.php");</script>'; //go to frmaddgrp.php page
	}	

?>