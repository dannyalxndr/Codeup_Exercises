<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



function search_results($needle, $haystack)
{

	if(array_search($needle, $haystack) === false)
	{
		return false;
	}
	else
	{
		return true;
	}
}

var_dump(search_results('Michael', $names));
