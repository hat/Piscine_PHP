#!/usr/bin/env php
<?php
if ($argv[1])
{
	$arg = $argv[1];
	$pattern = '/\s+/';
	$replacement = ' ';
	$arg = preg_replace($pattern, $replacement, $arg);
	$arg = trim($arg);
	echo "$arg\n";
}
?>