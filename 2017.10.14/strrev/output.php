<?PHP
	extract(array_merge($HTTP_GET_VARS,$HTTP_POST_VARS));
	$number=strlen($word);
	print "return word is  "; 
	for($i=$number;$i>=0;$i--){
		print $word[$i];
	}
	print "<br>";
	$return=strrev($word);
	print "using strrev() method is here ".$return."<br>";
?>
