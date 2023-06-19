<?php

//echo preg_replace_callback('~-([a-z])~', function ($match) {
//    return strtoupper($match[1]);
//}, 'hello-world');

/////////////////////////////////

$message = 'hello';

//$greet = function (){
//    echo $message; // Undefined variable $message
//};
//$greet();


 /////////////////////////////////

$message = 'hi'; // effect on greet

$greet = function () use($message){  //with anioms function
    echo $message; // Undefined variable $message
};
$message = 'hi'; //dose not effect on greet

$greet();

/////////////////////////////////

//function sum(...$numbers,$a , $b){ //fError - Only the last parameter can be variadic

function sum($a , $b ,...$numbers){ //fixed vars ten list
    return array_sum($numbers); //7
}


echo sum(1,2,3 , 4 );
echo sum(1,2,[3 , 4 ]); //sum 0
echo sum(1,2,...[3 , 4 ]); //sum 7
echo sum(numbers : [3 , 4 ],b: 1 , a: 2); //sum 7

/////////////////////////////////

array_map(function ($x){  //callback function
   return $x - 1;
},[1,2,3]);


