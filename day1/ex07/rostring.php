#!/usr/bin/env php
<?php
if (count($argv) > 1)
{
	$str = preg_split('/\s+/', $argv[1]);
	$i = 1;
	while ($i < count($str)):
		echo $str[$i];
		echo " ";
		$i++;
	endwhile;
	echo $str[0];
	echo "\n";
}
?>