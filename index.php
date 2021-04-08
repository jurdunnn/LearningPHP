<?php namespace main;

//includes
include 'main.php'; //specify file
include 'math.php';



use foo as foo; //use namespace
use math as math;

//tags
//modular excersise
function findRemainder($i , $j) {
    return $i % $j;
}


echo "<h1>"."Modular excersise"."</h1>";

$number_of_people = 24;
$number_of_groups = 7;


echo "If there are $number_of_people people, and we split them into $number_of_groups, we have ".findRemainder($number_of_people,$number_of_groups)." remaining";


//square root excersise
function findSquareRoot($i) {
    return $i ** 2;
}
echo "<h1>Square root excersise</h1>";
$number_to_square = 14.42;
echo findSquareRoot(14.42);

echo "<h1>Class excersise</h1>";

$findRemainer = Math\MathExpression::findRemainder(12, 23);
echo "<br><br> Class Math.FindRemainer = ".$findRemainer;

echo "<br><br>";
echo "Calling a function via inheritance:<br>";
$dog = new foo\Dog("Ben", "Yellow");
$dog->intro();
