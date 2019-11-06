 <?php
	  session_start();
	  
	  $custID = $_GET['custID'];
	  $custName = $_POST['custName'];
	  $custPhone = $_POST['custPhone'];
	  $custFax = $_POST['custFax'];
	  $custMail = $_POST['custMail'];
	  $custAddress = $_POST['custAddress'];
	  $custStatus = $_POST['custStatus'];
	  
	  $dbc = mysqli_connect ("localhost", "root", "","acesystem");
	  if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
	  //"UPDATE MyGuests SET lastname='Doe' WHERE id=2";  
	  
	  $sql = "UPDATE customer SET custID='$custID', custName='$custName', custPhone='$custPhone', custFax='$custFax', custMail='$custMail', custAddress='$custAddress', custStatus='$custStatus' WHERE custID='$custID'";
	  
	  $result = mysqli_query($dbc, $sql);
	  if (false === $result) 
		{
		   echo mysql_error();
		  }
  
	  if($result==true) //success  
	  {
			  mysqli_commit($dbc);
			  Print '<script>alert("Record is successfully updated.");</script>'; 
			  Print '<script>window.location.assign("SearchCustResult.php?search=&btnsearch=GO");</script>'; 
		  }
		  else //unsuccess  
		  {
			  mysqli_rollback($dbc);
  
			  Print '<script>alert("Error updating record");</script>'; 
			  Print '<script>window.location.assign("SearchCustResult.php?search=&btnsearch=GO");</script>'; 		
		  }
  ?>