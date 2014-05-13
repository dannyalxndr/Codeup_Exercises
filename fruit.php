<?php

$fruits = 
[
	1 => ['fruit' => 'Apple', 'color' => 'red'], 
	2 => ['fruit' => 'Banana', 'color' => 'yellow'],
	3 => ['fruit' => 'Orange', 'color' => 'orange'],
	4 => ['fruit' => 'Grape', 'color' => 'purple']
];

foreach($fruits as $key => $details)
{
	echo $details['fruit'] . ' is '	. $details['color'] . PHP_EOL;
}