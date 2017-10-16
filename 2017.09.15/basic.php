<?PHP
	// overflow
	$value = 999999999997;
	for($i=1;$i<=6;$i++){
		$value = $value+1;
		print $value."<br>";	
	}
	
	// algebra mathmetic
	$result = 5+4;
	print "5+4 = " . $result. "<br>";
	$result = 5-4;
	print "5-4 = " . $result. "<br>";
	$result = 5*4;
	print "5*4 = " . $result. "<br>";
	$result = 5/4;
	print "5/4 = " . $result. "<br>";
	$result = 5%4;
	print "5%4 = " . $result. "<br>";

	//two's compliment and or xor not
	$a=15;
	$b=18;
	$result=$a & $b;
	print " And a & b " . $result ."<br>";
	$result=$a | $b;
	print " Or a & b " . $result ."<br>";
	$result=$a ^ $b;
	print " Xor a & b " . $result ."<br>";
	$result=~$a;
	print " Not a" . $result ."<br>";
	
	//shift method
	$word=15;
	$shift=2;
	$result=$word<<$shift;
	print $result ."<br>";
	$result=$word>>$shift;
	print $result ."<br>";
	
	//boolean
	$t=TRUE;
	$f=FALSE;
	
	print "Not Gate<br>";
	print "T : ";
	(!$t)?print "T<br>": print "F<br>"; 
	print "F : ";
	(!$f)?print "T<br>" : print "F<br>";
	
	print "And Gate<br>";
	print "TT : ";
	($t && $t)? print "T<br>" : print "F<br>";
	print "TF : ";
	($t && $f)? print "T<br>" : print "F<br>";
	print "FT : ";
	($f && $t)? print "T<br>" : print "F<br>";
	print "FF : ";
	($f && $f)? print "T<br>" : print "F<br>";
	
	print "Or Gate<br>";
	print "TT : ";
	($t || $t)? print "T<br>" : print "F<br>";
	print "TF : ";
	($t || $f)? print "T<br>" : print "F<br>";
	print "FT : ";
	($f || $t)? print "T<br>" : print "F<br>";
	print "FF : ";
	($f || $f)? print "T<br>" : print "F<br>";
	
	print "Xor Gate<br>";
	print "TT : ";
	($t xor $t)? print "T<br>" : print "F<br>";
	print "TF : ";
	($t xor $f)? print "T<br>" : print "F<br>";
	print "FT : ";
	($f xor $t)? print "T<br>" : print "F<br>";
	print "FF : ";
	($f xor $f)? print "T<br>" : print "F<br>";
	
	//compare integer
	$a = 123;
	$b = 456;
	$c = 123.0;
	$d = 123.00;
	
	if($a == $b)
		print "$a is same as $b <br>";
	if($a != $b)
		print "$a is not same as $b <br>";
	if($a < $b)
		print "$b is bigger than $a <br>";
	if($a > $b)
		print "$a is bigger than $b <br>";
	if($a <= $b)
		print "$b is same or bigger than $a <br>";
	if($a >= $b)
		print "$a is same or bigger than $b <br>";
	if($a === $b)
		print "$a has same integer as $b <br>";
	
	if($a == $c)
		print "$a is same as $c <br>";
	if($a === $c)
		print "$a has same integer as $c <br>";
		
	if($d === $c)
		print "kim sung tae <br>";
	print "<br>";
	
	//using if compare
	$year = 2020;
	if(($year%400)==0 || (($year%4)==0 && ($year%100)!=0))
		print $year ."year is not un year <br>";
	else
		print $year ."year is un year <br>";
	print "<br>";
	
	//switch case
	$score = 75;
	switch($score){
		case 100:
			print "A<br>";
			break;
		case 75:
			print "B<br>";
			break;
	}
	
	//while
	$i=0;
	$sum=0;
	while($i<=10){
		$sum=$sum+$i;
		$i++;
	}
	print "sum is " . $sum . "<br>";
	
	//for
	$sum=0;
	for($i=1;$i<=10;$i++)
		$sum=$sum+$i;
	print "sum is " . $sum . "<br>";
	
	//do-while
	$sum=0;
	$i=0;
	do{
		$i=$i+1;
		$sum=$i+$sum;
	}while($i<=5);
	print "sum is " . $sum . "<br>";	
?>
