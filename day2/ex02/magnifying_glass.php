#!/usr/bin/php
<?php
if ($argc < 2 || !file_exists($argv[1]))
    exit();
$input = fopen($argv[1], 'r');
$output = "";
while ($input && !feof($input)) {
    $output .= fgets($input);
}
$output = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($str) {
    $str[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function($str) {
        return ($str[1]."".strtoupper($str[2])."".$str[3]);
    }, $str[0]);

    $str[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($str) {
        return ($str[1]."".strtoupper($str[2])."".$str[3]);
    }, $str[0]);

    return ($str[0]);
}, $output);
echo $output;

// if ($argv[1])
// {
// 	$page = file_get_contents($argv[1]);
// 	echo $page;
// 	$pattern = "/<a href=.*\"(.*)\".*>(.*)<\/a>/";
// 	preg_match_all($pattern, $page, $order);
// 	print_r($order);
// 	foreach ($order as $o)
// 	{
// 		echo $o;
// 	}
// }
?>