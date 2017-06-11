#!/usr/bin/env php
<?php
$args = join('', $argv);
$str = preg_split('/\s+/', $args);
$offset = 19;
$argv[1][0] == ' ' ? $offset = 20 : $offset;
$epur = substr(join(' ', $str), $offset);
echo "$epur\n";
?>