<?php

$array = [
    'y' => 'Y',
    'foo',
    'bar',
     0 => 10,
     'x' => 'test',
     1.5 => '1.5',
     '1.5' => 1.5,
     true => 'True',
     -11 => -11,
];

//push
$array[] = 20;
$array[0] = 30;

//Array destructuring
[$a , $b] =$array;
[$a , , $b] =$array; //if no $array[] = 20 "index 2" undefined array key 2 -- lock up on index 0 , 1 , 2 not values


//change on same array "by reference" with save keys , arsort desc
asort($array);

$shift = array_shift($array); //remove first element in array without consider key 0 , "Y"


$arr = ['a','b','c','d'];

//to capital letter
foreach ($arr as $key => $value){
    $ARR[$key] = strtoupper($value);
}
var_dump($ARR , $arr);

//other solution
$ARR = array_map('strtoupper',$arr); //apply function strtoupper "callback - function in other function" in each element

//[, $b] =$array;
//var_dump($array, @$a , $b);  not appear for warning / notice "variable may not define"

echo '<pre>'; //sort display
var_dump($array, $a , $b ,$shift);
echo '</pre>'; //sort display
