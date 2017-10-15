<?PHP
	/*
	extract(array_merge($HTTP_GET_VARS,$HTTP_POST_VARS));
	*/
	extract($_POST); //$grade = $_POST["grade"];
	$grade=$score;
	if($grade>=100)
		print "your grade is A";
	else if($grade>=80)
		print "your grade is B";
	else if($grade>=60)
		print "your grade is C";
	else
		print "your grade is F";
?>
