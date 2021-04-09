<?php
if(isset($_POST['save']))
{
	extract($_POST);
	$hashedpass = md5($password);
	include ("login.php");
}
else{
	header("Location: index.php");
}
?>