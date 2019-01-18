<?php
extract($_POST);
require_once "dbcon.php";
if(isset($_FILES['pic']))
{
	$path="uploads\\".$cat."\\";
	echo $path;
	$tmp_name = $_FILES['pic']['tmp_name'];
	$file_name = $_FILES['pic']['name'];
	$rs=move_uploaded_file($tmp_name, $path.$file_name);
	if($rs)
		header('location:profile.php');
}
?>