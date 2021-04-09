<?php
	session_start();
	if(!isset($_SESSION["SName"])){
		header("Location: index.php");
	}
	elseif(!isset($_GET["qid"])) {
		header("Location: home.php");
	}
	else
	{
	
		include("db.php");
		$_SESSION["Qid"] = $_GET["qid"];//quiz id
		$_SESSION["Qname"] = $_GET["qname"];//quiz name
		$_SESSION["Question_number"] = 1;//this will be used to keep track of current question number while showing question in showquestion
		$_SESSION["Quiz_Score"] = 0;
		unset($_SESSION["Questions"]);

		$result=mysqli_query($conn,"SELECT * FROM questions WHERE Qid = ".$_SESSION['Qid'].";");
		if (mysqli_num_rows($result) > 0) {
	  		while($row = mysqli_fetch_assoc($result)) {
	  			$rows[] = $row;
	  		}
		$_SESSION["Questions"] = $rows;//this will store all the questions in session so that it does not need to load questions again and again.
		}

		$_SESSION["Total_Question_Count"] = count($_SESSION["Questions"]);
		$_SESSION["Start_Time"] = time();

		header("Location: showquestion.php");
	}
?>

		