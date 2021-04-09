<?php
	if(isset($_POST['save'])){
		include("../db.php");
		$Quizname = $_POST["quizname"];
		mysqli_query($conn,'INSERT INTO quizinfo(Qname) VALUES("'.$Quizname.'");');
		//mysqli_query($conn,'INSERT INTO quizinfo(Qname) VALUES("JavaScript Quiz");');
	}
	header("Location: home.php");
?>