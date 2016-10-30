<?php
	
	include 'answer.php';
	
	$current_score = $_GET["current_score"];


	if ($answer[$_GET["current_question"]] == $_GET["answer"]) {
		$current_score += 1;
	}
	// else {
	// 	$current_score = 0;
	// }
 
?>


<!DOCTYPE html>
<html>
<head>
	<title>NHL Quiz</title>
	<link rel="stylesheet" type="text/css" href="nhl.css">
	<link href="https://fonts.googleapis.com/css?family=Bungee|Mitr" rel="stylesheet">
</head>
<body>
	<a href ="http://nhl.com" class="header">
		<img class="logo" src="nhlimage.png">
	</a>
	
	<div class="quiz-title">
		NHL QUIZ
	</div>

	<div>You scored <?php echo $current_score;?> out of 3.</div>

</body>
</html>