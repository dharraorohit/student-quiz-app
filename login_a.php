<?php
if(isset($_POST['save']))//if user has clicked submit button only then 
{
	extract($_POST);
	$hashedpass = md5($password);
	include ("login.php");
}
else{
	header("Location: index.php");
}
?>