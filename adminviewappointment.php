<html>		
<head>
<title>View Appointments|Admin Section</title>
<link rel="stylesheet" href="css/homepage.css" type="text/css">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<style>
.parallax {
 
    background-image: url("images/1.jpg");
    min-height: 500px;

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

</head>
<body>
<div class="parallax">
<a href="homepage.html" id="logo">Doctor's Portal</a><p> <font size="5" color="white">Admin Section</font></p>
<div id='cssmenu'>
<ul>
   <li><a href='adminadddoctor.php"'>Add Doctor</a></li>
   <li><a href='adminviewdoctor.php'>View Doctor</a></li>
   <li><a href='adminviewpatient.php'>View Patient</a></li>
   <li class='active'><a href='adminviewappointment.php'>View Appointment</a></li>
   <li><a href='homepage.html'>Logout</a></li>
   
</ul>
</div>
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Appointment-->
<h2 align="center">Doctor Details</h2>
<tr>
<th>Appointment Id</th>
<th>Doctor Id</th>
<th>Patient Id</th>
<th>Date</th>
<th>Time</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','doctor5');
$q="select * from appointment";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>			<!--printing details of appointment-->
<td><?php echo $row['aid'];?></td>
<td><?php echo $row['did'];?></td>
<td><?php echo $row['pid'];?></td>
<td><?php echo $row['appointment_date'];?></td>
<td><?php echo $row['appointment_time'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>