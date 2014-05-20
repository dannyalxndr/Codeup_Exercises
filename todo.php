<?php

$items = array();


// function to display the results of your items list
function list_items($list)
{
    $result = '';

    foreach ($list as $key => $value)
    {
        $result .= "[" . ($key + 1) . "] {$value}\n";  
    }
    return $result;
}

// function that reads the input of your user
function get_input($upper = false) 
{
    $result = trim(fgets(STDIN));
    return $upper ? strtoupper($result) : $result;
}

// function for sorting your items menu how you'd like
function sort_menu($items)
{
    echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered: ";
    $input = get_input(true); 

    // sort the $items
    switch ($input) 
    {
        case 'A':
            asort($items);
            break;
        case 'Z':
            arsort($items);
            break;
        case 'O':
            ksort($items);
            break;
        case 'R':
            krsort($items);
            break;
    }

    return $items;   
}

do 
{
    echo list_items($items);
    echo '(N)ew item, (R)emove item, (S)ort, (Q)uit : ';
    $input = get_input(true);
    
    if ($input == 'N') 
    {   
        echo "Enter item: ";
        $item = trim(fgets(STDIN));

        echo "Add this item to the [B]eginning or [E]nd of list: ";
        $b_and_e = get_input(true);

        if ($b_and_e == 'B')
        {
            array_unshift($items, $item);
        }
        elseif ($b_and_e == 'E')
        {
            array_push($items, $item);
        }
    } 
    elseif ($input == 'R') 
    {
        echo 'Enter item number to remove: ';
        $key = get_input();
        $key--;
        unset($items[$key]);
    }
    elseif ($input == 'F')
    {
        array_shift($items);
    }
    elseif ($input == 'L')
    {
        array_pop($items);
    }
    elseif ($input == 'S')
    {
        $items = sort_menu($items);
    }
} 
while ($input != 'Q');

echo "Goodbye!\n";
exit(0);





