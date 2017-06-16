#!/usr/bin/env php
<?php

function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    if (ctype_upper($a[0]))
    	$g1 = 0;
    else if (ctype_alnum($a[0]))
    	$g1 = 1;
    else if (ctype_lower($a[0]))
    	$g1 = 2;
    else
    	$g1 = 3;
    if (ctype_upper($b[0]))
    	$g2 = 0;
    else if (ctype_alnum($b[0]))
    	$g2 = 1;
    else if (ctype_lower($b[0]))
    	$g2 = 2;
    else
    	$g2 = 3;
    if ($g1 == $g2)
    	return strcmp($a, $b);
    return ($g1 < $g2) ? -1 : 1;
}

$args = join(' ', $argv);
$str = preg_split('/\s+/', $args);
unset($str[0]);
usort($str, "cmp");
$i = 1;
foreach ($str as $arg) {
	echo "$arg\n";
}
?>