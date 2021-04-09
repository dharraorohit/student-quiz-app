<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="css/headerwithuser.css">
	<link rel="stylesheet" type="text/css" href="css/showfinalresult.css">
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION["SName"])){
		header("Location: index.php");
	}elseif(!isset($_SESSION["Qid"])){
		header("Location: home.php");
	}
	
	include ("headerwithuser.php");
	?>
	<main>
		<div id="quiz-name">
			<?php echo($_SESSION["Qname"]); ?>
		</div>
		<div id="result-card">
			<div id="result-card-heading">Result</div>
			<div id="result-card-body">
				<div id="result-card-score">
					Score : <?php echo($_SESSION["Quiz_Score"]); ?>
				</div>
				<?php 
					if ($_SESSION["Quiz_Score"] > 5) {
						echo '<div id="result-card-passfail" class="color-green" >You\'re Pass</div>';
					}
					else{
						echo '<div id="result-card-passfail" class="color-red">You\'re Fail</div>';
					}
				?>
				<div id="time-taken">
					Time Taken :
					<?php
						$start_time = $_SESSION["Start_Time"];
						$end_time = time();
						echo gmdate("H:i:s", $end_time - $start_time);
					?>
				</div>
				<a id="home-button" href="home.php">Go Home</a>
			</div>
		</div>
	</main>
</body>
</html>