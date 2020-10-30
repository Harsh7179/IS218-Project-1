<?php 

	$question = $_POST['question'];
	$body = $_POST['body'];
	$skills = $_POST['skills'];


	if(empty($question))
	{
		echo "Need to enter a question";
	} elseif(empty($body))
	{
		echo "Need to enter a body";
	}
	elseif(mb_strlen($question)<3)
	{
		echo "Need to enter at least 3 characters";
	}elseif(mb_strlen($body)>500)
	{
		echo "Body needs to be less than 500 characters";
	}


 ?>