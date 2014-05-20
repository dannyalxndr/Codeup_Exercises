<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

// change the last item to start with ' and $name'
$last_item = array_search('Tony Stark', $physicists_array);

$last_item = "and $physicists_array[$last_item]";

// switch the last item in physicists_array with $last_item
array_pop($physicists_array);

array_push($physicists_array, $last_item);

// imploding the array with the new $last_item edit
$famous_fake_physicists = implode(', ', $physicists_array);

echo $famous_fake_physicists . PHP_EOL;