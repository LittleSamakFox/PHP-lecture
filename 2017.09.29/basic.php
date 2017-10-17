<?PHP
	//sin cos tan math function
	$result=sin(M_PI/6);
	print "sin(30) = $result <br>";
	$result=cos(M_PI/6);
	print "cos(30) = $result <br>";
	$result=tan(M_PI/6);
	print "tan(30) = $result <br>";
	$result = asin(0.5);
	print "asin(0.5) = $result <br>";
	$result = acos(0.866025);
	print "acos(0.866025) = $result <br>";
	$result = atan(0.57735);
	print "atan(0.57735) = $result <br>";
	print"<br>";
	
	//log, sqrt, pow function
	$result=log(10);
	print "log(10)= $result<br>";
	$result=log10(100);
	print "log10(100)= $result<br>";
	$result=sqrt(2);
	print "sqrt(2)= $result<br>";
	$result=pow(10,2);
	print "pow(10,2) = $result<br>";
	print"<br>";
	
	
	//getdate()
	$seoul=getdate();
	print "now hour : ". $seoul[year] ."year".$seoul[mon] ."mon".$seoul[mday] ."day".$seoul[hours] ."hour".$seoul[minutes] ."minute".$seoul[seconds] ."second<br>";	
	print"<br>";
	
	//gmdate() , getdate(mktime())
	$year=gmdate("Y");
	$mon=gmdate("m");
	$day=gmdate("d");
	$hour=gmdate("G");
	$min=gmdate("i");
	$sec=gmdate("s");
	print "now time : " . $year . "/" . $mon . "/"  . $day  . "/" . $hour . "/"  . $min  . "/" . $sec . "<br>";

	$mktime=getdate(mktime($hour,$min,$sec,$mon,$day,$year));
	print " mk timle : " . $mktime[year] ."-".$mktime[mon] ."-".$mktime[mday] ."@".$mktime[hours] .".".$mktime[minutes] .".".$mktime[seconds] .".<br>";
	
	$seoul=getdate(mktime($hour+9,$min,$sec,$mon,$day,$year));
	print " seoul timle : " . $seoul[year] ."-".$seoul[mon] ."-".$seoul[mday] ."@".$seoul[hours] .".".$seoul[minutes] .".".$seoul[seconds] .".<br>";
	
	$newyork=getdate(mktime($hour-5,$min,$sec,$mon,$day,$year));
	print " nework time : " . $newyork[year] ."-".$newyork[mon] ."-".$newyork[mday] ."@".$newyork[hours] .".".$newyork[minutes] .".".$newyork[seconds] .".<br>";
	
	$paris=getdate(mktime($hour+1,$min,$sec,$mon,$day,$year));
	print "paris time :". $paris[year] ."-".$paris[mon] ."-".$paris[mday] ."@".$paris[hours] .".".$paris[minutes] .".".$paris[seconds] .".<br>";
	print"<br>";
	
	//sum and bcadd
	
	$num1 = 999999999;
	$num2 = $num1 + 1;
	print $num2 . "<br>";
	$num2 = bcadd($num1, "2");
	print $num2 . "<br>";
	print"<br>";
	
	//bcadd, bcsub, bcmul, bcdiv, bcmod, bcsqrt --( , , sosutzum zari)
	$num1 = "77777777777777777777.55555555555555555555";
	$num2 = "22222222222222222222.44444444444444444444";
	$num3 = "12345678901234567890123456789";
	$num4 = "90000000000000000000000000000";
	$value = bcadd($num1, $num2, 20);
	print "bcadd(num1, num2, 20) : " . $value . "<br>";
	$value = bcsub($num1, $num2, 20);
	print "bcsub(num1, num2, 20) : " . $value . "<br>";
	$value = bcmul($num1, $num2, 20);
	print "bcmul(num1, num2, 20) : " . $value . "<br>";
	$value = bcdiv($num1, $num2, 10);
	print "bcdiv(num1, num2, 10) : " . $value . "<br>";
	$value = bcmod($num3, "2");
	print "bcmod(num3, 2) : " . $value . "<br>";
	$value =bcsqrt($num4, 20);
	print "bcsqrt(num4, 20) : " . $value . "<br>";
	print "<br>";
	
	//bcpow
	for($x=1;$x<20;$x=$x+2){
		print "bcpow(2, " . $x . " ) = ( " . bcpow(2,$x) . ")<br>";
	}
	print "<br>";
	
	//function pi_func
	function pi_func($iteration, $scale){
			$value = "0";
			for($i=1;$i<=$iteration;$i++){
					if(($i%2)==0)
						$value=bcsub($value,bcdiv(12,bcpow($i,2),$scale),$scale);
					else
						$value=bcadd($value,bcdiv(12,bcpow($i,2),$scale),$scale);
			}
			$pi_value = bcsqrt($value, $scale);
			print "PI : " . $pi_value . "<br>";
	}
	pi_func(10000,50);
	pi_func(20000,50);
	pi_func(30000,50);
	print "<br>";
	
	//random number function - mt_srand() ,mt_rand(int min, int max)
	mt_srand((double)microtime()*10000000);
	for($i=1;$i<=10;$i++){
		$random=mt_rand(0,100000);
		print "random [" .$i."] = " .$random . "<br>";
	}
	print"<br>";
	
	//php info
	function info(){
		print "current os : " . PHP_OS . "<br>";
		print "current php version : " . PHP_VERSION . "<br>";
	}
	info();
	print"<br>";
	
	//define
	define("R1", 1.415133151);
	define("R2", 1.734535435);
	$sum = R1+R2;
	print "R1 : ".R1."<br>";
	print "R2 : ".R2."<br>";
	print "R1+R2: ".$sum."<br>";
	print "<br>";
	
	//Array 
	$str = "web programing";
	print "str[5] : " . $str[0] .$str[1] .$str[2] . $str[3] . $str[4] . $str[5] . "<br>";
?>
