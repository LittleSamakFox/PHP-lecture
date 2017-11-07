<?PHP

	$seoul=getdate();
	print $seoul[year]."/".$seoul[mon]."/".$seoul[mday]."/".$seoul[hours]."/".$seoul[minutes]."/".$seoul[seconds];
	$year=gmdate("Y");
	$mon=gmdate("m");
	$day=gmdate("d");
	$hour=gmdate("g");
	$min=gmdate("i");
	$sec=gmdate("s");
	$newyork=getdate(mktime($hour+9,$min,$sec,$mon,$day,$year));
	print "new york time : " . $newyork[year]."/".$newyork[mon]."/".$newyork[mday]."/".$newyork[hours]."/".$newyork[minutes]."/".$newyork[seconds];
	
?>
