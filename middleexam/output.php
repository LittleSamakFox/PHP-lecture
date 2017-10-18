<?PHP
	extract(array_merge($HTTP_GET_VARS,$HTTP_POST_VARS));
	switch($logic){
		case ("+"):
			$result=$num1+$num2;
			break;
		case ("-"):
			$result=$num1-$num2;
			break;
		case ("*"):
			$result=$num1*$num2;
			break;
		case ("/");
			$result=$num1/$num2;
			break;
	}
	$file=fopen("result.txt","w");
	if(!$file)
		die ("i can't open file");
	fputs($file, $result);
	fclose($file);
	
	$file=fopen("result.txt","r");
	while($word=fgets($file, 1024))
		print "result is " . $word ."<br>";
	fclose($file);
?>
