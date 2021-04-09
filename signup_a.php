<?php
if(isset($_POST["save"])) {
	include("db.php");
	extract($_POST);
	$sql=mysqli_query($conn,"SELECT * FROM students WHERE Email='$email'");

	if(mysqli_num_rows($sql)>0)
	{
	    echo "<h1>Email Id is already taken</h1>"; 
		exit;
	}
	elseif ($password != $conf_password) {
		echo "<h1>Password did not match</h1>";
		exit;
	}
	else
	{	
		$hashedpass = md5($password);
		$query="INSERT INTO students(SName, Email, Password, Class) VALUES ('$sname','$email','$hashedpass','$class')";
	    $sql=mysqli_query($conn,$query)or die("<h1>Could Not Perform the Query</h1>");

	    include ("login.php");
	}
}
else{
	header("Location: index.php");
}

?>