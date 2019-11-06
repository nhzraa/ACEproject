  <?php
	  session_start();
	  
	  $adminID = $_GET['adminID'];
	  $adminName = $_POST['adminName'];
	  $adminPhone = $_POST['adminPhone'];
	  $adminEmail = $_POST['adminEmail'];
	  $adminAddress = $_POST['adminAddress'];
	  $adminPosition = $_POST['adminPosition'];
	  $adminStatus = $_POST['adminStatus'];
	  
	  $dbc = mysqli_connect ("localhost", "root", "","acesystem");
	  if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
	  //"UPDATE MyGuests SET lastname='Doe' WHERE id=2";  
	  
	  $sql = "UPDATE admin SET adminID='$adminID', adminName='$adminName', adminPhone='$adminPhone', adminEmail='$adminEmail', adminAddress='$adminAddress', adminPosition='$adminPosition', adminStatus='$adminStatus' WHERE adminID='$adminID'";
	  
	  $result = mysqli_query($dbc, $sql);
	  if (false === $result) 
		{
		   echo mysql_error();
		  }
  
	  if($result==true) //success  
	  {
			  mysqli_commit($dbc);
			  Print '<script>alert("Record is successfully updated.");</script>'; 
			  Print '<script>window.location.assign("searchresult.php?search=&btnsearch=GO");</script>'; 
		  }
		  else //unsuccess  
		  {
			  mysqli_rollback($dbc);
  
			  Print '<script>alert("Error updating record");</script>'; 
			  Print '<script>window.location.assign("searchresult.php?search=&btnsearch=GO");</script>'; 		
		  }
  ?>