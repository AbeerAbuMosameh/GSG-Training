<?php
//Exercise 1 => Write a function to calculate the factorial of a number (a non-negative integer). The function
//accepts the number as an argument

function factorial($number) {
    if ($number < 0) {
        return "Invalid input. Factorial is defined for non-negative integers.";
    } elseif ($number === 0 || $number === 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

$number = 5;
$Result = factorial($number);
echo "Ex4: What is Factorial of $number ? \n Factorial is : " . $Result ."\n---------------------\n";



//Exercise 2 =>  Write a function to check whether a number is prime or not.
function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

$number = 9;
if (isPrime($number)) {
    echo " Ex5: Is $number Prime? \n Yes , $number is prime number.";
} else {
    echo " Ex5: Is $number Prime? \n No , $number is not prime number.";
}

