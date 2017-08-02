#!/usr/bin/env php
<?php

function get_cmp_val($char)
{
    $val = ord($char);
    if ($val == 0)
        return $val;
    if (!ctype_alpha($char))
        $val += 500;
    else if (is_numeric($char))
        $val += 100;
    else if (ctype_upper($char))
        $val += 32;
    return $val;
}

function cmp($string1, $string2)
{
    if ($string1 == $string2)
        return 0;
    $split_s1 = str_split($string1, 1);
    $split_s2 = str_split($string2, 1);
    $split_s1_length = strlen($string1);
    $split_s2_length = strlen($string2);
    $i = 0;
    while ($i < $split_s1_length && $i < $split_s2_length)
    {
        $s1_cmp_val = get_cmp_val($split_s1[$i]);
        $s2_cmp_val = get_cmp_val($split_s2[$i]);
        if ($s1_cmp_val != $s2_cmp_val)
            return ($s1_cmp_val < $s2_cmp_val) ? -1 : 1;
        $i += 1;
    }
    if ($i == $split_s1_length && $i == $split_s1_length)
        return (0);
    if ($i == $split_s1_length)
        return (-1);
    return 1;
}

if ($argc >= 2)
{
    $args = join(' ', $argv);
    $str = preg_split('/\s+/', $args);
    unset($str[0]);
    usort($str, "cmp");
    foreach ($str as $s)
        echo "$s\n";
}

?>