<?php
if(isset($_POST['save']))
{
	include("../db.php");
	session_start();
	$Qid = $_SESSION["Qid"];//quiz id
	extract($_POST);

	$query = 'insert into questions(Question,Ans1,Ans2,Ans3,Ans4,Correctans,Explanation,Qid)values("'.$question.'","'.$ans1.'","'.$ans2.'","'.$ans3.'","'.$ans4.'",'.$correct_ans.',"'.$explanation.'",'.$Qid.');';

	mysqli_query($conn,$query);
}
header("Location: addquestions.php");
?>