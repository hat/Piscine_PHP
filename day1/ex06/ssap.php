#!/usr/bin/env php
<?php
$args = join(' ', $argv);
$str = preg_split('/\s+/', $args);
sort($str);
$i = 1;
while ($i < count($str)):
	echo $str[$i];
	echo "\n";
	$i++;
endwhile;
?>