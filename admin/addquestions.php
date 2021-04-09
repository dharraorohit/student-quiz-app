<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="../css/headerwithuser.css">
	<link rel="stylesheet" type="text/css" href="css/addquestions.css">
</head>
<body>

	<?php
		session_start();
		if (isset($_GET["qid"])) {
			$_SESSION["Qid"] = $_GET["qid"];//quiz id	
		}
		elseif(!$_SESSION["Qid"]){
			header("Location: home.php");
		}

		include ("headerwithadmin.php");//headerwithuser.css will apply style to this
	?>
	<form action="addquestions_a.php" method="post">
		<div id="question">
			Question : <input type="text" name="question">
		</div>
		<div id="answers">
			Answers :<br>
			1.<input type="text" name="ans1"><br>
			2.<input type="text" name="ans2"><br>
			3.<input type="text" name="ans3"><br>
			4.<input type="text" name="ans4"><br>
		</div>
		<div id="correct-answers">
			Correct Answer : <input type="number" name="correct_ans">
		</div>
		<div id="explanation">
		Explanation : <input type="text" name="explanation">
		</div>
		<div id="buttons">
		<button id="submit-button" type="submit" name="save">Add Question</button>
		<a id="done-button" href="home.php">Done</a>
		</div>	
	</form>

</body>
</html>

		