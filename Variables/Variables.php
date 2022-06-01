<?php

// Declaring variables
$int = 1;

// Scope
function a() {
    $int = 2;
    echo $int;
}

// a();

// Variable variable
$var = '1somevar';
$$var = 3;

$vaR = 4;

// var_dump($var, $vaR);


// Type Juggling

$one = '1';

$one += 2;

// var_dump($one);

// Type casting

$one = (int) $one;


// var_dump((array) $one);

var_dump((object) $one);
