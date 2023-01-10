<?php
// Replace ? With Arithmetic Operators
echo 10 + 20 + 15 - 3 * 190 / 10 + 400; // 0

echo "<br>";
$a = "10";

// Needed Ouput
echo (int)$a;
echo "<br>";
gettype((int) $a);
echo "<br>";

$a = 10;
$b = 20;

// Needed Output
echo $a<=>$b;


$a = 10;
$b = 20;
$c = 15;
echo "<br>";

var_dump($a > $b); // True
var_dump($c > $a); // True
var_dump($a > $b); // True
var_dump($a > $b); // True
var_dump($a > $c); // True
var_dump($a > $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype((float) $a) != gettype($b)); // True


$points = 10;

// Write Your Code Here
$points += 3;

echo $points; // 13

// Write Your Code Here
$points -=2;
echo $points; // 8;


// Code 1
$a = @$b or die("");

// Code 2
$f = @file("Not_A_File") or die ("");

// Code 3
@include("Not_A_File") or die ("");
?>