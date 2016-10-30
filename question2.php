<?php
	
	include 'answer.php';
	$current_question = $_GET["current_question"];
	$current_score = $_GET["current_score"];
	if ($_GET["answer"] == $answer[$current_question]) {
		$current_score += 1;
	}
	$current_question += 1;
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

	<div class="question-prompt">
		<?php 
			echo $quiz [$current_question]; 
		?>
	</div>

	<form action="question3.php">
		<input type="radio" name="answer" value="A" checked> A <br>
		<input type="radio" name="answer" value="B" checked> B <br>
		<input type="radio" name="answer" value="C" checked> C <br>
		<input type="radio" name="answer" value="D" checked> D <br>
		<input type="hidden" name="current_question" value="<?php echo $current_question;?>"?>
		<input type="hidden" name="current_score" value="<?php echo $current_score;?>">
		<input type="submit" value="Submit">
	</form>
</body>
</html>