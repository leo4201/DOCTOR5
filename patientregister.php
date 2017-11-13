<html>		<!--REGISTERATION OF NEW USER-->
<head>
<title>Patient's enquiry</title>
<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/registerform.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
<script>			//checking invalid entry while registering
function validate()
{
var a=document.getElementsByClassName("class");
if(a[0].value.length==1)	//invalid name
{
alert("invalid name entered");
return(false);
}
if(a[1].value.length<3)		//invalid address
{
alert("invalid address entered");
return(false);
}
if(a[2].value<1000)		//invalid contact number
{
alert("invalid contact number");
return(false);
}
if(a[4].value.length<4)		//invalid user id
{
alert("User id should be of atleast 4 characters");
return(false);
}
if(a[5].value!=a[6].value)	//password wrongly re-entered
{
alert("enter the password correctly");
return(false);
}
if(a[5].value.length<4)		//restriction on password length
{
alert("password should of atleast 4 characters");
return(false);
}
var indexofat=a[3].value.indexOf('@');		//invalid email id
var indexofdot=a[3].value.lastIndexOf('.');
var length=a[3].value.length;
if(indexofat==0||indexofdot>=length-2||indexofdot-indexofat<3)
{
alert("invalid email id");
return(false);
}
var result=confirm("do u wish to submit form");
return(result);
}
</script>
</head>
<body>
<div class="container">
            
            <header>
                <h1>Patient <span>Registration Form</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    
                    <div id="wrapper">
                        

                        <div class="animate form">

<form method="post" action="register.php" onsubmit="return validate()">

<h1>Register now</h1>
<p>
<label data-icon="u">Your Name</label>
<input class="class" type="text" placeholder="Ex: Zain" name="name" required/>
</p>
<p>
<label data-icon="A">Your Address</label>
<input class="class" type="text" placeholder="Ex: Dhaka" name="add" required/>
</p>
<p>
<label data-icon="C">Contact Number</label>
<input class="class" type="number" placeholder="Ex: +8801XXXXXXXXX" name="cn" required/>
</p>
<p>
<label data-icon="e" > Your email</label>
<input class="class" type="text" placeholder="example@mail.com" name="eid" required/>
</p>
<p>
<label data-icon="u">Your username</label>
<input class="class" type="text" name="uid" placeholder="Ex: zain123" required/>
</p>
<p>
<label data-icon="p">Your password </label>
<input class="class" type="password" name="pass" required/>
</p>
<p>
<label data-icon="p">Confirm password </label>
<input class="class" type="password" name="pass" required/>
</p>
<tr>
<p class="signin button"><input type="submit" value="Register" />
</tr>
</form>
 </div>
						
                    </div>
                </div>  
            </section>
        </div>
</body>
</html>