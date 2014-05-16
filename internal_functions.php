<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function check($x)
{
	if (isset($x))
	{
		return '$variable is set.' . PHP_EOL;
	}
	else 
	{
		return '$variable is empty.' . PHP_EOL;
	}
}

echo check($nothing);

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results