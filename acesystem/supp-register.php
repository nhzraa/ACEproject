<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Supplier</title>

<style>
.footer{
	background:#3B3B3B;
	text-align:center;
	color:#E4E4E4;
	padding-top:15px;
	padding-bottom:15px;
	
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
    padding: 5px 5px 5px 5px; /* Add some padding */
    cursor: pointer; /* Add a pointer cursor on mouse-over */
	height:30px;
	width:100px;
	font-family:"Segoe UI";
	border-radius:5px;
}

.update {background-color: #4CAF50;} /* Green */
.update:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;color:#FFF;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.delete {background-color: #f44336;} /* Red */
.delete:hover {background: #da190b;}

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
	color:#FFF;
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
	font-family: "Segoe UI";
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
	height:500px;
	margin:50px auto;
	font:"Segoe UI";
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

<div class="content">
  <div class="content2">
  <h2 align="center">NEW SUPPLIER REGISTRATION  </h2>
  <form name="form1" method="post" action="SuppRegisterProcess.php" style="text-align:center">
    <p>&nbsp;</p>
    <p>
      <label for="suppID" style="float:left">Supplier ID<span style="color:red">*</span></label>
      <input name="suppID" type="varchar" style="float:right" size="12" required >
    </p>
    <p>&nbsp;    </p>
     
     <label for="suppName" style="float:left">Name<span style="color:red">*</span></label>
    <input name="suppName" type="varchar" style="float:right" size="45" required >
    <p>&nbsp;    </p>
    
    <label for="suppPhone" style="float:left">Phone<span style="color:red">*</span></label>
     <input name="suppPhone" type="varchar" style="float:right" size="14" required >
     <p>&nbsp;    </p>
     
      <label for="suppFax" style="float:left">Fax<span style="color:red">*</span></label>
     <input name="suppFax" type="varchar" style="float:right" size="14" required >
     <p>&nbsp;    </p>
     
    <label for="suppMail" style="float:left">Email<span style="color:red">*</span></label>
     <input name="suppMail" type="varchar" style="float:right" size="45" required >
     <p>&nbsp;    </p>
     
    <label for="suppAdd" style="float:left">Address<span style="color:red">*</span></label>
    <textarea name="suppAdd" cols="40" style="float:right" required></textarea>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
    <input name="btnsubmit" type="submit" class="btn info" value="SUBMIT"><span>   <a href='suppDetails.php' class="btn delete">Cancel</a></span></center>
    </form>
  </div>
</div>
<div class="footer">
Copyright © 2017 Acid Cubic Enterprise<br>
</div>
</body>
</html>
