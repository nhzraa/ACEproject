<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Retail Pricelist</title>


<!DOCTYPE html>
<html>
<head>

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
    padding: 12px 12px; /* Add some padding */
	padding-top:5px;
	padding-bottom:5px;
    cursor: pointer; /* Add a pointer cursor on mouse-over */
	
}

.update {background-color: #4CAF50;border-radius:5px;} /* Green */
.update:hover {background-color: #46a049;border-radius:5px;}

.info {background-color: #3B3B3B;} /* Blue */
.info:hover {background: #4C4C4C}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.delete {background-color: #f44336;border-radius:5px;} /* Red */
.delete:hover {background: #da190b;border-radius:5px;}

.default {background-color: #e7e7e7; color: black;} /* Gray */
.default:hover {background: #ddd;}

table {
    border-collapse: collapse;
	width:70%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
table, th, td {
   border: 1px solid #E1E1E1;
}

th{
	text-align: center;
	background-color: #3B3B3B;
    color: white;
	height:40px;
}

td{
	height: 40px;
	padding-left:3px;
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
	margin-top:0;
    padding-top: 50px;
    padding-bottom: 100px;
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
input[type=submit]{
	width:40px;
	height:25px;
	background-color:#59A4FF;
	color:#fff;
	border:none;
	padding-top:5px;
	padding-bottom:5px;
	font-size:10px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:15px;
}
input[type=submit]:hover{
	width:40px;
	height:25px;
	background-color:#6085DD
	color:#fff;
	border:none;
	padding-top:5px;
	padding-bottom:5px;
	font-size:10px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:15px;
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
  <h3 align="center"><span style="padding-center:250px">RETAIL PRICELIST</span></h3>

<h4 align="left"><span style="float:left"><span style="padding-left:150px"><a href="customerMenu.php" class="btn info">BACK TO CUSTOMER MENU</a></span></span></h4>
   
<h4 align="right"><span style="float:right"><span style="padding-right:150px"><a href="addRP.php" class="btn info">+ ADD ITEMS</a></span></span></h4>


<br>
<br>
<form action="searchRP.php" method="get" style="float:right; padding-right:150px">
<span>Search Items: </span>
<input name="search" type="text" placeholder="name of goods (pen, etc)"> 
  <input name="btnsearch" type="submit" value="GO"></form>
<br>
<br>

<table width="73%" class="table" align="center" >
      <tr>
        <th width="19">ID</th>
        <th width="77">ITEMS</th>
        <th width="16">QUANTITY</th>
        <th width="41">UOM</th>
        <th width="75">SUPPLIER</th>
        <th width="60">RETAIL PRICE (RM)</th>
        <th width="75">LAST UPDATED</th>
    </tr>
    <?php
	date_default_timezone_set('UTC');
	
	$dbc = mysqli_connect ("localhost", "root", "", "acesystem");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "SELECT * from items";

    $result = mysqli_query($dbc, $sql);
	
    $buffer=0;
    
	while($row = mysqli_fetch_assoc($result))
	{
      
        Print '<tr>
				  <td><center>'.$row['itemsID'].'</center></td>
                  <td>'.$row['itemsName'].'</td>
                  <td><center>'.$row['itemsQuantity'].'</center></td>
                  <td><center>'.$row['itemsUOM'].'</center></td>
				  <td><center>'.$row['suppID'].'</center></td>
				  <td><center>'.$row['itemsRetail'].'</center></td>
				  <td><center>'.$row['itemsDate'].'</center></td>
				  </tr>';
      }

   
    ?>
  </table>
</div>
<div class="footer">
Copyright © 2017 Acid Cubic Enterprise</div>
</body>
</html>