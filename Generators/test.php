<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';

$tutorial = new \RGTutorials\Generators\GeneratorTutorial();

$test = $tutorial->simpleExample();
// $test = $tutorial->keyValuePairExample();
// $test = $tutorial->nullExample();
// $test = $tutorial->referenceExample();
// $test = $tutorial->delegationExample();
// $test = $tutorial->delegationExample();
// $test = $tutorial->delegationWithConflictingKeysExample();
// $test = $tutorial->returnInGeneratorExample();
// $test = $tutorial->whatIfExample1();
// $test = $tutorial->whatIfExample2();
$test = $tutorial->databaseGenerator();

// var_dump(get_class($test));
foreach ($test as $index => $item) {
    // var_dump($index);
    var_dump($item);

}
