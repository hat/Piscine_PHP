#!/usr/bin/env php
<?php
function get_month($month)
{
	$m = -1;
	switch (strtolower($month)) {
		case 'janvier':
			$m = 1;
			break;
		case 'fevrier':
			$m = 2;
			break;
		case 'mars':
			$m = 3;
			break;
		case 'avril':
			$m = 4;
			break;
		case 'mai':
			$m = 5;
			break;
		case 'juin':
			$m = 6;
			break;
		case 'juillet':
			$m = 7;
			break;
		case 'aout':
			$m = 8;
			break;
		case 'septembre':
			$m = 9;
			break;
		case 'octobre':
			$m = 10;
			break;
		case 'novembre':
			$m = 11;
			break;
		case 'decembre':
			$m = 12;
			break;
	}
	return $m;
}
if ($argv[1])
{
	$arg = $argv[1];
	$pattern = "/ /";
	if (preg_match_all($pattern, $arg, $order) == 4)
	{
		$time = explode(" ", $arg);
		$day = (int)$time[1];
		$month = get_month($time[2]);
		$year = (int)$time[3];
		if (preg_match_all("/:/", $time[4], $order) == 2)
		{
			$hour_min_sec = explode(":", $time[4]);
			$hour = (int)$hour_min_sec[0];
			$minute = (int)$hour_min_sec[1];
			$second = (int)$hour_min_sec[2];
			date_default_timezone_set('UTC');
			$etime = date('c', mktime($hour, $minute, $second, $month, $day, $year));
			echo time($etime);
		}
		else
			echo "Wrong Format";
	}
	else
		echo "Wrong Format";
	echo "\n";
}
?>