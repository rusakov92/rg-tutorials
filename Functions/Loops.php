<?php

$arr = [
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10
];

// for loop
for ($i = 0; $i < count($arr); $i++) {
    if ($i == '5') {
        break;
    }
    // echo $arr[$i]."\n";
}

// while loop
$i = 0;
while (true) {
    $i++;
    if (count($arr) <= $i) {
        break;
    }
    // echo $arr[$i]."\n";
}

// do while
$i=10;
do{

        $i--;
        // echo $arr[$i]."\n";
            if ($i === 0){
                   break;
            }
} while(true);

// foreach
foreach ($arr as $key => $value ) {
  //  echo  $value."\n";
    if ($key === 4) {
        break;
    }
}
//switch case
switch($arr[6]){
    case 7:
        // echo("7\n") ;
        break;
}

// recursion
class myObject {
    function loop ($arr , $i = 0) {
        if($i >= count($arr)) {
            return;
        }
        echo $arr[$i]."\n";
        // $i++;
       $this -> loop($arr , ++$i);
    }
}

$a = new myObject();
// $a -> loop($arr);

// continue keyword
foreach ($arr as $key => $value) {
    if ($value % 2 === 0) {
        continue;
    }
    // echo $value."\n";
}

// inner break
$arr2 = [
    0 => [
        0 => 'stop',
        1 => [
            0 => [1]
        ]
    ],
    1 => 'next',
];

foreach ($arr2 as $value) {
    foreach ($value as $v) {
        if ($v === 'stop') {
            echo "stopped\n";
            break 2;
        }
        foreach ($v as $k) {
            var_dump($k);
        }
    }
}



// направете си обект/функция, в който да дефинирате метод способен да прави рекурсия
// рекурсивната функция/метод само да влиза във вложения масив след като изпише всички елемнти който не са масиви

$arr3 = [
    'echo',  // print
    null,    // ignore
    'echo',
    'echo',
    null,
    'echo',
    [            // call recursion
        'echo',  // print...
        'echo',
        null,
        [
            null,
            null,
            null,
            null,
            'echo',
        ]
    ],
];
