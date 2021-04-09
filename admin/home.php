<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="../css/headerwithuser.css">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="css/adminhome.css">
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION["AName"])){
		header("Location: index.php");
	}
	include("../db.php");
	include ("headerwithadmin.php");//headerwithuser.css will apply style to this
	?>
	<main>
	<?php
	$result=mysqli_query($conn,"SELECT * FROM quizinfo");
	if (mysqli_num_rows($result) > 0) {
  // output data of each row
  		while($row = mysqli_fetch_assoc($result)) {
   		 echo '
   		<div id="quiz-card">
			<h2 id="card-heading">'.$row['Qname'].'</h2>
			<div id="card-body">
				<a id="add-question-button" href="addquestions.php?qid='.$row['Qid'].'">Add Question</a>
				<a id="remove-quiz-button" href="removequiz.php?qid='.$row['Qid'].'">Remove</a>
			</div>
		</div>';
  		}
	}
	
	?>	
	<div id="quiz-card">
		<form action="addquiz.php" method="post">
			<h2 id="card-heading">
				<input style="padding: 5px;" type="text" name="quizname" placeholder="Quiz Name">
			</h2>
			<div id="card-body">
				<button id="add-quiz-button" type="submit" name="save" >Add Quiz</button>
			</div>
		</form>
	</div>	
	</main>
	
</body>
</html>
