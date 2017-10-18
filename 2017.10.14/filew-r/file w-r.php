<?PHP
	//6.9 file
	$thisfile=fopen("yapyap.txt","a");;
	
	if(!$thisfile)
		die("i can't open file");
	fputs($thisfile,"1 2 3 4 5 6 7 8 9 \n");
	
	fclose($thisfile);
	
	$thisfile=fread("yapyap.txt","r");	
	while($word=fgets($thisfile, 1024))
		print $word."<br>";
	fclose($thisfile);
?>
