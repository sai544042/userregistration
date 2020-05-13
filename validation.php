<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['user'];
$pass=$_POST['password'];
$branch="select branch from usertable where name='$name'&& password ='$pass'";
$s="select * from usertable where name='$name'&& password ='$pass'";
$_SESSION['varname']=$name;
  //mysqli_free_result($result1);
//}
//echo $s;
$t="select * from userlogin where name='$name'&& password ='$pass'";
//$br=mysqli_query($con,$branch);

$result=mysqli_query($con,$s);
$result1=mysqli_query($con,$t);
//echo "$result";
$num=mysqli_num_rows($result);
//$num1=mysqli_num_rows($result1);
$row1=mysqli_fetch_assoc($result);
$row2=mysqli_fetch_assoc($result1);
echo $row1['branch'];
echo $row2['loginno'];
$row2['loginno']=$row2['loginno']+1;
echo $row2['loginno'];
//echo $num;
if($num==1)
{
	$_SESSION['username']=$name;
//echo "username already taken";
$reg="insert into userlogin(name,password) values('$name','$pass')";
$reg1="UPDATE userlogin SET loginno=$row2[loginno] WHERE name='$name' && password='$pass'";
mysqli_query($con,$reg);
mysqli_query($con,$reg1);
header('location:select.php');
}
else
{
header('location:login.php');
}
?>
<html>
<button style="background:green;color:white;width:100px;border-radius:5px;boder-color:grey;" onclick="logout.php">logout</button>
</html> 