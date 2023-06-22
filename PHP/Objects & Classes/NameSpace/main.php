<?php
namespace Test;
include __DIR__.'/namespace.php';
include __DIR__.'/namespaceB.php';

//classes
// $test = new Test();  Uncaught Error: Class "Test" not found
//$test = new A\Test(); //without namespace Test;
//$test2 = new B\Test(); //without namespace Test;

$test = new \A\Test();
$test2 = new \A\Test();

//functions
echo  \A\strlen('demo');
echo  strlen('demo'); //global

echo TEST; //global -- define
echo \A\TEST;


use const  A\TEST ;
echo TEST; //to const in 22
echo \A\TEST;