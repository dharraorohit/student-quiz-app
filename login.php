<?php
if(isset($email)){
	session_start();
	include("db.php");
	$sql=mysqli_query($conn,"SELECT * FROM students where Email='$email' and Password='$hashedpass'");
	$row  = mysqli_fetch_array($sql);
	if(is_array($row))
	{
	    $_SESSION["Sid"] = $row['Sid'];
	    $_SESSION["SName"]=$row['SName'];
	    $_SESSION["Email"]=$row['Email'];
	    $_SESSION["Class"]=$row['Class'];
	    header("Location: home.php"); 
	}
	else
	{
	    echo "Invalid Email ID/Password";
	}
}
else{
	header("Location:index.php");
}
?>