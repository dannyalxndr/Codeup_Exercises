<?php

$items = array();

function list_items($list)
{
    $result = '';

    foreach ($list as $key => $value)
    {
        $result .= "[" . ($key + 1) . "] {$value}\n";  
    }
    return $result;
}

function get_input($upper = false) 
{
    $result = trim(fgets(STDIN));
    return $upper ? strtoupper($result) : $result;
}

function sort_menu($items)
{
    echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered: ";
    $input = get_input(true); 

    // sort the $items
    switch ($input) 
    {
        case 'A':
            sort($items);
            break;
        case 'Z':
            rsort($items);
            break;
        case 'O':
            asort($items);
            break;
        case 'R':
            arsort($items);
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
        echo 'Enter item: ';
        $items[] = get_input();
    } 
    elseif ($input == 'R') 
    {
        echo 'Enter item number to remove: ';
        $key = get_input();
        $key--;
        unset($items[$key]);
        $items = array_values($items);
    }
    elseif ($input == 'S')
    {
        $items = sort_menu($items);
    }
} 
while ($input != 'Q');

echo "Goodbye!\n";
exit(0);





