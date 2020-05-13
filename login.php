<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="login-box">
	<div class="row">
	<div class="col-md-6 login-left">
		<h2>login here</h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<lable>Username</lable>
				<input type="text" name="user" class="form-control" required>
			</div>	
			<div class="form-group">
				<lable>Password</lable>
				<input type="password" name="password" class="form-control" required>
            </div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
    </div>
         <div class="col-md-6 login-left">
		<h2>Register here</h2>
		<form action="registration.php" method="post">
			<div class="form-group">
				<lable>Username</lable>
				<input type="text" name="user" id="name" class="form-control" required>
			</div>	
			<div class="form-group">
				<lable>Password</lable>
				<input type="password" name="password" class="form-control" required>
            </div>
			<div class="form-group">
				<lable>Branch</lable>
				<input type="text" name="branch" class="form-control" required>
            </div>
			
			<button type="submit" class="btn btn-primary">Register</button>
<script type="text/javascript">
function valid()
{
var name=document.getElementById('name').value;
var password=document.getElementById('password').value;
var cap=/[A-Z]/;
var small=/[a-z]/;
var num=/[0-9]/;
var sys=/[!@#$%^*]/;
if(name=="" || password=="")
{
//document.getElementById("eresult").innerHTML="ALL FIELDS REQUIRED";
alert("ALL FIELDS REQUIRED");
return false;
}
else if(password.length<8)
{
//document.getElementById("eresult").innerHTML="Enter correct password";
alert("Enter correct password");
return false;
}
else if(!cap.test(password))
{
//document.getElementById("eresult").innerHTML="Enter correct password";
alert("Enter correct password");
return false;
}
else if(!small.test(password))
{
//document.getElementById("eresult").innerHTML="Enter correct password ";
alert("Enter correct password");
return false;
}
else if(!num.test(password))
{
//document.getElementById("eresult").innerHTML="Enter correct password";
alert("Enter correct password");
return false;
}
else if(!sys.test(password))
{
alert("Enter correct password");
//document.getElementById("eresult").innerHTML="Enter correct password";
return false;
}
else
{
return true;
}
}
</script>			
			
        </form>
    </div>
    </div>
	</div>

</html>