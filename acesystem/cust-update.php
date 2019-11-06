  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Update Customer Details</title>
  
<style>
.footer{
	background:#3B3B3B;
	text-align:center;
	color:#E4E4E4;
	padding-top:13px;
	padding-bottom:13px;
	
}
.linkfooter{
	color:#C4FBFF;
}

.linkfooter:hover{
	color:#6CF;
	text-decoration:underline;
}

.btn {
    border: none; /* Remove borders */
    color: white; /* Add a text color */
    padding: 14px 14px; /* Add some padding */
    cursor: pointer; /* Add a pointer cursor on mouse-over */
	border-radius:5px;
}

.update {background-color: #4CAF50;} /* Green */
.update:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.delete {
	background-color: #f44336;
	padding-top:8px;
	padding-bottom:15px;
	} /* Red */
.delete:hover {
	background: #da190b;
	padding-top:8px;
	padding-bottom:15px;
}

.default {background-color: #e7e7e7; color: black;} /* Gray */
.default:hover {background: #ddd;}

table {
    border-collapse: collapse;
	width:80%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
table, th, td {
   border: 2px solid #E1E1E1;
}

th{
	text-align: center;
	background-color: #3B3B3B;
    color: white;
	height:50px;
}

td{
	height: 50px;
	padding-left:5px;
	padding-right:5px;
}
tr:nth-child(even) {background-color: #f2f2f2}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	font-family:"Segoe UI";
	font-variant:small-caps;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active){
    background-color: #111;
}

li .dropdown:hover .dropbtn {
    background-color: #111;
	color: #fff;
}

.active {
    background-color: #59C5FF;
	color: #111
	
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.header{
	background-color:#FFFAD9;
}

.content{
	background-color:#FFF;
	margin-top:0;
    padding-top: 50px;
    padding-bottom: 0px;
}

h1,h2,h3,h4,h5,h6 {
	font-family: "Century Gothic","Segoe UI";
}
/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

body {
	background-color: #D5EAFF;
	font-family:"Segoe UI";
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.content2{
	background-color:#FFF;
	width:500px;
	height:600px;
	margin:50px auto;
	font:"Century Gothic";
	border-radius:10px;
	border:2px solid #ccc;
	padding:20px 40px 20px 40px;
	margin-top:70px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
</style>

  <meta charset="utf-8">
  </head>
  
  <body>
  <div class="header">
  <h1 align="center" class="animate">ACID CUBIC ENTERPRISE (NS-0080447-H)

  <h3 align="center" class="animate">NO 1 TINGKAT 1, BANGUNAN PKNNS<br>
    70400, SEREMBAN, NEGERI SEMBILAN</h3>
  <hr>
  
  </div>
  
  </head>
  
  <body>
  
  <div class="menu">
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="staffDetails.php">STAFF</a></li>
    <li><a href="supplierMenu.php">SUPPLIER</a></li>
    <li><a class="active" href="customerMenu.php">CUSTOMER</a></li>
    
  </ul>
  </div>
  
  <?php
       $custID = $_GET['custID'];
       
       $dbc = mysqli_connect ("localhost","root","","acesystem");
       if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
        }
        
        // $sql = "select * from `group` where `grpno` = 3";
       $sql = "select * from `customer` where `custID` like '%$custID%' ";
       $result = mysqli_query($dbc,$sql);
  
      // to display the details error
        
        if (false === $result) 
        {
           echo mysql_error();
          }
        
        $row = mysqli_fetch_assoc($result)
  ?>
      
  <div class="content">
   <div class="content2">
   
   <h2 align="center">UPDATE CUSTOMER DETAILS</h2>
  <form class="form-horizontal" action="UpdateCustProcess.php?custID=<?php echo $custID;?>" method="post">
  <div class="form-group">
  
    <fieldset disabled>
     <label for="custID">Customer ID:
     <input class="form-control" type="text" name="custID" value='<?=$row['custID'];?>' custID="custID" style="float:right"></label>
    </fieldset>
      <br><br>
      
      <label for="custName">Name:
     <input class="form-control" type="text" name="custName" value='<?=$row['custName'];?>' custName="custName" style="float:right"></label><br><br>
     
      <label for="custPhone" style="float:left">Phone<span style="color:red">*</span></label>
      <input name="custPhone" type="text" required class="form-control" style="float:right" value='<?=$row['custPhone'];?>' size="12" custPhone="custPhone"></label>
      <br><br>
      
      <label for="custFax" style="float:left">Fax<span style="color:red">*</span></label>
      <input name="custFax" type="text" required class="form-control" style="float:right" value='<?=$row['custFax'];?>' size="12" custFax="custFax"></label>
      <br><br>
      
      <label for="custMail" style="float:left">Email<span style="color:red">*</span></label>
      <input name="custMail" type="varchar" required class="form-control" style="float:right" value='<?=$row['custMail'];?>' size="45" custMail="custMail"></label>
      <br><br>
      
        <label for="custAddress" style="float:left">Address<span style="color:red">*</span></label>
        <textarea required class="form-control" name="custAddress" custAddress="custAddress" cols="35" style="float:right"><?php echo $row['custAddress'];?></textarea></label>
      <br><br>
      <br>
        <label for="custStatus" style="float:left">Status</label>
        <select name="custStatus" size="1" class="form-control" style="float:right" value='<?=$row['custStatus'];?>' custStatus="custStatus">
           <option value="GOVERNMENT SECTOR">GOVERNMENT SECTOR</option>
            <option value="PRIVATE SECTOR">PRIVATE SECTOR</option>
            <option value="OTHERS">OTHERS</option>
        
        </select>
        </label>
    <br><br>
  
    <br><br><br><br>
  <center><input type="submit" class="btn update" value="Update"><span>   <a href='SearchCustResult.php?search=&btnsearch=GO' class="btn delete">Cancel</a></span></center>
  </form>

 </div>
</div>
<div class="footer">
Copyright © 2017 Acid Cubic Enterprise<br>
</div>
  </body>
</html>
