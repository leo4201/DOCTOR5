<?php
session_start();
?>
<html>
<head>
<title>Add Note|Doctor Section</title>
<script>
function validate()
{
var x= confirm("Are you sure you want to insert information");
if(x)
return(true);
return(false);
}
</script>
<link rel="stylesheet" href="css/homepage.css" type="text/css">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>	
<style>
.tab1
{
margin-top:20px;
}


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

	table {
		margin: 0 0 2em 0;
		width: 100%;
	}

		table tbody tr {
			border: solid 1px;
			border-left: 0;
			border-right: 0;
		}

		table td {
			padding: 0.75em 0.75em;
		}

		table th {
			font-size: 0.9em;
			font-weight: 700;
			padding: 0 0.75em 0.75em 0.75em;
			text-align: left;
		}

		table thead {
			border-bottom: solid 2px;
		}

		table tfoot {
			border-top: solid 2px;
		}

		table.alt {
			border-collapse: separate;
		}

			table.alt tbody tr td {
				border: solid 1px;
				border-left-width: 0;
				border-top-width: 0;
			}

				table.alt tbody tr td:first-child {
					border-left-width: 1px;
				}

			table.alt tbody tr:first-child td {
				border-top-width: 1px;
			}

			table.alt thead {
				border-bottom: 0;
			}

			table.alt tfoot {
				border-top: 0;
			}
			table {
		border-collapse: collapse;
		border-spacing: 0;
	}
</style>
</head>
<body>
<div class="parallax">
<a href="homepage.html" id="logo">Health Portal</a><p> <font size="5" color="white">Doctor Section</font></p>
<div id='cssmenu'>
<ul>
   <li><a href='doctordetails.php'>My Details</a></li>
   <li><a href='doctorappointment.php'>My Appointments</a></li>
   <li><a href='doctorsearch.php'>Search Patient</a></li>
   <li class='active'><a href='doctornote.php'>Add Description</a></li>
   <li><a href='homepage.html'>Logout</a></li>
   
</ul>
</div>
<form action="doctornote(3).php" method="post" onsubmit="return validate()">
<table align="center">
<tr>
<th height=60px width=120px>Patient Id</th>
<td align="center">
<input type="text" value="<?php echo $_POST['id']?>" readonly/>
</td>
</tr>
<tr>
<th height=60px width=120px>Treatment</th>
<td align="center">
<input type="text" name="treat" required/>
</td>
</tr>
<tr>
<th height=60px width=120px>Note</th>
<td align="center" ><textarea name="text" rows=3 cols=25 required></textarea></td>
<tr>
<td colspan=2 align="center" height=40px width=200px>
<input type="submit"/>
</td>
</tr>
</table>
</form>
<?php
$_SESSION['dpid']=$_POST['id'];
?>
</body>
</html>