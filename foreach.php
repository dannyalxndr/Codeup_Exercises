<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


//echo's out values if the are scalar
foreach ($things as $thing)
{
	if (is_scalar($thing))
	{
		echo $thing . PHP_EOL;
	}	
}



// echo's out every value in the array.
// foreach ($things as $thing)
// {
// 	echo $thing . PHP_EOL;
// }



// foreach ($things as $thing)
// {
// 	if (is_integer($thing))
// 	{
// 		echo "$thing is an integer.\n";
// 	}
// 	elseif (is_string($thing))
// 	{
// 		echo "$thing is a string.\n";
// 	}
// 	elseif (is_float($thing))
// 	{
// 		echo "$thing is a float.\n";
// 	}
// 	elseif (is_bool($thing))
// 	{
// 		echo "$thing is a boolean.\n";
// 	}
// 	elseif (is_array($thing))
// 	{
// 		echo "$thing is an array.\n";
// 	}
// 	elseif (is_null($thing))
// 	{
// 		echo "$thing is null.\n";
// 	}
// }