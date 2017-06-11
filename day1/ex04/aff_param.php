#!/usr/bin/php
<?php
// loop through each element in the $argv array
$i = 0;
foreach($argv as $value)
{
	if ($i > 0)
  		echo "$value\n";
  	$i++;
}
?>