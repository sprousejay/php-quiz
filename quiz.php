<?php
	include 'question.php';
	if (count($_GET) == 0) {
		$current_score = 0;
		$current_question = 0;
	} else {
		$current_question = (int)$_GET["current_question"];
		$current_score = (int)$_GET["current_score"];
		if ($_GET["answer"] == $answer[$current_question]) {
			$current_score += 1;
		}
		$current_question += 1;
	}
	if ($current_question == (count($quiz))) {
		$last_question = true;
	} else {
		$last_question = false;
	}
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

	<?php if ($last_question) { ?>
		<div class="final-result">
			You've finished the quiz! Your final score is <?php echo $current_score; ?> out of 3.
		</div>
	<?php } else { ?>


	<div class="question-prompt">
		<?php 
			echo $quiz [$current_question];
		?>
	</div>



	<form action="question2.php">
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