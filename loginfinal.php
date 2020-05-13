<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<!--<p align="center" style="font-family:curlz MT;font-size:48;"><strong>WELCOME TO QUIZWHIZZ</strong></p>-->
</head>
<body>
<form  method="post" action="last.php" onsubmit="return validation();">
<div class="login-box">
   <h1>Login</h1>
   <div class="textbox">
      <i class="fas fa-user"></i>
      <input type="text" id="name" name="name" >
   </div>
   <div class="textbox">
      <i class="fas fa-lock"></i>
      <input type="password" id="password" name="password">
   </div>
   <input type="submit" class="btn" name="submit" value="Sign in">
   <div style="color:white;">
   <a  href="loginfinal1.php">New user?Sign in..</a></br></br></div>
</div>
</form>
<div id="eresult" style="color:red;"></div>
<script type="text/javascript">
function validation()
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
</body>
</html>