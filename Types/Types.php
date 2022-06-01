<?php

require '../vendor/autoload.php';

// Scalar types:
// bool
// var_dump(true, false);

// int
// var_dump(153172893);

// float
// var_dump(1.1);

// string
// var_dump("asd", 'dsa');

// Compound types:
// array
$a = [
    1, 2, 3, 4, '5' => 'dsa', 6, 'asd5' => 'dsa4',
];

$b = [ [ [ [ 1, 'sad' => 'er' ], 5 => 'b'] ] ];

// var_dump($b[0][0][0]['sad']);

// object
$ne6to = new stdClass();
$ne6to->asd = new stdClass();
// var_dump($ne6to);

// callable
$a = [1, 2, 3, 4, 'asd' => 'das'];
$b = array_filter($a, function ($value) {
    return is_string($value);
});

function array_filter_2(array $arr, callable $callback) {
    $arr2 = [];
    foreach ($arr as $key => $value) {
        if ($callback($value)) {
            $arr2[$key] = $value;
        }
    }

    return $arr2;
}

$b = array_filter_2($a, function ($value) {
    return is_string($value);
});

// var_dump($b);die;

// iterable
$iterator = new \RGTutorials\Types\Iterator();
function iterate(iterable|object $iterable) {

}
// foreach ($iterator as $item) {
//     var_dump($item);die;
// }
iterate($iterator);

// Special types:
// resource
var_dump($a = fopen('resource.txt', 'r'));
fclose($a);

// NULL
var_dump(null);
$a = null;


// декларирайте масив си някви стойности
// декларирайте функция която да итерира масиви
// направете математическа операция със стойностите на масива
// принтирайте стойностите от масива

//  рефактирирайте тази функционалност в обект
