<?php
if(isset($email)){
	session_start();
	include("../db.php");
	$sql=mysqli_query($conn,"SELECT * FROM admin where Email='$email' and Password='$hashedpass'");
	$row  = mysqli_fetch_array($sql);
	if(is_array($row))
	{
	    $_SESSION["Aid"] = $row['Aid'];
	    $_SESSION["AName"]=$row['AName'];
	    $_SESSION["Email"]=$row['Email'];
	    header("Location: home.php"); 
	}
	else
	{
	    echo "Invalid Email ID/Password";
	}
}else{
	header("Location: index.php");
}

?>