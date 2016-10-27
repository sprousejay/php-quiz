<?php
	
	include 'mostwins.php';
	$current_question = 0;
	$current_score = 0;
?>

	$current_score = $GET["current_score"];

	
	if ($answers[$_GET["current_question"]]) {
		$current_score += 1;
	} 


<!DOCTYPE html>
<html>
<head>
	<title>NHL Quiz</title>
</head>
<body>
	<div>Wow great job! You know your hockey! <?php echo $current_score ; ?> out of 1.</div>

</body>
</html>