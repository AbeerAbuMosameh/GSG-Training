<?php
//Exercise 1 => check if 2 first and 2 last characters ar same in string

$name = "Abeer";

//     border to variable in string  {$name}

$string = <<<test
This is a String
10 {$name}s
test;
echo $string . "\n ************************** \n";;


//assign
$a = 10;
$b = &$a;
$b = 20;
echo 'Output of assigned variable ' . $a . "\n ------------------ \n";  // 20
echo var_dump($a) . "\n ------------------ \n";;

//casting
echo 'Casting integer to bollean  ' . var_dump((bool)"00") . "\n ------------------ \n";

//increment
$x = 'AA';
echo (++$x) . "\n ------------------ \n";  //AB  increment in string just like this


//$x = 'AA';
//$x += 1 ;
//echo ($x);  //Fatal error


//match like switch

$name = "apple";

echo match ($name) {
    //can be function => 'value : aim to return value in match' one line but switch can do anything not just one line
       'apple' => 'This is apple',
       'orange'=> 'This is orange',
       default => 'Not valid'
};



