<?PHP
	$A = array(
				array(3,2,1),
				array(2,1,2),
				array(1,2,3)
			);
	$B = array(
				array(1,2,3),
				array(2,1,2),
				array(3,2,1)
		);
	$C = array(
				array(0,0,0),
				array(0,0,0),
				array(0,0,0)
		);
	
	for($i=0;$i<3;$i++){
		for($j=0;$j<3;$j++)
			for($k=0;$k<3;$k++){
				$C[$i][$j]+=$A[$i][$k]*$B[$k][$j];
			}
	}
	print "<br>";
	for($i=0;$i<3;$i++){
		for($j=0;$j<3;$j++)
			print $C[$i][$j]. " ";
			print "<br>";
	}
?>
