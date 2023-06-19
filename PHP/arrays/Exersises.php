<?php
//Exercise 1 => Write a PHP function that accepts an array of integers and return a new array after removing odd
//numbers

function withoutOddNumbers($array_numbers)
{
    $result = array();
    foreach ($array_numbers as $number) {
        if ($number % 2 === 0) {
            $result[] = $number;
        }
    }
    return $result;
}

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$ArrayWithoutOddNumber = withoutOddNumbers($array);

echo "Ex1: If  Array is [" . implode(',', $array) . "] What is the new array without odd numbers ? \n  [" . implode(',', $ArrayWithoutOddNumber) . "]\n---------------------\n";


/* Exercise 2 => Write a PHP function that accepts an array of strings and return the longest string found in the
array, the function should have a 2nd argument that will hold the index of the item that have the
longest string in the input array.*/

function longestStringInArray($array_strings, &$index)
{
    $maxLength = 0;
    $longestString = '';

    foreach ($array_strings as $key => $value) {
        $length = strlen($value);
        if ($length > $maxLength) {
            $maxLength = $length;
            $longestString = $value;
            $index = $key;
        }
    }

    return $longestString;
}

$array = array("Mohammed", "Tasneem", "Abeer");
$index = 0;
$longestString = longestStringInArray($array, $index);

echo "Ex2: What is Longest string in array [" . implode(',', $array) . "] ?  \n $longestString in index $index\n---------------------\n";


/* Exercise 3 => Write a function that accepts 2 arrays and return a new array that holds the value of
multiplying each item in the first array by the corresponding item in the second array.*/

$array_numbers1 = array(1, 9, 10);
$array_numbers2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function multiplyArrays($array_numbers1, $array_numbers2)
{

    $result = array();

    $length1 = count($array_numbers1);
    $length2 = count($array_numbers2);
    $longestArray = max($length1, $length2);

    for ($i = 0; $i < $longestArray; $i++) {
        $value1 = $array_numbers1[$i] ?? 1;
        $value2 = $array_numbers2[$i] ?? 1;
        $result[] = $value1 * $value2;
    }

    return $result;
}

$multiplicationResult = multiplyArrays($array_numbers1, $array_numbers2);


echo "Ex3: Array [" . implode(',', $array_numbers1) . "] multiplying to  [" . implode(',', $array_numbers2)
    . "] \n [" . implode(',', $multiplicationResult) . "]\n---------------------\n";


//Exercise 4 => Write a function to calculate the factorial of a number (a non-negative integer). The function
//accepts the number as an argument

function factorial($number)
{
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
echo "Ex4: What is Factorial of $number ? \n Factorial is : " . $Result . "\n---------------------\n";


//Exercise 5 =>  Write a function to check whether a number is prime or not.
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
