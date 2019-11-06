<?php
session_start();

$itemsID = $_GET['itemsID'];
$itemsName = $_POST['itemsName'];
$itemsQuantity = $_POST['itemsQuantity'];
$itemsUOM = $_POST['itemsUOM'];
$suppID = $_POST['suppID'];
$itemsPPU = $_POST['itemsPPU'];
$itemsDisc = $_POST['itemsDisc'];
$itemsCost = $_POST['itemsCost'];
$itemsMarkup = $_POST['itemsMarkup'];

$finalPrice=($itemsMarkup/100*$itemsCost) + $itemsCost;                        
$itemsRetail = $finalPrice;

$dbc=mysqli_connect("localhost","root","","acesystem");
if (mysqli_connect_error())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();

}

$sql = "UPDATE items SET itemsID='$itemsID', itemsName='$itemsName', itemsQuantity='$itemsQuantity', itemsUOM='$itemsUOM', suppID='$suppID', itemsPPU='$itemsPPU', itemsDisc='$itemsDisc', itemsCost='$itemsCost', itemsMarkup='$itemsMarkup', itemsRetail='$itemsRetail' WHERE itemsID='$itemsID'";

$result = mysqli_query($dbc, $sql);
	  if (false === $result) 
		{
		   echo mysql_error();
		  }
  
	  if($result==true) //success  
	  {
			  mysqli_commit($dbc);
			  Print '<script>alert("Record is successfully updated.");</script>'; 
			  Print '<script>window.location.assign("searchPL.php?search=&btnsearch=GO");</script>'; 
		  }
		  else //unsuccess  
		  {
			  mysqli_rollback($dbc);
  
			  Print '<script>alert("Error updating record");</script>'; 
			  Print '<script>window.location.assign("searchPL.php?search=&btnsearch=GO");</script>'; 		
		  }
  ?>