<?php
	if(isset($_GET['qid'])){
		include("../db.php");
		$Qid = $_GET['qid'];
		mysqli_query($conn,"DELETE FROM quizinfo WHERE Qid=$Qid");
	}
	header("Location: home.php");
?>