<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$s="select filename from userfiles";
$result=mysqli_query($con,$s);
$row1=mysqli_fetch_assoc($result);
$id1 = "wordss.txt";
//$id1 = "main resume.docx";
$str1 = file_get_contents($id1) or die("Can not read from file");
$a=1;
//$sno="select sno from userfiles";
//$result1=mysqli_query($con,$sno);
//$row2=mysqli_fetch_assoc($result1);
//echo $row2;
$num=mysqli_num_rows($result);

//echo $num;
for($i=0;$i<$num;$i++)
{
	$b="select filename from userfiles where sno=$a";
	$result1=mysqli_query($con,$b);
	$row2=mysqli_fetch_assoc($result1);
	$a++;
	$id2=$row2['filename'];
	echo $id2;





$str2 = file_get_contents($id2) or die("Can not read from file");
similar_text($str1,$str2,$similarity);

echo nl2br($similarity);


if($similarity>90)
{
	
echo "same file is uploading";

}
}

?>