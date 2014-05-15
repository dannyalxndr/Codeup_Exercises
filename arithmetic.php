<?php

function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a + $b;
	} else {
		echo "$a plus $b will not work. Please choose 2 numbers.";
	}
	echo PHP_EOL;
}
add(1,2);

function subtract($a, $b) {
 	if(is_numeric($a) && is_numeric($b)) {
		echo $a - $b;
	} else {
		echo "$a minus $b is will not work. Please choose 2 numbers.";
	}
	echo PHP_EOL;
}
subtract(4,3);

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a * $b;
	} else {
		echo "$a multiplied by $b will not work. Please choose 2 numbers.";
	}
	echo PHP_EOL;
}
multiply(3,2);

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if($b == 0) {
			echo "$a divided by $b will not work. Let's not use a 0.\n";
		} else {
			echo $a / $b;
		} 
	} else {
		echo "$a divided by $b will not work. Please choose 2 numbers.";
	}
	echo PHP_EOL;
}
divide(0,20);

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a % $b;
	} else {
		echo "The modulus of $a and $b will not work. Please choose 2 numbers.";
	}
	echo PHP_EOL;
}
modulus(7,2);







