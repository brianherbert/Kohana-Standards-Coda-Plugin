#!/usr/bin/php
<?php

$input = "";

$fp = fopen("php://stdin", "r");
while ( $line = fgets($fp, 1024) )
	$input .= $line;

$input = str_ireplace(' || ',' OR ',$input);
$input = str_ireplace(' && ',' AND ',$input);

echo $input;

fclose($fp);
?>