#!/usr/bin/php
<?php
$info = file_get_contents("/var/run/utmpx");
date_default_timezone_set('America/Vancouver');

$tty = [];
while ($info != "")
{
    $unpacked = unpack("A256user/A4id/A32ttyname/ipid/itype/lloginsec/lloginus/A256host/A64pad", $info);
    if ($unpacked['type'] == 7)
        $tty[] = $unpacked['user'] . " " . $unpacked['ttyname'] . "  " . strftime("%b %e %R", $unpacked['loginsec']) . PHP_EOL;
    $info = substr($info, 628);
}

sort($tty);

foreach ($tty as $x)
{
    print($x);
}
?>