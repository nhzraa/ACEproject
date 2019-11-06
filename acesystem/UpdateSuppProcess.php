<?php
	  session_start();
	  
	  $suppID = $_GET['suppID'];	  
	  $suppName = $_POST['suppName'];
	  $suppPhone = $_POST['suppPhone'];
	  $suppMail = $_POST['suppMail'];
	  $suppFax = $_POST['suppFax'];
	  $suppAdd = $_POST['suppAdd'];
	  
	  $dbc = mysqli_connect ("localhost", "root", "","acesystem");
	  if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
	  //"UPDATE MyGuests SET lastname='Doe' WHERE id=2";  
	  
	  $sql = "UPDATE supplier SET suppID='$suppID', suppName='$suppName', suppPhone='$suppPhone', suppMail='$suppMail', suppFax='$suppFax', suppAdd='$suppAdd' WHERE suppID='$suppID'";
	  
	  $result = mysqli_query($dbc, $sql);
	  if (false === $result) 
		{
		   echo mysql_error();
		  }
  
	  if($result==true) //success  
	  {
			  mysqli_commit($dbc);
			  Print '<script>alert("Record is successfully updated.");</script>'; 
			  Print '<script>window.location.assign("SearchSuppResult.php?search=&btnsearch=GO");</script>'; 
		  }
		  else //unsuccess  
		  {
			  mysqli_rollback($dbc);
  
			  Print '<script>alert("Error updating record");</script>'; 
			  Print '<script>window.location.assign("SearchSuppResult.php?search=&btnsearch=GO");</script>'; 		
		  }
  ?>