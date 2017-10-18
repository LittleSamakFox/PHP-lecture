<?PHP
	$filelog=fopen("logfile.txt","a");
	if(!$filelog)
		die("i can't open file");
	$thistime=getdate();
	fputs($filelog,"now hour : ". $thistime[year] ."/".$thistime[mon] ."/".$thistime[mday] ."-".$thistime[hours] .":".$thistime[minutes] .":".$thistime[seconds] ."<br>");
	fclose($filelog);
	
	$filelog=fopen("logfile.txt","r");
	while($word=fgets($filelog,1024))
		print $word;
	/*
	$time = date("Y-m-d H:i:s", time());
	fputs($filelog, $time);
	fputs($filelog, "\n");
	*/
	fclose($filelog);
?>
