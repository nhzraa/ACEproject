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
	width:90%;
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
	height:70px;
}

td{
	height: 50px;
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

h1{
	font-size: 
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
<title>Acid Cubic Enterprise</title>
</head>

<body>
<div class="header">
<h1 align="center" class="animate">ACID CUBIC ENTERPRISE (NS-0080447-H)
</h1>
<h3 align="center" class="animate">NO 1 TINGKAT 1, BANGUNAN PKNNS<br>
  70400, SEREMBAN, NEGERI SEMBILAN</h3>
<hr>

</div>


<div class="menu">
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="staffDetails.php">STAFF</a></li>
  <li><a href="supplierMenu.php">SUPPLIER</a></li>
  <li><a href="customerMenu.php">CUSTOMER</a></li>
</ul>
</div>

<div class="content">

<h1 align="center">&nbsp;</h1>
<h1 align="center"><strong>Acid Cubic Enterprise</strong></h1>
<p align="center">GST No: 000652173312</p>
</div>
<div class="footer">
Copyright © 2017 Acid Cubic Enterprise</div>
</body>
</html>