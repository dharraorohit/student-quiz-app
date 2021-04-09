<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="css/headerwithuser.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<?php
	session_start();
	if(isset($_SESSION["Qid"])){
		unset($_SESSION["Qid"]);//if _session["Qid"] is set then unset it.
	}

	if(!isset($_SESSION["SName"])){
		header("Location: index.php");
	}

	include("db.php");
	include ("headerwithuser.php");
	?>
	<main>
	<?php
	$result=mysqli_query($conn,"SELECT * FROM quizinfo");
	if (mysqli_num_rows($result) > 0) {
  		while($row = mysqli_fetch_assoc($result)) {
   		 echo '
   		<div id="quiz-card">
			<h2 id="card-heading">'.$row['Qname'].'</h2>
			<div id="card-body">
				<a id="start-button" href="loadquestion.php?qid='.$row['Qid'].'&qname='.$row['Qname'].'">Start</a>
			</div>
		</div>';
  		}
	}
	//This loop will list out all quizes.
	?>		
	</main>
	
</body>
</html>
