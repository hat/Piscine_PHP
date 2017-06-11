#!/usr/bin/env php
<?php
while (1):
	echo "Enter a number: ";
	$line = fgets(STDIN);
	if (!$line) {
		echo "\n";
		break;
	}
	$line = trim($line);
	if (is_numeric($line))
		echo (trim($line) % 2 == 0) ? "The number $line is even\n" : "The number $line is odd\n";
	else
		echo "'$line' is not a number\n";
endwhile
?>