<html>
<head>
<title>Appointment Booking|Patient Section</title>
<link rel="stylesheet" type="text/css" href="css/patientdetails.css"/>

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
<script>
function validate()
{
var x=document.getElementsByName("date");
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
if(dd<10)
   dd='0'+dd;
if(mm<10)
   mm='0'+mm;
var today = yyyy+'-'+mm+'-'+dd;
if(x[0].value<=today)
{
alert("invalid date you can book appointment from tomorrow");
return(false);
}
else
return(true);
}
</script>
<link rel="stylesheet" type="text/css" href="test.css"/>
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
<br>
<form action="session_appointment.php" method="post" onsubmit="return validate()">
<table align="center" border=2px cellspacing=0px>
<h2 align="center">Book Appointment</h2>
<tr>
<th height=60px width=120px>Category</th>
<td align="center">
<select name="category" id="s1" required/>
<option value="Bone Specialist">Bone Specialist</option>
<option value="Heart Specialist">Heart Specialist</option>
<option value="Eye/Ear Specialist">Eye/Ear Specialist</option>
<option value="Dentist">Dentist</option>
<option value="Pediatrician">Pediatrician</option>
<option value="Psychiatrist">Psychiatrist</option>
</select>
</td>
</tr>
<tr>
<th height=60px width=120px>Date</th>
<td width=200px align="center"><input type="date" name="date" required /></td>
</tr>
<tr>
<th height=60px width=120px>Time</th>
<td width=200px align="center">
<select name="time" id="s2" required>
<option value="10:00:00">10:00am</option>
<option value="10:30:00">10:30am</option>
<option value="11:00:00">11:00am</option>
<option value="11:30:00">11:30am</option>
<option value="12:00:00">12:00pm</option>
<option value="12:30:00">12:30pm</option>
<option value="15:00:00">03:00pm</option>
<option value="15:30:00">03:30pm</option>
<option value="16:00:00">04:00pm</option>
<option value="16:30:00">04:30pm</option>
</select>
</td> 
</tr>
<tr>
<td colspan=2 align="center" height=40px width=200px>
<input type="submit" value="SEARCH"/>
</td>
</tr>
</table>
</form>
</body>
</html>