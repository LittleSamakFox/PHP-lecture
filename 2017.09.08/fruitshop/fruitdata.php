<?PHP
	extract(array_merge($HTTP_GET_VARS,$HTTP_POST_VARS));
	extract($_POST);
	print "You select this " . $price . " items<br>";
	$fruit = array("apple"=>100, "banana"=>200, "peach"=>300, "rich"=>500);
	print"<table border=1><tr><th>name</th><th>price</th>";
	foreach($fruit as $name => $fruitprice){
		if($fruitprice<=$price){
			print"<tr><td>".$name."</td><td>".$fruitprice."</td></tr>";
		}
	}
	print"</table>";
?>
