<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = 'friday';

switch($day_of_week) {
    case 'monday':
        echo 'monday' . PHP_EOL;
        break;
  	case 'tuesday':
        echo 'tuesday' . PHP_EOL;
        break;
    case 'wednesday':
        echo 'wednesday' . PHP_EOL;
        break;
    case 'thursday':
        echo 'thursday' . PHP_EOL;
        break;
    case 'friday':
        echo 'friday' . PHP_EOL;
        break;
    case 'saturday':
        echo 'saturday' . PHP_EOL;
        break;
    case 'sunday':
        echo 'sunday' . PHP_EOL;
        break;
}