<?php

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

echo add(1,1);
echo subtract(5,2);
echo multiply(3,3);
echo divide(4,2);