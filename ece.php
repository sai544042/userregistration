<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$var_value1 = $_SESSION['varname'];
echo $var_value1;

$s="select * from usertable where name='$var_value1'";
$result=mysqli_query($con,$s);
$row1=mysqli_fetch_assoc($result);
$s1="select * from userlogin where name='$var_value1'";
$result1=mysqli_query($con,$s1);
$row2=mysqli_fetch_assoc($result1);
echo $row1['branch'];
if($row1['branch']=="ece")
{
	echo "gooduser";
	$row2['totalrequest']++;
	$reg1="UPDATE userlogin SET totalrequest=$row2[totalrequest] WHERE name='$var_value1'";
	mysqli_query($con,$reg1);
	header("Location:fileup.html");
}
else
{
	echo "baduser";
	$row2['totalrequest']=$row2['totalrequest']+1;
	$row2['bogusrequest']++;
	$reg1="UPDATE userlogin SET totalrequest=$row2[totalrequest],bogusrequest=$row2[bogusrequest] WHERE name='$var_value1'";
	mysqli_query($con,$reg1);
}
$trust=$row2['bogusrequest']/$row2['totalrequest'];
echo $trust;
$reg2="UPDATE userlogin SET trustvalue=$trust WHERE name='$var_value1'";
mysqli_query($con,$reg2);
if($trust>0.5 && $row2[loginno]>3)
{
	$del="DELETE from usertable WHERE name='$var_value1'";
	mysqli_query($con,$del);
	session_destroy();
	echo "user restricted";
}
?>