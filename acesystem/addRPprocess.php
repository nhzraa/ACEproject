<?php
session_start();

$itemsID = $_POST['itemsID'];
$itemsName = $_POST['itemsName'];
$itemsQuantity = $_POST['itemsQuantity'];
$itemsUOM = $_POST['itemsUOM'];
$suppID = $_POST['suppID'];
$itemsRetail = $_POST['itemsRetail'];

$dbc=mysqli_connect("localhost","root","","acesystem");
if (mysqli_connect_error())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();

}

$sql="INSERT INTO `items` (`itemsID`, `itemsName`, `itemsQuantity`, `itemsUOM`, `suppID`, `itemsRetail`) VALUES ('$itemsID', '$itemsName', '$itemsQuantity', '$itemsUOM', (select suppID from supplier where suppID='$suppID'), '$itemsRetail')";

$results= mysqli_query($dbc,$sql); //to keep results query into $result
//$count=mysqli_num_rows($result); //to keep nos of rows in $count
//echo $sql;
if ($results)
{
	
	mysqli_commit($dbc);
	print '<script>alert("One Record Has Been Added");</script>';
	//header("location: home.php");//go to home.page
	print '<script>window.location.assign("custRP.php");</script>';
	
}
else
 {

 	mysqli_rollback($dbc); // if data is an error in data entered
	print '<script>alert("Invalid Data! No Record Been Added.");</script>'; //display message box
	print '<script>window.location.assign("custRP.php");</script>'; //go to frmaddgrp.php page
	}	

?>