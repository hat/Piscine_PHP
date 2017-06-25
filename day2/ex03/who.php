#!/usr/bin/php
<?php
date_default_timezone_set('America/Vancouver');
$fd = fopen("/var/run/utmpx", "r");
while ($file = fread($fd, 628)){
    $unpacked = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $file);
    $array[$unpacked['c']] = $unpacked;
}
ksort($array);
foreach ($array as $user){
    if ($user['e'] == 7) {
        echo str_pad(substr(trim($user['a']), 0, 8), 8, " ")." ";
        echo str_pad(substr(trim($user['c']), 0, 8), 8, " ")." ";
        echo date("M", $user["f1"]);
        echo str_pad(date("j", $user["f1"]), 3, " ", STR_PAD_LEFT)." ".date("H:i", $user["f1"]);
        echo "\n";
    }
}