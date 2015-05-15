<?php

function now() {
	$a = date('H:m');
	$b = explode(":", $a);
	switch ($b) {
		case (($b [0] >= 5 && $b [0] <= 10) && ($b [1] >= 0 && $b [1] <= 59)) :
			echo 'morning';
			break;
		case (($b [0] >= 11 && $b [0] <= 16) && ($b [1] >= 0 && $b [1] <= 59)) :
			echo 'afternoon';
			break;
		case (($b [0] >= 17 && $b [0] <= 21) && ($b [1] >= 0 && $b [1] <= 59)) :
			echo 'everning';
			break;
		case (($b [0] >= 1 && $b [0] <= 4) && ($b [1] >= 0 && $b [1] <= 59)) :
			echo 'night';
	}
}

/*
 * custom function to check what period it is
 */

function nowCustom($entered_time) {
	$entered_time;
	$time = explode ( ":", $entered_time );
	switch ($time) {
		case (($time [0] >= 5 && $time [0] <= 10) && ($time [1] >= 0 && $time [1] <= 59)) :
			echo "Morning";
			break;
		case (($time [0] >= 11 && $time [0] <= 16) && ($time [1] >= 0 && $time [1] <= 59)) :
			echo "Afternoon";
			break;
		case (($time [0] >= 17 && $time [0] <= 21) && ($time [1] >= 0 && $time [1] <= 59)) :
			echo "Everning";
			break;
		case (($time [0] >= 1 && $time [0] <= 4) && ($time [1] >= 0 && $time [1] <= 59)) :
			echo "Night";
			break;
	}
}

function nowUsingTime(){}

echo 'Now it is ';
now();
echo "<br />";
echo 'Now it is ';
		nowCustom('15:50');

		
