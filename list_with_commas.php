<?php

// $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// $physicists_array = explode(', ', $physicists_string);

// // change the last item to start with ' and $name'
// $last_item = array_search('Tony Stark', $physicists_array);

// $last_item = "and $physicists_array[$last_item]";

// // switch the last item in physicists_array with $last_item
// array_pop($physicists_array);

// array_push($physicists_array, $last_item);

// // imploding the array with the new $last_item edit
// $famous_fake_physicists = implode(', ', $physicists_array);

// echo $famous_fake_physicists . PHP_EOL;


// Converts array into list n1, n2, ..., and n3
function humanized_list($array) {
	// Your solution goes here!
	$last_item = array_pop($array);
	$last_item = "and $last_item";
	array_push($array, $last_item);
	return implode(', ', $array);
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_array);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";









