<?php

fwrite (STDOUT, 'What is your name? ');

$name = trim (fgets(STDIN));

fwrite(STDOUT, "Hello there $name. Choose a starting number.." . PHP_EOL);

$number1 = (int) fgets(STDIN);

if (!is_numeric($number1)) {
	echo "I need a number, chief.\n";
	exit(1);
}

fwrite(STDOUT, "Great! Now choose an ending number to see all the numbers in between." . PHP_EOL);

$number2 = (int) fgets(STDIN) . PHP_EOL;

// if (!is_numeric($number2)) {
// 	echo "I need a number, chief.\n";
// 	exit(1);
// }

// Allowing greater or lesser number to be entered in any order
if ($number1 < $number2) 
{ 
	define('LOWEND', (int)$number1);
	define('TOPEND', (int)$number2);
} 
elseif ($number1 > $number2) 
{
	define('LOWEND', (int)$number2);
	define('TOPEND', (int)$number1);
} 
else 
{
	echo "Must enter two different numbers to begin.\n";
	exit(1);
}

fwrite(STDOUT, "Here you go..\n");
for ( $number1 ; $number1 <= $number2 ; $number1++ ) 
{
	echo "$number1\n";
}

echo "There you go! :)";






