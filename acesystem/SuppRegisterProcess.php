<?php
session_start();

$suppID = $_POST['suppID'];
$suppName = $_POST['suppName'];
$suppPhone = $_POST['suppPhone'];
$suppMail = $_POST['suppMail'];
$suppFax = $_POST['suppFax'];
$suppAdd = $_POST['suppAdd'];

$dbc=mysqli_connect("localhost","root","","acesystem");
if (mysqli_connect_error())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();

}

$sql="INSERT INTO `supplier` (`suppID`, `suppName`, `suppPhone`, `suppMail`, `suppFax`, `suppAdd`) VALUES ('$suppID', '$suppName', '$suppPhone', '$suppMail', '$suppFax', '$suppAdd')";

$results= mysqli_query($dbc,$sql); //to keep results query into $result
//$count=mysqli_num_rows($result); //to keep nos of rows in $count
//echo $sql;
if ($results)
{
	
	mysqli_commit($dbc);
	print '<script>alert("One Record Has Been Added");</script>';
	//header("location: home.php");//go to home.page
	print '<script>window.location.assign("suppDetails.php");</script>';
	
}
else
 {

 	mysqli_rollback($dbc); // if data is an error in data entered
	print '<script>alert("Invalid Data! No Record Been Added.");</script>'; //display message box
	print '<script>window.location.assign("suppDetails.php");</script>'; //go to frmaddgrp.php page
	}	

?>