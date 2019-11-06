<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Goods</title>

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
    padding: 12px 14px;
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
	margin-top:-18px;
    padding: 0;
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
	font-size:13px;
}

.welcome1{
	font-size:20px;
	float:right;
	padding-right:20px;
	padding-top:20px;
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
.logoutlink{
	color:#3D83ED;
}
.logoutlink:hover{
	color:#60AFFF;
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

<div class="content">
  <div class="content2">
  <h2 align="center">NEW ITEMS</h2>
  <form name="form1" method="post" action="ItemsRegProcess.php" style="text-align:center">
    <p>&nbsp;</p>
    <p>&nbsp;    </p>
    
    <label for="itemsID" style="float:left">Items ID<span style="color:red">*</span></label>
     <input name="itemsID" type="varchar" style="float:right" size="8" required >
     <p>&nbsp;    </p>
     
    <label for="itemsName" style="float:left">Name<span style="color:red">*</span></label>
    <input name="itemsName" type="text" style="float:right" size="50" required >
    <p>&nbsp;    </p>
    
    <label for="itemsQuantity" style="float:left">Quantity<span style="color:red">*</span></label>
     <input name="itemsQuantity" type="int" value="1" style="float:right" size="12" required>
     <p>&nbsp;    </p>
     
     <label for="itemsUOM" style="float:left">UOM<span style="color:red">*</span></label>
     <input name="itemsUOM" type="varchar" style="float:right" size="12" required >
     <p>&nbsp;    </p>
    
    <label for="suppID" style="float:left">Supplier ID<span style="color:red">*</span></label>
    
    <?php
    $dbc = mysqli_connect ("localhost", "root", "", "acesystem");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    

    $sql = "select suppID from `supplier` order by suppID asc";

    $result = mysqli_query($dbc, $sql);
	
echo '<select name="Supplier ID">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysqli_fetch_assoc($result)) 
{
   echo '<option value="'.$row['suppID'].'">'.$row['suppID'].'</option>';
}

echo '</select>';// Close your drop down box
	?>
    
     <p>&nbsp;    </p>
     
    <label for="itemsRetail" style="float:left">Retail Price<span style="color:red">*</span></label>
     <input name="itemsRetail" type="varchar" value="RM " style="float:right" size="50" required >
     <p>&nbsp;    </p>
     
    <input name="btnsubmit" type="submit" class="btn info" value="SUBMIT"><span>   <a href='custRP.php' class="btn delete">Cancel</a></span></center>
    </form>
  </div>
</div>
<div class="footer">
Copyright © 2017 Acid Cubic Enterprise
</div>
<br><br>
</body>
</html>
