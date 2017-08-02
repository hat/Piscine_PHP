#!/usr/bin/env php
<?php
$args = join('', $argv);
$str = preg_split('/\s+/', $args);
$offset = strlen($argv[0]);
$argv[1][0] == ' ' ? $offset = $offset + 1 : $offset;
$epur = substr(join(' ', $str), $offset);
echo "$epur";
if (strlen($epur))
	echo "\n";
?>