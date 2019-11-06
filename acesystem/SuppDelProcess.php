<?php
	session_start();
	$suppID = $_GET['suppID'];
	//$name = $_POST['fprjname'];
	
	$dbc = mysqli_connect ("localhost", "root","","acesystem");
    
	if (mysqli_connect_errno())
      {
      	echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	  
	$sql = "DELETE FROM `supplier` WHERE `supplier`.`suppID` = '$suppID'";
	$result = mysqli_query($dbc, $sql);
	
	if($result) //success  
	{
			mysqli_commit($dbc);
			Print '<script>alert("Record is Successfuly Deleted.");</script>'; 
			Print '<script>window.location.assign("SearchSuppResult.php?search=&btnsearch=GO");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("Error in deleting record");</script>'; 
			Print '<script>window.location.assign("SearchSuppResult.php?search=&btnsearch=GO");</script>'; 		
		}
?>