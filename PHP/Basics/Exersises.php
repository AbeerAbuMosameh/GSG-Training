<?php
//Exercise 1 => check if 2 first and 2 last characters ar same in given string

$word = "GooGo";

//?int -> ? before type mean integer or null
//if length -2 not include last 2 character
$first_characters = substr($word, 0, 2);
$last_characters = substr($word, -2);


echo "Ex1: Is '$word' has same two first and last characters?" . "\n"
    . ($first_characters === $last_characters ? "True" : "False") . "\n --------------------- \n";


//Exercise 2 => check if string start with Go

echo "Ex2 : Is '$word' Start with 'Go' characters?" . "\n"
    . ($first_characters === "Go" ? "True" : "False") . "\n --------------------- \n";


//Exercise 3 => check if positive number multiple of 3 or multiple of 7

$number = 21;

if ($number >= 0 ) {
    if ($number % 3 == 0 || $number % 7 == 0) {
        echo "Ex3: Is $number multiple of 3 or 7 ?" . "\n" . "True" . "\n --------------------- \n";
    } else {
        echo "Ex3: Is $number multiple of 3 or 7 ?" . "\n" . "false" . "\n --------------------- \n";
    }

} else {
    echo "Ex3: Is $number multiple of 3 or 7 ?" . "\n" . " Yo should Enter Positive number" . "\n --------------------- \n";
}


//Exercise 4 => check the largest number of three given number

$a = -10;
$b = 6;
$c = 20;

$max = $a;

if ($b > $max) {
    $max = $b;
}

if ($c > $max) {
    $max = $c;
}

echo "Ex4: What is the maximum number in [$a, $b, $c]?" . "\n" . "max = $max" . "\n"."--------------------- \n";

/*Exercise 5 => check which number nearest to the value 100 among two given integers
 Return 0 if the two numbers are equals*/
$number1 = 89;
$number2 = 90;
$number = 100;
$nearest = 0;


$diff1 = abs(100 - $number1);
$diff2 = abs(100 - $number2);

if ($diff1 < $diff2) {
    $nearest =  $number1;
} elseif ($diff2 < $diff1) {
    $nearest =  $number2;
}

echo "Ex5: What is number nearest to the value 100 among two integers :  [$number1, $number2]?" . "\n" . "nearest number is = $nearest" . "\n"."--------------------- \n";


/*Exercise 6 => find the large value from two positive integer values that is in the rang 20.30 inclusive or
 return 0 if neither is in the range*/

$a = 25;
$b = 26;

if (($a >= 20 && $a <= 30) && ($b >= 20 && $b <= 30)) {
    $output = ($a > $b) ? $a : $b;
} elseif ($a >= 20 && $a <= 30) {
    $output = $a;
} elseif ($b >= 20 && $b <= 30) {
    $output = $b;
} else {
    $output = 0;
}

echo "Ex6: What is the larger value from two positive integers that are in the range 20-30 inclusive Numbers: [$a, $b]" . "\n";
if ($output === 0) {
    echo "Neither number is in the range 20-30." . "\n";
} else {
    echo "The larger number in the range 20-30 is: $output" . "\n";
}
echo "---------------------" . "\n";
//Exercise 7 => count the number of occurrence of any digit in string


$string = "A1b1e2e1r4";
$count = 0;
$digits = "0123456789";

for ($i = 0; $i < strlen($string); $i++) {
    if (strpos($digits, $string[$i]) !== false) {
        $count++;
    }
}


echo "Ex7: What is Number of occurrence of any digit in $string ? " . "\n" . $count . "\n"."--------------------- \n";



//Exercise 8 => sum of digits

$digit = 151;
$Initial_digit = 151;
$sum = 0;

while ($digit != 0) {
    $remainder = $digit % 10; // 1 , 5 , 1
    $sum += $remainder;
    $digit = (int) ($digit / 10); // 15 ,1
}

echo "Ex8: What is th Sum of digits in $Initial_digit ? " . "\n" . $sum . "\n"."--------------------- \n";


//Exercise 9 => reverse any string

$string = "Abeer ";
$length = strlen($string);
$reversed = '';

for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}

echo "Ex9: What is Reverse of  '$string'? " . "\n" . $reversed . "\n"."--------------------- \n";

