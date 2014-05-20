<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($string, $x = false) 
{
	// explodes array to edit the last item in the string.
	$array = explode(', ', $string);

	// second parameter allows sorting to be optional
	if($x === true)
	{
		sort($array);
	}

	// removes last item and replaces it with new item
	$last_item = array_pop($array);
	$last_item = "and $last_item";
	array_push($array, $last_item);

	// new string is returned outside the function
	return implode(', ', $array);
}

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famous_fake_physicists = humanized_list($physicists_string);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";









