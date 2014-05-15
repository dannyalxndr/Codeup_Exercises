<?php

function error() {
		echo "*Error Message*";
}

function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a + $b;
	} else {
		error();
	}
	echo PHP_EOL;
}
add(1,"a");

function subtract($a, $b) {
 	if(is_numeric($a) && is_numeric($b)) {
		echo $a - $b;
	} else {
		error();
	}
	echo PHP_EOL;
}
subtract(4,3);

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a * $b;
	} else {
		error();
	}
	echo PHP_EOL;
}
multiply(3,"a");

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if($b == 0) {
			error();
		} else {
			echo $a / $b;
		} 
	} else {
		error();
	}
	echo PHP_EOL;
}
divide(0,20);

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a % $b;
	} else {
		error();
	}
	echo PHP_EOL;
}
modulus(7,"a");








