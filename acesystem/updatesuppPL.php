<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Supplier Pricelist</title>

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
  <li><a class="active" href="supplierMenu.php">SUPPLIER</a></li>
  <li><a href="customerMenu.php">CUSTOMER</a></li>
</ul>
</div>

<?php
       $itemsID = $_GET['itemsID'];
       
       $dbc = mysqli_connect ("localhost","root","","acesystem");
       if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
        }
        
        // $sql = "select * from `group` where `grpno` = 3";
       $sql = "select * from `items` where `itemsID` like '%$itemsID%' ";
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
  <h2 align="center">UPDATE PRICELIST (ITEMS)</h2>
  <form class="form-horizontal" action="updatePLprocess.php?itemsID=<?php echo $itemsID;?>" method="post">
  <div class="form-group">
    
    <fieldset disabled="disabled">
    <label for="supplierID" style="float:left">
      <div align="left">Supplier ID<span style="color:red">*</span></div>
    </label>
    
    
    <div align="right">
      <?php
$dbc = mysqli_connect ("localhost", "root", "", "acesystem");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }


    $result = mysqli_query($dbc, $sql);

?>
      <select name="suppID">
        <?php
while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) 
{
?>
        <option value="<?php echo $line['suppID'];?>"> <?php echo $line['suppID'];?> </option>
        <?php
}
?>
      </select>
      
      
    </div>
    <p>
     
    
    <label for="itemsID" style="float:left">Items ID<span style="color:red">*</span></label>
     <input name="itemsID" type="varchar" style="float:right" required class="form-control" value='<?=$row['itemsID'];?>' size="8" itemsID="itemsID"></label>
     
    </fieldset>
      <br><br>
      
    <label for="itemsName" style="float:left">Name<span style="color:red">*</span></label>
    <input class="form-control" name="itemsName" type="text" value='<?=$row['itemsName'];?>' itemsName="itemsName" style="float:right" size="50" required >
    <p>&nbsp;    </p>
    
    <label for="itemsQuantity" style="float:left">Quantity<span style="color:red">*</span></label>
     <input name="itemsQuantity" type="int" value='<?=$row['itemsQuantity'];?>' itemsQuantity="itemsQuantity" style="float:right" size="12" required>
     <p>&nbsp;    </p>
     
     <label for="itemsUOM" style="float:left">UOM<span style="color:red">*</span></label>
     <input name="itemsUOM" type="varchar" value='<?=$row['itemsUOM'];?>' itemsUOM="itemsUOM" style="float:right" size="12" required >
     <p>&nbsp;    </p>
    
    
      
      <label for="itemsPPU" style="float:left">Price per Unit (RM)<span style="color:red">*</span></label>
      
      <input name="itemsPPU" type="decimal" style="float:right" value='<?=$row['itemsPPU'];?>' itemsPPU="itemsPPU" required><p>&nbsp;    </p>
     
     <label for="itemsDisc" style="float:left">Discount (%)<span style="color:red">*</span></label>
     <input name="itemsDisc" type="decimal" value='<?=$row['itemsDisc'];?>' itemsDisc="itemsDisc" style="float:right" required>
     <p>&nbsp;    </p>
     
     <label for="itemsCost" style="float:left">Cost Price (RM)<span style="color:red">*</span></label>
     <input name="itemsCost" type="decimal" value='<?=$row['itemsCost'];?>' itemsCost="itemsCost" style="float:right" required>
     <p>&nbsp;    </p>
     
     <label for="itemsMarkup" style="float:left">Markup (%)<span style="color:red">*</span></label>
     <input name="itemsMarkup" type="decimal" value='<?=$row['itemsMarkup'];?>' itemsMarkup="itemsMarkup" style="float:right" required>
     <p>&nbsp;    </p>
     
     <center>
       <p>&nbsp;         </p>
       <p>
         <input name="btnsubmit" type="submit" class="btn info" value="SUBMIT">
         <span>   <a href='suppPL.php' class="btn delete">Cancel</a></span></p>
     </center>
     <p>&nbsp;</p>
  </form>
    
  </div>
</div>
<div class="footer">
Copyright © 2017 Acid Cubic Enterprise<br>
</div>
</body>
</html>
