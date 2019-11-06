<?php
	session_start();
	$adminID = $_GET['adminID'];
	//$name = $_POST['fprjname'];
	
	$dbc = mysqli_connect ("localhost", "root","","acesystem");
    
	if (mysqli_connect_errno())
      {
      	echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	  
	$sql = "DELETE FROM `admin` WHERE `admin`.`adminID` = '$adminID'";
	$result = mysqli_query($dbc, $sql);
	
	if($result) //success  
	{
			mysqli_commit($dbc);
			Print '<script>alert("Record is Successfuly Deleted.");</script>'; 
			Print '<script>window.location.assign("searchresult.php?search=&btnsearch=GO");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("Error in deleting record");</script>'; 
			Print '<script>window.location.assign("searchresult.php?search=&btnsearch=GO");</script>'; 		
		}
?>