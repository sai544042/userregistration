<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$var_value1 = $_SESSION['variable'];
echo $var_value1;
$_SESSION['vysh']=$var_value1;
//header("Location:upload.php");
//echo "abc123";

?>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
	
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit" />
</form>
<button type="submit" class="btn btn-primary" onclick=""><a href="logoutfinal.php">logout</a></button>
</body>
</html>
