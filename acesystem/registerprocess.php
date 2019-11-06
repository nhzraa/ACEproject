<?php
session_start();

$adminID = $_POST['adminID'];
$adminName = $_POST['adminName'];
$adminPhone = $_POST['adminPhone'];
$adminEmail = $_POST['adminEmail'];
$adminAddress = $_POST['adminAddress'];
$adminPosition = $_POST['adminPosition'];
$adminStatus = $_POST['adminStatus'];

$dbc=mysqli_connect("localhost","root","","acesystem");
if (mysqli_connect_error())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();

}

$sql="INSERT INTO `admin` (`adminID`, `adminName`, `adminPhone`, `adminEmail`, `adminAddress`, `adminPosition`, `adminStatus`) VALUES ('$adminID', '$adminName', '$adminPhone', '$adminEmail', '$adminAddress', '$adminPosition', '$adminStatus')";

$results= mysqli_query($dbc,$sql); //to keep results query into $result
//$count=mysqli_num_rows($result); //to keep nos of rows in $count
//echo $sql;
if ($results)
{
	
	mysqli_commit($dbc);
	print '<script>alert("One Record Has Been Added");</script>';
	//header("location: home.php");//go to home.page
	print '<script>window.location.assign("staffDetails.php");</script>';
	
}
else
 {

 	mysqli_rollback($dbc); // if data is an error in data entered
	print '<script>alert("Invalid Data! No Record Been Added.");</script>'; //display message box
	print '<script>window.location.assign("staffDetails.php");</script>'; //go to frmaddgrp.php page
	}	

?>