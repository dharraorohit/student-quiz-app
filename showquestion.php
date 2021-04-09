<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="css/headerwithuser.css">
	<link rel="stylesheet" type="text/css" href="css/showquestion.css">
</head>
<body>
	<?php
		session_start();
		if(!isset($_SESSION["SName"])){
			header("Location: index.php");
		}
		elseif(!isset($_SESSION["Qid"])){
			header("Location: home.php");
		}

		include("headerwithuser.php");
		if ($_SESSION["Question_number"] > $_SESSION["Total_Question_Count"]) {
			header("Location: showfinalresult.php");
		}

		$Qnum = $_SESSION["Question_number"] - 1;// -1 because index starts from 0
	?>

	<main>
		<div id="question-card">
			<div id="question">
				<?php echo($_SESSION["Question_number"]); ?>
				 . 
				<?php echo($_SESSION["Questions"][$Qnum]["Question"]);?>
				</div>
			<div id="answers">
				<form action="showresult.php" method="post">
					<div class="answer">
						<input type="radio" id="ans1" name="answer" value="1" >
  						<label for="ans1"><?php echo($_SESSION["Questions"][$Qnum]["Ans1"]);?></label>
  						<br>
  					</div>
  					<div class="answer">
  						<input type="radio" id="ans1" name="answer" value="2">
  						<label for="ans2"><?php echo($_SESSION["Questions"][$Qnum]["Ans2"]);?></label>
  						<br>
					</div>
					<div class="answer">
  						<input type="radio" id="ans1" name="answer" value="3">
  						<label for="ans3"><?php echo($_SESSION["Questions"][$Qnum]["Ans3"]);?></label>
  						<br>
  					</div>
  					<div class="answer">
  						<input type="radio" id="ans1" name="answer" value="4">
  						<label for="ans4"><?php echo($_SESSION["Questions"][$Qnum]["Ans4"]);?></label>
  						<br>
  					</div>
  					<button type="submit" name="submit-button">Check Answer</button>
  				</form>
			</div>
		</div>
	</main>
</body>
</html>