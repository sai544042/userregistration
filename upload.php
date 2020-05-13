<html>
<button style="background:green;color:white;width:100px;border-radius:5px;boder-color:grey;" onclick="logout.php">logout</button>
</html> 
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$target_dir = "uploads/";
$target_dir1 = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file1 = $target_dir1 . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$file = $_FILES['fileToUpload'];
$file_name = $file['name'];
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$var = $_SESSION['vysh'];
echo $var;
echo $_FILES["fileToUpload"]["tmp_name"];
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file1))
{
	echo "file is in user folder";
}
if(isset($_POST["submit"]))
{
	$uploadOk = 1;
}
if (file_exists($target_file)) 
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 50000000) 
{
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if($FileType != "txt" && $FileType != "pptx" && $FileType != "pdf"
&& $FileType != "docx" && $FileType != "png" && $FileType != "gif") 
{
    echo "Sorry, only docx,pdf,txt files can be uploaded.";
    $uploadOk = 0;
}
$s="select filename from userfiles";
$result=mysqli_query($con,$s);
$row1=mysqli_fetch_assoc($result);
//echo $file_name;
//$filePath = realpath($_FILES["fileToUpload"]['name']);
$pathname=realpath($file_name);
$str1 = file_get_contents($_FILES["fileToUpload"]['name']) or die("Can not read from file");
$a=1;
$num=mysqli_num_rows($result);
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
		$uploadOk=0;	
		echo "same content";
	}
}
//echo $file_name;
//echo $_FILES["fileToUpload"]["tmp_name"];
if ($uploadOk == 0)
{
	echo "Sorry, your file was not uploaded.";
}
//rename($target_file, "New/".  
//                        basename( $_FILES["file"]["name"]))

//move_uploaded_file($pathname,$target_file)
else
{
    if (rename($target_file1, "uploads/".  
                        basename( $_FILES["fileToUpload"]["name"]))) 
	{
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$reg="insert into userfiles(name,filename) values('$var','$target_file')";
		mysqli_query($con,$reg);
	} 
	else
	{
        echo "Sorry, there was an error uploading your file.";
    }
}

?>