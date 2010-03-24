#!/usr/bin/php
<?php

$input = "";

$fp = fopen("php://stdin", "r");
while ( $line = fgets($fp, 1024) )
{
	// If it's a // or * starting off a line (probably a comment), don't change spaces
	$check = strpos(trim($line),'//');
	if($check !== 0) $check = strpos(trim($line),'*');
	if($check !== 0) $check = strpos(trim($line),'/*');
	if($check !== 0) $check = strpos(trim($line),'#');
	
	if($check === 0){
		$input .= $line;
	}else{
		// There needs to be more logic here saying that we only want to replace spaces before any text
		$input .= str_ireplace('    ',"\t",$line);
	}
}

echo $input;

fclose($fp);
?>