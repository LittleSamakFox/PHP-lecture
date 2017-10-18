<?PHP
	$data=file("name.txt");
	foreach($data as $name)
		print "Name : " .$name."<br>";
	$datas=file("major.txt");
	foreach($datas as $names){
		$str = explode(" ",$names);
		print "Name : " .$str[0]." Major : ".$str[1]."<br>";
	}
?>
