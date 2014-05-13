<?php

for ($x = 1;$x <= 100;$x++) 
{
	if ($x % 15 == 0) 
	{
		echo "FizzBuzz\n";
	}
	elseif ($x % 5 == 0) 
	{
		echo "Buzz\n";
	}
	elseif ($x % 3 == 0) 
	{

		echo "Fizz\n";
	}
	else
	{
		echo "$x\n";
	}
		
}