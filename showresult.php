<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="css/headerwithuser.css">
	<link rel="stylesheet" type="text/css" href="css/showquestion.css">
	<link rel="stylesheet" type="text/css" href="css/showresult.css">
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
		elseif(!isset($_POST['answer'])) {
			header("Location: showquestion.php");
		}

		include("headerwithuser.php");
		$Qnum = $_SESSION["Question_number"] - 1;// -1 because index start from 0
		$Givenanswer = $_POST['answer'];//answer given by student
		$Correctanswer = $_SESSION["Questions"][$Qnum]["Correctans"];

	?>

	<main>
		<div id="question-card">
			<div id="question">
				<?php echo($_SESSION["Question_number"]); ?>
				 .
				<?php echo($_SESSION["Questions"][$Qnum]["Question"]);?>
				</div>
			<div id="answers">
				<form action="showquestion.php" method="post">
					<div class="answer">
						<input type="radio" id="ans1" disabled='disabled'>
  						<label for="ans1"><?php echo($_SESSION["Questions"][$Qnum]["Ans1"]);?></label>
  						<br>
  					</div>
  					<div class="answer">
  						<input type="radio" id="ans1" disabled='disabled'>
  						<label for="ans2"><?php echo($_SESSION["Questions"][$Qnum]["Ans2"]);?></label>
  						<br>
					</div>
					<div class="answer">
  						<input type="radio" id="ans1" disabled='disabled'>
  						<label for="ans3"><?php echo($_SESSION["Questions"][$Qnum]["Ans3"]);?></label>
  						<br>
  					</div>
  					<div class="answer">
  						<input type="radio" id="ans1" disabled='disabled'>
  						<label for="ans4"><?php echo($_SESSION["Questions"][$Qnum]["Ans4"]);?></label>
  						<br>
  					</div>
  					<button type="submit" name="submit-button">Next Question</button>
  				</form>
			</div>
			<div id="result">
				<?php
					if($Givenanswer == $Correctanswer){
						$_SESSION["Quiz_Score"]++;
						echo '
						<div id="answer-is-correct" class="result-display">
						Answer is Correct			
						</div>';
					}else{
						echo '
						<div id="answer-is-wrong" class="result-display">
						Answer is Wrong			
						</div>';
					}
				?>
				<div id="show-correct-ans">
					Correct Answer :
					<?php
						if ($Correctanswer == 1) {
							echo($_SESSION["Questions"][$Qnum]["Ans1"]);
						}
						elseif($Correctanswer == 2) {
							echo($_SESSION["Questions"][$Qnum]["Ans2"]);
						}
						elseif($Correctanswer == 3) {
							echo($_SESSION["Questions"][$Qnum]["Ans3"]);
						}
						else{
							echo($_SESSION["Questions"][$Qnum]["Ans4"]);
						}
					?>
				</div>
				<div id="explanation">
					Explanation : 
					<?php echo $_SESSION["Questions"][$Qnum]["Explanation"] ?>
				</div>
			</div>
		</div>
		<?php
			$_SESSION["Question_number"]++;
		?>
	</main>
</body>
</html>