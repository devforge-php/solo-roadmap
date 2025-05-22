<?php

echo "Salom";
print "Salom";
//  farqi echo bir necha qiymatlar qabul qila oladi aa print esa yoq xato boladi , lekin print if else larda juda zor lekin echo dan sekinroq ishlaydi


$ism = "Azizbek";
$_yosh = 18;

// ozgaruvchilar 

$number = 20;
// oddiy malumot turlari / Scalar Types

$numbers =  19.1;

// Float malumot turladi

$ism = "Azizbek";

// String

$haqiqat = true;
$yolgon = false;

// Null

$mahsulot = null;

// array

$mevalar = ["olma", "anor", "banan"];
echo $mevalar[1]; // natija: anor


// Associative array

$shaxs = [
    "ism" => "Azizbek",
    "yosh" => 18
];
echo $shaxs["ism"]; // natija: Azizbek
echo $shaxs["yosh"]; // natija: Azizbek

// Multidimensional array
$talabalar = [
    ["Ali", 20],
    ["Vali", 21]
];
echo $talabalar[1][0]; // natija: Vali

// Type juggling 
$son = "5";     // bu string
$natija = $son + 3;  // PHP stringni integerga o‘zgartiradi
echo $natija;   // natija: 8


// Type hinting
function yigindi(int $a, int $b): int {
    return $a + $b;
}

echo yigindi(3, 5); // 8




