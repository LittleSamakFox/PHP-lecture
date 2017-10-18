<?PHP
	//7.1 string method
	$str = "apPle Orange pEaR";
	//str all Rarge
	$str1= strtoupper($str);
	print $str1."<br>";
	
	//str all small
	$str2=strtolower($str);
	print $str2."<br>";
	
	//first only become Rarge
	$str3=ucfirst($str);
	print $str3."<br>";
	
	//All word first become Rarge
	$str4=ucwords($str);
	print $str4."<br>";
	print"<br>";

	//7.2 parse_url() &var_dump()
	$str5="http://www.naver.com?name=kim&age=13";
	print $str5."<br>";
	$str6= parse_url($str5);
	var_dump($str6);
	print "<br>";
	
	parse_str($str6[query]);
	print "name : " . $name . ",age : " .$age . "<br>";
	print"<br>";
	
	//7.3 method strrev() : return
	$strr = "abcdefghijklmnopqrstuvwxyz";
	$strrr =strrev($strr);
	print $strrr."<br>";
	print"<br>";
	
	//7.4 substr() : method divide str
	$str7 = "1234567890abcdefghijklmnopqrstuvwxyz";
	$str8 = substr($str7, 2, 5);
	print $str8. "<br>";
	
	$str9 = substr($str7, 8, 5);
	print $str9. "<br>";
	
	$str10 = substr($str7, 12,8);
	print $str10. "<br>";
	
	$str11 = substr($str7,-9,8);
	print $str11. "<br>";
	print"<br>";
	
	//7.5 erase white space method  : trim()
	$str12 = " Apple Banana Pear ";
	$str13 = chop($str12);
	print "start--" .$str13."--end<br>\n";
	$str14 = rtrim($str12);
	print "start--" .$str14."--end<br>\n";
	$str15 = ltrim($str12);
	print "start--" .$str15."--end<br>\n";
	$str16 = trim($str12);
	print "start--" .$str16."--end<br>\n";
	print"<br>";
	
	//foreach(explode('/',$ )as$va)
	$str17 = 'one/two/three/four';
	foreach(explode('/',$str17)as $val)
		print $val."<br>";
	print"<br>";
	foreach(explode('/',$str17,3) as $val)
		print $val."<br>";
	print"<br>";
	
	//printf function
	$num=3.141592;
	printf("num = %d, 2nd pale is real number = %0.2f",$num,$num);

?>
