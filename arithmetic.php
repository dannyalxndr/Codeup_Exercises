<?php

function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a + $b;
	} else {
		echo "Those are not numbers YO!!!";
	}
	echo PHP_EOL;
}

function subtract($a, $b) {
 	if(is_numeric($a) && is_numeric($b)) {
		echo $a - $b;
	} else {
		echo "Those are not numbers YO!!!";
	}
	echo PHP_EOL;
}

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b))
	{
		echo $a * $b;
	} else {
		echo "Those are not numbers YO!!!";
	}
	echo PHP_EOL;
}

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if($a == 0 || $b == 0) {
			echo "Please don't divide using 0 .... :) \n";
			exit(0);
		} 
		echo $a / $b;

	} else {
		echo "Those are not numbers YO!!!";
	}
	echo PHP_EOL;
}

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a % $b;
	} else {
		echo "Those are not numbers YO!!!";
	}
	echo PHP_EOL;
}

add(1,"1+2");
subtract(4,1);
multiply(3,"1+2");
divide(0,1);
modulus(7,2);





