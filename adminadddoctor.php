<html>		
<head>
<title>Add Doctor|Admin Section</title>
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
   <li class='active'><a href='adminadddoctor.php"'>Add Doctor</a></li>
   <li><a href='adminviewdoctor.php'>View Doctor</a></li>
   <li><a href='adminviewpatient.php'>View Patient</a></li>
   <li><a href='adminviewappointment.php'>View Appointment</a></li>
   <li><a href='homepage.html'>Logout</a></li>
   
</ul>
</div>
<form action="adddoctor.php" method="post" onsubmit="return validate()">
<table align="center">
<h2 align="center">Add Doctor</h2>
<tr>
<th height=60px width=120px>Doctor Id</th>
<td align="center"><input placeholder="Email-Id" class="class" type="text" name="did" required/></td>
</tr>
<tr>
<th height=60px width=120px>Name</th>
<td width=200px align="center"><input placeholder="Name" class="class" type="text" name="dname" required /></td>
</tr>
<tr>
<th height=60px width=120px>Address</th>
<td width=200px align="center"><input placeholder="Address" class="class" type="text" name="dadd"/></td> 
</tr>
<tr>
<th height=60px width=120px>Contact no</th>
<td align="center"><input placeholder="Contact No" class="class" type="number" name="dno" required/></td>
</tr>
<tr>
<th height=60px width=120px>Category</th>
<td align="center">
<select name="dcategory" class="class" required/>
<option value="None">None</option>
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
<th height=60px width=120px>Password</th>
<td align="center"><input placeholder="Password" class="class" type="password" name="dpass" required/></td>
</tr>
<tr>
<th height=60px width=120px>Re-enter Password</th>
<td align="center"><input placeholder="Re-enter Your Password" class="class" type="password" name="dpass" required/></td>
</tr>
<tr>
<td colspan=2 align="center" height=40px width=200px><input type="submit" />
</tr>
</table>
</form>
</body>
</html>