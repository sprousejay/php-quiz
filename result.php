<?php
	
	$quiz = array(
		0=> "Who is the best internet cat? A.Grumpy Cat B. Nala C. Coffee Cat D. Garfield");
	
	$answers = array(
		0 => "A"
		);

	$current_score = $GET["current_score"];

	
	if ($answers[$_GET["current_question"]]) {
		$current_score += 1;
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>You've finished the quiz! Your score is <?php echo $current_score ; ?> out of 1.</div>

</body>
</html>