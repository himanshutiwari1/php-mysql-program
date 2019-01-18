<?php
extract($_POST);
require_once "dbcon.php";
print_r($_POST);
if(isset($_FILES['pic']))
{
	$tmp_name = $_FILES['pic']['tmp_name'];
	$file_name = $_FILES['pic']['name'];
	move_uploaded_file($tmp_name, "uploads/".$file_name);
	$ins = "INSERT INTO cp (name,email,password,p_name) VALUES ('$name','$email','$pass','$file_name')";
	$rs = mysql_query($ins);
	if($rs)
	{
		header('location:login.php');
	}
	else
	{
		echo "Not register";
	}
}
?>