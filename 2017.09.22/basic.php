<?PHP
	//make add function
	function add($a, $b){
		$sum=$a+$b;
		return $sum;
	}
	$result=add(1,2);
	print $result . "<br>";
	print"<br>";
	
	//make log function
	function f_log($arg, $base=2){
		$result = log($arg)/log($base);
		return $result;
	}
	print "log2(10) = " . f_log(10,2) . "<br>";
	print "log10(100) = " . f_log(100,10) . "<br>";
	print "log2(8) = " . f_log(8,2) . "<br>";
	print "log2(8) = " . f_log(8) . "<br>";
	print"<br>";
	
	//make print function
	function f_print(){
		$args = func_get_args();
		foreach($args as $arg){
			print "parameter : " . $arg . "<br>";
		}
	}
	f_print("Apple","Banana","Orange","Pear","Cherry");
	print"<br>";
	
	//make factorial function
	function factorial($n){
		if($n==1)
			return 1;
		return $n*factorial($n-1);
	}
	for($i=1;$i<=10;$i++)
		print "factorial($i) = " . factorial($i) . "<br>";
	print"<br>";
	
	//make fibonachi function
	function fibonachi($fibo){
		if($fibo==0 || $fibo==1){
			return 1;
		}
		return fibonachi($fibo-1)+fibonachi($fibo-2);
	}
	for($i=1;$i<=10;$i++)
		print "fibonachi $i : " . fibonachi($i) . "<br>";
	print"<br>";
	
	//make hanoi function
	function hanoi($number, $from, $via, $to){
		if($number==1){
			print("move disc $number from $from to $to <br>");
		}
		else{
			hanoi($number-1, $from, $to, $via);
			print("move disc $number from $from to $to <br>");
			hanoi($number-1, $via, $from, $to);
		}
	}
	hanoi(3,'A','B','C');
	print"<br>";
	hanoi(4,'A','B','C');
	print"<br>";
	
	//global parameter
	function counts(){
		global $i;
		$i=$i+1;
	}
	$i=0;
	while($i<10){
		counts();
		print $i. "<br>";
	}
	print"<br>";
	
	//static prarameter
	function inc(){
		static $i=1;
		print $i. "<br>";
		$i=$i+1;
	}
	for($j=1;$j<=10;$j++){
		inc();
	}
	print"<br>";
	
	//swap function --error
	function swap($a, $b){
		$temp=$a;
		$a=$b;
		$b=$temp;
	}
	$i=3;
	$j=4;
	print "before swap = $i, $j <br>";
	swap($i,$j);
	print "after swap = $i, $j <br>";
	print"<br>";
	
	//swap function2 --using global parameter
	function swap2($a, $b){
		global $$a, $$b;
		$temp=$$a;
		$$a=$$b;
		$$b=$temp;
	}
	$i=3;
	$j=4;
	print"before swap= $i,$j"."<br>";
	swap2("i","j");
	print"after swap= $i,$j"."<br>";
	print"<br>";
	
	//swap function3 -- using call by reference method
	function swap3(&$a, &$b){
		$temp = $a;
		$a=$b;
		$b=$temp;
	}
	$i=3;
	$j=4;
	print"before swap= $i,$j"."<br>";
	swap3($i,$j);
	print"after swap= $i,$j"."<br>";
	print"<br>";
	
	//swap function4 -- using call by reference method
	function swap4(&$a, &$b){
		$temp=$a;
		$a=$b;
		$b=$temp;
	}
	$i=3;
	$j=4;
	print"before swap= $i,$j"."<br>";
	swap4(&$i,&$j);
	print"after swap= $i,$j"."<br>";
	print"<br>";
	
	//associative array
	$freshman = array(
		"David" => "Computer",
		"Alice" => "Math",
		"Elsa" => "Physics",
		"Bob" => "Music",
		"Chris" => array( "old" => "man", "sex" => "man")
	);
	
	foreach($freshman as $people => $lecture){
		print $people . " : " . $lecture. "<br>";
	}
	$freshman[Frank] = "History";
	print_r($freshman);
	print"<br><br>";
	
	//associative array with unset()
	$fruit = array(
		"Apple" => "Red",
		"Pear" => array("Brown", "Yellow"),
		"Peach" => "Pink",
		"Tomato" => array("Red", "Grean"),
		"Banana" => "Yellow"
	);
	print_r($fruit);
	print"<br>";
	print "*****Before*****<br>";
	var_dump($fruit);
	print"<br><br>";
	print "*****After*****<br>";
	unset($fruit[Pear], $fruit[Banana]);
	var_dump($fruit);
	print"<br><br>";
	
	//associative array with print_fruit function / array( arr_item=>array(arr_list))
	function print_fr($arr_var){
		foreach($arr_var as $arr_item){
			if(is_array($arr_item))
				print_fr($arr_item);
			else
				print "Color =  " . $arr_item . "<br>";
		}
	}
	function print_fruit($arr_var){
		foreach($arr_var as $arr_item => $arr_list){
			print "Fruit = ". $arr_item . "<br>";
			if(is_array($arr_list))
				print_fr($arr_list);
			else
				print "Color = " . $arr_list . "<br>";
			print "===================================<br>";
		}
	}
	$fruit = array(
		"Apple" => "Red",
		"Pear" => array("Brown", "Yellow"),
		"Peach" => "Pink",
		"Tomato" => array("Red", "Grean"),
		"Banana" => "Yellow"
	);
	
	print"****Before****<br>";
	print_fruit($fruit);
	print"<br><br>";
	print "*****After*****<br>";
	unset($fruit[Pear], $fruit[Banana]);
	print_fruit($fruit);
	print "<br><br>";
	
	//sort function wtih function print_fr & print_fruit
	$fruit1 = array(
		"Apple" => "Red",
		"Tomato" => array("Red", "Grean"),
		"Pear" => array("Brown", "Yellow"),
		"Peach" => "Pink",
		"Banana" => "Yellow"
	);
	$fruit2 = array(
		"Apple" => "Red",
		"Tomato" => array("Red", "Grean"),
		"Pear" => array("Brown", "Yellow"),
		"Peach" => "Pink",
		"Banana" => "Yellow"
	);
	$fruit3 = array(
		"Apple" => "Red",
		"Tomato" => array("Red", "Grean"),
		"Pear" => array("Brown", "Yellow"),
		"Peach" => "Pink",
		"Banana" => "Yellow"
	);
	print "<table border=1><tr>";
	print "<th><b>****ORIGINAL****</b><br><br>";
	print_fruit($fruit1);
	print"<br></th>";

	print "<td><b>****SORT()****</b><br><br>";
	sort($fruit1);
	print_fruit($fruit1);
	print"<br></td>";

	print "<td><b>****ASORT()****</b><br><br>";
	asort($fruit2);
	print_fruit($fruit2);
	print"<br></td>";
	
	print "<td><b>****KSORT()****</b><br><br>";
	ksort($fruit3);
	print_fruit($fruit3);
	print"<br></td></tr>";
?>
