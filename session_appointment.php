<?php	//store's appointment info in session's variable
session_start();
?>
<html>
<head>
<title>Patient's enquiry</title>
<link rel="stylesheet" href="css/homepage.css" type="text/css">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<style>
.parallax {
    /* The image used */
    background-image: url("images/1.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
@import url(http://fonts.googleapis.com/css?family=Raleway);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu {
  width: auto;
  border-bottom: 3px solid #47c9af;
  font-family: Raleway, sans-serif;
  line-height: 1;
}
#cssmenu ul {
  background: #ffffff;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu.align-right > ul > li > a {
  margin-right: 0;
  margin-left: -4px;
}
#cssmenu > ul > li > a {
  z-index: 2;
  padding: 18px 25px 12px 25px;
  font-size: 15px;
  font-weight: 400;
  text-decoration: none;
  color: #444444;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  margin-right: -4px;
}
#cssmenu > ul > li.active > a,
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li > a:hover {
  color: #ffffff;
}
#cssmenu > ul > li > a:after {
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
  width: 100%;
  height: 120%;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  content: "";
  -webkit-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  -webkit-transform: perspective(5px) rotateX(2deg);
  -webkit-transform-origin: bottom;
  -moz-transform: perspective(5px) rotateX(2deg);
  -moz-transform-origin: bottom;
  transform: perspective(5px) rotateX(2deg);
  transform-origin: bottom;
}
#cssmenu > ul > li.active > a:after,
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li > a:hover:after {
  background: #47c9af;
}
.table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}
	</style>
<script>
function validate()	//Confirm appointment
{
var x=confirm("Are you sure you want to book appointment");
if(x)
return(true);
else
return(false);
}
</script>
<link rel="stylesheet" type="text/css" href="test.css"/>
<link rel="stylesheet" type="text/css" href="test1.css"/>	<!--decorating Doctor's table-->
</head>
<body>
<div class="parallax">
<a href="homepage.html" id="logo">Doctor's Portal</a><p> <font size="5" color="white">Patient Section</font></p>
<div id='cssmenu'>
<ul>
   <li><a href='patientdetails.php"'>My Details</a></li>
   <li class='active'><a href='patientbook.php'>Book Appointment</a></li>
   <li><a href='patientview.php'>View Appointment</a></li>
   <li><a href='patientcancel.php'>Cencel Appointment</a></li>
   <li><a href='patientsearch.php'>Search Doctor</a></li>
   <li><a href='homepage.html'>Logout</a></li>
   
</ul>
</div>
<?php
$category=$_POST['category'];
$date=$_POST['date'];
$time=$_POST['time'];
$con=mysqli_connect('localhost','root','','doctor5');
$q="select did,dname,daddress from doctor where dcategory='$_SESSION[category]' and did not in (select did from doctor natural join appointment where dcategory='$_SESSION[category]' and appointment_time='$_SESSION[time]' and appointment_date='$_SESSION[date]')";
$res=mysqli_query($con,$q);
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
?>
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Doctor-->
<caption>Available Doctor Details</caption>
<tr>
<th>Doctor Id</th>
<th>Name</th>
<th>Address</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>		<!--printing details of available doctors-->
<td><?php echo $row['did'];?></td>
<td><?php echo $row['dname'];?></td>
<td><?php echo $row['daddress'];?></td>
</tr>
<?php
}
?>
</table>
<?php
$_SESSION['category']=$category;
$_SESSION['date']=$date;
$_SESSION['time']=$time;
?>
<br/>
<hr/>
<form method="post" action="session_appointment(2).php" onsubmit="return validate()">
Fill the doctor id you want to book
<input type="text" name='docid'/> 
<br/>
<input type="submit" value="BOOK"/>
</body>
</html>