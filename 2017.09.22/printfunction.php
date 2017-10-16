<?PHP
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
?>
