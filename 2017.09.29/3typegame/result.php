<?PHP
	extract(array_merge($HTTP_GET_VARS,$HTTP_POST_VARS));
	mt_srand((double)microtime()*1000000);
	$random=mt_rand(0,10000);
	if($random%3==2)
		$computer="rock";
	else if($random%3==1)
		$computer="scissor";
	else
		$computer="paper";
	$user=$type;

	if($user==$computer)
		 print "user select is : " . $user ." <br> computer select is : " . $computer . " <br> so same this game<br>";
	else if(($user=="rock"&&$computer=="scissor")||($user=="scissor"&&$computer=="paper")||($user=="paper"&&$computer=="rock"))
	 	print "user select is : " . $user ." <br> computer select is : " . $computer . " <br> so you win this game<br>";
	else if(($user=="scissor"&&$computer=="rock")||($user=="paper"&&$computer=="scissor")||($user=="rock"&&$computer=="paper"))
	 	print "user select is : " . $user ." <br> computer select is : " . $computer . " <br> so you lose this game<br>";
	else
		print "error<br>";
?>
