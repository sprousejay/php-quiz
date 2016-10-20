<?php
	$quiz = array(
		0=> "Who is the best internet cat? A.Grumpy Cat B. Nala C. Coffee Cat D. Garfield");
	$answers = array(
		0 => "A"
		);

		$current_question = 0;
		$current_score = 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="question-count">
		1 Question
	</div>

	<div class="question-prompt">
		<?php echo $quiz [0]; ?>

	</div>

	<form action="result.php">
		<input type="radio" name="answer" value="A" checked> A <br>
		<input type="radio" name="answer" value="B" checked> B <br>
		<input type="radio" name="answer" value="C" checked> C <br>
		<input type="radio" name="answer" value="D" checked> D <br>
		<input type="hidden" name="current_question" value="<?php echo $current_question;?>">
		<input type="hidden" name="current_score" value="<?php echo $current_question;?>">
		<input type="submit" value="Next Question">
	</form>
	</body>
</html>